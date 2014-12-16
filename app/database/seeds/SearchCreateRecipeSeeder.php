<?php
class SearchCreateRecipeSeeder extends Seeder
{
   public function run()
   {
     
     # Clear the tables to a blank state

     DB::statement('SET FOREIGN_KEY_CHECKS=0');
     DB::statement('TRUNCATE recipes');
     DB::statement('TRUNCATE users');
     DB::statement('TRUNCATE user_recipe');

     #Recipes

     $bean_salad = new Recipe;
     $bean_salad->name = 'Crunchy Bean salad with beetroot and fruits';
     $bean_salad->description = 'Ingredients:1/2 Cup sprouted moong
                              1/2 Cup boiled chick peas
                              1/4 Cup chopped cucumber
                              1/4 Cup chopped apple
                              1/4 Cup chopped beetroot
                              Chopped grapes 8-10
							  1 chopped green chili (optional)
							  Salad Dressing:
                              1/2 teaspoon black pepper
							  Salt to taste
							  1 tablespoon orange jest
							  1 tablespoon lemon zest
							  2 tablespoon orange juice
							  2 tablespoon lemon juice
							  1 teaspoon chaat masala
							  For Garnish:
   							  2 Strawberries sliced
							  2 Green chillies slit
							  1 tablespoon chopped cilantro
							  Method
							  Mix all the salad dressing ingredients together. Keep aside.
							  In a big bowl mix moong dal & chick peas
							  Add chopped cucumber, apple, grapes, beetroot & green chili
							  Pour the salad dressing
							  Mix well
							  Take a serving dish transfer the sprouts and chick pea mixture.
							  Sprinkle chopped cilantro on top
							  Garnish with strawberries & green chilies.';
	$bean_salad->recipe_type = 'Indian';
	$bean_salad->save();

	 $cabbage_dumpling = new Recipe;
     $cabbage_dumpling->name = 'Cabbage Dumpling';
     $cabbage_dumpling->description = 'Ingredients:for Koftas (dumpling):
								2 cup shredded cabbage (patha gobhi)
								3/4 cup gram flour or as needed
								1/2 teaspoon cumin seed (jeera)
								2 teaspoon chopped cilantro (hara dhania)
								1 teaspoon shredded ginger
								1 chopped green chili
								1 teaspoon salt
								Oil to fry
								for Gravy:
								3 medium tomatoes
								1/2 inch ginger (adrak)
								1 green chili
								2 tablespoon yogurt
								2 tablespoon oil
								Pinch asafetida (hing)
								1 teaspoon cumin seed (jeera)
								1 tablespoon gram flour (basen)
								1 tablespoon coriander powder (dhania)
								1/2 teaspoon turmeric (haldi)
								1/2 teaspoon salt (adjust to taste)
								1/2 paprika
								1/4 teaspoon red pepper
								2 tablespoon finally chopped cilantro (hara dhania)
								1 teaspoon sugar
								Method
								Koftas (dumpling):
								Mix together all the kofta (dumpling) ingredients. Adjust gram flour (besen) as needed to make a texture of very soft dough. Note: make this mix just before you are ready to fry the kofta otherwise it will become watery.
								Heat the oil in a frying pan on medium-high heat.
								The frying pan should have at least 1½ inch of oil. To check if the oil is ready, just put one small piece of the mix in the oil, it should sizzle and come up right away.
								Slowly drop about 1 tablespoon of the dumpling mixture into the frying pan one at a time.
								Fry the koftas (dumpling mix) in small batches, avoid overcrowding the frying pan.
								Turn the koftas occasionally. Fry the koftas until they turn golden-brown all around.
								Making Gravy:
								Blend the tomatoes, green chilies and ginger to make a puree. If you prefer a milder version, take the seeds out of the green chili before blending.
								Heat the oil in a saucepan on medium-high. Test the heat by adding one cumin seed to the oil; if it cracks right away oil is ready.
								Add the asafetida, cumin seeds and gram flour (basen). Stir-fry for a minutes.
								Add the tomato puree, coriander powder, turmeric, paprika, and cook on medium heat until the tomato mixture starts leaving the oil and reduces to about half in quantity.
								Next add yogurt and cook for another minute.
								Add about 1½ cups of water and the salt. As it comes to boil reduce the heat to medium-low and let the gravy cook for few minutes.
								Note: adjust the thickness of the gravy to your taste by adjusting the water.
								Add the prepared koftas and let it simmer for another 7 to 8 minutes.
								Turn of the heat and add the cilantro and cover the pot.';
	$cabbage_dumpling->recipe_type = 'Indian';
	$cabbage_dumpling->save();

     $potato_curry = new Recipe;
     $potato_curry->name = 'Potato Curry';
	 $potato_curry->description = 'Peeled and cut the potatoes into ½” cubes.
							Heat the oil in a frying pan over medium high heat.
							Frying pan should have at least 1inch of oil. To check if the oil is ready, put one piece of potato in the oil.The potato should sizzle right away. If potatoes are fried on low heat they will be very oily.
							Fry the potatoes till they are cooked through; turn the potatoes few times while frying. Take out potatoes with a slotted spoon (this allows excess oil to drip back into the frying pan) and place on a paper towel. Keep aside.
							Heat the pan on medium heat and stir-fry the sesame seeds for about a minute until seeds lightly change color. Take them out and keep aside.
							Blend sesame seeds, coconut, ginger, green chili, and make it into a paste. Use water as needed to blend into paste.
							In a small bowl mix, sesame paste, yogurt, ginger, green chili, coriander powder, funnels seed powder, paprika, red chili powder, and turmeric into a paste. Keep aside.
							Heat the oil in a saucepan. Test the heat by adding one cumin seed to the oil; if seed cracks right away oil is ready.
							Add the cumin asafetida and cumin seeds. After the cumin seeds crack, add whole red chili and besan (gram flour). Stir-fry for about half a minute until the besan (gram flour) is golden-brown.
							Add the spice paste and stir-fry for about 2 minutes on medium heat until the spices starts to separate from the oil.
							Add the potatoes, mix it well and add about 1cup of water. After the gravy boils, let it cook on low-medium heat for 8 to 10 minutes. Adjust the water in gravy to your liking.
							Add the cilantro and garam masala cover the pan and turn off the heat. Let it sit for few minutes before taking of the cover. This helps bringing the color on the top of the dish.
							Serve with any bread.';
	$potato_curry->recipe_type = 'Indian';
	$potato_curry->save();


	$pizza = new Recipe;
	$pizza->name = "Homemade Pizza";
	$pizza->description = 'Ingredients:
							for Dough

							2-1/2 cup all-purpose flour (plain flour, maida)
							1/2 teaspoon sugar
							1/2 teaspoon salt
							1-1/2 tablespoons dry yeast
							3 tablespoons olive oil preferred,
							Approx. 1 cup lukewarm water, 110 degree F
							About 2 tablespoons of all-purpose flour for rolling
							for Sauce

							3 cups crushed tomatoes
							2 tablespoons olive oil preferred
							1 teaspoons Italian herbs
							1 teaspoon salt
							2 teaspoons sugar
							1/8 teaspoon black pepper
							¼ teaspoon chili flake
							2 teaspoons corn starch 
							for Topping

							2 cups shredded mozzarella cheese
							1 cup sliced bell pepper in small pieces (capsicum, Shimla mirch)
							1 cup sliced mushrooms
							Method

							for Dough

							Add the yeast to lukewarm water and set it aside for about 5 minutes, mix it well making sure yeast has dissolved.
							Combine flour, sugar, salt and oil and mix. I am using food processer with dough blade to make dough. Note: for pizza dough should be knead well, you can use standing mixer with a dough attachment, or make the dough by hand.
							Add yeast water run the food processor for 4-5 minutes, stopping every minute for few seconds. Make sure dough is very soft but not sticky if needed add more water or if it is too sticky add little more flour. When dough is ready add 1 tablespoon of oil and run the food processor for about half a minute more.
							Take out the dough over floured surface and knead the dough until smooth and elastic will take about 3-4 minutes.
							Grease large bowl with oil, and oil the dough all around lightly, cover the bowl. Set aside the dough in a warm area, for about two hours, dough should be double in size.
							Knead the dough again over lightly floured surface and divide the dough into 2 equal parts. And let them rest for 3-4 minutes, before rolling. 
							Making the sauce

							Add oil into a pan over medium high heat. Add Italian herbs, black pepper, and chili flakes stir for few seconds add tomatoes, salt and sugar. Cook until tomatoes have become mushy and most of the water from tomatoes has evaporated. Mix the corn starch with 2 tablespoons of water and add to the tomatoes. Reduce the heat to low stir the sauce for few minutes until sauce becomes the consistency of soft batter. If tomatoes are too sour use little more sugar. Set aside.
							Preparing the Pizza

							Preheat the oven a4 425 degree F (225 Celsius).
							Grease the pizza pan, I am using 14 inch pan.
							Lightly flour roll into a 13 inch circle. Transferred to greased 12-in. pizza pan; build up edges slightly. Lightly greased the rolled dough, this helps making the pizza crisp.
							Spoon a few tablespoons of sauce into the center of the pizza and use the back of a spoon to spread it out to within one inch of edges. Spread your toppings bell pepper, mushrooms, sprinkle the cheese.
							Bake for 15 to 18 minutes depend on the oven, until the golden brown.
							Slice and serve';
	$pizza->recipe_type = 'Italian';
    $pizza->save();

    #users

        $user = new User;
		$user->email      = 'nidhigupta02176@gmail.com';
		$user->password   = Hash::make('krishna');
		$user->name       = 'Nidhi';
		$user->save();
        
        $user->recipes()->attach($pizza);
        $user->recipes()->attach($potato_curry);
  

   }

}