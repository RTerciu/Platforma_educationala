<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Radu Terciu',
			'username' => 'Radu',
			'email'    => 'radurt25@gmail.com',
			'password' => Hash::make('qazwsx'),
		));
	}

}
