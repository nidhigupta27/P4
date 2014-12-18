<?php

class RecipeController extends BaseController
{

  public function __construct() {

    $this->beforeFilter('auth', array('except' => array('getRecipe','postRecipe')));
  }
# Generate a veiw for search recipe page   
	public function getRecipe()
	{
	 return View::make('recipe_get_index');
	}
# Search the recipes in the database based on the cuisine and ingredients selected by the user
  public function postRecipe()
  {
     
     if(Input::has('generate'))
     {
        $cusines = Input::get('cuisine');
        
        $ingredients = Input::get('ingredients');
        
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
 # Generates a view that displays the recipes retreived from the database based on the cuisine 
 # and ingredients selected by the user.         
         return View::make('recipe_post_index')
                     ->with('recipes',$recipes);
                     
      
     }
                            
  }

}