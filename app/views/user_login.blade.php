@extends('_master')

@section('title')
	Log in
@stop

@section('content')

<h1>Log in</h1>

{{ Form::open(array('url' => '/login')) }}

    {{ Form::label('email') }}
    {{ Form::text('email','nidhigupta02176@gmail.com') }}<br><br>

    {{ Form::label('password') }}
    {{ Form::password('password') }} 
    <a href="{{url('/password/reset')}}">Forgot Password </a><br><br>

    {{ Form::submit('Submit') }} 

{{ Form::close() }}

@stop