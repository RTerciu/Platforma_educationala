$(document).ready(function() {  


$("#second_step").css("display","none");
$("#third_step").css("display","none");
$("#fourth_step").css("display","none");


   //original field values
    var field_values = {
          //asociem id-ul inputului cu valoarea precompletata
            'username'  : 'username',
            'password'  : 'password',
            'cpassword' : 'password',
            'firstname'  : 'nume',
            'avatar'  : 'avatar',
            'email'  : 'email address'
    };

//Procesez click-ul pentru prima parte a inregistrarii

 $("#submit_first").click(function(){
 //cand apasam pe primul buton de pasul urmator, stergem toate clasele de 
 //marcaj al formularelor
 $('#first_step input').removeClass('has-success').removeClass('has-error');
 
 //preluam toate inputurile de tip text si password
 var fields = $('#first_step input[type=text], #first_step input[type=password]');
 //resetam numarul de valori
 var error = 0;
 
 //pentru fiecare camp
         fields.each(function(){
		 
		 //preluam valorile
            var value = $(this).val();
			//daca valorile completate nu au cel putin 5 caractere
			//aplicam clasa de eroare din bootstrap asupra inputului
			//si se "shake-uieste" inputul gresit
			
            if( value.length<6 || value==field_values[$(this).attr('id')] ) {
				id_elem=$(this).attr('id');
				id_elem="#div_"+id_elem;
				$(id_elem).removeClass('has-success').removeClass('has-error');
                $(id_elem).addClass('has-error');
				
               $(id_elem).effect("shake", { times:2 }, 500);
                //crestem nr de erori
                error++;
            } else {
			//daca inputul e corect le punem clasa de success
				id_elem=$(this).attr('id');
				id_elem="#div_"+id_elem;
				$(id_elem).removeClass('has-success').removeClass('has-error');
                $(id_elem).addClass('has-success');

			}
			
			
        }); 
		
		//daca nu avem erori
		if(!error) {
		//facem ultima verificare, ca campul de parola si confirmarea parolei 
		//sa se potriveasca
			if( $('#password').val() != $('#cpassword').val() ) {
             $('#first_step input[type=password]').each(function(){
						
						id_elem=$(this).attr('id');
						id_elem="#div_"+id_elem;	
			 
			 //daca nu au, aplicam clasele de eroare si punem efectul de "shake"
                        $(id_elem).removeClass('has-success').addClass('has-error');
                        $(this).effect("shake", { times:2 }, 500);
                    });
                    
                    return false;
            } else {   
			
				//daca toate campurile sunt corecte
                //updatam bara de progres de sus
                $('#progress_text').html('O treime gata!');
                $('#progress').css('width','33%');
                
                //slide steps
				//punem div-ul cu primul pass sa se slide-uiasca spre dreapta si cand se 
				//termina animatia, afisam div-ul cu al doilea pas
                $('#first_step').toggle("slide",{direction:"right"},function(){ 
					
					$('#second_step').css("display","block");
          }
		  );
				
                //$('#second_step').toggle("slide",{direction:"right"});     
                   }               
        } else return false;
 
 
 
 });

/*

Verificam inputurile la click-ul pe al doilea buton de pasul urmator, 
si aplicam clasele de has-error sau has-success daca ele sunt valide
 E-mail-ul este verificat prin regex
 Verificam daca un fisier a fost uploadat daca valoarea sa este diferita de 0
 
 Updatam bara de progres daca totul este corect, si slide-uim div-ul acesta spre dreapta
 si il afisam pe al treilea 

*/
 
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
		if($("input#avatar").val())
			{
			$("#div_avatar").removeClass('has-success').removeClass('has-error');
			$("#div_avatar").addClass('has-success');
			}
		else 
			{
			$("#div_avatar").removeClass('has-success').removeClass('has-error');
			$("#div_avatar").addClass('has-error');
			$("#div_avatar").effect("shake", { times:2 }, 500);
			error++;
			}
		
		
		
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

 /*
 
 Al treilea submit nu verifica daca inputurile sunt corecte, pentru ca ele tot timpul ele sunt corecte
 deoarece sunt select-uri cu optiuni predefinite.
 
 Updatam progress bar-ul si cream un array cu toate inputurile pe care le afisam intr-un tabel.
 
 Ascundem al treilea pas si il afisam pe al patrulea
 
 
 
 
 */
 
 $('#submit_third').click(function(){
        //update progress bar
        $('#progress_text').html('GATA!');
        $('#progress').css('width','100%');

        //prepare the fourth step
        var fields = new Array(
            $('#username').val(),
            $('#email').val(),
            $('#firstname').val(),
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
/*

Al patrulea pas nu mai este necesar, deaorece butonul de send este un buton submit care creaza actiunea
de submit al formului.

*/

	
	
    $('#submit_fourth').click(function(){
	var url=$("#link_signup").val();
	//var ftype=$("input#avatar")[0].files[0].type;
	//console.log($("input#avatar")[0].files[0]);
	//var formData = new FormData($('form')[0]);
	/*$.ajax({
				type: "POST",
				url: url,
				data: { email: $('#email').val() , username:$('#username').val(), avatar:$("input#avatar")[0].files[0], password:$('#password').val() },
				cache: false,

			});
	*/
	

	//$('#form_register').ajaxSubmit();
	
    });



});