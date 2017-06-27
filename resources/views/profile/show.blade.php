@extends('layouts.main')

@section('body')
    <div class="panel panel-default">
        @include('snippets.post_list')
    </div>
@endsection

@section('sidebar_right')
    <div class="panel panel-default">
        <li class="list-group-item">
            <img class="img-responsive" src="https://www.rogerbrayrestoration.com/wp-content/uploads/2014/08/Blank-Profile.jpg">
        </li>
        <li class="list-group-item">
            <h3>{{ $user->name }}</h3>
            <h5>{{ '@' . $user->username }}</h5>
        </li>
        <li class="list-group-item">
            Posts <span class="badge">{{  $posts->count() }}</span>
        </li>
    </div>
@endsection
