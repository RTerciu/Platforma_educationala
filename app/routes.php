<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('teo',function()
{

return View::make('teo');

});

Route::get('search/docs/{tagString}/{name?}','SearchController@GetDocsByTags');

// De decis daca mutam in interiorul autentificarii sau nu
Route::get('/documents/byTag/{tag}',function($tag)
{
//Returnez obiectul tag-ului cu respectivul ID
$tagObject=Tag::find($tag);
//Daca obiectul e setat caut documentele in functie de tag si returnez documentele impreuna cu numele tag-ului 
//catre un view
if(isset($tagObject))
	{ 
	  $documents=Document::findByTag($tag);
	  $tagName=$tagObject->name;
	  return View::make('documents.documentsByTag')->with('docs',$documents)->with('tagName',$tagName);
	}
else return Redirect::to('documents/all');

});

// De decis daca mutam in interiorul autentificarii sau nu
Route::get('/jobs/byTag/{tag}',function($tag)
{
//Returnez obiectul tag-ului cu respectivul ID
$tagObject=Tag::find($tag);
//Daca obiectul e setat caut documentele in functie de tag si returnez documentele impreuna cu numele tag-ului 
//catre un view
if(isset($tagObject))
	{ 
	  $documents=Job::findByTag($tag);
	  $tagName=$tagObject->name;
	  return View::make('jobs.jobsByTag')->with('jobs',$documents)->with('tagName',$tagName);
	}
else return Redirect::to('jobs/all');

});




Route::get('/signup','UsersController@ShowSignUp');

Route::post('/signup','UsersController@PostSignUp');

Route::get('/signin','UsersController@ShowSignIn');

Route::post('/signin','UsersController@PostSignIn');

Route::get('/signout','UsersController@SignOut');


Route::get('/search/documents/{searchString}','SearchController@SearchDocs');
Route::get('/search/joburi/{searchString}','SearchController@SearchJobs');

Route::get('/profile/{userName}','UsersController@GetPublicProfile');
Route::get('profile/docsStats/{userName}','UsersController@GetDocsStats');
Route::get('profile/jobsStats/{userName}','UsersController@GetJobsStats');
Route::get('profile/communityStats/{userName}','UsersController@GetCommunityStats');



