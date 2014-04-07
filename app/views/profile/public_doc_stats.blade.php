@extends('layout.public_profile_layout')

@section('profile')

<?php 


$docDown=DB::table('downloaded_docs')->where('userID',$user->_id)->get();
$docUp=Document::where('userID',$user->_id)->get();
$reviews=Review::where('userID',$user->_id)->get();

?>
<p><strong>Grafice pentru documentele astea + datele lor de down/up </strong></p>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-5"><strong> Downloadate </strong> <br>
@foreach($docDown as $doc)
		
		<p>{{$doc['docTitle']}} - {{$doc['data']}} </p>

@endforeach
</div>

<div class="col-md-5"> <strong> Uploadate </strong> <br>

@foreach($docUp as $doc)
		<p>{{$doc->title}} - {{$doc->created_at}}</p>

@endforeach

</div>

</div>

<p><strong>Note pentru Documente</strong></p>

@foreach($reviews as $review)
<?php 
$docReviewed=Document::find($review->docID)->title;

?>
		<p>{{$docReviewed}} - {{$review->mark}}</p>

@endforeach


	
@stop

