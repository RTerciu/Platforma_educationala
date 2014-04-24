<?php

class AdministratorController extends BaseController {
	public function showUsers()
	{
		$users = User::all();
		
		return View::make('admin.show_users')->with('users',$users);
	}
	
	public function deleteUsers($id)
	{
		$user = User::where('_id',$id);
		$user->delete();
		$users = User::all();
		return Redirect::to('admin/show_users')->with('users',$users);
	}
	public function editUsers(User $user)
	{
		return View::make('admin.edit_users', compact('user'));
	}
	/*public function handleEditUsers()
	{
	    // Handle edit form submission.
        $user = User::findOrFail(Input::get('id'));
        $user->username       = Input::get('username');
        $user->email    	  = Input::get('email');
        $user->save();
		
		$users = User::all();
		return Redirect::to('admin/show_users')->with('users',$users);

	}*/
	public function handleEditUsersAjax()
	{
	    // Handle edit form submission.
        $user = User::findOrFail(Input::get('id'));
        $user->username       = Input::get('username');
        $user->email    	  = Input::get('email');
        $user->save();
		
		$users = User::all();
		return "ok";

	}
	public function showJobs()
	{
		$jobs = Job::all();
		
		return View::make('admin.show_jobs')->with('jobs',$jobs);
	}
	public function deleteJobs($id)
	{
		$job = Job::where('_id',$id);
		$job->delete();
		$jobs = Job::all();
		return Redirect::to('admin/show_jobs')->with('jobs',$jobs);
	}
	public function editJobs(Job $job)
	{
		return View::make('admin.edit_jobs', compact('job'));
	}
	/*public function handleEditJobs()
	{
	    // Handle edit form submission.
        $job = Job::findOrFail(Input::get('id'));
        $job->titlu       = Input::get('titlu');
        $job->pret   = Input::get('pret');
		$job->deadline   = Input::get('deadline');
		$job->descriere   = Input::get('descriere');
        $job->save();
		
		$jobs = Job::all();
		return Redirect::to('admin/show_jobs')->with('jobs',$jobs);

	}*/
	public function handleEditJobsAjax()
	{
	    // Handle edit form submission.
        $job = Job::findOrFail(Input::get('id'));
        $job->titlu       = Input::get('titlu');
        $job->pret   = Input::get('pret');
		$job->deadline   = Input::get('deadline');
		$job->descriere   = Input::get('descriere');
        $job->save();
		
		$jobs = Job::all();
		return "ok";

	}
	
	public function showDocs()
	{
		$docs = Document::all();
		
		return View::make('admin.show_docs')->with('docs',$docs);
	}
	public function deleteDocs($id)
	{
		$doc = Document::where('_id',$id);
		$doc->delete();
		$docs = Document::all();
		return Redirect::to('admin/show_docs')->with('docs',$docs);
	}
	public function editDocs(Document $doc)
	{
		return View::make('admin.edit_docs', compact('doc'));
	}
	public function handleEditDocs()
	{
	    // Handle edit form submission.
        $doc = Document::findOrFail(Input::get('id'));
        $doc->title       = Input::get('title');
		$doc->descriere   = Input::get('descriere');
		$doc->document    = Input::get('document');
		$doc->save();
		
		$docs = Document::all();
		return Redirect::to('admin/show_docs')->with('docs',$docs);

	}
	
	public function showDownloadedDocs()
	{
		$downs = Document::all();
		
		return View::make('admin.show_downloaded_docs')->with('downs',$downs);
	}
	public function deleteDownloadedDocs($id)
	{
		$down = Document::where('_id',$id);
		$down->delete();
		$downs = Document::all();
		return Redirect::to('admin/show_downloaded_docs')->with('downs',$downs);
	}
	public function editDownloadedDocs()
	{
		
	}
	
