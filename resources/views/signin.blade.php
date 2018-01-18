@extends('auth-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h2>Login</h2>
  </div>
  <div class="card-body">
    @include ('errors')
    <form action="/login" method="post">
      {{csrf_field()}}
      <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Login</button>
      </div>
      
    </form>
  </div>
</div>
@endsection