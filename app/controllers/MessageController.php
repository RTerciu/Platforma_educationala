<?php

class MessageController extends BaseController{

public function PostMessage()
	{
		$mesaj=new Message;
		$mesaj->userTo=Input::get('userTo');
		$mesaj->userFrom=Input::get('userFrom');
		$mesaj->subject=Input::get('subiect');
		$mesaj->mesaj=Input::get('mesaj');
		
		$mesaj->save();
		
		return "ok";
	

	}


public function GetMessagesPage()
	{
	return View::make('messages.messages_main');
	}
	
public function GetMessagesWithUser($userID)
	{
	$mesaje=Message::GetMessages(Auth::user()->id,$userID);
	//$mesaje=Message::with('user')->get();
	return View::make('messages.conversation')->with('mesaje',$mesaje);
	
	}
	
	
	
}

	


