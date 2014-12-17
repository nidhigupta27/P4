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

       
	   <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	   <link rel='stylesheet' href='/CSS/recipe.css' type='text/css'>

	@yield('head')


</head>
<body>
	@if(Session::get('flash_message'))
		<div class='flash_message'>{{ Session::get('flash_message') }}</div>
	@endif

  @if(!Request::is('password/reset/*'))
	<ul class="nav nav-pills navig" role="tablist">
		  @if(Auth::check())
		        <li class="navbar-right"><a href='/logout'>Log out {{ Auth::user()->name; }}</a></li>
          @else 
                <li><a href='/signup'>Signup</a></li>
                <li><a href='/login'>Login</a></li>
	      @endif
	</ul>
 @endif

	@yield('content')

	@yield('/body')
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  

</body>
</html>