
function jobsGraph(url)
{
	$('#graphContainerBasic').append('<label>An-Luna-Zi </label></br>');
	/*		html for years	*/
	$('#graphContainerBasic').append('<select name="years" id="years"><option disabled selected>Select the year</option><option id="year">2014</option></select>');
	/*		html for months	*/
	$('#graphContainerBasic').append('<select name="months" id="months"><option disabled selected>Select month</option>');
	for( i = 1; i <= 12 ; i++ )
	{
		if( i < 10 )
			$('#months').append('<option id="month" >'+ i +'</option>');
		else
			$('#months').append('<option id="month" >'+ i +'</option>');
	}
	$('#graphContainerBasic').append('</select>');
	/*		html showGraph button	*/
	$('#graphContainerBasic').append('<a href="javascript:null" id="showGraph" class="btn btn-default" >Show Graph</a>');
	
	function drawGraph(year,month)
	{
		$.getJSON(url2,function(){})
		.done(function(data)
		{
			bla = data;
			titlu = $('#graphContainer1').attr('titlu');
			subtitlu = $('#graphContainer1').attr('subtitlu');
			$('#graphContainer1').highcharts
			({
				//chart:   {  type: 'spline' },
				
				title:	 {	text: titlu,
							x: -20},
				subtitle:{  text: subtitlu,
							x: -20},
				xAxis:	 {
							type: 'datetime',
							dateTimeLabelFormats:{day: '%e'},
							title: {
								text: 'Date'
							},
							//allowDecimals: false
						},
				
				yAxis:	 {	title: { text: 'Nr. Downloads'},
							plotLines: [{value: 0, width: 1, color: '#808080'}]
						 },
				tooltip: {  valueSuffix: ''},
				
				legend:  {  layout: 'vertical',
							align: 'right',
							verticalAlign: 'middle',
							borderWidth: 0},
				
				series:  [  {	name: 'Number of jobs',
								data: bla,
								pointStart: Date.UTC(year,month-1,1),
								pointInterval: 24 * 3600 * 1000 //one day
							}]
			});
		});
	}
	
	/*	draw default graph for current month and year */
	default_month =  new Date();
	default_month = default_month.getMonth()+1;
	default_year = new Date();
	default_year = default_year.getFullYear();
	url2= url + '/' + default_month + '/' + default_year; 
	drawGraph(default_year,default_month);
	
	/* draw graph after selecting year and month on button click */
	$('#showGraph').click(function()
	{
		month = $('#months').find('option:selected').html();/*get selected month from options*/
		year = $('#years').find('option:selected').html();/*get selected year from options*/
		url2= url + '/' + month + '/' + year;/*create new url for getJson*/
		
		drawGraph(year,month);	
	});

}
