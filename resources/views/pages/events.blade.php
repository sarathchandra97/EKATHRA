@extends('layouts.app')

@section('title','Events')

@section('content')
<div class="container">
	<div class="row">
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a href="{{url('vivaan/events')}}"><img src="{{url('img/departments/background1.jpg')}}"></a>
              <span class="card-title">Vivaan (Mechanical)</span>
            </div>
            <div class="card-action">
              <a href="{{url('vivaan/events')}}" class="btn waves-effect waves-light "> View Events</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a href="{{url('nirmaan/events')}}"><img src="{{url('img/departments/background1.jpg')}}"></a>
              <span class="card-title">Nirmaan (Civil)</span>
            </div>
            <div class="card-action">
              <a href="{{url('nirmaan/events')}}" class="btn waves-effect waves-light "> View Events</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a href="{{url('devops/events')}}"><img src="{{url('img/departments/background1.jpg')}}"></a>
              <span class="card-title">Devops (CSE/IT)</span>
            </div>
            <div class="card-action">
              <a href="{{url('devops/events')}}" class="btn waves-effect waves-light "> View Events</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a href="{{url('chemisphere/events')}}"><img src="{{url('img/departments/background1.jpg')}}"></a>
              <span class="card-title">Chemisphere (Chemical)</span>
            </div>
            <div class="card-action">
              <a href="{{url('chemisphere/events')}}" class="btn waves-effect waves-light "> View Events</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a href="{{url('esayoga/events')}}"><img src="{{url('img/departments/background1.jpg')}}"></a>
              <span class="card-title">E-Sayoga (ECE)</span>
            </div>
            <div class="card-action">
              <a href="{{url('esayoga/events')}}" class="btn waves-effect waves-light "> View Events</a>
            </div>
          </div>
        </div>
        
    </div>
</div>
@endsection