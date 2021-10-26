<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    $validateData = $request->validate([
      'name'     => ['required', 'min:3', 'max:120'],
      'username' => ['required', 'min:6', 'max:120', 'unique:users'],
      'email'    => ['required', 'email:dns', 'unique:users'],
      'password' => ['required', 'min:6', 'max:120']
    ]);

    User::create($validateData);
  }
}
