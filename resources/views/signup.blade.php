@extends('auth-master')
@section('title', 'Signup')
@section('content')
      <div class="card">
        <div class="card-header">
          <h2>Register</h2>
        </div>
        <div class="card-body">
          <form action="/register" method="post">
            {{csrf_field()}}
            @include('errors')
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control">
                @if($errors->has('name'))
                <div class="bg-danger text-light mt-2 p-1"> <span>{{$errors->first('name')}}</span> </div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="{{old('email')}}" type="text" name="email" id="email" class="form-control">
                @if($errors->has('email'))
                <div class="bg-danger text-light mt-2 p-1"> <span>{{$errors->first('email')}}</span> </div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="{{old('password')}}" type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input value="{{old('password_confirmation')}}" type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            
            <div class="form-group">
              <button class="btn btn-warning" type="submit">Register</button>
            </div>
            
          </form>
        </div>
      </div>
@endsection