<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
  public function register () {
    return view('signup');
  }
  public function store (Request $request) {
    $this->validate($request, [
      'name' => 'required|min:2',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:5|confirmed',
      'password_confirmation' => 'required'
    ]);
    $name = $request->input('name');
    $email = $request->input('email');
    $password = bcrypt($request->input('password'));
    $user = User::create([
      'name' => $name,
      'email' => $email,
      'password' => $password
    ]);
    \Auth::login($user);
    return redirect('/');
  }
}


