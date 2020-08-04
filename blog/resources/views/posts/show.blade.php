@extends('layouts.app')


@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
<h1>{{$post->title}}</h1>  

<div>
    {{$post->body}}
</div>
  <hr>
<small>Written on {{$post->created_at}}</small>
 <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Post Edit</a>



<form action="{{ action('PostsController@destroy',[$post->id]) }}" method="POST" class="pull-right">
  {{ csrf_field() }}

 


  <!--aniwarenma demiya utuya-->
  <input type="hidden" name="_method" value="DELETE">


  
  <!-- Add Task Button -->
  <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-danger">
              <i class="fa fa-plus"></i> Delete
          </button>
      </div>
  </div>
</form>
   
    
@endsection