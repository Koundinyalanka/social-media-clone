@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                @yield('sidebar_left')
            </div>
            <div class="col-md-6">
                @yield('body')
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                @yield('sidebar_right')
            </div>
        </div>
    </div>
@endsection
