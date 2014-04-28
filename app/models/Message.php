<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//For MangoDB
use Jenssegers\Mongodb\Model as Eloquent;

class Message extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';
	
	//For MangoDB
	protected $collection = 'messages';
	
	public function user()
	{
	return $this->belongsToMany('User');
	
	}

	public static function GetMessages($user1,$user2)
	{
	$userLogged=$user1;
	$userID=$user2;
	//Functia returneaza prin select-ul din baza de date astfel
	//mesajele care au la destinatar SI respondent user-ul logat si 
	//un utilizator selectat , SAU invers.( (A si B) sau (B si A) )
	
	$mesaje=Message::where(function($q) use ($userID,$userLogged)
            {
                $q->where('userTo',$userID)
                  ->where('userFrom' , $userLogged);
            })->orWhere(function($q) use ($userLogged,$userID)
            {
                $q->where('userTo',$userLogged)
                  ->where('userFrom' , $userID);
            })->orderBy('created_at','DESC')->get();
			
	return $mesaje;
	
	
	}
	
	public static function GetListOfPeople($userID)
	{
	//de gasit doar acei useri cu care cel cu userID a schimbat mesaje
	$mesaje=Message::where('userTo',$userID)->orWhere('userFrom',$userID)->orderBy('created_at','DESC')->get(['userTo','userFrom']);
	$users=array();
	
	foreach($mesaje as $mesaj)
	{
	if($mesaj->userTo!=$userID)
		{
		$userName=User::find($mesaj->userTo)->username;
		$de_inserat=array('userID'=>$mesaj->userTo,'userName'=>$userName);
		if(!in_array($de_inserat,$users))
			array_push($users,$de_inserat);
	
		}
	else 
		{
		$userName=User::find($mesaj->userFrom)->username;
		$de_inserat=array('userID'=>$mesaj->userFrom,'userName'=>$userName);
		if(!in_array($de_inserat,$users))
			array_push($users,$de_inserat);

		}
			
		
	
	
	}

	$html='';	
	foreach($users as $user)
		{
		$url=url('messages/with/'.$user['userID']);
		$html=$html.'<li><a href="'.$url.'">Vorbeste cu '.$user['userName'].'</a></li>';
		}
	
	return $html;
	
	}
	
	
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	 
	 public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}
		 
	 
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}