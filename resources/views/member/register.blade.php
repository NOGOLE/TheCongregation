@extends('layouts.master')
@section('title', 'Member Registration')

@section('content')
<form id="subscription-form" method="POST" action="register">
    {!! csrf_field() !!}
    <input type="hidden" name="type" value="user" />



    <div class="form-group">

        <input placeholder="Name" class="form-control" type="text" name="name" value="{{ old('name') }}">


        <input placeholder="Email" class="form-control" type="email" name="email" value="{{ old('email') }}">

        <input placeholder="Address" class="form-control" type="address" name="address" value="{{ old('address') }}">

        <input placeholder="Password" class="form-control" type="password" name="password">


        <input placeholder="Confirm Password" class="form-control" type="password" name="password_confirmation">

 <div>
        <button class="btn btn-info btn-lg" type="submit">Register</button>
    </div>
    </div>


</form>

@endsection
