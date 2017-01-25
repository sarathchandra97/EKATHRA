@extends('layouts.app')

@section('title','Contact Us')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s10 l6 offset-l3 offset-s1">
			<form method="POST" action="{{ url('contactus') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="modal-content">
                <div class="row center">
                      <h4>Contact Us | Vivaan</h4>
                </div>
                <div class="row">
                    <div class="input-field col s12 l12">
                      <i class="material-icons prefix">account_circle</i>
                      <input required id="name" type="text" class="validate"  name="name" required>
                      <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l12">
                      <i class="material-icons prefix">email</i>
                      <input required id="email" type="email" class="validate"  name="email" required>
                      <label for="email">Email Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l12">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="message" class="materialize-textarea" required maxlength="65535"></textarea>
                      <label for="message">Message</label>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s12 l12">
                      <button type="submit" class="waves-effect waves-light btn-large">Send message</button>
                    </div>
                </div>
              </div>
			</form>
		</div>
	</div>
</div>

@endsection