<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>@yield('title') | EKATHRA</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/materialize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ elixir('css/style.css') }}">
</head>
<body>
  <header>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <span></span>
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo">EKATHRA</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('events') }}" {!! Request::is('events') ? 'class="active"' : '' !!}>Events</a></li>
        <li><a href="{{ url('workshops') }}" {!! Request::is('workshops') ? 'class="active"' : '' !!}>Workshops</a></li>
        <li><a href="{{ url('culturals') }}" {!! Request::is('culturals') ? 'class="active"' : '' !!}>Culturals</a></li>
        <li><a href="{{ url('about') }}" {!! Request::is('about') ? 'class="active"' : '' !!}>About</a></li>
        @if(Sentinel::guest())
          <li><a href="{{ url('register') }}" {!! Request::is('register') ? 'class="active"' : '' !!}>Register</a></li>
          <li><a href="{{ url('sign-in') }}" {!! Request::is('sign-in') ? 'class="active"' : '' !!}>Login</a></li>
        @else
          <li><a href="{{ url('events-registered') }}" {!! Request::is('events-registered') ? 'class="active"' : '' !!}>Events Registered</a></li>
          <li><a href="{{ url('profile') }}" {!! Request::is('profile') ? 'class="active"' : '' !!}>Profile</a></li>
          <li><a href="{{ url('sign-out') }}" {!! Request::is('sign-out') ? 'class="active"' : '' !!}>SignOut</a></li>
        @endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/') }}" {!! Request::is('/') ? 'class="active"' : '' !!}>Home</a></li>
        <li><a href="{{ url('events') }}" {!! Request::is('events') ? 'class="active"' : '' !!}>Events</a></li>
        <li><a href="{{ url('workshops') }}" {!! Request::is('workshops') ? 'class="active"' : '' !!}>Workshops</a></li>
        <li><a href="{{ url('culturals') }}" {!! Request::is('culturals') ? 'class="active"' : '' !!}>Culturals</a></li>
        <li><a href="{{ url('about') }}" {!! Request::is('about') ? 'class="active"' : '' !!}>About</a></li>
        @if(Sentinel::guest())
          <li><a href="{{ url('contactus') }}" {!! Request::is('contactus') ? 'class="active"' : '' !!}>Contact Us</a></li>
          <li><a href="{{ url('register') }}" {!! Request::is('register') ? 'class="active"' : '' !!}>Register</a></li>
          <li><a href="{{ url('sign-in') }}" {!! Request::is('sign-in') ? 'class="active"' : '' !!}>Login</a></li>
        @else
          <li><a href="{{ url('events-registered') }}" {!! Request::is('events-registered') ? 'class="active"' : '' !!}>Events Registered</a></li>
          <li><a href="{{ url('profile') }}" {!! Request::is('profile') ? 'class="active"' : '' !!}>Profile</a></li>
          <li><a href="{{ url('sign-out') }}" {!! Request::is('sign-out') ? 'class="active"' : '' !!}>SignOut</a></li>
        @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons black-text">menu</i></a>
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
          <li class="col s3 l1"><a href="{{ url('sponsors') }}" class="white-text">Sponsors</a></li>
        </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright light-blue darken-4">
      <div align="center" class="container">
        &copy {{date('Y')}}, developed by Srikar Yaganti
      </div>
    </div>
  </footer>

  <!--  Scripts-->

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

  <script src="{{url('js/init.js')}}"></script>
  @yield('scripts')
  
  </body>
</html>
