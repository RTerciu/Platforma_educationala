$(document).ready(function() {  


$("#second_step").css("display","none");
$("#third_step").css("display","none");
$("#fourth_step").css("display","none");


   //original field values
    var field_values = {
          
            'username'  : 'username',
            'password'  : 'password',
            'cpassword' : 'password',
            'firstname'  : 'first name',
            'lastname'  : 'last name',
            'email'  : 'email address'
    };

//Procesez click-ul pentru prima parte a inregistrarii

 $("input#submit_first").click(function(){
 
 $('#first_step input').removeClass('has-success').removeClass('has-error');
 
 var fields = $('#first_step input[type=text], #first_step input[type=password]');
 var error = 0;
 
 
         fields.each(function(){
            var value = $(this).val();
			//alert(value);
			
            if( value.length<6 || value==field_values[$(this).attr('id')] ) {
				id_elem=$(this).attr('id');
				id_elem="#div_"+id_elem;
				$(id_elem).removeClass('has-success').removeClass('has-error');
                $(id_elem).addClass('has-error');
				
               $(id_elem).effect("shake", { times:2 }, 500);
                
                error++;
            } else {
			
				id_elem=$(this).attr('id');
				id_elem="#div_"+id_elem;
				$(id_elem).removeClass('has-success').removeClass('has-error');
                $(id_elem).addClass('has-success');

			}
			
			
        }); 
		if(!error) {
			if( $('#password').val() != $('#cpassword').val() ) {
             $('#first_step input[type=password]').each(function(){
						
						id_elem=$(this).attr('id');
						id_elem="#div_"+id_elem;	
			 
			 
                        $(id_elem).removeClass('has-success').addClass('has-error');
                        $(this).effect("shake", { times:2 }, 500);
                    });
                    
                    return false;
            } else {   
                //update progress bar
                $('#progress_text').html('O treime gata!');
                $('#progress').css('width','33%');
                
                //slide steps
				
                $('#first_step').toggle("slide",{direction:"right"},function(){ 
					
					$('#second_step').css("display","block");
          }
		  );
				
                //$('#second_step').toggle("slide",{direction:"right"});     
                   }               
        } else return false;
 
 
 
 });


 
   $('#submit_second').click(function(){
        //remove classes
        $('#second_step input').removeClass('has-success').removeClass('has-error');

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
        var fields = $('#second_step input[type=text]');
        var error = 0;
        fields.each(function(){
            var value = $(this).val();
            if( value.length<1 || value==field_values[$(this).attr('id')] || ( $(this).attr('id')=='email' && !emailPattern.test(value) ) ) {
                
				id_elem=$(this).attr('id');
				id_elem="#div_"+id_elem;
				
				$(id_elem).removeClass('has-success').removeClass('has-error');
				$(id_elem).addClass('has-error');
                $(id_elem).effect("shake", { times:2 }, 500);
                
                error++;
            } else {
				id_elem=$(this).attr('id');
				id_elem="#div_"+id_elem;
				$(id_elem).removeClass('has-success').removeClass('has-error');
                $(id_elem).addClass('has-success');
            }
        });

        if(!error) {
                //update progress bar
                $('#progress_text').html('Doua treimi gata!');
                $('#progress').css('width','66%');
                
                //slide steps
				
				    $('#second_step').toggle("slide",{direction:"right"},function(){ 
					
					$('#third_step').css("display","block");
          }
		  );
				
    
        } else return false;

    });

 
 
 $('#submit_third').click(function(){
        //update progress bar
        $('#progress_text').html('GATA!');
        $('#progress').css('width','100%');

        //prepare the fourth step
        var fields = new Array(
            $('#username').val(),
            $('#password').val(),
            $('#email').val(),
            $('#firstname').val() + ' ' + $('#lastname').val(),
            $('#age').val(),
            $('#gender').val(),
            $('#country').val()                       
        );
        var tr = $('#fourth_step tr');
        tr.each(function(){
            //alert( fields[$(this).index()] )
            $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
        });
                
        //slide steps
			$('#third_step').toggle("slide",{direction:"right"},function(){ 
					
					$('#fourth_step').css("display","block");
          });           
    });


    $('#submit_fourth').click(function(){
        //send information to server
        alert('Data sent');
    });



});