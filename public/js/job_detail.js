
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
					if(html=="ok")
						window.location.reload(true);
					else
					$("#alege_feedback").html('<div class="alert alert-warning"><a href="javascript:$(\'.alert-warning\').toggle();" class="close" data-dismiss="alert">x</a>'+ html+'</div');

				}
			});

}