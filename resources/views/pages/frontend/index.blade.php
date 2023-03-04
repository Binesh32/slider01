@extends('master');

@section('content');

<section>
			<div class="block no-padding">
				<div class="row">
					<div class="col-md-12 column">
						<div class="tp-banner-container">
							<div class="tp-banner" >
								<ul>

									@foreach($data as $val)
									<li class="text-center" data-transition="slideleft cube-horizontal"  data-masterspeed="500">
										<img src="assets/images/slide-1.jpg"  alt="">
										<div class="tp-caption  slide-big-text skewfromrightshort" data-x="center" data-y="170" data-speed="500" data-start="1000" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="font-size:50px;"></div>
										<div class="tp-caption slide-big-text skewfromrightshort" data-x="center" data-y="240" data-speed="500" data-start="1600" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="font-size:50px;">{{ $val->name }}</div>
										<a href="#" class="tp-caption slide-btn" data-x="center" data-y="410" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" style="font-size:12px; padding:15px 30px; top: 410px !important;">READ ABOUT US</a>
									</li>
									@endforeach

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section>
			<div class="block half-gray overlap-container">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="fancy-search-tabs">
								<div class="col-md-3">
									<ul class="nav nav-tabs">
										<li>
											<a href="#find-hotel" data-toggle="tab">
												<div class="tab-name">
													<i class="fa fa-building"></i>
													<span><strong>Hotels</strong></span>
												</div>
											</a>
										</li>
										<li>
											<a class="active" href="#find-flight" data-toggle="tab">
												<div class="tab-name">
													<i class="fa fa-search"></i>
													<span><strong>Flights</strong></span>
												</div>
											</a>
										</li>
										<li>
											<a href="#search-tour" data-toggle="tab">
												<div class="tab-name">
													<i class="fa fa-plane"></i>
													<span><strong>Tours</strong></span>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-md-9">
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="find-hotel">
											<form>
												<div class="row">
													<div class="col-md-3">
														<label>Leaving From</label>
														<div class="field">
															<select class="select">
																<option>Dubai</option>
																<option>London</option>
																<option>Sydney</option>
																<option>Newyork</option>
																<option>Capetown</option>
																<option>Singapore</option>
																<option>Sharjah</option>
																<option>Islamabad</option>
																<option>Toronto</option>
																<option>Paris</option>
																<option>Delhi</option>
																<option>Colombo</option>
																<option>Auckland</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Going To</label>
														<div class="field">
															<select class="select">
																<option>Dubai</option>
																<option>London</option>
																<option>Sydney</option>
																<option>Newyork</option>
																<option>Capetown</option>
																<option>Singapore</option>
																<option>Sharjah</option>
																<option>Islamabad</option>
																<option>Toronto</option>
																<option>Paris</option>
																<option>Delhi</option>
																<option>Colombo</option>
																<option>Auckland</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Departure Date</label>
														<div class="field">
															<input class="popupDatepicker" type="text" placeholder="Select Date">
															<img class="field-icon" src="assets/images/calendar.png" alt="" />
														</div>
													</div>
													<div class="col-md-3">
														<div class="check-radio">
															<input type="radio" name="a" class="styled" />
															<span>One-way Flight</span>
														</div>
													</div>
													<div class="col-md-3">
														<label>Return Date</label>
														<div class="field">
															<input class="popupDatepicker" type="text" placeholder="Select Date">
															<img class="field-icon" src="assets/images/calendar.png" alt="" />
														</div>
													</div>
													<div class="col-md-2">
														<label>Students</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-2">
														<label>Under 26</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-2">
														<label>Adult 26+</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<button class="book-now" type="submit">Search Now</button>
													</div>
												</div>
											</form><!-- Tab Form -->
										</div>
										<div role="tabpanel" class="tab-pane fade" id="find-flight">
											<form action="https://html.webinane.com/hotel-room/all-flights.html">
												<div class="row">
													<div class="col-md-3">
														<label>Leaving From</label>
														<div class="field">
															<select class="select">
																<option>Dubai</option>
																<option>London</option>
																<option>Sydney</option>
																<option>Newyork</option>
																<option>Capetown</option>
																<option>Singapore</option>
																<option>Sharjah</option>
																<option>Islamabad</option>
																<option>Toronto</option>
																<option>Paris</option>
																<option>Delhi</option>
																<option>Colombo</option>
																<option>Auckland</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Going To</label>
														<div class="field">
															<select class="select">
																<option>Dubai</option>
																<option>London</option>
																<option>Sydney</option>
																<option>Newyork</option>
																<option>Capetown</option>
																<option>Singapore</option>
																<option>Sharjah</option>
																<option>Islamabad</option>
																<option>Toronto</option>
																<option>Paris</option>
																<option>Delhi</option>
																<option>Colombo</option>
																<option>Auckland</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Departure Date</label>
														<div class="field">
															<input class="popupDatepicker" type="text" placeholder="Select Date">
															<img class="field-icon" src="assets/images/calendar.png" alt="" />
														</div>
													</div>
													<div class="col-md-3">
														<div class="check-radio">
															<input type="radio" name="a" class="styled" />
															<span>One-way Flight</span>
														</div>
													</div>
													<div class="col-md-3">
														<label>Return Date</label>
														<div class="field">
															<input class="popupDatepicker" type="text" placeholder="Select Date">
															<img class="field-icon" src="assets/images/calendar.png" alt="" />
														</div>
													</div>
													<div class="col-md-2">
														<label>Students</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-2">
														<label>Under 26</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-2">
														<label>Adult 26+</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<button class="book-now" type="submit">Search Now</button>
													</div>
												</div>
											</form><!-- Tab Form -->
										</div>
										<div role="tabpanel" class="tab-pane fade" id="search-tour">
											<form action="https://html.webinane.com/hotel-room/luxury-tours.html">
												<div class="row">
													<div class="col-md-3">
														<label>Leaving From</label>
														<div class="field">
															<select class="select">
																<option>Dubai</option>
																<option>London</option>
																<option>Sydney</option>
																<option>Newyork</option>
																<option>Capetown</option>
																<option>Singapore</option>
																<option>Sharjah</option>
																<option>Islamabad</option>
																<option>Toronto</option>
																<option>Paris</option>
																<option>Delhi</option>
																<option>Colombo</option>
																<option>Auckland</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Going To</label>
														<div class="field">
															<select class="select">
																<option>Dubai</option>
																<option>London</option>
																<option>Sydney</option>
																<option>Newyork</option>
																<option>Capetown</option>
																<option>Singapore</option>
																<option>Sharjah</option>
																<option>Islamabad</option>
																<option>Toronto</option>
																<option>Paris</option>
																<option>Delhi</option>
																<option>Colombo</option>
																<option>Auckland</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Departure Date</label>
														<div class="field">
															<input class="popupDatepicker" type="text" placeholder="Select Date">
															<img class="field-icon" src="assets/images/calendar.png" alt="" />
														</div>
													</div>
													<div class="col-md-3">
														<div class="check-radio">
															<input type="radio" name="a" class="styled" />
															<span>One-way Flight</span>
														</div>
													</div>
													<div class="col-md-3">
														<label>Return Date</label>
														<div class="field">
															<input class="popupDatepicker" type="text" placeholder="Select Date">
															<img class="field-icon" src="assets/images/calendar.png" alt="" />
														</div>
													</div>
													<div class="col-md-2">
														<label>Students</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-2">
														<label>Under 26</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-2">
														<label>Adult 26+</label>
														<div class="field">
															<input class="inc-dec" value="00" type="text" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<button class="book-now" type="submit">Search Now</button>
													</div>
												</div>
											</form><!-- Tab Form -->
										</div>
									</div>
								</div>
							</div><!-- Fancy Search Tabs -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block  half-gray  remove-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-5 column">
							<div class="about-simple">
								<h2>The Best Experience Ever</h2>
								<p>Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus nibh.</p>
								<a class="book-now" href="#" title="">DOWNLOAD GUIDE</a>
							</div><!-- About Simple -->
						</div>
						<div class="col-md-offset-1 col-md-6 column">
							<div class="all-fancy-services">
								<div class="row">
									<div class="col-md-6">
										<div class="fancy-service">
											<img src="assets/images/group.jpg" alt="" />
											<div class="fancy-service-text">
												<h3><a href="service-detail.html" title="">Group Booking</a></h3>
											</div>
										</div><!-- Fancy Service -->
									</div>
									<div class="col-md-6">
										<div class="fancy-service mt-4">
											<img src="assets/images/car.jpg" alt="" />
											<div class="fancy-service-text">
												<h3><a href="service-detail.html" title="">Car Hiring</a></h3>
											</div>
										</div><!-- Fancy Service -->
									</div>
									<div class="col-md-6">
										<div class="fancy-service">
											<img src="assets/images/travel-insure.jpg" alt="" />
											<div class="fancy-service-text">
												<h3><a href="service-detail.html" title="">Travel Insurance</a></h3>
											</div>
										</div><!-- Fancy Service -->
									</div>
									<div class="col-md-6">
										<div class="fancy-service">
											<img src="assets/images/travel-guid.jpg" alt="" />
											<div class="fancy-service-text">
												<h3><a href="service-detail.html" title="">Travel Guidelines</a></h3>
											</div>
										</div><!-- Fancy Service -->
									</div>
								</div>
							</div><!-- All Fancy Services -->
						</div>
					</div>
				</div>
			</div>
		</section>



		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="title">
								<span>Resort World Best Places</span>
								<h4>SPECIAL OFFERS</h4>
							</div><!-- Title -->

							<div class="special-offers">
								<div class="row">
									<div class="col-md-4">
										<div class="sp-offer">
											<div class="offer-img">
												<img src="assets/images/1-offer.jpg" alt="" />
												<ul>
													<li><i class="fa fa-bank"></i><span> Hotel: 5 Star</span></li>
													<li><i class="fa fa-clock-o"></i><span> Duration: 10 Days</span></li>
													<li><i class="fa fa-male"></i><span> Person: 02</span></li>
												</ul>
											</div>
											<div class="offer-detail">
												<span>Italy Tours & Vacations</span>
												<h3><a href="flight-packages-detail.html" title="">The Gold Standard Tour</a></h3>
												<div class="cost">FROM <strong>$420.00</strong>/ Person</div>
												<a class="book-now" href="flight-packages-detail.html" title="">Book Now</a>
											</div>
										</div><!-- Offer -->
									</div>
									<div class="col-md-4">
										<div class="sp-offer">
											<div class="offer-img">
												<img src="assets/images/2-offer.jpg" alt="" />
												<ul>
													<li><i class="fa fa-bank"></i><span> Hotel: 5 Star</span></li>
													<li><i class="fa fa-clock-o"></i><span> Duration: 10 Days</span></li>
													<li><i class="fa fa-male"></i><span> Person: 02</span></li>
												</ul>
											</div>
											<div class="offer-detail">
												<span>Italy Tours & Vacations</span>
												<h3><a href="flight-packages-detail.html" title="">Cinque Terre & Rome Tour</a></h3>
												<div class="cost">FROM <strong>$159.00</strong>/ Person</div>
												<a class="book-now" href="flight-packages-detail.html" title="">Book Now</a>
											</div>
										</div><!-- Offer -->
									</div>
									<div class="col-md-4">
										<div class="sp-offer">
											<div class="offer-img">
												<img src="assets/images/3-offer.jpg" alt="" />
												<ul>
													<li><i class="fa fa-bank"></i><span> Hotel: 5 Star</span></li>
													<li><i class="fa fa-clock-o"></i><span> Duration: 10 Days</span></li>
													<li><i class="fa fa-male"></i> <span>Person: 02</span></li>
												</ul>
											</div>
											<div class="offer-detail">
												<span>Italy Tours & Vacations</span>
												<h3><a href="flight-packages-detail.html" title="">Art, Food, and Culture Tour</a></h3>
												<div class="cost">FROM <strong>$212.00</strong>/ Person</div>
												<a class="book-now" href="flight-packages-detail.html" title="">Book Now</a>
											</div>
										</div><!-- Offer -->
									</div>
								</div>
							</div><!-- Special Offers -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block blackish">
				<div class="parallax still scrolly-invisible" data-velocity="-.4" style="background: url(_/assets/images/parallax-bg1.html) 50% 529.016px no-repeat rgba(0, 0, 0, 0);"></div>
				<div class="row">
					<div class="col-md-6 column">
						<div class="destination-slide overlap">
							<div data-hash="one" class="destination-image">
								<img src="assets/images/1.jpg" alt="" />
								<div class="destination-detail">
									<div class="destination-name">
										<h4>Cinque Terre & Rome Tour</h4>
										<div class="cost">FROM <strong>$520.00</strong> / PERSON</div>
									</div>
									<a class="book-now" href="#" title="">Book Now</a>
								</div>
							</div><!-- Destination Image -->
							<div data-hash="two" class="destination-image">
								<img src="assets/images/2.jpg" alt="" />
								<div class="destination-detail">
									<div class="destination-name">
										<h4>Cinque Terre & Rome Tour</h4>
										<div class="cost">FROM <strong>$325.00</strong> / PERSON</div>
									</div>
									<a class="book-now" href="#" title="">Book Now</a>
								</div>
							</div><!-- Destination Image -->
							<div data-hash="three" class="destination-image">
								<img src="assets/images/3.jpg" alt="" />
								<div class="destination-detail">
									<div class="destination-name">
										<h4>Cinque Terre & Rome Tour</h4>
										<div class="cost">FROM <strong>$635.00</strong> / PERSON</div>
									</div>
									<a class="book-now" href="#" title="">Book Now</a>
								</div>
							</div><!-- Destination Image -->
							<div data-hash="four" class="destination-image">
								<img src="assets/images/4.jpg" alt="" />
								<div class="destination-detail">
									<div class="destination-name">
										<h4>Cinque Terre & Rome Tour</h4>
										<div class="cost">FROM <strong>$123.00</strong> / PERSON</div>
									</div>
									<a class="book-now" href="#" title="">Book Now</a>
								</div>
							</div><!-- Destination Image -->
						</div><!-- Destination Slide -->
					</div>
					<div class="col-md-6 column">
						<div class="destination">
							<h3>Destination Arround</h3>
							<span>The World</span>
							<p>Curabitur blandit tempus porttitor. Maecenas sediam eget risus varius blandit sit accumsan urna vitamolestie interdum. Nam sed placerat libero, noleifendet non magna. Fusce dapibus, tellusac.</p>
							<div class="destination-carousel">
								<div class="destination-thumb">
									<a class="true url" href="#one" title=""><img src="assets/images/1-thumb.jpg" alt="" /></a>
									<span>Flights To France</span>
								</div><!-- Destination Thumb -->
								<div class="destination-thumb">
									<a class="url" href="#two" title=""><img src="assets/images/2-thumb.jpg" alt="" /></a>
									<span>Flights To Sweden</span>
								</div><!-- Destination Thumb -->
								<div class="destination-thumb">
									<a class="url" href="#three" title=""><img src="assets/images/3-thumb.jpg" alt="" /></a>
									<span>Flights To Paris</span>
								</div><!-- Destination Thumb -->
								<div class="destination-thumb">
									<a class="url" href="#four" title=""><img src="assets/images/4-thumb.jpg" alt="" /></a>
									<span>Flights To Egypt</span>
								</div><!-- Destination Thumb -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block remove-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="title">
								<span>Resort World Best Places</span>
								<h4>BEST OFFERED TOURS</h4>
							</div><!-- Title -->
							<div class="best-offered-tours">
								<div class="row">

									@foreach($package as $data)
									<div class="col-md-3">
										<div class="best-offered">
											<img src="assets/images/touroffer-1.jpg" alt="" />
											<div class="tour-name">
												<h4><a href="{{ route('package_detail', $data->slug) }}" title="">{{ $data->name }}</a></h4>
												<div class="cost">FROM <strong>{{ $data->min_price }}</strong> / PERSON</div>
											</div>
										</div><!-- Best Offered -->
									</div>
									@endforeach

								</div>
							</div><!-- Best Offered Tours -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block less-spacing">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="clients-carousel">
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-1.png" alt="" /></a>
								</div><!-- Client -->
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-2.png" alt="" /></a>
								</div><!-- Client -->
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-3.png" alt="" /></a>
								</div><!-- Client -->
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-4.png" alt="" /></a>
								</div><!-- Client -->
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-5.png" alt="" /></a>
								</div><!-- Client -->
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-1.png" alt="" /></a>
								</div><!-- Client -->
								<div class="client">
									<a title="" href="#"><img src="assets/images/logo-2.png" alt="" /></a>
								</div><!-- Client -->
							</div><!-- Clients Carousel -->
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection
