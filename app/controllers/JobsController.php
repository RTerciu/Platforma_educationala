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
	
	
	public function ProcessBetForJob($jobName,$userId)
	{
	
	
	
	$job=DB::table('jobs')->where('titlu',$jobName)->first();
	
	$jobID=$job['_id'];
	
	$jobExists=JobBet::where('jobID',$jobID)->where('userID',$userId)->count();
	/*echo var_dump($jobExists);*/
	
	if($jobExists>0)
	{
	

	$mesaj='Participi deja la licitatia pentru acest job';
	
	}
	
	else
	{
	$jobBet=new JobBet;
	$jobBet->jobID=$jobID;
	$jobBet->userID=$userId;
	$jobBet->save();
	//DB::table('jobs_bet')->insert(array('jobID'=>$jobID,'userID'=>$userId));
	$mesaj='Te-ai inscris cu success la licitatia pentru acest job!';
	}
	
	
	return Redirect::to('jobs/'.$jobName)->with('mesaj',$mesaj);
	}
	
	public function ShowJobsForCategoryPage($categoryName)
	{
	
	$category=Category::where('nume',$categoryName)->first();
	
	if($category==''|| !isSet($category))
		return Redirect::to('jobs/all');
	
	else
		{
		
		$jobs=Job::where('categorie',$category->id)->get();
		return View::make('Jobs_table')->with('tabel',$jobs);
		//echo var_dump($category);
		
		}
	}
	
	
	public function ShowJobDetailPage($jobName)
	{
	
	 
	 $job=Job::where('titlu',$jobName)->first();
	 
	 return View::make('jobs_detail')->with('job',$job);
	
	
	}
	
	
    public function ProcessCreateJob()
	{

	
	$input = Input::all();

	$rules = array(
	'titlu' 	=> 'required|min:3|max:100',
	'categorie' => 'required',
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