$(document).ready(function() {  


	function search() {
		var query_value = $('input#search').val();
		
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "http://localhost/test_laravel/public/cautare_documente",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results").html(html);
				}
			});
		}return false;    
	}

	
		$("input#search").live("keyup", function(e) {
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