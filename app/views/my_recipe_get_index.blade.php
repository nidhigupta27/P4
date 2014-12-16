@extends('_master')

@section('title')
	My recipes
@stop

@section('head')

@stop

@section('content')
<div class="container">
  <ul class="nav nav-tabs">
  <li role="presentation"><a href="/">Home</a></li>
  <li role="presentation"><a href="{{url('my_recipe/create')}}">Create new recipes</a></li>
  <li role="presentation" ><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
  <li role="presentation" class="active"><a href="#">My Recipes</a></li>
</ul>
<div class="page-header">
<h2>Welcome {{ Auth::user()->name;}} ! Here are your saved recipes</h2>
</div>
 @if(count($my_recipes) == 0)
	No Recipes found with your profile
 @else
  {{ $errors->first('my_recipe','<span class="error">Select a recipe</span>') }}  
  <div class="form-group">
  {{ Form::open(array('url' => '/my_recipe/edit', 'method' => 'post')) }}
   @foreach($my_recipes as $my_recipe)
     <h4><input tabindex="1" type="checkbox" name = "my_recipe[]" class="my_recipe" value="{{$my_recipe['id']}}">
        {{ $my_recipe['recipe_type']." Cuisine ".": ".$my_recipe['name'] }}</h4>
           <p> {{ nl2br($my_recipe['description']) }} </p>  
   @endforeach

  </div>
  <div class="form-group">
  {{Form::submit('Edit this recipe',
                        array('name' => 'edit','class' => 'btn btn-primary'))}} &nbsp&nbsp
 
 {{Form::submit('Delete this recipe',
                        array('name' => 'delete','class' => 'btn btn-primary'))}} &nbsp&nbsp
          
{{Form::close() }}
      

</div><br><br>

    
@endif

</div>
@stop