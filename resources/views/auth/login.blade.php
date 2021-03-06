@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>Welcome to WebWrap! Please Log in!</h2>

<div id='lorem'>
    <h1>Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/login'>

        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' class='form-control' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' class='form-control' value='{{ old('password') }}'>
        </div>

        <div class='form-group'>
            <input type='checkbox' name='remember' class='form-control' id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>

        <button type='submit' class='btn btn-primary'>Login</button>

    </form>
  </div>
@stop
