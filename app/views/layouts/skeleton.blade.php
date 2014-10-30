<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Flashfight - Boulderwettkampf App</title>

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/animate.min.css') }}
	{{ HTML::style('css/main.css') }}
</head>
<body>

	@include('navs.primary')
	
	@yield('skeleton.content')

	<!-- JS-SCRIPTS -->
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/nav.js') }}
</body>
</html>