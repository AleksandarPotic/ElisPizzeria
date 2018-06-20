<!DOCTYPE html>
<html>
<head lang="en">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="" />
    <meta name="descripton" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="robots" content="noindex" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="format-detection" content="telephone = no" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="icon" href="{{ asset('user/assets/images/logic.png') }}" type="image/x-ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/home.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/menuu.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/category-item.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/wings.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/online-ordering.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/footer.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/specials.css') }}">		
</head>
<body>

	@include('user.layout.header')

    @section('body-part')
    @show
	
	@include('user.layout.footer')
    
</body>
</html>