@extends('layouts.app')


@section('content')
<form action="{{ action('PostsController@store') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Title</label>

        <div class="col-sm-6">
            <input type="text" name="title" id="task-name" class="form-control">
        </div>
    </div>
    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Body</label>

        <div class="col-sm-6">
            <input type="text" name="body" id="task-name" class="form-control">
        </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Submit
            </button>
        </div>
    </div>
</form>
       
 
   


@endsection