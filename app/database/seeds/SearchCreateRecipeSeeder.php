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
							  
							  PREPARATION
							  
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

								PREPARATION

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
    

    $lasagna = new Recipe;
	$lasagna->name = "Vegetable Lasagna Delight";
	$lasagna->description = 'Baking Time: 45min

							Serves: 10-12 slices

							Ingredients:

							12 oz package (12 strips) Oven ready Lasagna noodle
							1 1/2 Cup Marinara Sauce
							4-6 tsp Olive Oil
							16oz (1 bunch) Fresh Spinach chopped
							1 Cup Broccoli
							1 Cup Cauliflower Florets
							1 1/2 Cup Green Beans, carrot, onion (chopped)
							1 1/2 cup Black and red beans (cooked)
							Green Chili – to taste (finely chopped )
							4 cloves Garlic (finely chopped)
							1tsp Italian Seasoning- dry parsley and oregano
							Crushed Red Chili Pepper – 1tbsp
							Shredded Mozzarella Cheese – 2 cups
							Shredded Parmesan Cheese – 1 cup
							Fresh Basil Leaves – handful, chopped
							Italian Parsley and cilantro – chopped finely
							1tsp Chili powder
							Salt – to taste
							
							PREPARATION

							Soak both beans together 6-8 hrs. Then pressure cook for 2 whistles. Then add salt, chili powder and keep aside.
							Take a pan stir fry spinach with 1tsp butter and salt and few chopped green chilies and garlic for 2min and keep aside.
							Heat 2 tsp of Olive Oil in a medium non-stick pan then add cumin seeds, crushed red pepper, chopped green chili, garlic, parsley ,oregano, onion then add broccoli, cauliflower, green beans, carrots and salt. Stir fry for a 2-3min then keep aside..
							Mix both the shredded cheese in a bowl and keep aside.
							Preheat Oven to 375 degrees Fahrenheit.
							Now Spray the bottom and sides of a 9″ x 13″ baking pan with cooking oil.
							Cover the bottom of the pan with few spoons of Marinara Sauce – just enough to coat.
							Layer 3 noodles(sheets) next to each other on top of the sauce.
							Lightly coat the top of noodles with a little more sauce.
							Spread cooked beans and spinach 1tbsp. then layer with ½ cup cheese
							Again Place 2nd layer of noodles on top of the cheese (side by side).
							Lightly spread sauce on the noodles.
							Now Spread stir fried vegetables mixture evenly and again layer with ½ cup cheese mixture on top of the sauce.
							Layer 3 noodles again and spread with sauce, cooked black beans, remaining stir fry vegetables, spinach and 1/2 cup cheese mix.
							Finally repeat same process with 3 more noodle sheets, finally add reaming beans, veggie, sauce and sprinkle cheese mixture over the top.
							Cover with foil and Bake for 45 minutes at 375 degrees Fahrenheit.
							Finally allow the Lasagna to rest for 15 minutes before cutting. Garnish with chopped parsley. Serve as it is OR with salad for a complete meal.';
	$lasagna->recipe_type = 'Italian';
    $lasagna->save();
    

    $cauliflower_manchurian = new Recipe;
	$cauliflower_manchurian->name = "Cauliflower Manchurian";
	$cauliflower_manchurian->description ='Ingredients:

							20 cauliflower pieces cut into medium size florets
							For Sauce

							2 tablespoons oil
							1 tablespoon ginger paste or finely shredded ginger (adrak)
							1 green chili chopped
							1/4 cup celery finely chopped
							2 tablespoons red chili sauce
							2 tablespoons soy sauce
							1 tablespoon vinegar
							2 teaspoons tomato paste
							1/2 teaspoon sugar
							2 teaspoons corn starch or arrow root powder
							Approx. ½ cup water
							For Batter

							1/3 cup all purpose flour (plain flour, maida)
							3 tablespoons corn starch or arrow root powder
							1/2 teaspoon salt
							1/8 teaspoon black pepper
							Approx. ½ cup water
							
							PREPARATION

							Mix the corn starch with water and set aside.
							Heat the oil in sauce pan over medium high heat; add ginger, celery and green chili stir for about two minute. Add all the ingredients for sauce except corn starch, (chili sauce, soy sauce, vinegar, tomato paste, and sugar).
							Stir for 2 minutes add corn starch and cook for another two minutes, sauce should be thick, consistency of a dosa or pancake batter. If needed add more water, sauce gets thicker as it sits.
							Sauce is ready, set aside.
							To make batter mix flour, corn starch, salt and pepper in a bowl. Add the water slowly to make a smooth batter (batter should be consistency of pancake batter or dosa batter).
							Heat at least one inch of oil in a frying pan over medium high heat. Oil should be moderately hot. (If oil is not hot cauliflower will be greasy).
							Dip the cauliflower into the batter one at a time, making sure it is completely covered by the batter. Then drop the cauliflowers slowly into oil in the frying pan. (do not overlap them)
							Fry the cauliflowers in small batches, four to five minutes per batch. Fry them turning occasionally, until they are all sides golden brown. Take them out over paper towel.
							Repeat this process for the remaining cauliflowers.
							Fold fried cauliflower/ gobies into gravy and serve hot.';
	$cauliflower_manchurian->recipe_type = 'Chinese';
    $cauliflower_manchurian->save();


    $stirfry = new Recipe;
	$stirfry->name = "Stir Fried Sesame Vegetables with Rice";
	$stirfry->description ='Ingredients:
							1 1/2 cups vegetable broth
                            3/4 cup uncooked long-grain white rice
                            1 tablespoon margarine
                            1 tablespoon sesame seeds
                            2 tablespoons peanut oil
                            1/2 pound fresh asparagus, trimmed and cut into 1 inch pieces
                            1 large bell pepper, cut into 1 inch pieces
                            1 large yellow onion, sliced
                            2 cups sliced mushrooms
                            2 teaspoons minced fresh ginger root
                            1 teaspoon minced garlic
                            3 tablespoons soy sauce
                            1 tablespoon sesame oil

                            PREPARATION

							Preheat oven to 350 degrees F (175 degrees C). In a saucepan combine broth, rice and margarine. 
							Cover and bring to a boil over high heat. Reduce heat to low and simmer for 15 minutes, 
							or until all liquid is absorbed.
                            Place sesame seeds on a small baking sheet and bake in preheated oven for 5 to 6 minutes, 
                            or until golden brown; set aside. 
                            Meanwhile, heat peanut oil in a large skillet or wok over medium-high heat until very hot. 
                            Add asparagus, bell pepper, onion, mushrooms, ginger and garlic and stir-fry for 4 to 5 minutes,
                            or until vegetables are tender but crisp. 
                            Stir in soy-sauce and cook for 30 seconds. Remove from heat and stir in sesame oil and toasted 
                            sesame seeds. Serve over rice';
	$stirfry->recipe_type = 'Chinese';
	$stirfry->save();

    $enchiladas = new Recipe;
	$enchiladas->name = "Refried Bean and Cheese Enchiladas";
	$enchiladas->description ='Ingredients:
                              2 (16 ounce) cans refried beans
                              2 cups shredded Mexican cheese blend, divided
                              1/2 cup chopped onion
                              12 small corn tortillas
                              2 (10 ounce) cans red enchilada sauce

                              PREPARATION
                         
							  Preheat oven to 350 degrees F (175 degrees C). Spray a 9x13-inch casserole dish with cooking spray.
                              Mix refried beans, 1 1/2 cup Mexican cheese blend, and onion in a microwave-safe bowl; 
                              heat in microwave until cheese is melted, about 1 minute.
                              Stack tortillas, 3 at a time, on a microwave-safe plate; heat in microwave until warmed, about 30 seconds. 
                              Repeat with remaining tortillas.
                              Pour enough enchilada sauce onto a small plate to cover. Quickly dip both sides of each tortilla in enchilada sauce. 
                              Spoon bean filling down the middle of each dipped tortilla and wrap tortilla around filling. Arrange filled tortillas in the prepared baking dish. Pour remaining enchilada sauce over filled tortillas and sprinkle remaining cheese over sauce layer. Cover dish with aluminum foil.
                              Bake in the preheated oven until sauce is bubbling and cheese is melted, 35 and 40 minutes.';
	$enchiladas->recipe_type = 'Mexican';
	$enchiladas->save();

	$burrito = new Recipe;
	$burrito->name = "Squash and Zucchini Burritos";
	$burrito->description ='Ingredients:
	                        2 tablespoons olive oil
                            1/2 onion, chopped
                            2 cloves garlic, pressed
                            2 zucchini, shredded
                            1 large yellow squash, shredded
                            1/2 red bell pepper, chopped
                            1 (15 ounce) can black beans, rinsed and drained
                            1 cup green salsa
                            1/2 teaspoon ground cumin
                            1/2 teaspoon ground cayenne pepper
                            1 (8 ounce) package Mexican style shredded cheese blend, divided
                            6 burrito-size flour tortillas
                            1 (8 ounce) package Mexican style shredded cheese blend

                            PREPARATION

	                        Preheat oven to 350 degrees F (175 degrees C). Grease a 9x12-inch baking dish.
                            Heat the olive oil in a large skillet over medium heat, and cook the onion and 
                            garlic until the onion is translucent, about 5 minutes. Stir in the zucchini, 
                            yellow squash, and red bell pepper. Cook, stirring frequently, until the zucchini
                            and squash are tender, about 10 minutes. Stir in the black beans, green salsa,
                            cumin, and cayenne pepper. Cook and stir the filling until it thickens, 5 to 8 more minutes.
                            Divide one of the packages of Mexican-style cheese among the tortillas. 
                            Spoon zucchini-squash filling into each tortilla, over the cheese, in a line 
                            down the center. Roll up the tortillas, and place them into the prepared baking dish 
                            with the seam sides down.Bake in the preheated oven until the cheese is melted and the 
                            tortillas are heated through, about 15 minutes. Sprinkle the other package of shredded 
                            cheese over the tortillas before serving.';
        $burrito->recipe_type = 'Mexican';
	    $burrito->save();
   
        $thai_red = new Recipe;
        $thai_red->name = "Thai Red Curry";
	    $thai_red->description ='INGREDIENTS
								1 14-ounce can “lite” coconut milk, divided
								2 tablespoons vegetarian Thai red curry paste (see Tip), or to taste
								1 pound sweet potatoes, peeled and cut into 11/2-inch cubes
								2 cups water
								1 bunch asparagus, trimmed and cut into 2-inch lengths
								2 fresh cayenne chiles or bird chiles (see Tip), cut into long strips (optional)
								2 whole lime leaves (fresh or frozen; see Tip) or 2 teaspoons lime zest
								2 cups coarsely chopped dandelion greens or arugula
								1/2 cup fresh basil leaves, preferably Thai basil
								1/4 teaspoon salt
							  PREPARATION
								Heat a wide heavy pot over medium-high heat. Add about 2 tablespoons coconut milk 
								and curry paste, stirring to dissolve it. Cook, stirring, until aromatic, 30 seconds
								to 1 minute. Add 1 cup of the coconut milk and cook for 1 minute, then add sweet potatoes. 
								Stir to coat the pieces and cook, stirring frequently, for 3 minutes more.
								Add water and bring to a boil. Cook until the sweet potatoes are almost cooked through, 
								about 5 minutes. Add the remaining coconut milk, asparagus, chiles (if using) and 
								lime leaves (or lime zest); cook for 1 minute. Stir in dandelion greens (or arugula), 
								basil and salt until well combined. Continue cooking until the asparagus is just tender, 
								1 to 2 minutes more. Remove lime leaves, if necessary, before serving.
								TIPS & NOTES
								Tip: Red curry paste is a blend of chile peppers, garlic, lemongrass and 
								galangal (a root with a flavor similar to ginger). Look for it in jars or cans in the 
								Asian section of the supermarket or specialty stores. The heat and salt level can vary 
								widely depending on brand. Be sure to taste as you go.';
		$thai_red->recipe_type = 'Thai';
	    $thai_red->save();

	    $thai_green = new Recipe;
	    $thai_green->name = "Thai Green Coconut Curry";
	    $thai_green->description ='INGREDIENTS
								1 + 1/2 cups medium-firm tofu, cubed
                                1 green bell pepper, chopped into bite-size pieces
                                1 to 1+1/2 cups chopped asparagus OR green beans
                                generous handful cherry tomatoes
                                3/4 can coconut milk
                                1/2 to 3/4 cup vegetable stock
                                1/2 cup fresh Thai basil OR sweet basil
                                Optional: 2-3 fresh or frozen kaffir lime leaves
                                GREEN CURRY PASTE:
                                1 stalk lemongrass, thinly sliced, OR 3 Tbsp. frozen prepared lemongrass (available at Asian stores)
								1/4 can coconut milk
								1-3 Thai green chilies OR jalapeno
								1 compressed cup chopped coriander/cilantro, leaves & stems
								1 shallot, chopped
								4-5 cloves garlic
								1 thumb-size piece galangal OR ginger, sliced
								1 Tbsp. soy sauce
								2 Tbsp. fresh lime juice
								1/2 tsp. ground cumin
								1/2 tsp. ground coriander
								1/2 tsp. ground white pepper (available in most supermarket spice aisles)
								1 tsp. brown sugar
								1/2 tsp. sea salt
 							  PREPARATION
								Place all green curry paste ingredients in a food processor or 
								blender and blitz to create a fragrant green curry paste 
								(you may need to add more coconut milk if using a blender). 
								To make sauce by hand: Mince and stir all sauce ingredients together in a bowl, 
								OR use a pestle & mortar to mash dry ingredients followed by liquid ingredients. Set aside.
								Place a wok or large frying pan over medium-high heat. Add 1-2 Tbsp. oil and swirl around,
								then add all the green curry paste you just made. Stir-fry 1 minute to release the fragrance.
								Add the tofu. Stir-fry until well saturated with sauce.
								Add the stock plus lime leaves (if using). Stir and reduce heat to medium-low. 
								Gently simmer 5 minutes.Add the coconut milk, plus vegetables (except basil) 
								and continue simmering 5-7 minutes, or until softened.
								Remove curry from heat and taste-test for salt and spice. If not salty enough, add a sprinkle more salt. 
								If too salty for your taste, add another squeeze of lime juice. If too spicy, add more coconut milk. 
								If you like it sweeter, add a little more sugar.
								Serve directly out of the wok, or transfer to a serving bowl. Sprinkle over the fresh basil 
								(slice larger leaves into shreds). Sliced red chili can also be used as a topping,
								or to add more spice. Serve with plenty of Thai jasmine rice';
		$thai_red->recipe_type = 'Thai';
	    $thai_red->save();

	    $bean_burger = new Recipe;
	    $bean_burger->name = "Grilled Bean Burgers Recipe";
	    $bean_burger->description ='INGREDIENTS
								1 large onion, finely chopped
                                1 tablespoon olive oil
                                4 garlic cloves, minced
                                1 medium carrot, shredded
                                1 to 2 teaspoons chili powder
                                1 teaspoon ground cumin
                                1 can (15 ounces) pinto beans, rinsed and drained
                                1 can (15 ounces) black beans, rinsed and drained
                                1-1/2 cups quick-cooking oats
                                2 tablespoons Dijon mustard
                                2 tablespoons reduced-sodium soy sauce
                                1 tablespoon ketchup
                                1/4 teaspoon pepper
                                8 whole wheat hamburger buns, split
                                8 lettuce leaves
                                8 tablespoons salsa

                               PREPARATION
								In a large nonstick skillet coated with cooking spray, saute onion in oil for 2 minutes. 
								Add garlic; cook for 1 minute. Stir in the carrot, chili powder and cumin; cook 2 minutes 
								longer or until carrot is tender. Remove from the heat; set aside.
                                In a large bowl, mash the pinto beans and black beans. Stir in oats. Add the mustard, soy sauce,
                                ketchup, pepper and carrot mixture; mix well. Shape into eight 3-1/2-in. patties.
                                Moisten a paper towel with cooking oil; using long-handled tongs, rub on grill rack to coat lightly. 
                                Grill patties, covered, over medium heat or broil 4 in. from the heat for 4-5 minutes on each side 
                                or until heated through. Serve on buns with lettuce and salsa. Yield: 8 servings.';
		$bean_burger->recipe_type = 'American';
	    $bean_burger->save();


	    $stuffed_pepper = new Recipe;
	    $stuffed_pepper->name = "Vegetarian Stuffed Peppers Recipe";
	    $stuffed_pepper->description ='INGREDIENTS
								2 cups cooked brown rice
                                3 small tomatoes, chopped
                                1 cup frozen corn, thawed
                                1 small sweet onion, chopped
                                3/4 cup cubed Monterey Jack cheese
                                1 can (4-1/4 ounces) chopped ripe olives
                                1/3 cup canned black beans, rinsed and drained
                                1/3 cup canned red beans, rinsed and drained
                                4 fresh basil leaves, thinly sliced
                                3 garlic cloves, minced
                                1 teaspoon salt
                                1/2 teaspoon pepper
                                6 large sweet peppers
                                3/4 cup meatless spaghetti sauce
                                1/2 cup water
                                4 tablespoons grated Parmesan cheese

 							  PREPARATION
								Place the first 12 ingredients in a large bowl; mix lightly to combine. 
								Cut and discard tops from sweet peppers; remove seeds. Fill peppers with rice mixture.
								In a small bowl, mix spaghetti sauce and water; pour half of the mixture into an oval 5-qt. 
								slow cooker. Add filled peppers. Top with remaining sauce. Sprinkle with 2 tablespoons 
								Parmesan cheese.Cook, covered, on low 3-1/2 to 4 hours or until heated through and peppers are tender. 
								Sprinkle with remaining Parmesan cheese. Yield: 6 servings.';

		$stuffed_pepper->recipe_type = 'American';
	    $stuffed_pepper->save();



	    $aubergine_chickpea = new Recipe;
	    $aubergine_chickpea->name = "Aubergine And Chickpea Stew With Pomegranate";
	    $aubergine_chickpea->description ='INGREDIENTS
								2 small aubergines (eggplants) or one large, slices into 1/4 inch rounds
								2 tbsp olive oil + 1 tsp
								2 cloves garlic, minced
								400g tin of tomatos
								1/2 tbsp tomato paste
								1.5 tsp sugar
								1/2-3/4 tsp salt
								2 tsp lemon juice (freshly squeezed is best)
								1 tbsp pomegranate molasses
								400g tin of chickpeas
								Handful of fresh parsley leaves, chopped

 							  PREPARATION
								Preheat the oven to 250° Celcius (475° F). Use the 2 tbsp of olive oil to 
								brush both sides of the aubergine (eggplant) slices and bake for about 8 minutes. 
								Turn the slices over and cook a further 8 minutes. The aubergine rounds should be 
								shriveled and slightly brown. When they’re finished, remove from the oven and set aside.
								While the eggplant is a-cookin’, sauté the garlic in that other 1 tsp of olive oil
								(use a large sauté pan or skillet frying pan) for 30 seconds. Add the can of tomato
								(you can use fresh ones if they’re in season but otherwise for fullness of flavour I recommend tinned)
								along with the tomato paste, sugar, salt, and lemon juice. Simmer over medium heat for five minutes 
								before adding the pomegranate molasses, chickpeas, and aubergine slices.
								Allow the stew to continue simmering for another 10-15 minutes, tossing in most of the parsley
								(reserve some if you want to garnish) just a few minutes before serving.
								Serve hot or cold (it’s actually quite a nice picnic food) and try not to drool too much.';

		$aubergine_chickpea->recipe_type = 'Middle East';
	    $aubergine_chickpea->save();


	    $Hummus = new Recipe;
	    $Hummus->name = "Balsamic Roasted Plum Tomato Hummus";
	    $Hummus->description ='INGREDIENTS
								125g dried chickpeas, soaked overnight and cooked (about 325g soaked)
								3 tbsp olive oil
								1 tbsp balsamic vinegar
								400g plum tomatoes
								1 tbsp tahini
								2 cloves garlic, crushed
								2 tbsp lemon juice
								Water
								Basil to garnish (optional)

                               PREPARATION
							   Prepare chickpeas as per package instructions. I always recommend dried chickpeas 
							   as they just plain taste better, but tinned are ok too.
                               Mix the tomatoes thoroughly in an oven dish or roasting pan with one tablespoon of 
                               the olive oil (the rest will be added to the finished product) and the balsamic vinegar. 
                               Place in an oven heated to about 175 celcius for 60 minutes, or until skins are slightly crisp and browned.
                               For best results use a blender to mix the tahini, garlic, lemon juice, and remaining two tablespoons of oil 
                               along with the oven roasted tomatoes and their juices. The quantities are only a suggestion as the fluid 
                               content of the tomatoes may vary depending on how well roasted they are and how juicy they were to begin with. 
                               Add additional water (or more olive oil as would be more traditional) to obtain your desired consistency.';

		$Hummus->recipe_type = 'Middle East';
	    $Hummus->save();
        

        $Feijoada = new Recipe;
	    $Feijoada->name = "Brazilian Feijoada";
	    $Feijoada->description ='INGREDIENTS
								5 1/2 cups dried black beans, rinsed and drained
                                1 tablespoon canola oil
                                1 large yellow onion, diced
                                2 medium red bell peppers or 2 medium green bell peppers, diced
                                1 large tomato, diced
                                4 garlic cloves, minced
                                1 canned chipotle pepper, chopped
                                2 cups sweet potatoes, peeled and diced (or butternut squash or white potato)
                                2 teaspoons dried thyme leaves (or fresh)
                                2 teaspoons dried parsley
                                1 teaspoon salt
                                4 cups cooked rice (white or brown)

                               PREPARATION
							   1.In a medium saucepan, place the beans in plenty of water and cook for about 1 hour,
							     over medium heat, until tender.
                               2.Drain and reserve 2 cups of the cooking liquid.
                               3.In a large saucepan, heat the oil.
                               4.Add the onion, bell peppers, tomato, garlic, and chipotle peppers and saute for 8 to 10 minutes.
                               5.Add the beans, cooking liquid, sweet potatoes, and thyme and cook for 25 to 30 minutes over 
                                 medium heat, stirring occasionally.
                               6.Stir in the parsley and salt and cook for 5 to 10 minutes more.
                               7.Spoon the rice into bowls and ladle the feijoada over the top.';
		$Feijoada->recipe_type = 'Potpourri';
	    $Feijoada->save();



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