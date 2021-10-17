<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    return view('blog.posts', [
      "title"  => "All Posts",
      "active" => "posts",
      "posts"  => Post::filter()->latest()->get()
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
