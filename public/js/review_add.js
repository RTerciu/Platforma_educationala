$(document).ready(function(){

$( "input#mark" ).change(function() {
 var valoare=$("input#mark").val();
 //console.log(valoare);
 
 var cod=" Ati stabilit nota proiectului la <big><b>"+valoare+"<b></big> din 100 de puncte";
 
 $("#mark_label").html(cod);
 
});







});


function functie()
{



}