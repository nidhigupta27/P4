@extends('_master')

@section('title')
	Edit My Recipe
@stop


@section('content')
<div class="container">
  <ul class="nav nav-tabs navig">
   <li role="presentation"><a href="/">Home</a></li>
   <li role="presentation"><a href="{{url('my_recipe')}}">My Recipes</a></li>
   <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
   <li role="presentation"><a href="{{url('my_recipe/create')}}">Create new recipes</a></li>
  </ul>
{{ Form::open(array('url' => '/my_recipe/update', 'method' => 'post')) }}
 @foreach($my_recipe_selected as $my_recipe_selection)
		<h2 name = "my_recipe_selection" class="my_recipe_selection" > Update: {{ $my_recipe_selection['name'] }}</h2>
       
       {{ Form::hidden('id', $my_recipe_selection['id']) }}<br>

       <div class="form-group">
          {{Form::label('recipe_name','Recipe Name ')}}<br>
          {{Form::text('recipe_name',$my_recipe_selection['name'],
                      array('class'=>'form-control form-control-inline'))}}
          {{ $errors->first('recipe_name','<span class="error">:message</span>') }}
        <div><br>
        <div class="form-group">
          {{Form::label('recipe_type','Recipe Type ')}}<br>

          {{Form::text('recipe_type',$my_recipe_selection['recipe_type'],
                      array('class'=>'form-control form-control-inline'))}}
          {{ $errors->first('recipe_type','<span class="error">:message</span>') }}
        <div><br>
        <div class="form-group">
          {{Form::label('recipe_desc','Recipe Method ')}}<br>
          {{Form::textarea('recipe_desc',$my_recipe_selection->description,
                       array('class'=>'form-control form-control-inline'))}}
          {{ $errors->first('recipe_desc','<span class="error">:message</span>') }}
        </div><br>

         <div class="form-group">
          {{Form::label('show_recipe','Make it visible:  ')}}        
          {{Form::checkbox('show_recipe')}}
                   
        </div> 

 @endforeach 
    {{ Form::submit('Update',
                        array('name' => 'update','class' => 'btn btn-primary'))}} &nbsp&nbsp 
    {{Form::reset('Reset',array('name' => 'reset','class' => 'btn btn-primary'))}}         
{{ Form::close() }}

</div>
@stop		
