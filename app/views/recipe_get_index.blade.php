@extends('_master')

@section('title')
	Select or create a dinner menu
@stop

@section('head')

@stop

@section('content')
<div class="page-header">
<h2>Select a dinner menu or create your own!</h2>
</div>
<div class="form-group">
<p> Cuisine your in mood for?</p>
</div>
  <div class="form-group">
      {{ Form::open(array('url' => '/search_recipe'))}}
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
           
          {{Form::label('ingredients','Ingredients at your disposal ')}}
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
                        'tomatoes'       => 'Tomatoes'),                           
 
                  'Spices_Seasonings'           => array(
                        'all_purpose_salt'      => 'All Purpose Salt',
                        'baking_powder'         => 'Baking Powder',
                        'baking_soda'           => 'Baking Soda ',
                        'basil_leaf'            => 'Basil Leaf',
                        'bay_leaf'              => 'Bay Leaf',
                        'cardamom_seeds'        => 'Cardamom Seeds',
                        'chilli_pepper_flakes'  => 'Chilli Pepper Flakes',
                        'chilli_powder'         => 'Chilli Powder',
                        'chives'                => 'Chives',
                        'cilantro_powder'       => 'Cilantro',
                        'cinnamon'              => 'Cinnamon',
                        'cloves'                => 'Cloves',
                        'cumin_seeds'           => 'Cumin Seeds',
                        'curry_powder'          => 'Curry Powder A.K.A ( Garam Masala)',
                        'black-pepper'          => 'Black Pepper',
                        'fennel_seeds'          => 'Fennel Seeds',
                        'fine_herb'             => 'Fine Herbs( a blend of herbs for soups and salads)',
                        'garlic_powder'         => 'Garlic Powder',
                        'italian_seasonings'    => 'Italian Seasoning',
                        'mango_powder'          => 'Mango Powder',
                        'mexican_seasoning'     => 'Mexican Seasoning',
                        'mustard_seeds'         => 'Mustard Seeds',
                        'nutmeg'                => 'Nutmeg',
                        'sesame_seeds'          => 'Sesame Seeds',
                        'taco seasoning'        => 'Taco Seasoning',
                        'thai_seasoning'        => 'Thai Seasoning',
                        'turmeric'              => 'Turmeric'),
                  'Beans_Lentils'         => array(
                        'chick peas'      => 'Chick Peas',
                        'lima_beans'      => 'Lima Beans',
                        'kidney_beans'    => 'Kidney Beans',
                        'black_beans'     => 'Black Beans',
                        'black_eyed_peas' =>'Black eyed Peas',
                        'pinto_beans'     =>'Pinto Beans',
                        'gram_flour'      => 'Gram Flour(Besan)',
                        'gram_spilt'      => 'Gram split(Chana dal)',
                        'gram_whole'      => 'Gram whole(Kala Chana)',
                        'black_gram_whole' => 'Black Gram Whole(Urad whole)',
                        'black_gram_skinned' => 'Black Gram Skinned(Urad dhuli)',
                        'green_gram_skinned' => 'Green Gram Skinned(Moong dal)',
                        'green_gram_split'   => 'Green Gram Split(Moong chilka)',
                        'green_gram_whole'   => 'Green Gram Whole(Whole Moong)',
                        'pigeon_peas_split'  => 'Pigeon peas Split(Toor dal)',
                        'brown_lentil'       => 'Brown Lentil(Whole Masoor)',
                        'pink_lentil'        => 'Pink Lentil(Masoor dal)')),'null',['multiple']) }}
           <div class="error">
            @foreach($errors->all(':message') as $message)
                 {{ $message }}
            @endforeach
  </div>
 
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
<!-- <div class="form-group">
      {{ Form::open(array('method' => 'GET','action' => 'MyRecipeController@create'))  }}
            {{Form::submit('My Recipe',
                        array('name' => 'create_my_recipe','class' => 'btn btn-primary'))}} &nbsp&nbsp
      {{Form::close() }}
</div> -->
@stop 