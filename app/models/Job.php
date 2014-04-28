<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//For MangoDB
use Jenssegers\Mongodb\Model as Eloquent;

class Job extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';
	
	//For MangoDB
	protected $collection = 'jobs';

	
	public static function findByTag($tag,$how=4)
    {
	
	//returnez toate documentele
	//ORDONATE IN felul urmator
	//parametrul final de la Document::findByTag inseamna:
	//1 - dupa data, cele mai recente primele
	//2 - dupa data, cele mai vechi primele
	//3 - dupa titlu cele cu A primele
	//4 - dupa numarul de download-uri
	//fara ultimul parametru, in ordinea in care apar in baza de date
	
	switch($how)
	{
	case 1:
			$all_docs=Job::orderBy('updated_at','DESC')->get();
			break;
	case 2:
			$all_docs=Job::orderBy('updated_at','ASC')->get();
			break;
	case 3:
			$all_docs=Job::orderBy('title','ASC')->get();
			break;
	case 4:
			$all_docs=Job::orderBy('deadline','ASC')->get();
			break;
	default:
			$all_docs=Job::all();
			break;

	}
	//$all_docs=Document::all();
	//construiesc un nou vector
	$results=array();
	
	
	foreach($all_docs as $doc)
			{
			//daca id-ul tag-ului cautat se afla in lista de tag-uri
			if(in_array($tag,$doc->tags))
			     //adaugam in vectorul de rezultate
				array_push($results,$doc->toArray());
			}
	
	return $results;
	
	}
	
	
	
	
	
	
	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}
		
	
	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
	
	
	
	
	

}