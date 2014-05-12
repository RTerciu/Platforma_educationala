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
$userEmail=$user['email'];

?>
<small><p class="text-right">Adaugat de <strong>{{$userEmail}} </strong> la data de <strong>{{$job->created_at}}</strong> <strong>{{$job->edited_at}}</strong>
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

<?php
if($job->id_user==Auth::user()->id)
    {echo 'Selectati un utilizatori dintre cei de mai jos pentru realiza jobul:<br><table class="table table-striped">';
		foreach($bidders as $bidder)
			{
			
			echo '<tr>';
			
				echo '<td>'.User::where('_id',$bidder['userID'])->first()['username'].'</td>';
				echo '<td>'.$bidder['created_at'].'</td>';
				//De generat functie la onclick...
				echo '<td><div id="button" class="btn btn-default" jobID="'.$job->_id.'" userID="'.$bidder['userID'].'" >Alege</div>';
			
			
			echo '</tr>';
			}
	
	
	echo '</table>';
	}
else echo 'blabla';

?>

<p>Au licitat la acest job urmatorii useri:</p>



@foreach($bidders as $bidder)

<?php  
$b=User::where('_id',$bidder['userID'])->first();
$bidderName=$b['email'];

?>
<strong>{{$bidderName}}</strong>

@endforeach

{{-- de apelat o functie din acest script--}}
<script src="{{asset('js/job_detail.js')}}"></script>

@stop