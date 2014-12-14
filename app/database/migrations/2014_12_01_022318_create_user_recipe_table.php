<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRecipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_recipe',function($table){
			# General data...
			$table->integer('user_id')->unsigned();
			$table->integer('recipe_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('recipe_id')->references('id')->on('recipes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_recipe');
	}

}
