$(document).ready(function(){

$("input#mark0" ).change(function() {
  
var valoare=$("input#mark0").val();
var cod=" Ati stabilit nota review-lui la <b>"+valoare+"<b> din 100";

$("#mark_label0").html(cod);
$("#button0").removeAttr('disabled');
});


$("input#mark1" ).change(function() {
  
var valoare=$("input#mark1").val();
var cod=" Ati stabilit nota review-lui la <b>"+valoare+"<b> din 100";

$("#mark_label1").html(cod);
$("#button1").removeAttr('disabled');
});


$("input#mark2" ).change(function() {
  
var valoare=$("input#mark2").val();
var cod=" Ati stabilit nota review-lui la <b>"+valoare+"<b> din 100";

$("#mark_label2").html(cod);
$("#button2").removeAttr('disabled');
});



});