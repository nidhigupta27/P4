<?php

Route::when('*', 'csrf', array('post'));
Route::get('/', 'IndexController@getIndex');

# Explicit Routing
Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );


Route::get('/search_recipe','RecipeController@getRecipe');
Route::post('/search_recipe','RecipeController@postRecipe');


Route::match(['GET','POST'],'/add_to_my_recipe',function(){
 $recipe_id = Input::get('recipe');
 Session::put('recipe_id',$recipe_id);
 return Redirect::to('/my_recipe_added');

});

Route::group(array(
    'before'  => 'auth'),function(){
    Route::GET('my_recipe','MyRecipeController@index');
    Route::GET('my_recipe/create','MyRecipeController@create');
    Route::POST('my_recipe/create','MyRecipeController@store');
    Route::match(['GET','POST'],'my_recipe/edit','MyRecipeController@edit');
    Route::GET('/my_recipe/update','MyRecipeController@getUpdate');
    Route::POST('/my_recipe/update','MyRecipeController@postUpdate');
    Route::match(['GET','POST'],'/my_recipe_added','MyRecipeController@addRecipe');

});

Route::GET('password/reset', array(
  'uses' => 'PasswordController@remind'
));
Route::post('password/reset', array(
  'uses' => 'PasswordController@request',
  'as'   => 'password.request'
));
Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));
Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
));
