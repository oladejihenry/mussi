<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							&copy Musigent. All rights reserved.
						</div>
					</div>
				</div>
			</footer>
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