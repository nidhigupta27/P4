@extends('_master')

@section('title')
	Signup
@stop

@section('content')
<div class="container">
    <ul class="nav nav-tabs">
       <li role="presentation"><a href="/">Home</a></li>
       <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
    </ul>
 <div class="page-header">
   <h2>Sign up</h2>
 </div>

{{ Form::open(array('url' => '/signup')) }}
    {{ Form::label('name') }} <br>
    {{ Form::text('name','',
                 array('class'=>'form-control form-control-inline')) }}
    {{ $errors->first('name','<span class="error">:message</span>') }}<br><br>
       
    {{ Form::label('email') }}<br>
    {{ Form::text('email','',
                 array('class'=>'form-control form-control-inline','placeholder' => 'janedoe@example.com')) }}
    {{ $errors->first('email','<span class="error">:message</span>') }}<br><br>

    {{ Form::label('password') }} <br>
    {{ Form::password('password',
                  array('class'=>'form-control form-control-inline','placeholder' => 'password')) }}
    <small>(Min 6 characters)</small>
    {{ $errors->first('password','<span class="error">:message</span>') }}<br><br>
    
    {{ Form::submit('Submit',
                 array('name' => 'submit','class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
@stop