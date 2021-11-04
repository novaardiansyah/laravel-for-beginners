<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardController extends Controller
{
  public function index()
  {
    return view('dashboard.index', [
      "title"  => "Dashboard",
    ]);
  }

  public function createSlug(Request $request)
  {
    $slug = SlugService::createSlug(Post::class, 'slug', $request->slugKeyword);
    return response()->json(['slug' => $slug]);
  }
}
