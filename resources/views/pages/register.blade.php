@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 l6 offset-l3">
        <div class="card z-depth-5">
          <div class="row">
            <br><br><br>
            <div class="row center">
                    <h4>Register | Ekathra</h4>
            </div>
            <form method="POST" action="{{ url('register') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">account_circle</i>
                      <input  id="name" type="text" class="validate"  name="name" required>
                      <label for="name">Full Name</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">email</i>
                      <input  id="email" type="email" class="validate"  name="email" value="{{old('email')}}" required>
                      <label for="email">Email Address</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">settings_phone</i>
                      <input  id="mobile" type="text" class="validate"  name="mobile" value="{{old('mobile')}}" required>
                      <label for="mobile">Mobile Number</label>
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
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">reorder</i>
                    <select name="college">
                    <option selected disabled>Choose your option</option>
                    <option value="other">Other</option>
                    @foreach($colleges as $college)
                      <option value="{{ $college->name }}">{{ $college->name }}</option>
                    @endforeach
                    </select>
                    <label>College</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">playlist_add</i>
                    <input  id="other_college" type="text" class="validate" name="other_college" value="{{ old('other_college') }}">
                    <label for="other_college">Specify College, if not in the list</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">reorder</i>
                    <select name="department">
                      <option disabled selected>Choose your option</option>
                      <option value="other">Other</option>
                      @foreach($departments as $department)
                        <option value="{{ $department->name }}">{{ $department->name }}</option>
                      @endforeach
                    </select>
                    <label>Department</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s10 l10 offset-s1 offset-l1">
                    <i class="material-icons prefix">playlist_add</i>
                      <input  id="other_department" type="text" class="validate" name="other_department" value="{{ old('other_department') }}">
                      <label for="other_department">Specify department, if not in the list</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s10 l10 offset-s1 offset-l1">
                  <i class="material-icons prefix">reorder</i>
                  <select name="accommodation">
                    <option disabled selected>Choose your option</option>
                      <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <label>Accommodation</label>
                </div>
              </div>
              <div class="row center">
                  <div class="col s10 l6 offset-l3 offset-s1">
                    <button type="submit" class="waves-effect waves-light btn-largecd " >Register</button>
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