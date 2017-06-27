@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>New Post</h2>
                <form>
                    <div class="form-group">
                        <label for="body"></label>
                        <textarea class="form-control" id="body" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <li class="list-group-item">Sidebar</li>
                </div>
            </div>
        </div>
    </div>
@endsection
