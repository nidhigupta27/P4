<?php

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});

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
