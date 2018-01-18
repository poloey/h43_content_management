### session
~~~php
$request->session()->put(key, value);
Session::has(key);
Session::get('key')
Session::forget('key')
Session::flush();
~~~

### namespace

~~~php
//Kayes.php
<?php namespace App\kayes;

class Dhaka {
  const hello = 'hello from kayes';
}
//Tasnia.php
<?php namespace App\Tasnia;


class Dhaka {
  const hello = 'hello from tasnia';
}
//index.php
<?php
require 'Kayes.php';
require 'Tasnia.php';

use App\Kayes\Dhaka as dhaka1;
use App\Tasnia\Dhaka as dhaka2;

echo dhaka2::hello;
~~~

### method overriding 

~~~php
class Hello {
  public function tanim() {
    var_dump('hello');
  }
}

class World extends Hello {
  public function tanim() {
    var_dump('world');
  }
}

$obj = new World();

$obj->tanim();
~~~

### laravel tinkering 
we can do all laravel things in laravel tinker
~~~bash
php artisan tinker
~~~

### how to pass wild card value to route
~~~php
route('route_name', [wild_card, value]);
~~~

### getting latest value  using orderBy filter
~~~php
Post::orderBy('created_at','desc')->get();
~~~

### how to sort relational data through model relationship
~~~php
public function posts () {
  return $this->hasMany(Post::class)->orderBy('created_at', 'desc');
}
~~~

### Iterating relationship data 
~~~php
@foreach($user->posts as $post)
  <div class="card m-3">
    <div class="card-body">
      <h2><a href="{{route('post', ['id' => $post->id])}}">{{$post->title}}</a> by <a href="{{route('author', ['id' => $post->user->id])}}">{{$post->user->name}}</a> on <span class="text-muted">Dec 12, 2017</span></h2>
      <p>{{$post->content}}</p>
      <p><a href="{{route('post', ['id' => $post->id])}}" class="btn btn-info">read more</a></p>
    </div>
  </div>
@endforeach
~~~




















