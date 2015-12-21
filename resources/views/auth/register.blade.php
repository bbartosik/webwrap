@extends('master.index')

@section('content')
@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>Welcome to WebWrap! Please Log in!</h2>

<div id='lorem'>

    <h1>Already have an account? <a href='/login'>Login here...</a></h1>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' name='name' class='form-control' id='name' value='{{ old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='email'>Email</label>
            <input type='text' name='email' class='form-control' id='email' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' name='password' class='form-control' id='password'>
        </div>

        <div class='form-group'>
            <label for='password_confirmation'>Confirm Password</label>
            <input type='password' class='form-control' name='password_confirmation' id='password_confirmation'>
        </div>

        <button type='submit' class='btn btn-primary'>Register</button>

    </form>
</div>
@stop
