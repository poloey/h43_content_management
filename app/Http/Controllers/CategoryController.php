<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function show($id)
  {
    $category = Category::find($id);
    return view('category.show', compact('category'));
  }
}
