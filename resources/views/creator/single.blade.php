@include('partials._search')	

			<div id="company" class="body">
				<div class="container">

					<div class="overall-review">
						<div class="row">
							<div class="col-md-8">
								<section>
									<div class="row">
										<div class="col-md-8">
											<h4>{{ $post->title }}</h4>
                                            <hr>
                                            <br>
											<p>{!! $post->body !!}</p>
										</div>
										<div class="col-md-4">
											
											<h4>Contact</h4>
											<hr>
											<p>Mobile: {{$post->phone_number}}</p>
										</div>
                                        
									</div>
								</section>

								<section>
									<h4>Demo Video</h4>
                                    <hr>
									<div class="row">
                                    {!! $post->youtube !!}
									</div>
								</section>
							</div>
							<div class="col-md-4">
								<section class="map">
									<img src="{{url('uploads/'.$post->image)}}" alt="" style="max-width: 100%;">
                                    <br><br>
                                    £ {{ $post->price }}
                                    <br><br>
                                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8">
                                       
                                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                        <input type="hidden" name="orderID" value="{{ $post->id }}">
                                        <input type="hidden" name="amount" value="{{ $post->price }}">

                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['user_id' => Auth::user()->id,]) }}" >
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                         {{ csrf_field() }}
                                        <button type="submit"  class="btn btn-block btn-primary" value="Buy">Buy Now</button>
                                    </form>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>

			@include('partials._other')