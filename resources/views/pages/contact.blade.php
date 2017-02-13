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
                    <h4>Contact us</h4>
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
                    <textarea id="message" name="message" class="materialize-textarea" required></textarea>
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
                    <h4>Contact Info.</h4>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:Dr.Y V P K Raghava<br>
                Mobile:8885043410<br>
                Designation:Dean,student affairs<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:Sri P Krishna Kiran<br>
                Mobile:9573454956<br>
                Designation:Coordinator,SAC<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:E Sailesh Sairen<br>
                Mobile:9492941345<br>
                Designation:Nirmaan coordinator (Civil)<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:S S Vinayak<br>
                Mobile:9032988180<br>
                Designation:E-Sayoga coordinator (ECE)<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:K V J Prasad<br>
                Mobile:9550667479<br>
                Designation:Vivaan coordinator (Mechanical)<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:T S K Sreedhar<br>
                Mobile:9848962508<br>
                Designation:Devops coordinator (CSE/IT)<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:V Sravan Kumar<br>
                Mobile:7095821668<br>
                Designation:Chemisphere coordinator (Chemical)<br>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col col s10 l10 offset-s1 offset-l1 ">
                <hr>
                <p>
                Name:G N Samuel<br>
                Mobile:9133500957<br>
                Designation:Aalok coordinator (Cultural)<br>
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
