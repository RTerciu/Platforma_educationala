<?php
use Carbon\Carbon;

class AdministratorController extends BaseController {
	/*		USERS		*/
	public function showUsers()
	{
		$users = User::all();	
		return View::make('admin.show_users');
	}
	public function getUsersAjax()
	{
		$users = User::all();
		return $users;//return json
	}
	public function deleteusers($id)
	{
		$user = User::where('_id',$id);
		$user->delete();
		$users = User::all();
		return Redirect::to('admin/show_users');//->with('users',$users);
	}
	public function editUsers(User $user)
	{
		return View::make('admin.edit_users', compact('user'));
	}
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
	
	/*		JOBS		*/
	public function showJobs()
	{
		$jobs = Job::all();		
		return View::make('admin.show_jobs');
	}
	public function getJobsAjax()
	{
		$jobs = Job::all();
		return $jobs;//return json
	}
	public function deletejobs($id)
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
	public function handleEditJobsAjax()
	{
	    // Handle edit form submission.
        $job = Job::findOrFail(Input::get('id'));
        $job->titlu     = Input::get('titlu');
        $job->pret   	= Input::get('pret');
		$job->deadline  = Input::get('deadline');
		$job->descriere = Input::get('descriere');
        $job->save();
		
		$jobs = Job::all();
		return "ok";
	}
	
	/*		DOCS		*/
	public function showDocs()
	{
		$docs = Document::all();
		
		return View::make('admin.show_docs');//->with('docs',$docs);
	}
	public function getDocsAjax()
	{
		$docs = Document::all();
		return $docs;//return json
	}
	public function deletedocs($id)
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
	public function handleEditDocsAjax()
	{
	    // Handle edit form submission.
        $doc = Document::findOrFail(Input::get('id'));
        $doc->title       = Input::get('title');
		$doc->descriere   = Input::get('descriere');
		$doc->document    = Input::get('document');
		$doc->save();
		
		$docs = Document::all();
		//return Redirect::to('admin/show_docs')->with('docs',$docs);
		return "ok";
	}
	
	/*		DOWNLOADED DOCS		*/
	public function showDownloadedDocs()
	{
		$downloads = DB::table("downloaded_docs")->get();
		return View::make('admin.show_downloaded_docs');//->with('downloads',$downloads);
	}
	public function getDownloadedDocsAjax()
	{
		$downloads = DB::table("downloaded_docs")->get();
		return $downloads;//return json
	}
	public function deletedownloadeddocs($id)
	{
		$down = Document::where('_id',$id);
		$down->delete();
		$downloads = Document::all();
		return Redirect::to('admin/show_downloaded_docs')->with('downloads',$downloads);
	}
	public function editDownloadedDocs()
	{
		
	}
	/*public function handleEditDownloadedDocsAjax()
	{
	    // Handle edit form submission.
        ???		$down = ::findOrFail(Input::get('id'));
		???		$down = DB::table("downloaded_docs")->get('id');
        $down->docTitle       = Input::get('docTitle');
        $down->save();
		
		$downs = DB::table("downloaded_docs")->get();
		return "ok";
	}*/
	
	/*		 GRADES REVIEWS		 */
	public function showGradesReviews()
	{
		$grades = ReviewGrade::all();
		
		return View::make('admin.show_grades_reviews');//->with('grades',$grades);
	}
	public function getGradesReviewsAjax()
	{
		$grades = ReviewGrade::all();
		return $grades;//return json
	}
	public function deletegradesreviews($id)
	{
		$grade = ReviewGrade::where('_id',$id);
		$grade->delete();
		$grades = ReviewGrade::all();
		return Redirect::to('admin/show_grades_reviews')->with('grades',$grades);
	}
	public function editGradesReviews(ReviewGrade $grade)
	{
		return View::make('admin.edit_grades_reviews', compact('grade'));
	}
	public function handleEditGradesReviewsAjax()
	{
	    // Handle edit form submission.
        $grade = ReviewGrade::findOrFail(Input::get('id'));
        $grade->mark    	= Input::get('mark');
		$grade->save();
		
		$grades = ReviewGrade::all();
		//return Redirect::to('admin/show_grades_reviews')->with('grades',$grades);
		return "ok";
	}
	
	/*		JOBS BET		*/
	public function showJobsBet()
	{
		$bets = JobBet::all();	
		return View::make('admin.show_jobs_bet');//->with('bets',$bets);
	}
	public function getJobsBetAjax()
	{
		$jobsbet = JobBet::all();
		return $jobsbet;//return json
	}
	public function deletejobsbet($id)
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
	public function handleEditJobsBetAjax()
	{
	    // Handle edit form submission.
        $bet = JobBet::findOrFail(Input::get('id'));
        $bet->jobID       = Input::get('jobID');
        $bet->userID      = Input::get('userID');
		$bet->save();
		
		$bets = JobBet::all();
		//return Redirect::to('admin/show_grades_reviews')->with('bets',$bets);
		return "ok";
	}
	
