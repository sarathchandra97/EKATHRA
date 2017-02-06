<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>@yield('title') | EKATHRA</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="{{ elixir('css/style.css') }}">
</head>
<body>
  <header>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <span> </span>
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo">EKATHRA</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('events') }}">Events</a></li>
        <li><a href="{{ url('workshops') }}">Workshops</a></li>
        <li><a href="{{ url('culturals') }}">Culturals</a></li>
        @if(Sentinel::guest())
          <li><a href="{{ url('about') }}">About</a></li>
          <li><a href="{{ url('contactus') }}">Contact Us</a></li>
          <li><a href="{{ url('register') }}">Register</a></li>
          <li><a href="{{ url('sign-in') }}">Login</a></li>
        @else
          <li><a href="{{ url('events-registered') }}">Events Registered</a></li>
          <li><a href="{{ url('profile') }}">Profile</a></li>
          <li><a href="{{ url('sign-out') }}">SignOut</a></li>
        @endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('events') }}">Events</a></li>
        <li><a href="{{ url('workshops') }}">Workshops</a></li>
        <li><a href="{{ url('culturals') }}">Culturals</a></li>
        @if(Sentinel::guest())
          <li><a href="{{ url('about') }}">About</a></li>
          <li><a href="{{ url('contactus') }}">Contact Us</a></li>
          <li><a href="{{ url('register') }}">Register</a></li>
          <li><a href="{{ url('sign-in') }}">Login</a></li>
        @else
          <li><a href="{{ url('events-registered') }}">Events Registered</a></li>
          <li><a href="{{ url('profile') }}">Profile</a></li>
          <li><a href="{{ url('sign-out') }}">SignOut</a></li>
        @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </header>
  <main>
    <h1></h1>
    @include('partials.errors')
    @include('partials.success')
    @yield('content')  
  </main>
  <footer class="page-footer light-blue darken-4">
    <div class="container light-blue darken-4">
      <div class="row">
        <div class="col l12 s12">
          <ul>
          <li class="col s3 l1 offset-l9"><a href="{{ url('about') }}" class="white-text">About</a></li>
          <li class="col s3 l1"><a href="{{ url('contactus') }}" class="white-text">ContactUs</a></li>
        </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright light-blue darken-4">
      <div align="center" class="container">
        &copy 2017, developed by Srikar Yaganti
      </div>
    </div>
  </footer>

  <!--  Scripts-->

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

  <script src="js/init.js"></script>
  @yield('scripts')
  
  </body>
</html>
