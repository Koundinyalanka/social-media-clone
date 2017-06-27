@extends('layouts.main')

@section('body')
    <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" name="body" placeholder="New Post">
        </div>
    </form>
    <div class="panel panel-default">
        @include('snippets.post_list')
    </div>
@endsection
