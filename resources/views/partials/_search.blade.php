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
                <a href="/">Home</a>
				
				
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
			<nav class="general-nav">
				<div class="row">
					<div class="col-1">
                    <h4 style="padding-top: 9px;"><a href="/" style="text-decoration: none; color:white;"> Musigent</a></h4>
					</div>

					<div class="col-10" style="padding: 0 45px;">
						<form class="row" method="GET" action="{{ route('searchpost') }}">
						  <div class="form-group col-10 no-padding">
						    <input type="text" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search by post">
						  </div>
						  <div class="form-group col-2 no-padding">
						  	<button type="submit" class=" btn btn-block btn-primary"><i class="fa fa-search"></i></button>
						  </div>
						</form>
					</div>

					<div class="col-1">
						<i class="fa fa-2x fa-bars float-right" onclick="navigate()"></i>
					</div>
				</div>
			</nav>