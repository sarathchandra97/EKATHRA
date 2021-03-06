<!Doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>EKATHRA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/materialize.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}">
</head>
<body>
<header>
  <nav class="transparent" role="navigation">
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
  <div id="particles">
    <div id="intro">
      <h1 class="white-text">EKATHRA</h1>
      <p>fusion of technology and culture</p>
      <p>March 8th - 10th</p>
    </div>  
  </div>  
</main>
<footer class="page-footer transparent">
  <nav class="transparent" role="navigation">
    <div class="nav-wrapper container">
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('contactus') }}">Contact Us</a></li>
        <li><a href="{{ url('sponsors') }}">Sponsors</a></li>
      </ul>
    </div>
  </nav>
  <div class="footer-copyright transparent">
    <div class="container center">
      &copy 2017, developed by Srikar Yaganti
    </div>
  </div>
</footer>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script type='text/javascript' src='{{url('js/jquery.particleground.js')}}'></script>
  <script type='text/javascript' src='{{url('js/demo.js')}}'></script>  
</body>
</html>