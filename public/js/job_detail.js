
function alege(idButton)
{


var userID=$("#"+idButton).attr('userID');
var jobID =$("#"+idButton).attr('jobID');

var url=userID+'/assigned/'+jobID;

$.ajax({
				type: "GET",
				url: url,
				cache: false,
				success: function(html){
					$("#alege_feedback").html(html);

				}
			});

}