<?php

class DocumentsController extends BaseController{

	public function GetCreate()
	{
		return View::make('create');
	}
	
	public function PostCreate()
	{
		$destinationPath = '/uploads/documents/';
		
		if(Input::has('document') && Input::has('title') && Input::get('category'))
		{
		
			$file = Input::file('document');
			
			$filename = Input::file('document')->getClientOriginalName();
			$uploadSuccess = Input::file('document')->move($destinationPath, $filename);
			
			if($uploadSuccess)
			{
				$document = new Document;
				$document->title = Input::get('title');
				$document->category = Input::get('category');
				$document->document = $destinationPath.$filename;
				$document->save();
			}
			else
			{
				return Redirect::to('/documents/create')->with('create_errors','Error uploading file.');
			}
		}
		else
		{
			return Redirect::to('/documents/create')->with('create_errors', 'Missing fields.');
		}
		
		return Redirect::to('/documents/create');
	}

}