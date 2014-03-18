<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
		{
			$table->bigIncrements('id');
			$table->string('username')->unique();
			$table->string('email',100);
			$table->string('first_name',100);
			$table->string('last_name',100);
			$table->string('password',20);
			$table->text('preferences');
			$table->binary('avatar');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
