@extends('_master')

@section('title')
	Welcome to Dinner Menu and Recipes
@stop

@section('head')

@stop

@section('content')
<div class='container'>
<ul class="nav nav-tabs navig">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="{{url('my_recipe')}}">My Recipes</a></li>
  <li role="presentation"><a href="{{url('my_recipe/create')}}">Create new recipes</a></li>
  <li role="presentation"><a href="{{url('/search_recipe')}}">Search Recipes</a></li>
</ul>
  <div class="col-sm-12 center">
   <h1> What's for dinner today ? </h1>
         
           <a href='/'><img class='logo' src='/images/dinner.jpg' alt='Dinner Menu'></a>
           <p> Confused with what to cook today.Lets help in clearing your mind....</p>
          <p><a href='/search_recipe'><span class ="btn btn-lg btn-default">
                    Easy dinner ideas on your way!</span></a></p>
               
   </div>
</div>
@stop 