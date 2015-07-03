<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('users', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('compagny');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('roles');
			$table->string('website');
			$table->string('phone');
			$table->string('place');
			$table->string('city');
			$table->string('schedule');
			$table->string('siret');
			$table->string('denomination');
			$table->string('description');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
		Schema::drop('users');
	}

}
