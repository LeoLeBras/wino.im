<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wines', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('year');
			$table->string('region');
			$table->string('color');
			$table->string('price');
			$table->integer('stock');
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wines');
	}

}
