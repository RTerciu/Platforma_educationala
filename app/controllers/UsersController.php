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
			$login->signOut="Da";
		$login->save();
		
		Auth::logout();
		return Redirect::to('/')->with('signout_notice','Sadly, you have successfully signed out.');
	}
	
	public function PostSignIn()
	{
		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{	
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