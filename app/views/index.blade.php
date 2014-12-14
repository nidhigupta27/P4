@extends('_master')

@section('title')
	Welcome to Dinner Menu and Recipes
@stop

@section('head')

@stop

@section('content')
<div class='container'>
  <div class="page-header col-sm-12 center">
   <h1> What's for Dinner today </h1>
   <div class="col-sm-6">
       <p> Confused with what to cook today.Lets help in clearing your mind....
        </p>

        <p><a href='/search_recipe'><span class ="btn btn-lg btn-default">
          Easy dinner ideas on your way!</span></a></p>
               
     </div>
   </div>


</div>
@stop 