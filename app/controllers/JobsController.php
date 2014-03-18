<?php

class JobsController extends BaseController {

	public function ShowJobsPage()
	{
		return View::make('Jobs_main');
	}
	
	
	public function ShowCreateJobsPage()
	{
	
		return View::make('Jobs_create');
	
	}
	
	
	public function ShowJobsTable()
	{
	
	$jobs=Job::all();
	
	return View::make('Jobs_table')->with('tabel',$jobs);
	
	
	}
	
	public function ShowJobsForCategoryPage($categoryName)
	{
	
	$category=Category::all();
	echo var_dump($category);
	
	
	}
	
	
	
    public function ProcessCreateJob()
	{

	
	$input = Input::all();

	$rules = array(
	'titlu' 	=> 'required|min:3|max:100',
	'categorie' => 'required|integer',
	'pret' 		=> 'required|integer',
	'descriere' => 'required|min:10|max:500',
	'deadline'	=> 'required|after:2014-03-17'
	);

 $v = Validator::make($input, $rules);
	
	if( $v->fails() )
			{
				echo 'wroooooong';
			}
			else
			{
				$job=new Job;
				
				$job->titlu=Input::get('titlu');
				$job->categorie=Input::get('categorie');
				$job->id_user=1;
				$job->pret=Input::get('pret');
				$job->deadline=Input::get('deadline');
				$job->descriere=Input::get('descriere');
				
				$job->save();
				return Redirect::to('jobs');
			}
				
	}
}