@extends ('dashboard.master_dashboard')
@section('title', 'Dashboard Home')

@section('content')
<div class="p-3 text-center">
  <h2>All posts created by {{auth()->user()->name}}</h2>
</div>
<div mx-5>
  <ul class="list-group">
  @foreach ($posts as $post)
    <li class="list-group-item"><a href="{{ route('post', ['id' => $post->id]) }}">{{$post->title}}</a></li>
  @endforeach
  </ul>
  <div class="p-3">
    {{$posts->links('vendor.pagination.bootstrap-4')}}
  </div>

</div>
@endsection