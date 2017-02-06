@extends('layouts.app')

@section('title','Events')

@section('content')
<div class="container">
	<div class="row">
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/background3.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="btn waves-effect waves-light "> View Details</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/background2.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="btn waves-effect waves-light "> View Details</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/background1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="btn waves-effect waves-light "> View Details</a>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection()