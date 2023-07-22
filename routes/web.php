<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index',[
//         'title' => 'Home',
//     ]);
// });

// Route::get('/home', function () {
//     return view('index',[
//         'title' => 'Home',
//     ]);
// });
// Route::get('/category', function () {
//     return view('index',[
//         'title' => 'Category',
//     ]);
// });
Route::get('/about', function () {
    return view('index',[
        'title' => 'About',
    ]);
});
Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:category_slug}', [CategoryController::class, 'show']);