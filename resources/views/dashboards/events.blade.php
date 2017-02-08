@extends('layouts.app')

@section('title','Events')

@section('name','Events')

@section('content')
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 l6 m6">
        <div class="card z-depth-5">
          <div class="row">
            <br><br><br>
            <div class="row center">
                <h4>Create Team</h4>
            </div>
            <form method="POST" action="{{ url('create-team') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">playlist_add</i>
                    <input id="name" type="text" required name="name">
                    <label for="name">Team Name</label>
                  </div>
              </div>
              <div class="row right">
                  <div class="col s10 l6 offset-l3 offset-s1">
                    <button type="submit" class="green darken-2 waves-effect waves-light btn-large" >create team</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col s12 l6 m6">
        <div class="card z-depth-5">
          <br><br><br>
          <div class="row center">
              <h4>My Teams</h4>
          </div>
          e
        </div>
      </div>
    </div>
  </div>
</div>
@endsection