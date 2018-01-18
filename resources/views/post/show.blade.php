@extends('master')
@section('content')
<div class="content_area mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card m-3">
          <div class="card-body">
            <h2>{{$post->title}} by <a href="{{route('author', ['id' => $post->user->id])}}">{{$post->user->name}}</a> on <span class="text-muted">Dec 12, 2017</span></h2>
            <p>{!!$post->content!!}</p>
          </div>
        </div>
        <hr>
        <div class="card">
          <div class="card-header">
              <h2>Discussion board</h2>
          </div>
          <div class="card-body">
            @if(count($post->comments))
            <ul class="list-group">
              @foreach($post->comments as $comment)
              <li class="list-group-item">
                <h2>{{$comment->name}} said <span class="text-muted">{{$comment->created_at->diffForHumans()}}</span></h2>
                <p>{{$comment->message}}</p>
              </li>
              @endforeach
            </ul>
            @endif
            <div class="card mt-5 bg-info text-light">
              <div class="card-body">
                @include('errors')
                <form action="{{route('comment')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" value="{{$post->id}}" name="post_id">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" id="name" placeholder="Enter your Name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Enter your Message" required></textarea>

                  </div>
                  <div class="form-group">
                    <button class="btn btn-danger" type="submit">Post Your comment</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>


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
