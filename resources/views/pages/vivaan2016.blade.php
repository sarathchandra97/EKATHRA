@extends('layouts.app')

@section('title','Vivaan 2016')

@section('content')
<div class="container">
	<h2 class="header center text-lighten-2">Vivaan 2016</h2>
			<div class="carousel carousel-slider" data-indicators="true">
				<div class="carousel-fixed-item center">
			      <h1 class="header center white-text text-lighten-2">Vivaan 2016</h1>
			    </div>
				<a class="carousel-item" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
				<a class="carousel-item" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
				<a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
				<a class="carousel-item" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>
			</div>
	<br><br>
</div>
@endsection

@section('scripts')
	
	<script src="js/2016.js"></script>

@endsection