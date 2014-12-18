# P4: Whats for dinner today?

## Description
 This assignment involves creating a web application "Whats for dinner today?" using Laravel Framework and MYSQL database. The web application uses a MYSQL database called P4 and demonstrates the implementation of four CRUD operations- Select a menu based on cuisine and ingredients,create a dinner menu which can be saved in user's profile for later retrieval,update a recipe and save it in user's profile and finally delete a recipe from user's profile.

## Demo
  * Here is my Jing screencast- [http://screencast.com/t/F0wdLKSR0Gj]
  (http://screencast.com/t/F0wdLKSR0Gj)

## Details for teaching team
* P4 database has a users table,recipes table,user\_recipe(pivot table)and password\_reminders table.
* Database is seeded with data(two recipes of each cuisine) in above tables using Laravel Seeder(SearchCreateRecipeSeeder.php) 
* Validation is done and error messages are generated to alert the user to input the required missing inputs or to verify invalid inputs.
* Password reminder is implemented which enables user to reset password. Emails are sent using mailgun's SMTP service.
* While searching for recipes(a login is not required), more than one ingredients can be selected from the select box(press the control key). More than one cuisines can also be selected if user wants to check different cuisines for the same ingredients.For each cuisine selected by the user the recipe table is searched for recipes that match all the ingredients selected by the user.
* User can create own recipes and save them to the database. Depending on whether user selects a recipe to be visible or not visible to others, its saved as public or private in the recipes table. 
* Edit functionality enables user to edit recipes which are private to user. Edits are prevented on recipes which are visible(public) to everyone. This is done to ensure data consistency and prevent one user from modifying someone else's recipe.
* Delete functionality enables user to delete a recipe(both public and private) from User's profile. On deleteing a private recipe(in short user created the recipe and is only visible to the user), the recipe gets deleted from both the user's profile and also from recipes table.
* The data validation on the recipe method on Create new recipes and Update recipe page checks to see if some data is entered in recipe method field(only required). No other validation is done to enable users to add recipes(international cuisines) with special characters or symbols.
* User might see a "No recipe message" (a lot) as database has a few entries at the moment.As we keep adding more recipes(via create my own recipe page or Laravel seeding), there will be more recipes to select from. 

## Live URL of the project
* [http://p4.dwa15-ng.me] (http://p4.dwa15-ng.me)

## Outside Code used
* Google Fonts
* Bootstrap [http://getbootstrap.com/](http://getbootstrap.com/)
* Java Script [http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js](http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js)
* jQuery [http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js](http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js)


Thanks!