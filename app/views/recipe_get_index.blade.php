@extends('_master')

@section('title')
	Select or create a dinner menu
@stop

@section('content')
<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="/">Home</a></li>
  <li role="presentation"><a href="{{url('my_recipe')}}">My Recipes</a></li>
  <li role="presentation"><a href="{{url('my_recipe/create')}}">Create new recipes</a></li>
  <li role="presentation" class="active"><a href="#">Search Recipes</a></li>
</ul>

<div class="page-header">
<h2>Select a dinner menu or create your own!</h2>
</div>
 <div class="form-group">
      {{ Form::open(array('url' => '/search_recipe'))}}
           {{Form::label('cuisine','Cuisine you are in mood for? ')}} <br>
           {{Form::select('cuisine[]',
                  array('american'    => 'American',
                        'indian'      => 'Indian',
                        'chinese'     => 'Chinese',
                        'italian'     => 'Italian',
                        'thai'        => 'Thai',
                        'middle east' => 'Middle East',
                        'potpourri'   => 'Potpourri'),'indian',['multiple']) }}
           <div class="error">
            @foreach($errors->all(':message') as $message)
                 {{ $message }}
            @endforeach
          </div>
  </div>

  <div class="form-group">
           
          {{Form::label('ingredients','Ingredients at your disposal ')}} <br>
           {{Form::select('ingredients[][]',array(
                  'Vegetables'  => array(
                        'asparagus'      => 'Asparagus',
                        'beans'          => 'Beans',
                        'brussel_sprouts'=> 'Brussel Sprouts',
                        'broccoli'       => 'Broccoli',
                        'cabbage'        => 'Cabbage',
                        'capsicums'      => 'Capsicums',
                        'carrots'        => 'Carrots',
                        'cauliflower'    => 'Cauliflower',
                        'Dil'            => 'Dill',
                        'eggplant'       => 'Eggplant',
                        'kale'           => 'Kale',
                        'green_chilli'   => 'Green Chilli',
                        'lettuce'        => 'Lettuce',
                        'mushrooms'      => 'Mushrooms',
                        'okra'           => 'Okra',
                        'onions'         => 'Onions',
                        'peas'           => 'Peas',
                        'potatoes'       => 'Potatoes',
                        'radishes'       => 'Radishes',
                        'scallions'      => 'Scallions',
                        'spinach'        => 'Spinach',
                        'sweet_corn'     => 'Sweet Corn',
                        'sweet_potatoes' => 'Sweet Potatoes',
                        'tomatoes'       => 'Tomatoes')),'any',['multiple']) }} &nbsp&nbsp
                   {{Form::select('ingredients[][]',array(
                    'Beans/Lentils'            => array(
                          'chick peas'         => 'Chick Peas',
                          'lima_beans'         => 'Lima Beans',
                          'kidney_beans'       => 'Kidney Beans',
                          'black_beans'        => 'Black Beans',
                          'black_eyed_peas'    =>'Black eyed Peas',
                          'pinto_beans'        =>'Pinto Beans',
                          'Quinoa'             => 'Quinoa',
                          'gram_flour'         => 'Gram Flour(Besan)',
                          'gram_spilt'         => 'Gram split(Chana dal)',
                          'gram_whole'         => 'Gram whole(Kala Chana)',
                          'black_gram_whole'   => 'Black Gram Whole(Urad whole)',
                          'black_gram_skinned' => 'Black Gram Skinned(Urad dhuli)',
                          'green_gram_skinned' => 'Green Gram Skinned(Moong dal)',
                          'green_gram_split'   => 'Green Gram Split(Moong chilka)',
                          'green_gram_whole'   => 'Green Gram Whole(Whole Moong)',
                          'pigeon_peas_split'  => 'Pigeon peas Split(Toor dal)',
                          'brown_lentil'       => 'Brown Lentil(Whole Masoor)',
                          'pink_lentil'        => 'Pink Lentil(Masoor dal)')),'any',['multiple']) }}

           <div class="error">
            @foreach($errors->all(':message') as $message)
                 {{ $message }}
            @endforeach
  </div><br>
 
  <div class="form-group">
           {{Form::submit('Dinner Menu',
                        array('name' => 'generate','class' => 'btn btn-primary'))}} &nbsp&nbsp
           {{Form::reset('Reset',array('name' => 'reset','class' => 'btn btn-primary'))}}
           {{Form::close() }}
  </div><br><br>
<div class="form-group">
<p> Wanna be creative and design your own menu;Go ahead !!</p>
</div>
<div class="form-group">
  <a href="{{action('MyRecipeController@create')}}"><span class="btn btn-primary">
        Create my own Recipe</span></a>
</div>

</div>
@stop


