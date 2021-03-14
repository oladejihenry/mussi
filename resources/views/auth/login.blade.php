<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/star-rating-svg.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="navigate()">&times;</a>
			<div class="links">
				<a href="#">About</a>
				<a href="#">Services</a>
				<a href="#">Clients</a>
				<a href="#">Contact</a>
			</div>
		</div>
        <div id="content">
			<nav class="general-nav">
				<div class="row">
					<div class="col-1">
						<img class="float-left logo" src="img/logo3.png" alt="Kareer Circle">
					</div>

					<div class="col-10" style="padding: 0 45px;">
						
					</div>

					<div class="col-1">
						<i class="fa fa-2x fa-bars float-right" onclick="navigate()"></i>
					</div>
				</div>
			</nav>
            <div id="company" class="body">
				<div class="container">

					<div class="overall-review">
						<div class="row">
							<div class="col-md-8">
								<section class="reviews">
									<div class="container">
										<div class="row review">
											<div>
												<div class="row no-padding">
													<div class="col-12 no-padding">
														<span class="float-right ago">12 September, 2017</span>
													</div>
													
												</div>
												<br>
												<div class="row">
													<h5 class="col-12">Front End Developer</h5>
													<p class="col-12"><i class="fa fa-map-marker"></i> Lagos, Nigeria</p>
													<br>
													<div class="col-12">
														<h6>Aptitude Test</h6>
														<p>The test is a pure GMAT test. If you use GMAT text around and you study it well you will pass the test. It is once in a lifetime so keep that in mind as you prepare. I did not pass it because my preparation was weak.</p>
													</div>
													<div class="col-12 no-padding row">
														<p class="col-md-6">
															<b>Difficulty:</b> <i class="fa fa-circle"></i> Medium
														</p>
														<p class="col-md-6">
															<b>Accepted:</b> <i class="fa fa-circle"></i> Yes but did not work
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-4">
								<section class="map">
									<iframe src="https://www.google.com/maps/embed/v1/place?q=Ikeja Electric Lagos
									  &zoom=14
									  &attribution_source=Google+Maps+Embed+API
									  &attribution_web_url=https://developers.google.com/maps/documentation/embed/
									  &key=AIzaSyC0Ij-LcuESlh-ZPKIHlV3t_AnuNBcS0zI" allowfullscreen>
									</iframe>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{asset('js/jquery.star-rating-svg.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
		<script src="{{asset('js/circle-progress.js')}}"></script>
		<script>
		    $(document).ready(function(){
		      $("#links").sticky({ topSpacing: 0, center:true,});
		    });
		    $('.circle').circleProgress({
			    value: 0.75,
			    fill: {color: "#39bee9"}
			  }).on('circle-animation-progress', function(event, progress, stepValue) {
			    $(this).find('strong').text(stepValue.toFixed(2).substr(1)*100 +'%' );
			});
		</script>
		<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	</body>
</html>