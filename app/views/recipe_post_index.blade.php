@extends('_master')

@section('title')
	Dinner menu
@stop
@section('content')
<div class="container">
  <ul class="nav nav-tabs navig">
  <li role="presentation"><a href="/">Home</a></li>
  <li role="presentation"><a href="{{url('my_recipe')}}">My Recipes</a></li>
  <li role="presentation"><a href="{{url('my_recipe/create')}}">Create new recipes</a></li>
  <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
</ul>

<div class="page-header">
<h2>Here are the recipes for your search criterion!</h2>
</div>

<div class="form-group">
 @if(count($recipes) == 0)
	No recipes found. Please select different ingredients or create your own recipe.
@else
  {{ Form::open(array('url' => '/add_to_my_recipe', 'method' => 'post','id' => 'my_recipes_added' )) }}
     @foreach($recipes as $recipe)
        @if($recipe['show_flag'] == 1) 
       
       <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-heading">
              <input tabindex="1" type="checkbox" name = "recipe[]" class="recipe_id" value="{{$recipe['id']}}">
               <a data-toggle="collapse" data-parent="#accordion" href="#collapse1{{$recipe['id']}}"><span class="cuisine">{{ $recipe['recipe_type']." Cuisine ".": ".$recipe['name'] }}</span></a></h4>  
              <!-- <a data-toggle="collapse" data-parent="#accordion" href="#collapse1{{$recipe['id']}}">{{ $recipe['name'] }} <span class="cuisine">({{$recipe['recipe_type']}})</span></h4>  -->
          </div>
         <div id="collapse1{{$recipe['id']}}" class="panel-collapse collapse out">  
           <div class="panel-body">{{  nl2br($recipe['description']) }}</div>
         </div>
        </div>
       </div>  
       @endif 
     @endforeach
    
</div>
<div class="form-group">
	{{Form::submit('Add to my Profile',
                        array('name' => 'add','class' => 'btn btn-primary'))}} &nbsp&nbsp
           {{Form::reset('Reset',array('name' => 'reset','class' => 'btn btn-primary'))}}
{{Form::close() }}
      

</div><br><br>


@endif
</div>

@stop
@section('/body')
<script type="text/javascript">
 jQuery(function ($) {
  console.log("I am here");
    //form submit handler
    $('#my_recipes_added').submit(function (e) {
        //check atleat 1 checkbox is checked
        if (!$('.recipe_id').is(':checked')) {
            //prevent the default form submit if it is not checked
            alert("Please check the recipe you wish to add");
            e.preventDefault();

        }
    });
});

</script>      

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@stop