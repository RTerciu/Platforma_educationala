<?php

class SearchController extends BaseController {

public function SearchDocs($searchString)
{

$docs=Document::all();


$nr_rezultate=0;
$html='';


foreach($docs as $doc)
{
if(Str::contains($doc->title,$searchString))
	{	$nr_rezultate++;
		$url='documents/'.$doc->title;
		$html=$html.'<li><a href="'.$url.'">'.$doc->title.'</a></li>';
	}

}

if($nr_rezultate)
	return '<h3> Aceste documente se potrivesc </h3><ul>'.$html.'</ul>';
else return '<p>Nu prea avem rezultate pentru tine</p>';
}

public function SearchJobs($searchString)
{

$jobs=Job::all();
$nr_rezultate=0;
$html='';


foreach($jobs as $job)
{
if(Str::contains($job->titlu,$searchString))
		{
		$nr_rezultate++;
		$url='jobs/'.$job->titlu;
		$html=$html.'<li><a href="'.$url.'">'.$job->titlu.'</a></li>';
		}
		
}




if($nr_rezultate)
		return '<h3> Aceste documente se potrivesc </h3><ul>'.$html.'</ul>';
	else return '<p>Nu prea avem rezultate pentru tine</p>';



}




}