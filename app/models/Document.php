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
			$all_docs=Document::orderBy('updated_at','DESC')->get();
			break;
	case 2:
			$all_docs=Document::orderBy('updated_at','ASC')->get();
			break;
	case 3:
			$all_docs=Document::orderBy('title','ASC')->get();
			break;
	case 4:
			$all_docs=Document::orderBy('nrDownloads','DESC')->get();
			break;
	default:
			$all_docs=Document::all();
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
	

}