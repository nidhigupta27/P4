<?php

class MyRecipeController extends BaseController 
{ 
  # Generate a  view for MyRecipe page here
  public function index()
   {  
        $user = Auth::user();

        $my_recipes = $user->recipes()->get();
  
        return View::make('my_recipe_get_index')
                   ->with('my_recipes',$my_recipes);

   }
  # Generate a  view for creating a new recipe page here
   public function create()
   {
        
       return View::make('my_recipe_create');               

   }
   # Adding a recipe from search recipe page to the user's profile
   public function addRecipe()
   {
    $users = Auth::user();
                              
    $recipeid = Session::get('recipe_id');

    $recipe_added_flag = FALSE;

     foreach($recipeid as $key => $val)
        {
              $my_recipe = Recipe::find($val);

              if(!$users->recipes->contains($my_recipe->id))
                   {                  
                       $users->recipes()->attach($my_recipe);

                       $recipe_added_flag = TRUE;
                  
                   }
                                
         }  
    #If the recipe is already present in the user's profile, it is not added again 

       if($recipe_added_flag)
         {
       return Redirect::action('RecipeController@getRecipe')->with('flash_message','Your recipe has been added.');
         }
       else
        {
        return Redirect::action('RecipeController@getRecipe')->with('flash_message','Recipe already present,no recipe has been added.');
        }       
   }
   # Save the new recipe created in User's profile and the recipes table
   public function store()
   {
       if(Input::has('save'))
       {
        $rules = array(
                   'recipe_name'    => 'required|regex:/^[A-Za-z0-9 .\-\/\*\(\)\"\']+$/i',
                   'recipe_desc'    => 'required',
                   'show_flag'      => 'required'
                 );
       $my_recipe = Input::all();

       $validator = Validator::make($my_recipe,$rules);

       if($validator->fails())
           {
                return Redirect::to('/my_recipe/create')->withErrors($validator)
                                                        ->withInput();
           }

       Recipe::save_user_recipe($my_recipe);

       return Redirect::to('/my_recipe')
                        ->with('flash_message','Your Recipe has been saved in your profile');

       }          

   }
   # Modifying an existing private recipe(only visible to user) or deleting a recipe from user's 
   # profile.
   public function edit()
   {
       if(Input::has('edit'))
      {
        $rules = array('my_recipe' => 'required | size:1');
        
        $my_recipe_selected = array('my_recipe' => Input::get('my_recipe'));

        $validator = Validator::make($my_recipe_selected,$rules);
  # Checks to see is there are any validation errors
         if($validator->fails())
           {
                return Redirect::to('/my_recipe')
                              ->withErrors($validator);
           }
         $recipe_can_update = 0;
         try
            {
            $my_recipe_selected = Recipe::where('id','=',$my_recipe_selected)
                                      ->get();                          
            }
         catch(exception $e)
            {
             return Redirect::to('/my_recipe/edit')->with('flash_message', 'Recipe to be updated not found ');  
            }
  # Recipe can only be modified if its a private recipe(created by the user and visible only to user)       
         foreach($my_recipe_selected as $my_recipe_select)
           {

            if($my_recipe_select['show_flag'])                             
               {
                 break;
              }
            else
              {
                $recipe_can_update = 1;
              }
           }
  # Update method actually updates the recipe in the database      
          if($recipe_can_update)
             {   
               Session::put('my_recipe_selected',$my_recipe_selected);

                        return Redirect::to('/my_recipe/update');
                                     
             }
          else
            {
           return Redirect::to('/my_recipe/')
                          ->with('flash_message', 'Recipe cannot be updated as its public');  
            }
    }  
  # The recipe can be deleted from the user's profile.      
   if(Input::has('delete'))
     {  
        $rules = array('my_recipe' => 'required | size:1');
        
        $my_recipe_selected = array('my_recipe' => Input::get('my_recipe'));

        $validator = Validator::make($my_recipe_selected,$rules);
  # Checking for any validation errors here
         if($validator->fails())
           {
                return Redirect::to('/my_recipe')
                              ->withErrors($validator);
           }

        try
          {
          
          $my_recipe_selected = Recipe::where('id','=',$my_recipe_selected)
                                      ->first();                                
          }
        catch(exception $e)
          {

           return Redirect::to('/my_recipe/edit')->with('flash_message', 'Recipe to be deleted not found ');  
         
          }
          
          $user = Auth::user();
  # If the recipe is private its deleted from both the user profile and also from the recipe table.
  # The recipe no longer exists in the database now.
  # If the recipe is public(visible to everyone) its deleted only from the user's profile.
          if(!$my_recipe_selected->show_flag)
          {
               
            try
              {
                 $user->recipes()->detach($my_recipe_selected);
                
                  $my_recipe_selected->delete();
              }
            catch(exception $e)
               {
                 
                 return Redirect::to('/my_recipe')->with('flash_message', 'Recipe to be deleted not found '); 
            
               }
             
          }
          else
          {
            
            try
              {
                 $user->recipes()->detach($my_recipe_selected);
                
              }
            catch(exception $e)
               {
                 
                 return Redirect::to('/my_recipe')->with('flash_message', 'Recipe to be deleted not found '); 
            
               }
           
           }

         return Redirect::to('/my_recipe')->with('flash_message', 'Recipe has been deleted ');
     
     }

  }
 # The recipe is updated here and the changes are saved in the recipe table
    public function getUpdate()
    {
      $my_recipe_selected= Session::get('my_recipe_selected');
      return View::make('my_recipe_edit')
                       ->with('my_recipe_selected',$my_recipe_selected);
    }
    public function postUpdate()
    {
    if(Input::has('update'))
    {
  
      $rules = array(
                   'recipe_name'    => 'required|regex:/^[A-Za-z0-9 .\-\/\*\(\)\"\']+$/i',
                   'recipe_desc'    => 'required',
                   'recipe_type'    => 'required|regex:/^[\pL\s]+$/u'
                     );
       $my_recipe_selected = Input::all('my_recipe_selection');

       $my_recipe_modified = Input::all('my_recipe_selection');

       $validator = Validator::make($my_recipe_modified,$rules);
      
         if($validator->fails())
            {            
              return Redirect::to('my_recipe/update')
                               ->withErrors($validator)
                               ->withInput();
            }
          
          if(!Input::has('show_recipe'))
             {
                
                $my_recipe_modified['show_recipe'] = 0;
            
             }
      
             $my_recipe_updated = Recipe::edit_my_recipe($my_recipe_modified);

           try
            {
             
             $my_recipe_updated->save();

            }
            catch(exception $e)
            {

            return Redirect::to('/my_recipe/edit')
                         ->with('flash_message', 'Recipe not added in the database');
            } 

           return Redirect::to('/my_recipe')->with('flash_message', 'Recipe has been modified');

            
 
    }
  
       
 }      

}