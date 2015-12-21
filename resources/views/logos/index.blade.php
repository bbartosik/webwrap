@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>Welcome to WebWrap! Check out our Logos!!</h2>

@if(sizeof($logos) == 0)
        You have not added any books.
    @else
        @foreach($logos as $logo)
            <div id='lorem'>
                <h2>{{ $logo->name }}</h2>
                <h2><img src='{{ $logo->file }}'></h2>
                <h2>Description: {{$logo->description}}</h2>
            </div>
        @endforeach
    @endif
@stop
