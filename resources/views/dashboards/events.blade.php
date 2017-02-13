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
          <div class="row">
            <div class="col s10 l10 offset-s1 offset-l1">
              @foreach($teams as $team)
                <strong>Name:</strong> {{$team->name}}<br>
                @if($team->member1 != NULL)
                  <strong>Member 1:</strong>{{ $team->member1 }}<br>
                @endif
                @if($team->member2 != NULL)
                  <strong>Member 2:</strong>{{ $team->member2 }}<br>
                @endif
                @if($team->member3 != NULL)
                  <strong>Member 3:</strong>{{ $team->member3 }}<br>
                @endif
                @if($team->member4 != NULL)
                  <strong>Member 4:</strong>{{ $team->member4 }}<br>
                @endif
                @if($team->member5 != NULL)
                  <strong>Member 5:</strong>{{ $team->member5 }}<br>
                @endif
                @if($team->member6 != NULL)
                  <strong>Member 6:</strong>{{ $team->member6 }}<br>
                @endif
                @if($team->member7 != NULL)
                  <strong>Member 7:</strong>{{ $team->member7 }}<br>
                @endif
                @if($team->member8 != NULL)
                  <strong>Member 8:</strong> {{ $team->member8 }}<br>
                @endif
                <br><br>
                @if($team->member1 == Sentinel::check()->email)
                  @if($team->count < 8)
                    <a href="#addmember" class="light-blue darken-4 waves-effect waves-light btn">Add Member</a>
                    <br>
                  @endif
                  <br>
                  <form method="POST" action="{{ url('delete/'.$team->name)}}">
                    {{csrf_field()}}
                    <input type="submit" value="Delete Team" class="red darken-4 waves-effect waves-light btn">
                  </form>
                @else
                  <form method="POST" action="{{ url('leave/'.$team->name)}}">
                    {{csrf_field()}}
                    <input type="submit" value="Leave Team" class="red darken-4 waves-effect waves-light btn">
                  </form>
                @endif
                <hr>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <div id="addmember" class="modal">
    <div class="modal-content">
        <div class="row" >
          <div class="col s10 l10 offset-s1 offset-l1">
            <h4>Add Member</h4>
            <hr>
          </div>
        </div>
        <form action="{{url('addmember')}}" method="POST">
          {{ csrf_field() }}
          <div class="row">
              <div class="input-field col s10 l10 offset-s1 offset-l1">
                <i class="material-icons prefix">reorder</i>
                <select name="team">
                <option selected disabled>Choose your option</option>
                @foreach($teams as $team)
                  @if($team->count <8)
                    <option value="{{ $team->name }}">{{ $team->name }}</option>
                  @endif
                @endforeach
                </select>
                <label>Team</label>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s10 l10 offset-s1 offset-l1">
                <i class="material-icons prefix">playlist_add</i>
                <input  id="uid" type="text" name="uid">
                <label for="uid">Unique-Id of user </label>
              </div>
          </div>
          <div class="row center">
              <div class="col s10 l6 offset-l3 offset-s1">
                <button type="submit" class="btn waves-effect waves-light btn-large" >Add Member</button>
              </div>
          </div>
        </form>
      </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
</script>


@endsection