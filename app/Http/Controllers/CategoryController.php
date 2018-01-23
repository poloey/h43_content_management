<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
  public function show($id)
  {
    $category = Category::find($id);
    $posts = Post::where('category_id', $id)->orderBy('id', 'desc')->get();
    return view('category.show', compact('category', 'posts'));
  }
}
