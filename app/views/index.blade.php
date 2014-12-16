@extends('_master')

@section('title')
	Welcome to Dinner Menu and Recipes
@stop

@section('head')

@stop

@section('content')
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="{{url('my_recipe')}}">My Recipes</a></li>
  <li role="presentation"><a href="{{url('my_recipe/create')}}">Create new recipes</a></li>
  <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
</ul>
<div class='container'>
  <div class="col-sm-12 center">
   <h1> What's for Dinner today </h1>
         <p> Confused with what to cook today.Lets help in clearing your mind....</p>

          <p><a href='/search_recipe'><span class ="btn btn-lg btn-default">
                    Easy dinner ideas on your way!</span></a></p>
               
   </div>
</div>
@stop 