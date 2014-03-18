<?php

class UsersController extends BaseController {

	public function ShowSignUp()
	{
		return View::make('signUp');
	}
	
	public function PostSignUp()
	{
		$destinationPath = 'uploads/';
		$file = Input::file('avatar');
		
		//echo var_dump(Input::all());
		
		$filename = Input::file('avatar')->getClientOriginalName();
		$uploadSuccess = Input::file('avatar')->move($destinationPath, $filename);
		
		if($uploadSuccess)
		{
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->avatar = $destinationPath.$filename;
			$user->save();
		}
		
		return Redirect::to('/signup');
	}

}