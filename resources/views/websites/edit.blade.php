@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>You can edit our Webstes Here!</h2>

@include('errors')

<div id='lorem'>
<form method='POST' action='/websites/edit'>

    <input type='hidden' value='{{ csrf_token() }}' name='_token'>

    <input type='hidden' name='id' value='{{ $website->id }}'>

    <div class='form-group'>
        <label>* Name:</label>
        <input type='text' id='name' name='name' value='{{$website->name}}'>
    </div>

    <div class='form-group'>
        <label for='site_url'>* WebsiteAdress (URL):</label>
        <input type='text' id='site_url' name="site_url" value='{{website->site_url}}'>
    </div>

    <div class='form-group'>
        <label for='category'>Category:</label>
        <input type='text' id='category' name="category" value='{{$website->category}}'>
    </div>

    <div class='form-group'>
        <label for='description'>* Description:</label>
        <input type='text' id='site_url' name='site_url' value='{{$website->description}}'>
    </div>


    <br>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>
</div>
@stop
