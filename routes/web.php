<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
  return view('home', [
    "title" => "Home"
  ]);
});

Route::get('/about', function () {
  return view('about', [
    "title" => "About",
    "name" => "Nova Ardiansyah",
    "email" => "default@gmail.com",
    "picture" => "default-profile.png"
  ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
  return view('categories.categories', [
    "title" => "Post Categories",
    "categories" => Category::all()
  ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
  return view('categories.category', [
    "title" => $category->name,
    "posts" => $category->post,
    "category" => $category->name
  ]);
});
