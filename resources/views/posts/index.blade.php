@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">

            </div>
            <div class="col-md-6">
                <form method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="body" placeholder="New Post">
                    </div>
                </form>
                <div class="panel panel-default">
                    @include('snippets.post_list')
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">

            </div>
        </div>
    </div>
@endsection
