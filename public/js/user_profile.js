$(document).ready(function() {  

$("#catre").keyup(function()
{
var query=$('input#catre').val();
var link="usersBrief/"+query;

$.getJSON(link, function(data){
	var cod='<ul>';
	$.each(data,function(key,val)
	{
	cod=cod+"<li>"+data[key].username+"</li>";
	
	
	});
	cod=cod+"</ul>";
	$("#contacte").html(cod);
});




});

$("#send_message").click(function(){


var sub=$("#subiect").val();
var mes=$("#mesaj").val();
var user1=$("#userTo").val();
var user2=$("#userFrom").val();

var mesaj='';

if(!sub)
	mesaj+="Nu ati completat campul de subiect";
if(!mes)
	mesaj+="<br>Nu ati completat campul de mesaj";



var cod='<div class="alert alert-warning"><a href="javascript:$(\'.alert-warning\').toggle();" class="close" data-dismiss="alert">x</a>'+ mesaj+'</div';
var cod2='<div class="alert alert-success"><a href="javascript:$(\'.alert-success\').toggle();" class="close" data-dismiss="alert">x</a>';

if(mesaj)
	$("#form_errors").html(cod);
else
	{
	
	$.ajax({
				type: "POST",
				url: "http://localhost/Platforma_educationala/public/message/trimite",
				data: { subiect: sub , mesaj:mes, userTo:user1, userFrom:user2 },
				cache: false,
				success: function(html){
					$("#form_errors").html(cod2+"Ati trimis cu succes mesajul</div>");
				}
			});
	
	}



});

});