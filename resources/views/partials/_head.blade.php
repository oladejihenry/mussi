<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>{{$title}}</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/star-rating-svg.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="navigate()">&times;</a>
			<div class="links">
				@guest
                <a href="/login">Login</a>
                <a href="/register">Register</a>
				
				@endguest
				@auth
				<a href="/">Welcome, {{ Auth::user()->username }}</a>
				
				
				<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
				{{ __('Logout') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
				@csrf
				</form>
				
				@endauth
			</div>
		</div>
        <div id="content">
        <section id="splash">
            <nav>
                <div>
                    <h4><a href="/" style="text-decoration: none;"> Musigent</a></h4>
                    
                    <i class="fa fa-2x fa-bars float-right" onclick="navigate()"></i>
                </div>
            </nav>
            