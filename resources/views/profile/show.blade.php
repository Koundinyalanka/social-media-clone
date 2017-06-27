@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <li class="list-group-item">Sidebar</li>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <li class="list-group-item">
                        <p><a>Author</a> | Timestamp</p>
                        <p>Body</p>
                    </li>
                    <li class="list-group-item">
                        <p>Author | Timestamp</p>
                        <p>Body</p>
                    </li>
                    <li class="list-group-item">
                        <p>Author | Timestamp</p>
                        <p>Body</p>
                    </li>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <li class="list-group-item">
                        <img class="img-responsive" src="https://www.rogerbrayrestoration.com/wp-content/uploads/2014/08/Blank-Profile.jpg">
                    </li>
                    <li class="list-group-item">
                        <h3>{{ "Name" }}</h3>
                        <h5>{{ "@username" }}</h5>
                    </li>
                    <li class="list-group-item">
                        Posts <span class="badge">0</span>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection
