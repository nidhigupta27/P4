@extends('_master')

@section('title')
	Signup
@stop

@section('content')
<h1>Sign up</h1>


{{ Form::open(array('url' => '/signup')) }}
    {{ Form::label('name') }}
    {{ Form::text('name') }}
  {{ $errors->first('name','<span class="error">:message</span>') }}<br><br>
       
    {{ Form::label('email') }}
    {{ Form::text('email')  }}
  {{ $errors->first('email','<span class="error">:message</span>') }}<br><br>

    {{ Form::label('password') }}
    {{ Form::password('password') }}
    <small>(Min 6 characters)</small>
 {{ $errors->first('password','<span class="error">:message</span>') }}<br><br>
    
    {{ Form::submit('Submit') }}

{{ Form::close() }}
@stop