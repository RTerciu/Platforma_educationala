<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//For MangoDB
use Jenssegers\Mongodb\Model as Eloquent;

class DownloadedDocs extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';
	
	//For MangoDB
	protected $collection = 'downloaded_docs';



}