@extends('layouts.app')


@section('content')
{!!From::open(['action'=>'PostsControllers@store','method'=>'POST']) !!}

 <div class="from-group">
     {{From::lable('title','Title')}}
 </div>

{!! From::close()!!}

       
 
   


@endsection