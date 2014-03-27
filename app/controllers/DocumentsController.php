<?php

class DocumentsController extends BaseController{

	public function ShowMainPage()
	{
	
	return View::make('documents.documents_main');
	
	
	}

	
	public function GetList()
	{

	$documents=Document::all();
	return View::make('documents.documents_list')->with('documents',$documents);
	}

	public function DocumentDownloaded($documentName)
	{
	
	$document=Document::where('title',$documentName)->first();
	$document->nrDownloads=$document->nrDownloads+1;
	$document->save();
	
	$file= public_path().'\\'.$document->document;
	
	return Response::download($file);
	
	//return Redirect::to('/documents/'.$documentName);
	
	}
	
	
	
	
	public function GetCreate()
	{
		return View::make('documents.create');
	}
	
	public function GetDocumentDetailPage($documentName)
	{
	$document=Document::where('title',$documentName)->first();
	return View::make('documents.document_detail')->with('document',$document);

	}
	

	
	public function PostCreate()
	{
		$destinationPath = 'uploads/documents/';
		
		if(Input::has('title') && Input::get('category'))
		{
		
			$file = Input::file('document');
			
			$filename = Input::file('document')->getClientOriginalName();
			$uploadSuccess = Input::file('document')->move($destinationPath, $filename);
			
			if($uploadSuccess)
			{
				$document = new Document;
				$document->title = Input::get('title');
				$document->userID=Auth::user()->id;
				$document->category = Input::get('category');
				$document->descriere= Input::get('descriere');
				$document->nrDownloads=0;
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
		
		return Redirect::to('/documents/create')->with('create_errors','Ati uploadat documentul cu success');
	}

}