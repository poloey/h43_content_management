<!doctype html>
<html lang="en">
  <head>
    <title>
      @yield('title')
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('style')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">LICT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <div class="navbar-nav ml-auto">
            <div class="dropdown">
              <div class=" dropdown-toggle mr-5 pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @auth
                {{Auth::user()->name}}
                @else 
                User
                @endauth
              </div>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                @guest
                <a class="dropdown-item" href="login">Login</a>
                <a class="dropdown-item" href="register">Register</a>
                @else
                <a class="dropdown-item" href="{{route('dashboard.index')}}">Dashboard</a>
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                @endguest
              </div>
            </div>
          </div>
        </div>
      </div>
</nav>
<div class="content_area mt-3">
  @yield('content')
</div>
<footer class="text-center bg-info text-white p-5">
  <p class="h2">&copy; Lict All rights reserved</p>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/color.jquery.js') }}"></script>
  </body>
</html>