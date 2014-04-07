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
	Route::get('message/trimite',function()
	{
	return "x";
	
	});

	Route::get('tags/create','TagsController@CreateTagForm');
	Route::post('tags/create','TagsController@CreateTag');
	

	Route::get('tags/all','TagsController@GetAllTags');
	Route::get('tags/{tagName}','TagsController@GetSomeTags');
	Route::get('tags/check/{tagName}','TagsController@CheckTag');


	Route::get('/download/document/{documentName}','DocumentsController@DocumentDownload');

	Route::get('/users/{userName}','UsersController@ShowProfile');
	Route::post('/users/{userName}','UsersController@PostProfile');
	
	
	
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

	
	Route::get('job/create','JobsController@ShowCreateJobsPage');
	Route::post('job/create','JobsController@ProcessCreateJob');
	
	Route::get('jobs','JobsController@ShowJobsPage');
	Route::get('jobs/all','JobsController@ShowJobsTable');
	
	Route::get('jobs/category/{categoryName}','JobsController@ShowJobsForCategoryPage');
	

	Route::get('job/create','JobsController@ShowCreateJobsPage');
	Route::post('job/create','JobsController@ProcessCreateJob');
	Route::get('jobs','JobsController@ShowJobsPage');
	Route::get('jobs/all','JobsController@ShowJobsTable');
	Route::get('jobs/category/{categoryName}','JobsController@ShowJobsForCategoryPage');

	Route::get('jobs/{jobName}','JobsController@ShowJobDetailPage');
	Route::get('jobs/{jobName}/{userId}','JobsController@ProcessBetForJob');

});
