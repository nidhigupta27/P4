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
   public function store()
   {
       if(Input::has('save'))
       {
       $my_recipe = Input::all();

       #print_r($my_recipe['show_flag']);

       Recipe::save_user_recipe($my_recipe);

       return Redirect::to('/my_recipe')
                        ->with('flash_message','Your Recipe has been saved in your profile');

       }          

   }
   public function edit()
   {
     $recipe_can_update = 0;
    
    if(Input::has('edit'))
     {
        $my_recipe_selected = Input::get('my_recipe');

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

           return View::make('my_recipe_edit')
                       ->with('my_recipe_selected',$my_recipe_selected);
       }
       else
       {
           return Redirect::to('/my_recipe/')
                          ->with('flash_message', 'Recipe cannot be updated as its public');  
       }
     
      }

     if(Input::has('update'))
     {
          $my_recipe_modified = Input::all('my_recipe_selection');

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


}