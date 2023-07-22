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
            'password' => bcrypt('CPL01'),
            'role'=>'admin'
        ]);
        Category::create([
            'category_image' => 'download.jpg',
            'category_name' => 'Website',
            'category_slug' => 'website',
        ]);
        Post::create([
            'image'=>'download.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi Web Developer',
            'slug' => 'caramenjadiwebdeveloper',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'download.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi Engineer',
            'slug' => 'caramenjadiengineer',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'yuhu.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Cara Menjadi IT Manager',
            'slug' => 'caramenjadiITmanager',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
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
