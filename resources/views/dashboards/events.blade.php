@extends('layouts.app')

@section('title','Events')

@section('name','Events')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    <h4 class="title">List of Events Registered</h4>
                </div>
                <div class="content">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Event</th>
                            <th>Team/Individual</th>
                            <th>Team Name</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="card">
                <div class="header">
                    <h4 class="title">Create Team</h4>
                </div>
                <div class="content">
                    <form action="{{ url('createteam') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Team Name</label>
                                    <input type="text" class="form-control" name="team-name">
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-success btn-fill btn-lg pull-right">Create Team</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">My Teams</h4>
                </div>
                <div class="content">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection