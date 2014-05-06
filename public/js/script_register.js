$(document).ready(function() {  





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
                $('#first_step').toggle("slide",{direction:"right"});
                //$('#second_step').toggle("slide",{direction:"right"});     
                   }               
        } else return false;
 
 
 
 });







});