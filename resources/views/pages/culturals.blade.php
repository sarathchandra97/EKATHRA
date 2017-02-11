@extends('layouts.app')

@section('title','Culturals')

@section('content')
<div class="container">
	<div class="row">
		@foreach($culturals as $cultural)
			<div class="col s12 m6 l4">
	          <div class="card">
	            <div class="card-image">
	              <img src="{{url('img/items/'.$cultural->image)}}">
	              <span class="card-title">$cultural->name</span>
	            </div>
	            <div class="card-content">
	              <p>$cultural->intro</p>
	            </div>
	            <div class="card-action">
	              <a href="{{ url('event/'.$cultural->slug) }}" class="btn waves-effect waves-light">View Details</a>
	            </div>
	          </div>
	        </div>
		@endforeach
    </div>
</div>
@endsection