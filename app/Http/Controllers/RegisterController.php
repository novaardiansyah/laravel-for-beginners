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
    $request->validate([
      'name'     => ['required', 'min:3', 'max:120'],
      'username' => ['required', 'min:6', 'max:120', 'unique:users'],
      'email'    => ['required', 'email', 'unique:users'],
      'password' => ['required', 'min:6', 'max:120']
    ]);
  }
}
