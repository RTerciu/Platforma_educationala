function editable_table(id_table,array_values,url_delete,url_makeTable)
{
	/* edit button */
	$('#' + id_table + ' td .btn-default').click(function()
	{

		id_button=this.id;
		console.log(id_button);	
		$.each(array_values,function(key,value)
		{
			$('#' + id_button + '_' + value).attr("contenteditable","true");
			$('#' + id_button + '_' + value).css("border","1px solid blue");
		});
		$('#' + id_button).css("display","none");
		$('#' + id_button + '_save').css("display","inline-block");
	
	});	
	/* save button */
	$('.btn-primary').click(function()
	{
		var string_data={ id : $(this).attr('id_value') };

		$.each(array_values,function(key,value)
		{
			string_data[value] = $('#'+id_button+'_'+value).html();
		});
			
		$.ajax(
		{
			type: "POST",
			url: "http://localhost/Platforma_educationala/public/admin/edit_"+id_table+"_ajax",
			data: string_data,
			dataType: 'text',
			cache: false
		});
			
		$.each(array_values,function(key,value)
		{
			$('#' + id_button + '_' + value).attr("contenteditable","false");
			$('#' + id_button + '_' + value).css("border","none");
		});
	
		$('#' + id_button).css("display","inline-block");
		$('#' + id_button + '_save').css("display","none");
	});
	// individual delete button
	$('.btn-danger').click(function()
	{
		var string_data = $(this).attr('id_value');
		console.log(string_data);
		
		$.ajax(
		{
			type: "POST",
			url: "http://localhost/Platforma_educationala/public/admin/delete_"+id_table+"/"+string_data,
			dataType: 'text',
			cache: false
		});
		
		id_delete_button=$(this).attr('id');
		console.log(id_delete_button);
		$('#' + id_delete_button).css("display","none");
		// recreate table
		makeTable(url_makeTable,id_table,url_delete);
	});
	
	$(".checkboxClass").click(function()
	{
		$("#multiple_delete").attr("disabled",false);
		$("#multiple_delete").removeClass("btn-default");
		$("#multiple_delete").addClass("btn-danger");
		
		/*var c = this.checked ? '#f00' : '#09f';
		$("#1_1").css("color",c);*/
		
	});
	
	$("#multiple_delete").click(function()
	{
		$(".checkboxClass").each(function()
		{
			if(this.checked) 
			{
				var string_data = $(this).attr('id_value');
				console.log(string_data);
				
				$.ajax(
				{
					type: "POST",
					url: "http://localhost/Platforma_educationala/public/admin/delete_"+id_table+"/"+string_data,
					dataType: 'text',
					cache: false
				});
			} 
			else 
			{
				console.log("BuuHu!");
			}
		});
		makeTable(url_makeTable,id_table,url_delete);
	});
	
	
};