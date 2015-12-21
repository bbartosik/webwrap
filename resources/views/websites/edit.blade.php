@extends('master.index')
@section('content')
<div class="container" id ='content'>
<br>
<br>
<br>
<h2>Please Add Website to our Database!</h2>


    <form method='POST' action='/websites/add'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>* Name:</label>
            <input type='text' id='name'  name='name'>
        </div>


        <div class='form-group'>
            <label for='title'>* Site Adress (URL):</label>
            <input type='text' id='site_url' name="site_url">
        </div>

        <div class='form-group'>
            <label for='Published'>Category:</label>
            <input  type='text' id='category' name="category">
        </div>

        <div class='form-group'>
            <label for='title'>* Description</label>
            <input type='text' id='description' name='description'>
        </div>


        <button type="submit" class="btn btn-primary">Add book</button>
    </form>

@stop
