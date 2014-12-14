<?php

class RecipeController extends BaseController
{

  public function __construct() {
    # Make sure BaseController construct gets called
    #parent::__construct();
    
    $this->beforeFilter('auth', array('except' => array('getRecipe','postRecipe')));
  }
   
	public function getRecipe()
	{
	return View::make('recipe_get_index');
	}
  public function postRecipe()
  {
     
     if(Input::has('generate'))
     {
        $cusines = Input::get('cuisine');
        print_r($cusines);
        $ingredients = Input::get('ingredients');
        print_r($ingredients);
       foreach( $cusines as $key => $val)
          {
              $cuisine_selected[] = $val; 
          }
       if(isset($ingredients))
       {
         foreach($ingredients as $key => $val)
          {
             foreach($val as $key1 => $val1)
               {
                 $ingredients_selected[] = $val1;
               }
          }
       }
        
         if(isset($cuisine_selected))
         {
           if(isset($ingredients_selected))
             {
               $recipes = Recipe::search($cuisine_selected,$ingredients_selected);
             }
           else
             {
                $recipes = Recipe::search($cuisine_selected);
             }
         }
          
         return View::make('recipe_post_index')
                     ->with('recipes',$recipes);
                     
      
     }
                            
  }

}