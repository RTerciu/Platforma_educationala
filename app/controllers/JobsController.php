<?php

use Carbon\Carbon;

class JobsController extends BaseController {

	public function ShowJobsPage()
	{
		return View::make('jobs.Jobs_main');
	}
	
	
	public function ShowCreateJobsPage()
	{
	
		return View::make('jobs.Jobs_create');
	
	}
	
	
	public function ShowMyJobsApplied()
	{
	$userID=Auth::user()->id;
	
	$jobs=JobBet::where('userID',$userID)->get();
	
	return View::make('profile.jobs_applied')->with('jobs',$jobs);
	
	}
	
	public function ShowMyJobsCreated()
	{
	$userID=Auth::user()->id;
	$jobs=Job::where('id_user',$userID)->get();
	
	return View::make('profile.jobs_created')->with('jobs',$jobs);

	}
	
	public function RemoveJobCreated($jobID)
	{
	
	
	$job=Job::where('_id',$jobID)->first();
	if(isSet($job))
	  {	
		$userID=Auth::user()->id;
		$userWhoCreatedJob=$job['id_user'];
		
		if($userID==$userWhoCreatedJob)
			{
			
			
			JobBet::where('jobID',$jobID)->delete();
			Job::where('_id',$jobID)->delete();
			
			return Redirect::to('myjobs/created')->with('mesaj','Ai sters cu succes!');
			
			
			}
		else	
			return Redirect::to('myjobs/created')->with('mesaj','Nasol, cine esti tu sa stergi?!');
		
	
	
		}
	else 
			return Redirect::to('myjobs/created')->with('mesaj','Nasol! Job-ul asta nu prea exista!');
	
	}
	
	public function RemoveJobApplied($jobID)
	{
	
	$userID=Auth::user()->id;
	
	$jobBet=JobBet::where('jobID',$jobID)->where('userID',$userID)->count();
	
	
	
	if($jobBet)
	    {JobBet::where('jobID',$jobID)->where('userID',$userID)->delete();
		return Redirect::to('myjobs/applied')->with('mesaj','Ai renuntat la job, slabule!');
		}
	else 
		echo 
			json_encode(array('status'=>'nop','mesaj'=>'Prin magie se pare ca nu ai aplicat la acest job!'));
	
	
	}
	
	public function ShowJobsTable()
	{
	
	$jobs=Job::all();
	
	return View::make('jobs.Jobs_table')->with('tabel',$jobs);
	
	
	}
	
	
	public function ProcessBetForJob($jobName,$userId)
	{
	
	
	
	$job=DB::table('jobs')->where('titlu',$jobName)->first();
	
	$jobID=(string)$job['_id'];
	
	$jobExists=JobBet::where('jobID',$jobID)->where('userID',$userId)->count();
	/*echo var_dump($jobExists);*/
	
	if($jobExists>0)
	{
	

	$mesaj='Participi deja la licitatia pentru acest job';
	
	}
	else 
	
	if($job['id_user']==Auth::user()->id)
	{
	
	$mesaj='Nu te poti inscrie la propriul job!';
	
	}
	
	else
	{
	$jobBet=new JobBet;
	$jobBet->jobID=(string)$jobID;
	$jobBet->userID=$userId;
	$jobBet->save();
	//DB::table('jobs_bet')->insert(array('jobID'=>$jobID,'userID'=>$userId));
	$mesaj='Te-ai inscris cu success la licitatia pentru acest job!';
	}
	
	
	return Redirect::to('jobs/'.$jobName)->with('mesaj',$mesaj);
	}
	
	/*Metoda care realizeaza desemnarea unui user pentru a realiza un job
	Se verifica daca :
	-exista bet-ul pentru job
	-exista jobul
	-exista user-ul
	-persoana care face operatia este creatorul jobului
	-creatorul jobului nu a desemnat deja pe altcineva
	
	Daca exista toate cele de mai sus , se updateaza intrarea jobului din baza de date 
	cu id-ul user-ului desemnat DOAR de catre creatorul job-ului
	
	
	
	*/
	public function ProcessAsignUserForJob($userID,$jobID)
	{
	
	$bet=JobBet::where('jobID',$jobID)->where('userID',$userID)->first();
	
	if(!isset($bet))
		return "Nu exista nici o licitatie pentru acest job";
	
	$job=Job::find($jobID);
	if(!isset($job))
		return "Nu mai exista job-ul";
	
	$user=User::find($userID);
	if(!isset($user))
		return "Nu mai exista user-ul";
	
	$userLogat=Auth::user()->id;
	
	if($userLogat!=$job->userID)
		return "Nu esti autorizat sa desemnezi useri pentru acest job!";
	
	if($job->assignedTo!=0)
		return "Ai desemnat deja o persoana pentru acesto job";
		
	$job->assignedTo=$userID;
	$job->save();
	
	return 'ok';
	
	
	//return 'bla '.$userID.'  ## '.$jobID;
	}
	
	
	
	
	public function ShowJobsForCategoryPage($categoryName)
	{
	
	$category=Category::where('nume',$categoryName)->first();
	
	if($category==''|| !isSet($category))
		return Redirect::to('jobs/all');
	
	else
		{
		
		$jobs=Job::where('categorie',$category->id)->get();
		return View::make('jobs.Jobs_table')->with('tabel',$jobs);
		//echo var_dump($category);
		
		}
	}
	
	
	public function ShowJobDetailPage($jobName)
	{
	
	 
	 $job=Job::where('titlu',$jobName)->first();
	 
	 if(isSet($job))
	 {$jobID=(string)$job['_id'];
	 $bidders=JobBet::where('jobID',$jobID)->get();
	 
	 return View::make('jobs.jobs_detail')->with('job',$job)->with('bidders',$bidders);
	 }
	 else 
	 return Redirect::to('jobs/all');
	
	}
	
	
    public function ProcessCreateJob()
	{

	
	$input = Input::all();

	$rules = array(
	'titlu' 	=> 'required|min:3|max:100',
	'pret' 		=> 'required|integer',
	'descriere' => 'required|min:10|max:500',
	'deadline'	=> 'required'
	);

 $v = Validator::make($input, $rules);
	
	if( $v->fails() )
			{
				return Redirect::to('job/create')->with('mesaj','Nu ati completat corect campurile');

			}
			else
			{
			
				$data_minima=Carbon::now();
				$data_minima->addDays(3);
				$timp=Input::get('deadline');
				$liniaMoarta=Carbon::createFromFormat('Y-m-d',$timp); 

				if($data_minima->gt($liniaMoarta))
					return Redirect::to('job/create')->with('mesaj','Pune un deadline uman!');
					

				$job=new Job;
				
				$job->titlu=Input::get('titlu');
				$taguri=Input::get('tags');
				
				if($taguri==null)
					$job->tags=array('53679b39626b2b900e00002a');
				else
					$job->tags = explode(';',rtrim(Input::get('tags'),";"));
				
				$job->id_user=Auth::user()->id;
				$job->pret=Input::get('pret');
				$job->assignedTo="0";
				$job->deadline=$liniaMoarta->toDateTimeString();;
				$job->descriere=Input::get('descriere');
				
				$job->save();
			
				return Redirect::to('jobs/all');
			}
				
	}
}