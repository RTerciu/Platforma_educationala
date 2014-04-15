<?php

class SearchController extends BaseController {


public function GetDocsByTags($tagString,$name = 'Radu')
{
//expandez tagString intr-un array de id-uri de tag-uri
$ids=explode(";",$tagString);
//cate tag-uri avem in total
$nr_tags=count($ids);
$docs=array();
//in docs pastram documentele unice 
$docTagCount=array();
//pastram cate tag-uri contine fiecare document

	foreach($ids as $id)
	{
	//pentru fiecare tag, cautam documentele care il conting
	$documente=Document::findByTag($id,3);
	//parametrul final de la Document::findByTag inseamna:
	//1 - dupa data, cele mai recente primele
	//2 - dupa data, cele mai vechi primele
	//3 - dupa titlu cele cu A primele
	//4 - dupa numarul de download-uri
	//fara ultimul parametru, in ordinea in care apar in baza de date
	
	foreach($documente as $document)
		{
		
		/*Fiecare document este verificat daca a fost
		gasit in lista returnata de vreun alt tag ,
		daca nu a fost gasit se adauga in lista de rezultate unice
		si se initializeaza nr de tag-uri cu 1 , 
		altfel se creste contor-ul de tag-uri pentru documentul respectiv*/
		 if(!isset($docTagCount[$document['_id']]))
			{
			array_push($docs,$document);
			$docTagCount[$document['_id']]=1;
			
			}
		 else
			$docTagCount[$document['_id']]++;
			
		}
	

	}

/*
Sortez sir-ul de elemente unice 
cu cele cu numarul cel mai mare de 
tag-uri primele


*/	
$docs_sorted=array();	

for($i=$nr_tags;$i>0;$i--)
		{
		foreach($docs as $dd)
			{
			if($docTagCount[$dd['_id']]==$i)
				array_push($docs_sorted,$dd);

			}
		
		
		}
		
	
	
/* afisarea de test */
foreach($docs_sorted as $d)
{
echo $d['title'].$d['_id'].' de '.$docTagCount[$d['_id']].' ori<br>';


}

//echo var_dump($docs);



}







public function SearchDocs($searchString)
{

//$docs=Document::all();

$docs=Document::where('title','LIKE','%'.$searchString.'%')->get();
$nr_rezultate=0;
$html='';


foreach($docs as $doc)
{
/*if(Str::contains($doc->title,$searchString))
	{*/
	    $nr_rezultate++;
		$url='documents/'.$doc->title;
		$html=$html.'<li><a href="'.$url.'">'.$doc->title.'</a></li>';
	//}

}

if($nr_rezultate)
	return '<h3> Aceste documente se potrivesc </h3><ul>'.$html.'</ul>';
else return '<p>Nu prea avem rezultate pentru tine</p>';
}

public function SearchJobs($searchString)
{

//$jobs=Job::all();
$jobs=Job::where('titlu','LIKE','%'.$searchString.'%')->get();


$nr_rezultate=0;
$html='';


foreach($jobs as $job)
{
/*if(Str::contains($job->titlu,$searchString))
		{*/
		$nr_rezultate++;
		$url='jobs/'.$job->titlu;
		$html=$html.'<li><a href="'.$url.'">'.$job->titlu.'</a></li>';
		//}
		
}




if($nr_rezultate)
		return '<h3> Aceste documente se potrivesc </h3><ul>'.$html.'</ul>';
	else return '<p>Nu prea avem rezultate pentru tine</p>';



}




}