<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $title = "";

    if (request("category")) {
      $category = Category::firstWhere("slug", request("category"));
      $title = " in " . $category->name;
    }

    if (request("authors")) {
      $authors = User::firstWhere("username", request("authors"));
      $title = " by " . $authors->name;
    }

    return view('blog.posts', [
      "title"  => "All Posts" . $title,
      "active" => "posts",
      "posts"  => Post::filter(request(['search', 'category', 'authors']))->latest()->get()
    ]);
  }

  public function show(Post $post)
  {
    return view('blog.post', [
      "title"  => "Posts",
      "active" => "posts",
      "post"   => $post
    ]);
  }
}
