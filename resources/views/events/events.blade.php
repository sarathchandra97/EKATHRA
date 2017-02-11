@extends('layouts.app')

@section('title','Events')

@section('content')
<div class="container">
	<div class="row">
    @foreach($events as $event)
      <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a href="{{url($event->fest.'/events/'.$event->name)}}"><img src="{{url('img/items/'.$event->image)}}"></a>
              <span class="card-title">$event->name</span>
            </div>
            <div class="card-content">
              <p>$event->intro</p>
            </div>
            <div class="card-action">
              <a href="{{url($event->fest.'/events/'.$event->slug)}}" class="btn waves-effect waves-light "> View Details</a>
            </div>
          </div>
        </div>
    @endforeach
    </div>
</div>
@endsection