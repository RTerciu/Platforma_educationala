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

	public function DocumentDownload($documentName)
	{
	
	$document=Document::where('title',$documentName)->first();
	
	
	$file= public_path().'\\'.$document->document;
	//contruiesc data
	$data=date("Y-m-d H:i:s");
	
	$userID=Auth::user()->id;
	//verificare downloadat deja
	$already_downloaded=DB::table('downloaded_docs')->where('docID',$document->_id)->where('userID',$userID)->count();
	//daca nu a mai fost deja downloadat de acest user il pun in baza de date ca l-a downloadat acum
	//si cresc documentului numarul de downloaduri
	if($already_downloaded==0)	
		{	DB::table('downloaded_docs')->insert(array('docTitle'=>$documentName,'docID'=>$document->_id,'userID'=>$userID,'data'=>$data));
			$document->nrDownloads=$document->nrDownloads+1;
			$document->save();
	
		}
	//ii raspund user-ului cu fisierul cerut
	return Response::download($file);
	
	//return Redirect::to('/documents/'.$documentName);
	
	}
	
	
	public function DocumentsDownloaded()
	{
	$documents=DB::table('downloaded_docs')->where('userID',Auth::user()->id)->get();
	
  
	return View::make('profile.documents_downloaded')->with('documents',$documents);
	}
	
	public function DocumentsUploaded()
	{
	
	$userID=Auth::user()->id;
	
	$documents=Document::where('userID',$userID)->get();
	
	return View::make('profile.documents_uploaded')->with('documents',$documents);
	
	
	}
	
	public function GetCreate()
	{
		return View::make('documents.create');
	}
	
	public function GetDocumentDetailPage($documentName)
	{
	
	$user=Auth::user()->id;
	$downloaded=DB::table('downloaded_docs')->where('userID',$user)->where('docTitle',$documentName)->count();
	
	$reviews=Review::where('docName',$documentName)->take(3)->get();
	$document=Document::where('title',$documentName)->first();
	return View::make('documents.document_detail')->with('document',$document)->with('reviews',$reviews)
												  ->with('downloaded',$downloaded);

	}
	

	
		public function PostCreate()
	{
		$destinationPath = 'uploads/documents/';
		
		if(Input::has('title') && Input::has('tags') && Input::has('descriere'))
		{
		
			$file = Input::file('document');
			
			$filename = Input::file('document')->getClientOriginalName();
			$uploadSuccess = Input::file('document')->move($destinationPath, $filename);
			
			if($uploadSuccess)
			{
				$document = new Document;
				$document->title = Input::get('title');
				$document->userID=Auth::user()->id;
				$document->tags = Input::get('tags');
				$document->descriere= Input::get('descriere');
				$document->tags = Input::get('tags');
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

	
	public function GetReviewPage($docID)
	{
	
	$document=Document::find($docID);
	return View::make('documents.review_form')->with('document',$document);
	
	}
	
	
	public function PostReview()
	{
	
	//De verificat si aici input-urile si sa nu verific numai prin jquery
	
	$review=new Review;
	$review->mark=Input::get('mark');
	$review->docID=Input::get('docID');
	$review->docName=Input::get('docName');
	$review->userID=Auth::user()->id;
	$review->rezumat=Input::get('rezumat');
	$review->utilitate=Input::get('utilitate');
	
	$review->save();
	$url="documents/".Input::get('docName');
	return Redirect::to($url)->with('mesaj','Review adaugat cu success');
	
	}
	
	public function GradeReview()
	{
	
	$reviewID=Input::get('reviewID');
	$userID=Auth::user()->id;
	
	
	
	$reviewNr=ReviewGrade::where('reviewID',$reviewID)->where('userID',$userID)->count();
	
	if(!$reviewNr)
	    $review=new ReviewGrade;
	else 
		$review=ReviewGrade::where('reviewID',$reviewID)->where('userID',$userID)->first();
		
	$review->docID=Input::get('docID');
	$review->userID=$userID;
	$review->reviewID=Input::get('reviewID');
	$review->mark=Input::get('mark');
	
	$review->save();
	
	$url='documents/'.Input::get('docName').'#review_grades';
	
	return Redirect::to($url)->with('mesaj','Review Notat cu success!');
	
		
	//return $review;
	

	}
	
	
	
	
	
	
	
	
}




















