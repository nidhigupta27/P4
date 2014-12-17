
@extends('_master')

@section('title')
	Create your own recipes
@stop
@section('content')
<div class="container">
  <ul class="nav nav-tabs navig">
   <li role="presentation"><a href="/">Home</a></li>
   <li role="presentation"><a href="{{url('my_recipe')}}">My Recipes</a></li>
   <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
   <li role="presentation" class="active"><a href="#">Create new recipes</a></li>
  </ul>
<div class="page-header">
<h2>Create your own a dinner menu here!</h2>
</div>
<div class="form-group">
      {{ Form::open(array('url' => '/my_recipe/create'))}}
           {{Form::label('cuisine','Cuisine ')}}<br>
           {{Form::select('cuisine[]',
                  array('american'    => 'American',
                        'indian'      => 'Indian',
                        'chinese'     => 'Chinese',
                        'italian'     => 'Italian',
                        'thai'        => 'Thai',
                        'middle east' => 'Middle East',
                        'potpourri'   => 'Potpourri'),'indian',array('class'=>'form-control form-control-inline'),['multiple']) }}
           
  </div><br>
  <div class="form-group">
  	      {{Form::label('recipe_name','Recipe Name ')}}<br>
  	      {{Form::text('recipe_name','',
                           array('class'=>'form-control form-control-inline'))}}
  {{ $errors->first('recipe_name','<span class="error">:message</span>') }}
  <div><br>
  <div class="form-group">
  	     {{Form::label('recipe_desc','Recipe Method ')}}<br>
  	     {{Form::textarea('recipe_desc','',
                        array('class'=>'form-control form-control-inline','placeholder' => 'Enter recipe description here!'))}}
  
  {{ $errors->first('recipe_desc','<span class="error">:message</span>') }}
</div><br>
  <div class="form-group">
  	     {{Form::label('show_flag','Make it visible to all:  ')}}
  	     {{Form::label('show_flag_yes','Yes ')}}
  	     {{Form::checkbox('show_flag','1')}}
  	     {{Form::label('show_flag_no','No ')}}
  	     {{Form::checkbox('show_flag','0')}}
  {{ $errors->first('show_flag','<span class="error">:message</span>') }}
</div><br>
  <div class="form-group">
	{{Form::submit('Save',
                        array('name' => 'save','class' => 'btn btn-primary'))}} &nbsp&nbsp
  {{Form::reset('Reset',array('name' => 'reset','class' => 'btn btn-primary'))}}
          
{{Form::close() }}

</div>

</div>
@stop
