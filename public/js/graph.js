function nrDownGraph(url)
{
	/*		html for years	*/
	$('#graphContainerBasic1').append('<select name="years" id="years"><option disabled selected>Select the year</option><option id="year">2014</option></select>');
	/*		html showGraph button	*/
	$('#graphContainerBasic1').append('<a href="javascript:null" id="showGraph" class="btn btn-default" >Show Graph</a>');
	
	function drawGraph(year)
	{
		$.getJSON(url2,function(){})
		.done(function(data)
		{
			bla=data;
			//console.log(bla);
			titlu = $('#graphContainer').attr('titlu');
			subtitlu = $('#graphContainer').attr('subtitlu');
			yAxisTitlu = $('#graphContainer').attr('yAxisTitlu');
			//console.log("yAxisTitlu: ",yAxisTitlu);

			$('#graphContainer').highcharts
			({
				title:	 {	text: titlu,
							x: -20},
				subtitle:{  text: subtitlu,
							x: -20},
				xAxis:	 {	categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
				
				yAxis:	 {	title: { text: yAxisTitlu},
							plotLines: [{value: 0, width: 1, color: '#808080'}]
						 },
				tooltip: {  valueSuffix: ''},
				
				legend:  {  layout: 'vertical',
							align: 'right',
							verticalAlign: 'middle',
							borderWidth: 0},
				
				series:  [  { name:'2014',
							  data: bla}]
			});
		});
	}
	
	/*	draw default graph for current month and year */
	default_year = new Date();
	default_year = default_year.getFullYear();
	url2= url + '/' + default_year;
	//console.log(url2);	
	drawGraph(default_year);
	
	/* draw graph after selecting year and month on button click */
	$('#showGraph').click(function()
	{
		year = $('#years').find('option:selected').html();/*get selected year from options*/
		url2= url + '/' + year;/*create new url for getJson*/
		//console.log(url2);
		drawGraph(year);	
	});
}	