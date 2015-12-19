@extends('master.index')
@section('content')
<br>
<br>
<br>
<h1>Random User Generator</h1>
<h1>Create random user data for your applications. Like Lorem Ipsum, but for people.</h1>

<h1>User Generator</h1>
	<div class="row">
	<div id="lorem-set">
	{!! Form::open(array('url' => 'randomu' , 'method' => 'post')) !!}
	<br>
	{!! Form::label('numberofchars', 'Chose number of fake characters') !!}

	{!! Form::select('numberofchars',
	array(
	'1' => '1 person',
	'2' => '2 people',
	'3' => '3 people',
	'4' => '4 people',
	'5' => '5 people',
	'6' => '6 people'), '1'); !!}
	<br>
	{!! Form::submit('Create User Data ', ['class' => 'btn btn-default btn-block']) !!}
	</div>
	</div>
	<br>
	<br>
	{!! Form::close() !!}
	<div class="row">
			@if(isset($allusers))
			@foreach ($allusers as $user)
				<div id='lorem'>
				<h3> {{ $user['name'] }}</h3>
					<p><b>Birthday:</b> {{ $user['bday'] }}</p>
					<p><b>Company:</b> {{ $user['company'] }}</p>
					<p><b>Adress:</b> {{ $user['address'] }}</p>
					<p><b>Description:</b> {{ $user['description'] }}</p>
				</div>
				<br>
			@endforeach
		@endif
		</div>
<br>
@stop
