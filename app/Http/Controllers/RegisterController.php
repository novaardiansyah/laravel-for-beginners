<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      "active" => "Register",
      "title"  => "Register"
    ]);
  }

  public function store(Request $request)
  {
    return $request->all();
  }
}
