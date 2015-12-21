@extends('master.index')
@section('content')

<div class="container" id ='content'>
<br>
<br>
<br>
<h2>You can edit our Webstes Here!</h2>

@include('errors')

    {!! Form::model($website,['method' => 'PATCH','route'=>['websites.update',$website->id]]) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Site_Url', 'SiteUrl:') !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
