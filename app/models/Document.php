<?php

//For MangoDB
use Jenssegers\Mongodb\Model as Eloquent;

class Document extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'documents';
	
	//For MangoDB
	protected $collection = 'documents';

}