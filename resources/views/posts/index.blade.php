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
                    @include('snippets.post_list')
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
