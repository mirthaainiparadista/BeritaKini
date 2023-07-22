<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.index',[
            'title' => 'Dashboard|Category',
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.add',[
            'title'=>'Dashboard|Create Category',
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
            'category_image' => 'image|file|max:5000',
            'category_name'=>'required',
        ]);

        if ($request -> file('category_image')) {
            $validatedData['category_image'] = $request->file('category_image')->store('storage');
        }else {
            $validatedData['category_image'] = 'storage/download.jpg';
        }

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success','Category Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit',[
            'title'=>'Dashboard|Edit',
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = ([
            'category_image' => 'image|file|max:5000',
            'category_name'=>'required',
        ]);
        
        $validatedData = $request->validate($rules);

        if ($request -> file('category_image')) {
            if ($request -> category_imageLama != 'storage/download.jpg'){
                Storage::delete($request->category_imageLama);
            }
            $validatedData['category_image'] = $request->file('category_image')->store('storage');
        }else {
            $validatedData['category_image'] = 'storage/download.jpg';
        }

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/dashboard/categories')->with('success','Category Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category -> category_image != 'storage/download.jpg'){
            Storage::delete($category->category_image);
        }
        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with('success','Category Berhasil Dihapus');
    }
}
