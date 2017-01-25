@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 l8 offset-l2">
          <form method="POST" action="{{ url('register') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="modal-content">
                <div class="row center">
                      <h4>Register | Vivaan</h4>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">account_circle</i>
                      <input  id="name" type="text" class="validate"  name="name" value="{{old('name')}}">
                      <label for="name">Full Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">email</i>
                      <input  id="email" type="email" class="validate"  name="email" value="{{old('email')}}">
                      <label for="email">Email Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">settings_phone</i>
                      <input  id="mobile" type="text" class="validate"  name="mobile" value="{{old('mobile')}}">
                      <label for="mobile">Mobile Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">lock_outline</i>
                      <input  id="password" type="password" class="validate"  name="password">
                      <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">lock</i>
                      <input  id="password_c" type="password" class="validate"  name="password_confirmation">
                      <label for="password_c">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col s10 l8 offset-l2 offset-s1">
                    <i class="material-icons prefix">reorder</i>
                    <select  name="college">
                      <option selected>Choose your option</option>
                      @foreach($colleges as $college)
                        <option value="{{ $college->name }}">{{ $college->name }}</option>
                      @endforeach
                    </select>
                    <label>College</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">playlist_add</i>
                      <input  id="other_college" type="text" class="validate" name="other_college" value="{{ old('other_college') }}">
                      <label for="other_college">Specify College, if not in the list</label>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col s10 l8 offset-l2 offset-s1">
                    <i class="material-icons prefix">reorder</i>
                    <select name="department">
                      <option disabled selected>Choose your option</option>
                      @foreach($departments as $department)
                        <option value="{{ $department->name }}">{{ $department->name }}</option>
                      @endforeach
                    </select>
                    <label>Department</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 l8 offset-l2 offset-s1">
                      <i class="material-icons prefix">playlist_add</i>
                      <input  id="other_department" type="text" class="validate" name="other_department" value="{{ old('other_department') }}">
                      <label for="other_department">Specify department, if not in the list</label>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col s10 l8 offset-l2 offset-s1">
                    <i class="material-icons prefix">reorder</i>
                    <select name="accommodation" required id="accommodation">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <label for="accommodation">Accommodation needed?</label>
                  </div>
                </div>
                <br>
                <div class="row center">
                    <div class="col s10 l8 offset-l2 offset-s1">
                      <button type="submit" class="waves-effect waves-light btn-large">Create Account</button>
                    </div>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection