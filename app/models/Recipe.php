<?php
class Recipe extends Eloquent
{

	public function users()
	{
		return $this->belongsToMany('User','user_recipe','user_id','recipe_id');
	}
	public static function search($cuisine_selected, $ingredients_selected = null)
	{
		$recipes = new \Illuminate\Database\Eloquent\Collection;
		#$recipes->add(new Post);
        #$recipes = new Recipe();

       if(is_null($ingredients_selected))
        {
        	#print_r($cuisine_selected);
            /*foreach($cuisine_selected as $key=>$val)
            {
         
                 $recipes =  Recipe::where('recipe_type','LIKE',"%$val%")
                                  ->get();
                 echo($recipes)."<br>"."<br>" ;                                              
            }      */  
            $recipes = Recipe::WhereIn('recipe_type',$cuisine_selected)
                                 ->get();

             #print_r($recipes);
        }
       else
        {
        	#$ingredients_selected = implode(" ",$ingredients_selected);

           /*foreach($cuisine_selected as $key => $val)
            {
              foreach($ingredients_selected as $key1 => $val1)   
                {
                 $recipes =   Recipe::where('recipe_type','LIKE',"%$val%")
                                    ->where('description','LIKE',"%$val1%")
                                    ->get();
                 echo($recipes)."<br>"."<br>" ;                   
                }
            }     */  
           foreach($ingredients_selected as $key => $val)
            {
              $recipes = $recipes->merge(Recipe::WhereIn('recipe_type',$cuisine_selected)
                                           ->Where('description','LIKE',"%$val%")
                                           ->Where('show_flag','=',1)
                                            ->get());
                                            
            }

        }
       /*foreach($recipes as $recipe)
        {
        	echo($recipe)."<br>"."<br>" ;
        	
        }*/
        return $recipes;
	}

  public static function save_user_recipe($my_recipe)
  {
        $new_recipe = new Recipe();

        $new_recipe->name = $my_recipe['recipe_name'];

        $new_recipe->description = $my_recipe['recipe_desc'];
        
        $new_recipe->show_flag = $my_recipe['show_flag'];
      
       
        $new_recipe->recipe_type = $my_recipe['cuisine'][0];

        #$new_recipe= $my_recipe;

        try
        {
          $new_recipe->save();//adding a new recipe
        }
        catch(exception $e)
        {
          return Redirect::to('/my_recipe')->with('flash_message', 'Recipe not added in the database');
        }

        $users = Auth::user();

        try
        {

           $users->recipes()->attach($new_recipe);

        }
        catch(exception $e)
        {
          return Redirect::to('/my_recipe')->with('flash_message', 'Recipe not added in your profile');  
        }
       

  }
  public static function edit_my_recipe($my_recipe_modified)
  {
     #print_r($my_recipe_modified);
     #$new_recipe = new Recipe();
       try
         {
          $my_recipe_old = Recipe::where('id','=',$my_recipe_modified['id'])
                                  ->first();
          }
       catch(exception $e)
          {
         return Redirect::to('/my_recipe/edit')->with('flash_message', 'Recipe to be updated not found ');  
          }
                         
          $my_recipe_old->name        = $my_recipe_modified['recipe_name'];
          $my_recipe_old->description = $my_recipe_modified['recipe_desc'];

          $my_recipe_old->show_flag   = $my_recipe_modified['show_recipe'];
          $my_recipe_old->recipe_type  = $my_recipe_modified['recipe_type'];
          return $my_recipe_old;
       
        
  }

}