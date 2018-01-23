<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show ($id) {
    $post = Post::find($id);
    return view('post.show', ['post' => $post]);
  }
  public function create () {
    $categories = Category::all();
    return view('dashboard.create', compact('categories'));
  }
  public function store(Request $request) {
    $title = $request->input('title');
    $content = $request->input('content');
    $category = $request->input('category');
    Post::create([
        'title' => $title,
        'content' => $content,
        'category_id' => $category,
        'user_id' => auth()->id()
      ]
    );

    return redirect()->route("home");
  }
  public function comment (Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required|min:20'
    ]);
    Comment::create([
      'name' => $request->input('name'),
      'post_id' => $request->input('post_id'),
      'email' => $request->input('email'),
      'message' => $request->input('message'),
    ]);
    return redirect()->back();
  }
}




