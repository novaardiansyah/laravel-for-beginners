<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::latest();

    if (request('search')) {
      $posts->where('title', 'like', '%' . request('search') . '%')->orWhere('body', 'like', '%' . request('search') . '%');
    }

    return view('blog.posts', [
      "title"  => "All Posts",
      "active" => "posts",
      "posts"  => $posts->get()
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
