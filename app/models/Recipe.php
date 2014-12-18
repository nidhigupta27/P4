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
    $query   = new \Illuminate\Database\Eloquent\Collection;
	/* Check to see if no ingredients were selected. If so,select all recipes from the recipes table 
     for the selected cuisine(s).Otherwise for each cuisine selected, the recipe table is searched for 
     the recipes that match the ingredients selected by the user(recipes selected are those that match all
     the ingredients)	*/
       if(is_null($ingredients_selected))
        {
            $recipes = Recipe::WhereIn('recipe_type',$cuisine_selected)
                                 ->get();
        }
       else
        { 
            $recipes = $recipes->merge(Recipe::WhereIn('recipe_type',$cuisine_selected)
                                       ->Where(function($query) use ($ingredients_selected)
                                       {
                                        foreach($ingredients_selected as $key => $val)
                                          {
                                         $query->Where('description','LIKE',"%$val%");
                                          }
                                       })
                                       ->Where('show_flag','=',1)
                                       ->get());
                                            

        }
        return $recipes;
	}
/* The new recipe created by the user is saved in the recipe table and the user_recipe pivot table */ 

  public static function save_user_recipe($my_recipe)
  {
        $new_recipe = new Recipe();

        $new_recipe->name = $my_recipe['recipe_name'];

        $new_recipe->description = $my_recipe['recipe_desc'];
        
        $new_recipe->show_flag = $my_recipe['show_flag'];
      
       
        $new_recipe->recipe_type = $my_recipe['cuisine'][0];

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
 /* The private recipe(recipe that is created by the user and visible only to the user) 
      is updated here */ 
  public static function edit_my_recipe($my_recipe_modified)
  {
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
          $my_recipe_old->recipe_type = $my_recipe_modified['recipe_type'];
          return $my_recipe_old;
       
        
  }

}