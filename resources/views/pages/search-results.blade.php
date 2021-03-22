@include('partials._search')
			

			<div id="company" class="body">
				<div class="container">
                    
					<div class="overall-review">
                    @foreach($search as $search)
						<div class="row">
							<div class="col-md-8">
								<section>
									<div class="row">
                                        <a href="{{ route('posts.show', ['category'=>strtolower($search->category()->first()->name), 'post'=>$search->slug]) }}">
										<div class="col-md-8">
											<h4>{{ $search->title }}</h4>
                                            <hr>
                                            <br>
										
										</div>
                                        </a>
										<div class="col-md-4">
											
											<h4>Contact</h4>
											<hr>
											<p>Mobile: {{$search->phone_number}}</p>
										</div>
                                        
									</div>
								</section>

								
							</div>
							
						</div>
                        @endforeach
					</div>
                    
				</div>
			</div>

			@include('partials._other')