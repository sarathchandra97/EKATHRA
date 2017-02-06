@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="container">
    <!-- Update  Profile-->
    <div class="row">
        <div class="col s12 l6">
            <div class="card amber lighten-5">
                <div class="card-content">
                    <div class="header center">
                        <h4 class="title">Details</h4>
                    </div>
                    <div class="row">
                        <div class="col s12 l8 offset-l2">
                            <div class="form-group">
                                <p>Email Address</p>
                                <p>{{ $user->email }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l8 offset-l2">
                            <div class="form-group">
                                <p>College</p>
                                <p>{{ $user->college }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l8 offset-l2">
                            <div class="form-group">
                                <p>Mobile Number</p>
                                <p class="form-control">{{ $user->mobile }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l8 offset-l2">
                            <div class="form-group">
                                <p>Unique id</p>
                                <p class="form-control">{{ $user->hash }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l8 offset-l2">
                            <div class="form-group">
                                <p>Accommodation choice</p>
                                <p class="form-control">{{ $user->accommodation }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l6">
            <div class="card">
                <div class="card-content">
                    <div class="header center">
                        <h4 class="title">Update Profile</h4>
                    </div>
                    <form action="{{ url('updateprofile') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col s12 l8 offset-l2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l8 offset-l2">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" value="{{ $user->mobile }}" name="mobile" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l8 offset-l2">
                                <div class="form-group">
                                    <label>Change Accommodation Option</label>
                                    <select name="accommodation">
                                        <option selected disabled>Select your option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row center"> 
                            <button type="submit" class="waves-effect waves-light btn-large">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Password Update-->
        <div class="col s12 l6">
            <div class="card">
                <div class="card-content">
                    <div class="header center">
                        <h4 class="title">Update Password</h4>
                    </div>
                    <form action="{{ url('updatepassword') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col s12 l8 offset-l2">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="password" class="form-control" name="old_password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l8 offset-l2">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l8 offset-l2">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="row center"> 
                            <button type="submit" class="waves-effect waves-light btn-large">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection