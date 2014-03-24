<?php

class UploadController extends BaseController {


	public function uploadFile()
	{
	
	 return View::Make('upload');
	
	}
    public function processUploadedFile()
	{
	
	$file = Input::file('file'); // your file upload input field in the form should be named 'file'
     
	 
	 if(!isset($file))
	 return Redirect::to('upload');
	 
		$destinationPath = 'uploads/';
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
		 
		if( $uploadSuccess ) {
			$document=new Document;
			$document->nume=$filename;
			$document->link=$destinationPath.$filename;
			$document->permisiuni=1;
			$document->descriere='Uploadat din formular';
			
			$document->save();
		
		
		   return Redirect::to('info'); // or do a redirect with some message that file was uploaded
		} else {
		   return Redirect::to('upload');
		}
	}
}