<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      "active" => "Login",
      "title"  => "Register"
    ]);
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name'     => ['required', 'min:3', 'max:120'],
      'username' => ['required', 'min:6', 'max:120', 'unique:users'],
      'email'    => ['required', 'email:dns', 'unique:users'],
      'password' => ['required', 'min:6', 'max:120']
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);

    return redirect('/login')->with('success', 'Successful registration! Please login.');
  }
}
