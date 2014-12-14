<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Dinner Recipe')</title>
	<meta charset='utf-8'>
    
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

       <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>

       <link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>

       <link href='http://fonts.googleapis.com/css?family=Volkhov:400,700italic' rel='stylesheet' type='text/css'>

       <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

       <link rel="stylesheet" href="CSS/developersBestFriend.css">
       
	   <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	   <link rel='stylesheet' href='/css/parking.css' type='text/css'>

	@yield('head')


</head>
<body>

	

	<!--<a href='/'><img class='logo' src='/images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'></a> --> 
	<ul class="nav nav-tabs navig" role="tablist">
		  @if(Auth::check())
		       <li><a href='/my_recipe'>My Recipe</a></li>
               <li><a href='/logout'>Log out {{ Auth::user()->name; }}</a></li>
          @else 
                <li><a href='/signup'>Signup</a></li>
                <li><a href='/login'>Login</a></li>
	      @endif
	</ul>
	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif
	<!--<a href='https://github.com/nidhigupta27/P4'>View on Github</a> -->

	@yield('content')

	@yield('/body')

</body>
</html>