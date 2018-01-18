<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PageController extends Controller
{
  public function index () {
    $posts  = Post::orderBy('created_at', 'desc')->paginate(10);
    return view('index', compact('posts'));
  }

  public function author ($id) {
    $user = User::find($id);
    return view('author')->with('user', $user);
  }
}