Route::group(array('before' => 'auth'), function()
{	
	

	Route::post('message/trimite','MessageController@PostMessage');
	Route::get('messages','MessageController@GetMessagesPage');
	Route::get('messages/with/{userID}','MessageController@GetMessagesWithUser');

	Route::get('tags/create','TagsController@CreateTagForm');
	Route::post('tags/create','TagsController@CreateTag');
	

	Route::get('tags/all','TagsController@GetAllTags');
	Route::get('tags/{tagName}','TagsController@GetSomeTags');
	Route::get('tags/check/{tagName}','TagsController@CheckTag');


	
	Route::get('/usersBrief/{query}','UsersController@GetUsersShort');
	Route::get('/users/{userName}','UsersController@ShowProfile');
	Route::post('/users/{userName}','UsersController@PostProfile');
	
	
	Route::get('/download/document/{documentName}','DocumentsController@DocumentDownload');
	Route::get('documents','DocumentsController@ShowMainPage');
	Route::get('documents/all','DocumentsController@GetList');
	
	Route::get('documents/review/{docID}','DocumentsController@GetReviewPage');
	Route::post('documents/review','DocumentsController@PostReview');
	
	Route::post('grade/review','DocumentsController@GradeReview');
	
	Route::get('documents/create','DocumentsController@GetCreate');
	Route::post('documents/create','DocumentsController@PostCreate');
	
	Route::get('documents/downloaded','DocumentsController@DocumentsDownloaded');
	Route::get('documents/uploaded','DocumentsController@DocumentsUploaded');
	
	Route::get('documents/{documentName}','DocumentsController@GetDocumentDetailPage');
	 
	Route::get('remove/job/created/{jobID}','JobsController@RemoveJobCreated');
	Route::get('remove/job/applied/{jobID}','JobsController@RemoveJobApplied');
	Route::get('myjobs/applied','JobsController@ShowMyJobsApplied');
	Route::get('myjobs/created','JobsController@ShowMyJobsCreated');
	
	Route::get('mysignins','UsersController@GetSigninLogs');
	
	//De mutat in Grupul admin, e anormal sa aiba orice care e logat access
	//cu un id la logurile unui utilizator
	Route::get('signinlogs/{userID}','UsersController@GetLogsJson');


	Route::get('job/create','JobsController@ShowCreateJobsPage');
	Route::post('job/create','JobsController@ProcessCreateJob');
	
	Route::get('jobs','JobsController@ShowJobsPage');
	Route::get('jobs/all','JobsController@ShowJobsTable');	

	Route::get('job/create','JobsController@ShowCreateJobsPage');
	Route::post('job/create','JobsController@ProcessCreateJob');
	Route::get('jobs','JobsController@ShowJobsPage');
	Route::get('jobs/all','JobsController@ShowJobsTable');

	Route::get('jobs/{jobName}','JobsController@ShowJobDetailPage');
	Route::get('jobs/{jobName}/{userId}','JobsController@ProcessBetForJob');
	
	
	/*		teo's routes for admin page	*/
	Route::get('admin/admin_layout',function(){Return View::make('admin.admin_layout');});
	Route::get('admin/show_users','AdministratorController@showUsers');
	Route::get('admin/show_jobs','AdministratorController@showJobs');
	Route::get('admin/show_docs','AdministratorController@showDocs');	
	Route::get('admin/show_downloaded_docs','AdministratorController@showDownloadedDocs');
	Route::get('admin/show_grades_reviews','AdministratorController@showGradesReviews');
	Route::get('admin/show_jobs_bet','AdministratorController@showJobsBet');
	Route::get('admin/show_messages','AdministratorController@showMessages');
	Route::get('admin/show_reviews','AdministratorController@showReviews');	
	Route::get('admin/show_tags','AdministratorController@showTags');
	
	/*		delete stuff	  	*/	
	Route::post('admin/delete_users/{id?}','AdministratorController@deleteusers');	
	Route::post('admin/delete_jobs/{id?}','AdministratorController@deletejobs');
	Route::post('admin/delete_docs/{id?}','AdministratorController@deletedocs');
	Route::post('admin/delete_downloaded/{id?}','AdministratorController@deletedownloadeddocs');
	Route::post('admin/delete_gradesreviews/{id?}','AdministratorController@deletegradesreviews');
	Route::post('admin/delete_jobsbet/{id?}','AdministratorController@deletejobsbet');
	Route::post('admin/delete_messages/{id?}','AdministratorController@deletemessages');
	Route::post('admin/delete_reviews/{id?}','AdministratorController@deletereviews');
	Route::post('admin/delete_tags/{id?}','AdministratorController@deletetags');
	
	/* handle edit- save_button.js */
	Route::post('admin/edit_users_ajax', 'AdministratorController@handleEditUsersAjax');
	Route::post('admin/edit_jobs_ajax', 'AdministratorController@handleEditJobsAjax');
	Route::post('admin/edit_docs_ajax', 'AdministratorController@handleEditDocsAjax');
	Route::post('admin/edit_grades_ajax', 'AdministratorController@handleEditGradesReviewsAjax');
	Route::post('admin/edit_jobsbet_ajax', 'AdministratorController@handleEditJobsBetAjax');
	Route::post('admin/edit_reviews_ajax', 'AdministratorController@handleEditReviewsAjax');
	Route::post('admin/edit_messages_ajax', 'AdministratorController@handleEditMessagesAjax');
	Route::post('admin/edit_tags_ajax', 'AdministratorController@handleEditTagsAjax');

	/* routes for makeTableAdmin.js */
	Route::get('admin/getUsersAjax','AdministratorController@getUsersAjax');
	Route::get('admin/getGradesReviewsAjax','AdministratorController@getGradesReviewsAjax');
	Route::get('admin/getDocsAjax','AdministratorController@getDocsAjax');
	Route::get('admin/getDownloadedDocsAjax','AdministratorController@getDownloadedDocsAjax');
	Route::get('admin/getJobsAjax','AdministratorController@getJobsAjax');
	Route::get('admin/getJobsBetAjax','AdministratorController@getJobsBetAjax');
	Route::get('admin/getMessagesAjax','AdministratorController@getMessagesAjax');
	Route::get('admin/getReviewsAjax','AdministratorController@getReviewsAjax');
	Route::get('admin/getTagsAjax','AdministratorController@getTagsAjax');
	
	/*		Statictics		*/
	Route::get('admin/graphNrDownloads','AdministratorController@showGraph');
	Route::get('admin/getInfo/{an?}','AdministratorController@getNrDowns');
	
	/*	costul  documentelor plotat pe categoria din care face parte ( adica asa ne dam seama daca poate unele au preturi dubioase si trebuie corectate)
		MOMENTAN DOCUMENTELE NU AU PRET = NO CAN DO 
		Route::get('admin/getDocsCost','AdministratorController@getCost');
		Route::get('admin/getCostpeTag','AdministratorController@showGraph2');
	*/
	/*		 numar de job-uri postate pe zi/sapt/luna		*/
	Route::get('admin/graphNrJobs','AdministratorController@showGraphNrJobs');
	Route::get('admin/getNrJobsPerMonth/{an?}','AdministratorController@getNrJobsPerMonth');
	Route::get('admin/getInfoJobs/{luna}/{an}','AdministratorController@getNrJobs');
	//Route::get('admin/getNrJobsPerWeek','AdministratorController@getNrJobsPerWeek');
	
//getNrJobsPerWeek
	
	
	
	
	
	
	
	
	
	
	});
