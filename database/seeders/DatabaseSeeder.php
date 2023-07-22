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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin123'),
            'role'=>'admin'
        ]);
        Category::create([
            'category_image' => 'category_images/climate.jpg',
            'category_name' => 'Climate',
        ]);
        Category::create([
            'category_image' => 'category_images/football.jpg',
            'category_name' => 'Football',
        ]);
        Category::create([
            'category_image' => 'category_images/music.jpg',
            'category_name' => 'Music',
        ]);
        Category::create([
            'category_image' => 'category_images/software.jpg',
            'category_name' => 'Software',
        ]);
        Category::create([
            'category_image' => 'category_images/university.jpg',
            'category_name' => 'University',
        ]);
        Post::create([
            'image'=>'post-images/1.jpg',
            'category_id'=>3,
            'user_id'=>1,
            'title' => 'Minat yang Meningkat pada Koser Music KPOP',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'post-images/2.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Kemarau Berkepanjangan hingga Kebakaran Hutan',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'post-images/3.jpg',
            'category_id'=>4,
            'user_id'=>1,
            'title' => 'Teknologi Meluas, Hacker Meningkat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'post-images/4.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Pasang Surut Tidak Menentu, Banjir di mana-mana',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
        Post::create([
            'image'=>'post-images/5.jpg',
            'category_id'=>1,
            'user_id'=>1,
            'title' => 'Kemarau Panjang, Tanah jadi Gersang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consectetur! Reprehenderit voluptate cupiditate ad, hic, fugiat, assumenda ut unde saepe ducimus nostrum porro ex modi ipsa sequi. In nesciunt ad soluta repellat, velit vero blanditiis officia neque assumenda deserunt labore officiis ut iusto quidem atque, necessitatibus consectetur quod eum repudiandae ipsum quam delectus, esse aperiam. Nemo neque vel quibusdam quia consequatur eum excepturi! Dolor totam reiciendis officia quasi voluptatibus voluptatum velit commodi animi quibusdam suscipit neque similique beatae ducimus corporis quisquam saepe aperiam doloribus, illum fugiat doloremque eum! Officia, officiis vitae. Ratione, nobis nemo maiores deleniti quia dignissimos fugit id.',
            'published_at'=>'2023-07-21',
        ]);
    }
}
