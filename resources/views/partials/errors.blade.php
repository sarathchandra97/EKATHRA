@if (count($errors) > 0)
<div class="container-fluid close">
	<div class="row red white-text">
		<div class="col s2 l2"> 
		<i class="large material-icons">info_outline</i>  
		</div> 
		<div class="col s10 l10">
		<a href="" class="white-text right"><h5><b>x</b></h5></a>
			@foreach ($errors->all() as $error)
    			<h6>{{ $error }}</h6>
			@endforeach			
		</div>
	</div>
</div>
@endif
