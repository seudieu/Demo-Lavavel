<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


		$table->increments('id');
		$table->string('name');
		$table->string('slug');
		$table->text('content');
		$table->interger('user_id');
		$table->interger('post_id');
		$table->timestamps();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
