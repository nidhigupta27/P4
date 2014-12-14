@extends('_master')

@section('title')
	Edit My Recipe
@stop


@section('content')

{{ Form::open(array('url' => '/my_recipe/edit', 'method' => 'post')) }}
@foreach($my_recipe_selected as $my_recipe_selection)
		<h2><input tabindex="1" type="checkbox" name = "my_recipe_selection[]" class="my_recipe_selection" value="{{$my_recipe_selection['id']}}">Update: {{ $my_recipe_selection['name'] }}</h2>
       
       {{ Form::hidden('id', $my_recipe_selection['id']) }}

       <div class="form-group">
          {{Form::label('recipe_name','Recipe Name ')}}
          {{Form::text('recipe_name',$my_recipe_selection['name'] )}}
        <div>
        <div class="form-group">
          {{Form::label('recipe_type','Recipe Type ')}}
          {{Form::text('recipe_type',$my_recipe_selection['recipe_type'] )}}
        <div>
        <div class="form-group">
          {{Form::label('recipe_desc','Recipe Method ')}}
          {{Form::textarea('recipe_desc',$my_recipe_selection->description)}}
        </div>

         <div class="form-group">
          {{Form::label('show_recipe','Make it visible:  ')}}        
          {{Form::checkbox('show_recipe')}}
                   
        </div> 

@endforeach
    {{ Form::submit('Update',
                        array('name' => 'update','class' => 'btn btn-primary'))}} &nbsp&nbsp          
{{ Form::close() }}


@stop		
