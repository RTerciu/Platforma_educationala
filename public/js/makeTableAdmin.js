function makeTable(url,id_table,url_delete)
{
	$.getJSON(url,function(){})
	.done(function(data)
	{
		console.log(data);
		$('#'+id_table).remove();
		$('.container').append('<table id = "' + id_table + '"class="table table-hover table-bordered table-striped" url_table="'+ url +'" >');
		
		$('#'+ id_table).append('<tr><td>Nr.Crt.</td></tr>');
		$.each(data[0],function(index,value)
		{
			$('#'+ id_table+ ' tr').append('<td>'+index+'</td>');
		
		});
		
		$('#'+ id_table+ ' tr').append('<td>Edit</td><td>Delete</td>');
		
		L=0;
		$.each(data,function(index,value){L++;});
		console.log(L);
		
		for(i=0;i<L;i++)
		{
			obj_id=data[i]['_id'];//id_id
			$('#'+id_table).append('<tr id="'+ i +'_'+ i +'"><td><input type="checkbox" class="checkboxClass" id_value="'+obj_id+'" id="checkbox_'+ i +'">'+ i +'</td>');
			$.each(data[i],function(key,value)
			{
				$("tr[id="+ i +"_"+ i +"]").append('<td><div id="'+i+'_'+key+'"'+' contenteditable="false">' + value + '</div></td>');
			});
			//console.log(obj_id);
			$("tr[id="+i+'_'+i+"]").append('<td><a href="'+'javascript:null'+'" class="'+'btn btn-default'+'" id="'+i+'"> Edit </a>'+'<a href="'+'javascript:null'+'" class="'+'btn btn-primary'+'"  id_value="'+ obj_id +'"  id="'+i+'_save'+'" style="'+'display:none'+'"> Save </a></td>');
			$("tr[id="+i+'_'+i+"]").append('<td><a href="'+'javascript:null'+'" id_value="'+ obj_id + '" id="'+i+'_'+i+'" class="btn btn-danger"> Delete</a></td>');
			$('#'+id_table).append('</tr>');
		}
		
		$('#'+id_table).append('</table>');	
	});
}