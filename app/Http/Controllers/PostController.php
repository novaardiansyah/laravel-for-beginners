<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
      "posts"  => Post::filter(request(['search', 'category', 'authors']))->latest()->paginate(7)->withQueryString()
    ]);
  }

  public function show(Post $post)
  {
    return view('blog.post', [
      "title"  => "Posts",
      "post"   => $post
    ]);
  }
}
