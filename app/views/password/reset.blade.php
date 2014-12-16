@extends('_master')

@section('title')
	Reset Password
@stop

@section('content')
<div class="container">

@if (Session::has('error'))
  <span class="error">{{ trans(Session::get('error')) }}</span>
@endif
 
{{ Form::open(array('route' => array('password.update', $token))) }}
 <div class="form-group">
  <p>{{ Form::label('email', 'Email') }}<br>
  {{ Form::text('email','',
               array('class'=>'form-control form-control-inline','placeholder' => 'janedoe@example.com')) }}</p>
 </div>
 <div class="form-group">
  <p>{{ Form::label('password', 'Password') }}<br>
  {{ Form::password('password',
               array('class'=>'form-control form-control-inline','placeholder' => 'Password')) }}</p>
 </div>
 <div class="form-group">
  <p>{{ Form::label('password_confirmation', 'Password confirm') }}<br>
  {{ Form::password('password_confirmation',
               array('class'=>'form-control form-control-inline','placeholder' => 'Password'))  }}</p>
 </div>
  {{ Form::hidden('token', $token) }}
 
  <p>{{ Form::submit('Submit',
  	        array('name' => 'submit','class' => 'btn btn-primary')) }}</p>
 
{{ Form::close() }}

 </div>
 @stop

