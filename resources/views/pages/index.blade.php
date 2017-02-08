<!Doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>EKATHRA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/materialize.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{url('css/home.min.css')}}">
</head>
<body>
<header>
  <nav class="transparent" role="navigation">
    <div class="nav-wrapper container">
      <span> </span>
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo">EKATHRA</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('events') }}">Events</a></li>
        <li><a href="{{ url('workshops') }}">Workshops</a></li>
        <li><a href="{{ url('culturals') }}">Culturals</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        
        @if(Sentinel::guest())
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
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="">Sponsors</a></li>
        @if(Sentinel::guest())
          <li><a href="{{ url('contactus') }}">Contact Us</a></li>
          <li><a href="{{ url('register') }}">Register</a></li>
          <li><a href="{{ url('sign-in') }}">Login</a></li>
        @else
          <li><a href="{{ url('events-registered') }}">Events Registered</a></li>
          <li><a href="{{ url('profile') }}">Profile</a></li>
          <li><a href="{{ url('sign-out') }}">SignOut</a></li>
        @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
    </div>
  </nav>
</header>
<main>
  <div id="particles">
    <div id="intro">
      <h1 class="white-text">EKATHRA</h1>
      <p>fusion of technology and culture</p>
    </div>  
  </div>  
</main>
<footer class="page-footer transparent">
  <div class="container transparent">
    <div class="row">
      <div class="col l12 s12">
        <ul class="right">
          <li><a href="{{ url('about') }}" class="white-text">About</a></li>
          <li><a href="{{ url('contactus') }}" class="white-text">ContactUs</a></li>
          <li><a href="" class="white-text">Sponsors</a></li>
        </ul>
      </div>
    </div>
  </div>
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