<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//For MangoDB
use Jenssegers\Mongodb\Model as Eloquent;

class Tag extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';
	
	//For MangoDB
	protected $collection = 'tags';


	public function getHTMLTag()
	{
	$url=url('/documents/byTag/'.$this->_id);
	$tagHTML='<a href="'.$url.'" title="'.$this->descriere.'"><span class="label label-info" style="margin-right:5px;">'.$this->name.'</span></a>';
	
	return $tagHTML;
	}
	
	public function getHTMLTagJob()
	{
	$url=url('/jobs/byTag/'.$this->_id);
	$tagHTML='<a href="'.$url.'" title="'.$this->descriere.'"><span class="label label-info" style="margin-right:5px;">'.$this->name.'</span></a>';
	
	return $tagHTML;
	}
	
	
	
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

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