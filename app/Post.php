<?php

namespace App;

use App\Comment;
use App\User;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];
  public function user() {
    return $this->belongsTo(User::class);
  }
  public function category() {
    return $this->belongsTo(Category::class);
  }
  public function comments () {
    return $this->hasMany(Comment::class);
  }
}
