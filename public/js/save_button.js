function editable_table(id_table,array_values)
{
	$('#' + id_table + ' td .btn-default').click(function()
	{

		id_button=this.id;
			
		$.each(array_values,function(key,value)
		{
			$('#' + id_button + '_' + value).attr("contenteditable","true");		
		});
		$('#' + id_button).css("display","none");
		$('#' + id_button + '_save').css("display","inline-block");
	
	});	
	
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
		});
	
		$('#' + id_button).css("display","inline-block");
		$('#' + id_button + '_save').css("display","none");
	});
	
};