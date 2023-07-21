<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('index',[
        'title' => 'Home',
    ]);
});

Route::get('/home', function () {
    return view('index',[
        'title' => 'Home',
    ]);
});
Route::get('/category', function () {
    return view('index',[
        'title' => 'Category',
    ]);
});
Route::get('/about', function () {
    return view('index',[
        'title' => 'About',
    ]);
});
Route::get('/posts', [PostController::class, 'index']);