@extends('_master')

@section('title')
	Log in
@stop

@section('content')
<div class="container">
  <ul class="nav nav-tabs">
       <li role="presentation"><a href="/">Home</a></li>
       <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
   </ul>
   <div class="page-header">
    <h2>Log in</h2>
   </div>
{{ Form::open(array('url' => '/login')) }}

   <p>{{ Form::label('email') }}<br>
    {{ Form::text('email','',
             array('class'=>'form-control form-control-inline','placeholder' => 'janedoe@example.com')) }}</p><br>
    {{ $errors->first('email','<span class="error">:message</span>') }}

    <p>{{ Form::label('password') }} <br>
    {{ Form::password('password',
        array('class'=>'form-control form-control-inline','placeholder' => 'password')) }}</p>
     {{ $errors->first('password','<span class="error">:message</span>') }}
    <p><a href="{{url('/password/reset')}}">Forgot Password </a></p><br>

    <p>{{ Form::submit('Submit',
           array('name' => 'submit','class' => 'btn btn-primary')) }}</p>

{{ Form::close() }}
</div>
@stop