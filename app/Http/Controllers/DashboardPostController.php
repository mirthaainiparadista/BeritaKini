<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'user')->where('user_id', auth()->user()->id)->get();
        return view('dashboard.post.index', compact('posts'), [
            'title' => 'Dashboard|Post',
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('dashboard.post.add',[
                'title'=>'Dashboard|Create Post',
                'categories'=>Category::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:5000',
            'category_id'=>'required',
            'user_id'=>'required',
            'title'=>'required|max:255',
            'excerpt'=>'required',
            'body'=>'required',
            'published_at'=>'required',
        ]);

        if ($request -> file('image')) {
            $validatedData['image'] = $request->file('image')->store('storage');
        }else {
            $validatedData['image'] = 'storage/download.jpg';
        }

        $validatedData['excerpt'] = strip_tags(Str::limit ($request->deskripsi, 100));

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success','Post Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            "post"=> $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit',[
            'title'=>'Dashboard|Edit',
            'post'=>$post,
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = ([
            'image' => 'image|file|max:5000',
            'category_id'=>'required',
            'user_id'=>'required',
            'title'=>'required|max:255',
            'excerpt'=>'required',
            'body'=>'required',
            'published_at'=>'required',
        ]);
        
        $validatedData = $request->validate($rules);

        if ($request -> file('image')) {
            if ($request -> imageLama != 'storage/download.jpg'){
                Storage::delete($request->imageLama);
            }
            $validatedData['image'] = $request->file('image')->store('storage');
        }else {
            $validatedData['image'] = 'storage/download.jpg';
        }

        $validatedData['excerpt'] =strip_tags(Str::limit ($request->body, 100));

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success','Post Berhasil Diperbarui');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post -> image != 'storage/download.jpg'){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success','Post Berhasil Dihapus');
    }

}
