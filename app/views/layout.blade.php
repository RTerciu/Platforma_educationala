<html>
	<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/search.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css"   href="css/stil_search.css">
	
	

	
	</head>


    <body>
        <h1>Prima pagina Laravel<br>
		
		<a href="{{ URL::to('users') }}">Retea de Utilizatori</a> <a href="{{ URL::to('upload') }}">Incarca un fisier</a> <a href="{{ URL::to('logout') }}">Logout</a>
		<br><input placeholder="Cautati Documentul dorit..." type="text" id="search" autocomplete="off"></h1><hr>
		
		<ul id="results">
		</ul>
		<hr>
		
        @yield('content')
    </body>
</html>