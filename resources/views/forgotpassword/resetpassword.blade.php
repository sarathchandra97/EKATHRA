@extends('layouts.app')

@section('title','Reset Password')

@section('content')
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 l6 offset-l3">
        <div class="card z-depth-5">
          <div class="row">
            <br><br><br>
            <div class="row center">
                    <h4>Reset Password</h4>
            </div>
            <div class="col s10 l10 offset-s1 offset-l1">
            	<p><strong>Enter your registered email</strong></p>
            </div>
            <form method="POST" action="{{ url()->full() }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">email</i>
                      <input  id="email" type="email" class="validate"  name="email" required>
                      <label for="email">Email Address</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" type="password" class="validate" required name="password">
                    <label for="password">Password</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">lock</i>
                      <input  id="password_c" type="password" class="validate"  name="password_confirmation" required="">
                      <label for="password_c">Confirm Password</label>
                  </div>
              </div>
              <div class="row center">
                  <div class="col s10 l6 offset-l3 offset-s1">
                    <button type="submit" class="btn waves-effect waves-light btn-large" >Reset Password</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection