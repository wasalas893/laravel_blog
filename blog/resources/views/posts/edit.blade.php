@extends('layouts.app')


@section('content')

<h1>Edit Post</h1>
<form action="{{ action('PostsController@update',[$post->id]) }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Title</label>

        <div class="col-sm-6">
        
        <input type="text"  name="title" value="{{$post->title}}"  id="task-name" class="form-control">
           
        </div>
    </div>
    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Body</label>

        <div class="col-sm-6">
        <input type="text" name="body" value="{{$post->body}}" id="task-name" class="form-control">
        </div>
    </div>


    <!--aniwarenma demiya utuya-->
    <input type="hidden" name="_method" value="PUT">


    
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