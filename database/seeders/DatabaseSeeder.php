<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Mirtha',
            'email' => 'mirthaaini@gmail.com',
            'password' => 'CPL01',
            'role'=>'admin'
        ]);
        Category::create([
            'category_name' => 'Website',
            'category_slug' => 'website',
        ]);
        Post::create([
            'image'=>'download.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi Web Developer',
            'slug' => 'caramenjadiwebdeveloper',
            'excerpt' => 'yuuhuhuh',
            'body'=> 'body',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'download.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi Engineer',
            'slug' => 'caramenjadiengineer',
            'excerpt' => 'yuuhuhuh',
            'body'=> 'body',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'yuhu.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi IT Manager',
            'slug' => 'caramenjadiITmanager',
            'excerpt' => 'yuuhuhuh',
            'body'=> 'body',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'download.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi Engineer',
            'slug' => 'caramenjadienginer',
            'excerpt' => 'yuuhuhuh',
            'body'=> 'body',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'yuhu.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi IT Manager',
            'slug' => 'caramenjadiITmanaer',
            'excerpt' => 'yuuhuhuh',
            'body'=> 'body',
            'published_at'=>'2023-07-21',
        ]);
    }
}
