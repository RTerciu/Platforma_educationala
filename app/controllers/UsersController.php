<?php

use Carbon\Carbon;

class UsersController extends BaseController {

	public function ShowSignUp()
	{
		return View::make('signUp');
	}
	
	public function ShowSignIn()
	{
		return View::make('signIn');
	}
	
	public function ShowProfile($username)
	{
		return View::make('profile.profile');
	}
	
	public function SignOut()
	{	
	
		//La delogare updatam ultimul login al acestui utilizator , astfel incat sa ramana 
		//la created_at - Cand s-a logat
		//La updated_at - Cat s-a delogat
		$userID=Auth::user()->id;
		$login=Login::where('userID',$userID)->orderBy('created_at', 'desc')->first();
		
		if(isset($login))
			{
			$login->signOut="Da";
			$login->save();
			}
		
		Auth::logout();
		return Redirect::to('/')->with('signout_notice','Sadly, you have successfully signed out.');
	}
	
	public function PostSignIn()
	{
		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{	
			$userID=Auth::user()->id;
		
			//Verific daca logarea trecuta a fost terminata prin SignOut sau prin Browser Clear Cache/computer restart etc
			//Daca da, atunci inchid aceea autentificare cu data curenta.
		
			$last_login=Login::where('userID',$userID)->orderBy('created_at', 'desc')->first();
			if(isset($last_login))
				if(!isset($last_login->signOut))
				      { 
						$last_login->signOut="Nu";
						$last_login->save();
					  }
		
			//La logare adaug o noua intrare in tabela logins cu data la care a survenit logarea
			$login=new Login();
			$login->userID=Auth::user()->id;
			$login->save();
			
			return Redirect::to('/');
		}
		else
		{
			return Redirect::to('signin');
		}
	}
	
	public function GetLogsJson($userID)
	{
	
		//iau toate log-urile din baza de date
	$logs=Login::where('userID',$userID)->orderBy('created_at','desc')->get();
	
	//iau un contor sa vad cate sunt cand le parcurg
	$i=0;
	$loguri=array();
		foreach($logs as $log)
		{
			//preiau datele login
			$t1=$log->created_at;
			
			// si de logout
			$t2=$log->updated_at;
			
			//le fac diferenta sa gasesc cat timp a fost respectivul user logat
			$time_logged=$t2->diffForHumans($t1);
			
			//Carbon returneaza cu un after la final si sterg ultimul cuvant din string
			$time_logged_str= preg_replace('/\W\w+\s*(\W*)$/', '$1', $time_logged);
            			
			
			//daca nu e ultima inregistrare, adica chiar logarea din care fac accesarea 
			//acestei pagini
			if($i)
				{//afisez informatii
				//echo $t1.' pana la '.$t2.' = '.$time_logged_str.'<br>';
				
				$element=array('login'=>$t1,'logout'=>$t2,'timp'=>$time_logged_str,'logout_manual'=>$log->signOut);
				array_push($loguri,$element);
				
				}
			//cresc contorul
			$i++;
			
		
		}
	
	
	return  $loguri;
	
	}

	public function GetSigninLogs()
	{
	
	$loguri=$this->GetLogsJson(Auth::user()->id);
	return View::make('profile.SigninLogs')->with('logs',$loguri);
	
	}
	
	
	public function PostSignUp()
	{
		$destinationPath = 'uploads/avatars/';
		$file = Input::file('avatar');
		
		$filename = Input::file('avatar')->getClientOriginalName();
		$uploadSuccess = Input::file('avatar')->move($destinationPath, $filename);
		
		if($uploadSuccess)
		{
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->avatar = $destinationPath.$filename;
			$user->username = Input::get('username');
			$user->save();
		}
		
		return Redirect::to('/');
	}

	
		public function PostProfile()
	{
		$user_id = Auth::user()->id;
		$user = User::find($user_id);
		
		if(Input::has('password'))
		{
			$user->password = Hash::make(Input::get('password'));
		}
		
		if(Input::has('avatar_check'))
		{
			$destinationPath = 'uploads/avatars/';
			$file = Input::file('avatar');
			
			$filename = Input::file('avatar')->getClientOriginalName();
			$uploadSuccess = Input::file('avatar')->move($destinationPath, $filename);
			
			$user->avatar = $destinationPath.$filename;
		}
		
		
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		
		$user->save();
		
		return $user;
		
	}
	
	
	private function DoUserVerification($userName,$view)
	{
	
	//caut user-ul cautat
	$user=User::where('username',$userName)->first();
	
	if(!isset($user))
	//Daca nu exista user-ul
		if(Auth::check()) //daca avem un user autentificat
			{$userLogged=Auth::user()->username; //redirectez la profilul user-ului logat
					return Redirect::to('users/'.$userLogged);
			}
		 else 
			return Redirect::to('/');//daca nu e user logat si nici user-ul cautat nu exista redirectez	
									 //la home
	
	else
		{//user-ul cautat exista
		 //afisez profilul public
		return View::make($view)->with('user',$user);
			
		
		
		}
	
	
	
	}
	
	
	public function GetPublicProfile($userName)
	{
	
	//caut user-ul cautat
	$user=User::where('username',$userName)->first();
	
	if(!isset($user))
	//Daca nu exista user-ul
		if(Auth::check()) //daca avem un user autentificat
			{$userLogged=Auth::user()->username; //redirectez la profilul user-ului logat
					return Redirect::to('users/'.$userLogged);
			}
		 else 
			return Redirect::to('/');//daca nu e user logat si nici user-ul cautat nu exista redirectez	
									 //la home
	
	else
		{//user-ul cautat exista
		 //afisez profilul public
		return View::make('profile.public_profile')->with('user',$user);
			
		
		
		}
	
	
	
	
	}
	
	
	
	public function GetDocsStats($userName)
	{
    return $this->DoUserVerification($userName,'profile.public_doc_stats');
	}
	public function GetJobsStats($userName)
	{
	return $this->DoUserVerification($userName,'profile.public_job_stats');
	}
	public function GetCommunityStats($userName)
	{
	return $this->DoUserVerification($userName,'profile.public_community_stats');
	}
	
}