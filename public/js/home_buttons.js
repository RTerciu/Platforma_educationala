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