<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardPostController::class, 'index']);

Route::get('/dashboard/posts', [DashboardPostController::class, 'index']);
Route::get('/dashboard/createpost', [DashboardPostController::class, 'create']);
Route::post('/dashboard/createpost', [DashboardPostController::class, 'store']);
Route::get('/dashboard/posts/{post}', [DashboardPostController::class, 'edit']);
Route::post('/dashboard/posts/{post}', [DashboardPostController::class, 'update']);
Route::delete('/dashboard/delete/posts/{post}', [DashboardPostController::class, 'destroy']);

Route::get('/dashboard/categories', [DashboardCategoryController::class, 'index']);
Route::get('/dashboard/createcategory', [DashboardCategoryController::class, 'create']);
Route::post('/dashboard/createcategory', [DashboardCategoryController::class, 'store']);
Route::get('/dashboard/categories/{category}', [DashboardCategoryController::class, 'edit']);
Route::post('/dashboard/categories/{category}', [DashboardCategoryController::class, 'update']);
Route::delete('/dashboard/delete/categories/{category}', [DashboardCategoryController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/register', 'AuthController@showRegisterForm')->name('register');
// Route::post('/register', 'AuthController@register');

Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);