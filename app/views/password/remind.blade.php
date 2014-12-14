@extends('_master')

@section('title')
	Reset Password
@stop

@section('content')

<div class="form-group">
   
   <h2>forgot your password?</h2>

   <p>No problem! We'll help you reset it.</p>

  </div>
 <div class="form-group">

@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
  An email with the password reset has been sent.
@endif
 
{{ Form::open(array('route' => 'password.request')) }}
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::submit('Submit') }}</p>
 
{{ Form::close() }}
</div>
@stop