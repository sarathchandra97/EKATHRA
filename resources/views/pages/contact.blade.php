@extends('layouts.app')

@section('title','Contact Us')

@section('content')
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="card z-depth-5">
          <div class="row">
            <br><br><br>
            <div class="row center">
                    <h4>Contact us| Ekathra</h4>
            </div>
            <form method="POST" action="{{ url('contactus') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">account_circle</i>
                      <input required id="name" type="text" class="validate"  name="name" required>
                      <label for="name">Name</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" required name="email"><label for="email">Email Address</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="message" class="materialize-textarea" required maxlength="65535"></textarea>
                    <label for="message">Message</label>
                  </div>
              </div>
              <div class="row center">
                  <div class="col s10 l6 offset-l3 offset-s1">
                    <button type="submit" class="waves-effect waves-light btn-large" >Send Message</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l6">
        <div class="card z-depth-5">
          <div class="row">
            <br><br><br>
            <div class="row center">
                    <h4>Contact Information</h4>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Designation:Developer<br>
                Name:Srikar Yaganti<br>
                Mobile:8985591361<br>
                Email:srkyaganti@gmail.com<br>
                </p>
              </div>
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Designation:Developer<br>
                Name:Srikar Yaganti<br>
                Mobile:8985591361<br>
                Email:srkyaganti@gmail.com<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
