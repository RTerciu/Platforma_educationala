<?php

class AdminController extends BaseController {

	public function ArataUsers()
	{
	
	$users=User::all();
	return $users;
	
	}
	

	public function StergeUsers($userID)
	{
	
	
	$user=User::find($userID);
	echo $user;
	$user->delete();
	
	
	}
	
	public function StergeJob()
	{
	
	
	}
	
	
	
	
}