	/*		MESSAGES		*/
	public function showMessages()
	{
		$msgs = Message::all();
		
		return View::make('admin.show_messages');//->with('msgs',$msgs);
	}
	public function getMessagesAjax()
	{
		$msgs = Message::all();
		return $msgs;//return json
	}
	public function deletemessages($id)
	{
		$msg = Message::where('_id',$id);
		$msg->delete();
		$msgs = Message::all();
		return Redirect::to('admin/show_messages')->with('msgs',$msgs);
	}
	public function editMessages(Message $msg)
	{
		return View::make('admin.edit_messages', compact('msg'));
	}
	public function handleEditMessagesAjax()
	{
	    // Handle edit form submission.
        $msg = Message::findOrFail(Input::get('id'));
        $msg->userTo       = Input::get('userTo');
        $msg->userFrom     = Input::get('userFrom');
		$msg->subject      = Input::get('subject');
		$msg->mesaj    	   = Input::get('mesaj');
		$msg->save();
		
		$msgs = Message::all();
		return "ok";
	}
	
	/*		REVIEWS		*/
	public function showReviews()
	{
		$reviews = Review::all();	
		return View::make('admin.show_reviews');//->with('reviews',$reviews);
	}
	public function getReviewsAjax()
	{
		$reviews = Review::all();
		return $reviews;//return json
	}
	public function deletereviews($id)
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
	public function handleEditReviewsAjax()
	{
	    // Handle edit form submission.
        $review = Review::findOrFail(Input::get('id'));
        $review->mark       = Input::get('mark');
        $review->docName    = Input::get('docName');
		$review->rezumat    = Input::get('rezumat');
		$review->urilitate  = Input::get('utilitate');
		$review->save();
		
		$reviews = Review::all();
		return "ok";
	}
	
	/*		 TAGS		*/
	public function showTags()
	{
		$tags = Tag::all();
		return View::make('admin.show_tags');//->with('tags',$tags);
	}
	public function getTagsAjax()
	{
		$tags = Tag::all();
		return $tags;//return json
	}
	public function deletetags($id)
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
	public function handleEditTagsAjax()
	{
	    // Handle edit form submission.
        $tag = Tag::findOrFail(Input::get('id'));
        $tag->name          = Input::get('name');
        $tag->descriere     = Input::get('descriere');
		$tag->save();
		
		$tags = Tag::all();
		//return Redirect::to('admin/show_tags')->with('tags',$tags);
		return "ok";
	}
	
	/*		STATISTICS		*/
	/* Number of downloads per month */
	public function getNrDowns()
	{	
		$valori=array();
		for($i = 1; $i <= 12; $i++)
		{
			if( $i < 10 )
				$downs = DownloadedDocs::where('data','LIKE','%-0'.$i.'-%')->count();
			else
				$downs = DownloadedDocs::where('data','LIKE','%-'.$i.'-%')->count();
			if( $downs == null )
				array_push($valori,0);
			else 
				array_push($valori,$downs);
		}
		return $valori;
	}
	public function showGraph()
	{
		return View::make('admin.graphNrDownloads');
	}
	
	/*public function getCost()
	{
		
	}
	public function showGraph2()
	{
		
	}*/
	/* Number of jobs posted per day*/
	public function getNrJobs($luna,$an)
	{
		$jobs=Job::all(array('created_at'));
		$val = array();	
		
		if( $luna == 1 || $luna == 3 || $luna == 5 || $luna == 7 || $luna == 8 || $luna == 10 || $luna == 12 )
			$nrZile = 31;
		elseif ( $luna == 4 || $luna == 6 || $luna == 9 || $luna == 11 )
			$nrZile = 30;
		else
			$nrZile = 29;
		
		for( $i = 1; $i <= $nrZile; $i++ )
		{
			$data_cautata = Carbon::create($an,$luna,$i,0,0,0);	
			$nrJobs = 0;
			
			foreach( $jobs as $job )
			{
				if( $job->created_at->setTime(0,0,0)->diffInDays($data_cautata) == 0 )
					$nrJobs++;
			}
			array_push( $val,$nrJobs );
		}
		return $val;
	}
	/* Number of jobs posted per month*/
	public function getNrJobsPerMonth($an)
	{
		$jobs=Job::all(array('created_at'));
		$val = array();
		
		for( $i = 1; $i <=12; $i++ )
		{
			$data_cautata = Carbon::create($an,$i,1,0,0,0);
			$nrJobs = 0;
			
			foreach( $jobs as $job )
			{
				if( $job->created_at->month==$i && $job->created_at->year == $an )
					$nrJobs++;
			}
			array_push( $val,$nrJobs );
		}
		return $val;
	}
	/* Number of jobs posted per week*/
	/*public function getNrJobsPerWeek()
	{
		$jobs=Job::all(array('created_at'));
		$val = array();
		
		for( $i = 1; $i < 31; $i++ )
		{
			$data_cautata = Carbon::create(2014,5,1,0,0,0);
	
			foreach( $jobs as $job )
				if( $job->created_at->dayOfWeek == )
					$numberOrSmth = $job->created_at->dayOfWeek;
			array_push( $val,$numberOrSmth );
		}
		return $val;
	}*/
	/* view for jobs statistics */
	public function showGraphNrJobs()
	{
		return View::make('admin.show_nrJobs_peSaptLunaAn');
	}
}













