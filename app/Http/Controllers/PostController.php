<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    return view('blog.posts', [
      "title" => "All Posts",
      "posts" => Post::with(['user', 'category'])->latest()->get()
    ]);
  }

  public function show(Post $post)
  {
    return view('blog.post', [
      "title" => "Posts",
      "post"  => $post
    ]);
  }
}