	public function showGradesReviews()
	{
		$grades = ReviewGrade::all();
		
		return View::make('admin.show_grades_reviews')->with('grades',$grades);
	}
	public function deleteGradesReviews($id)
	{
		$grade = ReviewGrade::where('_id',$id);
		$grade->delete();
		$grades = ReviewGrade::all();
		return Redirect::to('admin/show_grades_reviews')->with('grades',$grades);
	}
	public function editGradesReviews(ReviewGrade $grade)
	{
		return View::make('admin.edit_grades_reviews', compact('doc'));
	}
	public function handleEditGradesReviews()
	{
	    // Handle edit form submission.
        $grade = ReviewGrade::findOrFail(Input::get('id'));
        $grade->docID       = Input::get('docID');
        $grade->mark    	= Input::get('mark');
		$grade->reviewID    = Input::get('reviewID');
		$grade->save();
		
		$grades = ReviewGrade::all();
		return Redirect::to('admin/show_grades_reviews')->with('grades',$grades);

	}
	
	public function showJobsBet()
	{
		$bets = JobBet::all();
		
		return View::make('admin.show_jobs_bet')->with('bets',$bets);
	}
	public function deleteJobsBet($id)
	{
		$bet = JobBet::where('_id',$id);
		$bet->delete();
		$bets = JobBet::all();
		return Redirect::to('admin/show_jobs_bet')->with('bets',$bets);
	}
	public function editJobsBet(JobBet $bet)
	{
		return View::make('admin.edit_jobs_bet', compact('bet'));
	}
	public function handleEditJobsBet()
	{
	    // Handle edit form submission.
        $bet = JobBet::findOrFail(Input::get('id'));
        $bet->jobID       = Input::get('jobID');
        $bet->userID      = Input::get('userID');
		$bet->save();
		
		$bets = JobBet::all();
		return Redirect::to('admin/show_grades_reviews')->with('bets',$bets);
	}
	
	public function showMessages()
	{
		$msgs = Message::all();
		
		return View::make('admin.show_messages')->with('msgs',$msgs);
	}
	public function deleteMessages($id)
	{
		$msg = Message::where('_id',$id);
		$msg->delete();
		$msgs = Message::all();
		return Redirect::to('admin/show__messages')->with('msgs',$msgs);
	}
	public function editMessages(Message $msg)
	{
		return View::make('admin.edit_messages', compact('msg'));
	}
	public function handleEditMessages()
	{
	    // Handle edit form submission.
        $msg = Message::findOrFail(Input::get('id'));
        $msg->userTo       = Input::get('userTo');
        $msg->userFrom     = Input::get('userFrom');
		$msg->subject      = Input::get('subject');
		$msg->mesaj    	   = Input::get('mesaj');
		$msg->save();
		
		$msgs = Message::all();
		return Redirect::to('admin/show_messages')->with('msgs',$msgs);
	}
	
	public function showReviews()
	{
		$reviews = Review::all();
		
		return View::make('admin.show_reviews')->with('reviews',$reviews);
	}
	public function deleteReviews($id)
	{
		$review = Review::where('_id',$id);
		$review->delete();
		$reviews = Review::all();
		return Redirect::to('admin/show_reviews')->with('reviews',$reviews);
	}
	public function editReviews(Review $review)
	{
		return View::make('admin.edit_reviews', compact('review'));
	}
	public function handleEditReviews()
	{
	    // Handle edit form submission.
        $review = Review::findOrFail(Input::get('id'));
        $review->userTo       = Input::get('userTo');
        $review->userFrom     = Input::get('userFrom');
		$review->subject      = Input::get('subject');
		$review->mesaj    	  = Input::get('mesaj');
		$review->save();
		
		$reviews = Review::all();
		return Redirect::to('admin/show_reviews')->with('reviews',$reviews);
	}
	
	public function showTags()
	{
		$tags = Tag::all();
		
		return View::make('admin.show_tags')->with('tags',$tags);
	}
	public function deleteTags($id)
	{
		$tag = Tag::where('_id',$id);
		$tag->delete();
		$tags = Tag::all();
		return Redirect::to('admin/show_tags')->with('tags',$tags);
	}
	public function editTags(Tag $tag)
	{
		return View::make('admin.edit_tags', compact('tag'));
	}
	public function handleEditTags()
	{
	    // Handle edit form submission.
        $tag = Tag::findOrFail(Input::get('id'));
        $tag->name          = Input::get('name');
        $tag->descriere     = Input::get('descriere');
		$tag->save();
		
		$tags = Tag::all();
		return Redirect::to('admin/show_tags')->with('tags',$tags);
	}
	
}













