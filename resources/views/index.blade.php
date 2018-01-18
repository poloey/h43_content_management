@extends('master')
@section('content')
<div class="content_area mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @foreach($posts as $post)
          <div class="card m-3">
            <div class="card-body">
              <h2><a href="{{route('post', ['id' => $post->id])}}">{{$post->title}}</a> by <a href="{{route('author', ['id' => $post->user->id])}}">{{$post->user->name}}</a> on <span class="text-muted">Dec 12, 2017</span></h2>
              <p>{{ Helpers::excerpt($post->content) }}</p>
              <p><a href="{{route('post', ['id' => $post->id])}}" class="btn btn-info">read more</a></p>
            </div>
          </div>
        @endforeach

        <div class="p-3">
          {{$posts->links('vendor.pagination.bootstrap-4')}}
        </div>

      </div>
      @include('sidebar')
    </div>
  </div>
  
</div>
@endsection