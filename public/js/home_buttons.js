
/*Functia care trimite un GET catre cele 2 rute care intorc
rezultate ale cautari conform query-ului din campul de search
*/
function search() 
{
	var query_value = $('input#search1').val();
	var link1="search/documents/"+query_value;
	var link2="search/joburi/"+query_value;
	if(query_value !== ''){
		$.ajax({
			type: "GET",
			url: link1,
			cache: false,
			success: function(html){
				$("div#doc_results").html(html);
				$('html','body').animate({
					scrollTop: $("#doc_results").offset().top},2000);
				console.log($("#doc_results").offset().top);
			}
		});
		
		
		$.ajax({
			type: "GET",
			url: link2,
			cache: false,
			success: function(html){
				$("div#job_results").html(html);
				$('html','body').animate({
					scrollTop: $("#job_results").offset().top},2000);
				console.log($("#job_results").offset().top);
			}
		});
		
		
		
		
	}return false;    
}

/*
Functia care realizeaza autocomplete-ul pentru tag-uri in functie de 
id-ul formului care ii este furnizat

Formular-ul trebuie sa contina:
* input cu id inserted_tags
* input cu id tags 
* input-hidden cu id tags_input


*/


		function autoCompleteTags(form_id,link)
		{
			$(form_id).submit(function()
			{		
				tags = '';
			
				$('#inserted_tags span').each(function(index)
				{
					if($(this).attr('id'))
					{
						tags = tags + $(this).attr('id') + ';';
					}
				});
				
				$('#tags_input').val(tags);
				
				//alert($('#tags_input').val());
			});
		
			var availableTags = [];
			
			$.getJSON(link, function(data)
			{			
				$.each(data, function(key,val)
				{
					availableTags[key] = new Object();
					availableTags[key].descriere = data[key].descriere;
					availableTags[key].label = data[key].name;
					availableTags[key].id = data[key]._id;
				});
			});
		
			$('#tags').autocomplete({
				appendTo: '#results',
				source:availableTags,
				select: function(event,ui)
				{
					selected_value = ui.item.value;
					
					var selected_tag = $.grep(availableTags,function(data)
					{
						return data.label == selected_value;
					});

					message = "<span id='"+selected_tag[0].id+"' onclick='$(this).remove();' class='label label-info'>" + selected_value + "<span class='close-button'> &times; </span></span>";				
					
					if($('#inserted_tags').css('display') == 'none')
					{
						$('#inserted_tags').css('display','block');
					}
					
					$('#inserted_tags').append(message);
					
					$('#tags').val('');
					
					return false;
				}
			});
		}
		
		function search(link)
		{			
			var json_results = $.Deferred();
		
			$.getJSON(link,function()
			{
			})
			.done(function(data)
			{
				json_results.resolve(
				{
					data:data
				});
			});			
			return json_results;
		}
		
		
		





$(document).ready(function(){


		$("div#post_job").click(function(){
 		document.location.href='job/create';
 			
 		});
	
	
		$("input#search1").on("keyup", function(e) {
		// Set Timeout
		
			
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			//$("ul#results").fadeOut();
			//$('h4#results-text').fadeOut();
		}else{
			//$("ul#results").fadeIn();
			//$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});
  
  
  
  
  
  
  
});