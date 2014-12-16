@extends('_master')

@section('title')
	Reset Password
@stop

@section('content')
<div class="container">

<div class="form-group">
   
   <h2>forgot your password?</h2>

   <p>No problem! We'll help you reset it.</p>

  </div>
 <div class="form-group">

@if (Session::has('error'))
   <span class="error">{{trans(Session::get('error'))}}</span> 
@elseif (Session::has('success'))
  <span  class="flash_message">An email with the password reset has been sent.</span>
@endif
 
{{ Form::open(array('route' => 'password.request')) }}
 
  <p>{{ Form::label('email', 'Email') }}
     {{ Form::text('email','',
               array('class'=>'form-control form-control-inline','placeholder' => 'janedoe@example.com')) }}</p>
  <p>{{ Form::submit('Submit',
  	           array('name' => 'submit','class' => 'btn btn-primary')) }}</p>
 
{{ Form::close() }}
</div>
</div>
@stop
