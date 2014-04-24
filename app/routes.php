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
	Route::get('admin/delete_users/{id}','AdministratorController@deleteUsers');	
	Route::get('admin/delete_jobs/{id}','AdministratorController@deleteJobs');
	Route::get('admin/delete_docs/{id}','AdministratorController@deleteDocs');
	Route::get('admin/delete_downloaded/{id}','AdministratorController@deleteDownloadedDocs');
	Route::get('admin/delete_grades_reviews/{id}','AdministratorController@deleteGradesReviews');
	Route::get('admin/delete_jobs_bet/{id}','AdministratorController@deleteJobsBet');
	Route::get('admin/delete__messages/{id}','AdministratorController@deleteMessages');
	Route::get('admin/delete__reviews/{id}','AdministratorController@deleteReviews');
	Route::get('admin/delete_tags/{id}','AdministratorController@deleteTags');
	
	/*		model stuff		*/
	Route::model('user', 'User');
	Route::model('job', 'Job');
	Route::model('doc', 'Document');
	Route::model('grade/review', 'ReviewGrade');
	Route::model('bet', 'JobBet');
	Route::model('msg', 'Message');
	Route::model('review', 'Review');
	Route::model('tag', 'Tag');
	
	/*		edit stuff		*/
	//Route::get('admin/edit_users/{user}','AdministratorController@editUsers');
	//Route::get('admin/edit_jobs/{job}','AdministratorController@editJobs');
	Route::get('admin/edit_docs/{doc}','AdministratorController@editDocs');
	Route::get('admin/edit_grades_reviews/{grade/review}','AdministratorController@editGradesReviews');
	Route::get('admin/edit_jobs_bet/{bet}','AdministratorController@editJobsBet');
	Route::get('admin/edit_messages/{msg}','AdministratorController@editMessages');
	Route::get('admin/edit_reviews/{review}','AdministratorController@editReviews');
	Route::get('admin/edit_tags/{tag}','AdministratorController@editTags');
	
	/*		handle edit		*/
	Route::post('admin/edit_users', 'AdministratorController@handleEditUsers');
	//Route::post('admin/edit_jobs', 'AdministratorController@handleEditJobs');
	Route::post('admin/edit_docs', 'AdministratorController@handleEditDocs');
	Route::post('admin/edit_grades_reviews', 'AdministratorController@handleEditGradesReviews');
	Route::post('admin/edit_jobs_bet', 'AdministratorController@handleEditJobsBet');
	Route::post('admin/edit_reviews', 'AdministratorController@handleEditReviews');
	Route::post('admin/edit_tags', 'AdministratorController@handleEditTags');
	
	Route::post('admin/edit_users_ajax', 'AdministratorController@handleEditUsersAjax');
	Route::post('admin/edit_jobs_ajax', 'AdministratorController@handleEditJobsAjax');
	

});
