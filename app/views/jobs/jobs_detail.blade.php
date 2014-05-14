@extends('layout.jobs_layout')



@section('jobs_content')

<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-info">  
	<a href="javascript:$('.alert-info').toggle();" class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif



<h2>{{$job->titlu}}

<?php $url='jobs/'.$job->titlu.'/'.Auth::user()->id; ?>
<a href="{{URL::to($url)}}" class="btn btn-primary">Inscrie-te la acest Job!</a></h2>

<hr>



<?php 

$user=DB::table('users')->where('_id',$job->id_user)->first();
$username=$user['username'];

?>
<small><p class="text-right">Adaugat de <strong><a href="{{url('/profile/'.$username)}}">{{$username}}</a></strong> la data de <strong>{{$job->created_at}}</strong> <strong>{{$job->edited_at}}</strong>
<br>
Tag-uri 
@foreach($job->tags as $tag)
<strong>
<?php
$t=Tag::find($tag);
echo $t->getHTMLTagJob();
?>
</strong>
@endforeach

</p></small>

<p class="text-right">Suma oferita <strong>{{$job->pret}}</strong> si trebuie realizat pana pe <strong> {{$job->deadline}} </strong></p><hr>

<h3>Descriere:</h3><p>{{$job->descriere}}</p><hr>



@if($job->assignedTo!=="0")
	<p class="bg-success text-center"><br>A fost ales sa realizeze acest proiect utilizatorul
	<?php
	$user=User::find($job->assignedTo);
	?>
	<strong><a href="{{url('/profile/'.$user->username)}}">{{$user->username}}</a></strong>
	
	
	<br><br></p>
@else 

<p>Au licitat la acest job urmatorii useri:</p>



@foreach($bidders as $bidder)

<?php  
$b=User::where('_id',$bidder['userID'])->first();
$bidderName=$b['email'];

?>
<strong>{{$bidderName}}</strong>
<hr>
@endforeach



@endif
<?php
if($job->id_user==Auth::user()->id && $job->assignedTo=="0"&&isset($bidders[0]))
    {echo '<h3>Selectati un utilizator dintre cei de mai jos pentru realiza jobul</h3><p id="alege_feedback"></p><br><table class="table table-striped">';
		foreach($bidders as $bidder)
			{
			
			echo '<tr>';
				$username=User::where('_id',$bidder['userID'])->first()['username'];
				echo '<td><strong><a href="'.url('/profile/'.$username).'">'.$username.'</a></strong></td>';
				echo '<td><span class="glyphicon glyphicon-time">'.$bidder['created_at'].'</span></td>';
				//De generat functie la onclick...
				echo '<td><div class="text-right"><div id="'.$bidder['_id'].'" class="btn btn-danger" jobID="'.$job->_id.'" userID="'.$bidder['userID'].'" onClick="alege(this.id);" >Alege</div></div></td>';
			
			
			echo '</tr>';
			}
	
	
	echo '</table>';
	}


?>


{{-- de apelat o functie din acest script--}}
<script src="{{asset('js/job_detail.js')}}"></script>

@stop