@if (Session::has('success'))
	<div class="container-fluid success teal-text">
		<div class="row green lighten-5 center">
			<div class="col s12 l12">
				<a href="" class="teal-text right"><h5><b>x</b></h5></a>
				<h5>{{ Session::get('success') }}	</h5>	
			</div>
		</div>
	</div>
@endif
