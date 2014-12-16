<?php

class MyRecipeController extends BaseController 
{ 
  public function index()
   {  
        $user = Auth::user();

        $my_recipes = $user->recipes()->get();
  
        return View::make('my_recipe_get_index')
                   ->with('my_recipes',$my_recipes);

   }
   public function create()
   {
        
       return View::make('my_recipe_create');               

   }
   public function addRecipe()
   {
    $users = Auth::user();
                              
    $recipeid = Session::get('recipe_id');

    print_r($recipeid);

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

       if($recipe_added_flag)
         {
       return Redirect::action('RecipeController@getRecipe')->with('flash_message','Your recipe has been added.');
         }
       else
        {
        return Redirect::action('RecipeController@getRecipe')->with('flash_message','Recipe already present,no recipe has been added.');
        }       
   }
   public function store()
   {
       if(Input::has('save'))
       {
        $rules = array(
                   'recipe_name'    => 'required|regex:/^[A-Za-z0-9 .\-\/\*]+$/i',
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

       #print_r($my_recipe['show_flag']);

       Recipe::save_user_recipe($my_recipe);

       return Redirect::to('/my_recipe')
                        ->with('flash_message','Your Recipe has been saved in your profile');

       }          

   }
   public function edit()
   {
       if(Input::has('edit'))
      {
        $rules = array('my_recipe' => 'required | size:1');
        
        $my_recipe_selected = array('my_recipe' => Input::get('my_recipe'));

        $validator = Validator::make($my_recipe_selected,$rules);

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
        
          if($recipe_can_update)
             {   
               Session::put('my_recipe_selected',$my_recipe_selected);
           /*return View::make('my_recipe_edit')
                       ->with('my_recipe_selected',$my_recipe_selected);*/
                       return Redirect::to('/my_recipe/update');
                                     
             }
          else
            {
           return Redirect::to('/my_recipe/')
                          ->with('flash_message', 'Recipe cannot be updated as its public');  
            }
    }        
   if(Input::has('delete'))
     {

       $my_recipe_selected = Input::get('my_recipe');

        try
          {
          
          $my_recipe_selected = Recipe::where('id','=',$my_recipe_selected)
                                      ->first();                                
          }
        catch(exception $e)
          {

           return Redirect::to('/my_recipe/edit')->with('flash_message', 'Recipe to be deleted not found ');  
         
          }
          
          if(!$my_recipe_selected->show_flag)
          {
             
              $user = Auth::user();
   
            try
              {
                 $user->recipes()->detach($my_recipe_selected);
                
                  $my_recipe_selected->delete();
              }
            catch(exception $e)
               {
                 
                 return Redirect::to('/my_recipe')->with('flash_message', 'Recipe to be deleted not found '); 
            
               }
             
            return Redirect::to('/my_recipe')->with('flash_message', 'Recipe has been deleted ');

          }
          else
          {

            return Redirect::to('/my_recipe')->with('flash_message', 'Recipe is public and cannot be deleted');
          
          }

      
     }
    }
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
                   'recipe_name'    => 'required|regex:/^[A-Za-z0-9 .\-\/\*]+$/i',
                   'recipe_desc'    => 'required',
                   'recipe_type'    => 'required|alpha'
                     );
       $my_recipe_selected = Input::all('my_recipe_selection');

       $my_recipe_modified = Input::all('my_recipe_selection');

       $validator = Validator::make($my_recipe_modified,$rules);
      
         if($validator->fails())
            {            
              return Redirect::to('my_recipe/update')
                               ->withErrors($validator)
                               ->withInput();

              /*return View::make('my_recipe_edit')
                           ->withInput('my_recipe_selected',$my_recipe_selected)
                           ->withErrors($validator);
*/
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