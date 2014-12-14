@extends('_master')

@section('title')
	Create your own recipes
@stop

@section('head')

@stop

@section('content')
<div class="form-group">
      {{ Form::open(array('url' => '/my_recipe'))}}
           {{Form::label('cuisine','Cuisine ')}}
           {{Form::select('cuisine[]',
                  array('american'    => 'American',
                        'indian'      => 'Indian',
                        'chinese'     => 'Chinese',
                        'italian'     => 'Italian',
                        'thai'        => 'Thai',
                        'middle east' => 'Middle East'),'indian',['multiple']) }}
           <div class="error">
            @foreach($errors->all(':message') as $message)
                 {{ $message }}
            @endforeach
          </div>
  </div>
  <div class="form-group">
  	      {{Form::label('recipe_name','Recipe Name ')}}
  	      {{Form::text('recipe_name',''	)}}
  <div>
  <div class="form-group">
  	     {{Form::label('recipe_desc','Recipe Method ')}}
  	     {{Form::textarea('recipe_desc','Enter recipe description here!')}}
  </div>

  <div class="form-group">
  	     {{Form::label('show_flag','Make it visible:  ')}}
  	     {{Form::label('show_flag_yes','Yes ')}}
  	     {{Form::checkbox('show_flag','1')}}
  	     {{Form::label('show_flag_no','No ')}}
  	     {{Form::checkbox('show_flag','0')}}
  </div>

  <div class="form-group">
	{{Form::submit('Save',
                        array('name' => 'save','class' => 'btn btn-primary'))}} &nbsp&nbsp
          
{{Form::close() }}

</div><br><br>

@stop
