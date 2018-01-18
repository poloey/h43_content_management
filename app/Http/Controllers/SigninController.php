<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SigninController extends Controller
{
  public function login()
  {
    return view('signin');
  }
  public function store(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|min:2',
      'password' => 'required'
    ]);
    $email = $request->email;
    $password = $request->password;
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
      return redirect()->route('home');
    } else {
      return redirect()->back()->withErrors('faildd');
    }
  }
  public function logout()
  {
     Auth::logout();
     return redirect('/');
  }
}
