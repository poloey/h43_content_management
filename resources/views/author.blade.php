@extends('master')
@section('content')
<div class="content_area mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="my-5 p-5 bg-info text-light">
          <h2>All posts by {{$user->name}}</h2>
        </div>
        @foreach($user->posts as $post)
          <div class="card m-3">
            <div class="card-body">
              <h2><a href="{{route('post', ['id' => $post->id])}}">{{$post->title}}</a> by <a href="{{route('author', ['id' => $post->user->id])}}">{{$post->user->name}}</a> on <span class="text-muted">Dec 12, 2017</span></h2>
              <p>{{ Helpers::excerpt($post->content )}}</p>
              <p><a href="{{route('post', ['id' => $post->id])}}" class="btn btn-info">read more</a></p>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h2>Categories</h2>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"> <a href="#">Technology</a> </li>
              <li class="list-group-item"> <a href="#">Web</a> </li>
              <li class="list-group-item"> <a href="#">Mobile</a> </li>
            </ul>
          </div>
        </div>
        <div class="card mt-5">
          <div class="card-header">
            <h2>Author</h2>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"><a href="#">Tanim</a></li>
              <li class="list-group-item"> <a href="#">Sumon</a> </li>
              <li class="list-group-item"> <a href="#">Sarwar</a> </li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
@endsection