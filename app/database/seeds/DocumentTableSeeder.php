<?php

class DocumentTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('documents')->delete();
		Document::create(array(
			'id'     	=> '1',
			'nume' 		=> 'test.png',
			'link'    	=> 'uploads/test.png',
			'descriere' => 'blabla',
			'permisiuni'=>1,
			'verificat'	=>1,
			'categorie' =>1
		));
		
				Document::create(array(
			'id'     	=> '2',
			'nume' 		=> 'BG.png',
			'link'    	=> 'uploads/BG.png',
			'descriere' => 'blabla',
			'permisiuni'=>1,
			'verificat'	=>1,
			'categorie' =>1
		));
		
		
		
	}

}
