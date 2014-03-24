<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name', 32);
			$table->string('username', 32);
			$table->string('email', 320);
			$table->string('password', 64);
			$table->integer('referal_id');
			$table->integer('facultate_id');
			$table->integer('categorie_id');
			$table->integer('anul_absolvirii');
			$table->integer('newsletter_category');
			$table->integer('anul_absolvirii');
			$table->integer('role');
			$table->integer('reward_points');
			$table->string('cont_payu',100);
			$table->timestamps();
		});
	
			Schema::create('documents', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name', 32);
			$table->string('link', 320);
			$table->integer('uploader_id');
			$table->integer('categorie_id');
			$table->integer('verificat');
			$table->integer('permisiuni');
			$table->integer('pret');
			$table->string('descriere',1000);
			$table->string('keywords',100);
			$table->timestamps();
		});
		
			Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name', 32);
			$table->string('titlu', 100);
			$table->integer('id_user');
			$table->integer('categorie_id');
			$table->integer('assigned_to');
			$table->time('deadline_date');
			$table->time('pick_user_dat');
			$table->integer('pret');
			$table->string('descriere',1000);
			$table->string('keywords',100);
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
		Schema::drop('users');
		Schema::drop('documents');
		Schema::drop('jobs');
	}

}
