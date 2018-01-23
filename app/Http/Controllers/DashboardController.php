<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{

  public function index () {
    $posts = Post::paginate(15);
    return view('dashboard.index', compact('posts'));
  }
}
