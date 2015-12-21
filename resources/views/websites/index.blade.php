@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>Welcome to WebWrap! Your daily Feed!</h2>

@if(sizeof($websites) == 0)
        You have not added any books.
    @else
        @foreach($websites as $website)
            <div id='lorem'>
                <h2>{{ $website->name }}</h2>
                <h2>Category: {{ $website->category }}</h2>
                <h2>Description: {{$website->description}}</h2>
                <a href="{{route('websites.edit',$website->id)}}" class="btn btn-warning">Update</a>
            </div>
        @endforeach
    @endif
@stop
