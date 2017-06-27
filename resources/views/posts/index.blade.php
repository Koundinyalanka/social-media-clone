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
                    @foreach($posts as $post)
                        <li class="list-group-item">
                            <p><a>{{ $post->user->name }}</a> | {{ $post->created_at->diffForHumans() }}</p>
                            <p>{{ $post->body }}</p>
                        </li>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <li class="list-group-item">Sidebar</li>
                </div>
            </div>
        </div>
    </div>
@endsection
