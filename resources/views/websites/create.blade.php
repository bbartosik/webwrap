@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>You can Add to our Website Collection Here!</h2>

@include('errors')

    {!! Form::open(['url' => 'websites']) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Site_Url', 'Site_Url:') !!}
        {!! Form::text('site_url',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Category', 'Category:') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
