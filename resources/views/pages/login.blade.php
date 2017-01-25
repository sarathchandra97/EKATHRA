@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 l6 offset-l3">
          <form method="POST" action="{{ url('sign-in') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-content">
              <div class="row center">
                    <h4>Login | Vivaan</h4>
              </div>
              <div class="row">
                  <div class="input-field col s12 l12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" required name="email"> 
                    <label for="email">Email Address</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s12 l12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" type="password" class="validate" required name="password">
                    <label for="password">Password</label>
                  </div>
              </div>
              <div class="row center">
                  <div class="col s10 l6 offset-l3 offset-s1">
                    <button type="submit" class="waves-effect waves-light btn-large" >SignIn</button>
                  </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection