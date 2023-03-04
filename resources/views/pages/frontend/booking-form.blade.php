
@extends('master');

@section('content');
<body itemscope>
	<div class="theme-layout">



		<div class="pagetop">
			<div class="container">
				<h1>Booking Form</h1>
				<ul>
					<li><a title="" href="{{url('/')}}">Home</a></li>
					<li><a title="" href="{{url('/packages-detail')}}">Packages</a></li>
					<li><a title="" href="{{url('/packages-detail')}}">Package Detail</a></li>
					<li>Booking Form</li>
				</ul>
			</div>
		</div><!-- Page Top -->





		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="booking-form">
								<div class="booking-detail">
									<div class="booking-image"><img src="images/booking-1.jpg" alt="" /></div>
									<div class="booking-name">
										<span>Awesome Features Room</span>
										<h5>Super Star Luxury Hotle</h5>
									</div>
									<div class="package-price">
										<strong>Start From</strong>
										<i>$559</i>
										<span>Per Person</span>
									</div><!-- Package price -->
									<div class="see-details">
										<a class="book-now" href="tour-detail.html" title="">SEE DETAILS</a>
									</div>
								</div><!-- Booking Detail -->
								<div class="booking-detail">
									<div class="booking-image"><img src="assets/images/booking-2.jpg" alt="" /></div>
									<div class="booking-name">
										<span>Awesome Features Room</span>
										<h5>Black Chocolate Soufflé </h5>
									</div>
									<div class="package-price">
										<strong>Start From</strong>
										<i>$112</i>
										<span>Per Person</span>
									</div><!-- Package price -->
									<div class="see-details">
										<a class="book-now" href="{{url('/packages-detail')}}" title="">SEE DETAILS</a>
									</div>
								</div><!-- Booking Detail -->

								<div class="indivisual-forms">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="per-person-form">
												<div class="center-heading">
													<h3>1st PERSON INFO</h3>
													<span>Book Rooms For Your Stay</span>
												</div>

												<form>
													<div class="row">
														<div class="col-md-12">
															<div class="field"><input type="text" placeholder="Your Name" /></div>
														</div>
														<div class="col-md-6">
															<div class="field"><input type="text" placeholder="Mobile Number" /></div>
														</div>
														<div class="col-md-6">
															<div class="field"><input type="email" placeholder="Email" /></div>
														</div>
														<div class="col-md-6">
															<div class="field">
																<input class="popupDatepicker" type="text" placeholder="CheckOut">
																<img class="field-icon" src="assets/images/calendar.png" alt="" />
															</div>
														</div>
														<div class="col-md-6">
															<div class="field">
																<input class="popupDatepicker" type="text" placeholder="CheckIn">
																<img class="field-icon" src="images/calendar.png" alt="" />
															</div>
														</div>
														<div class="col-md-4">
															<label>Select Rooms</label>
															<div class="field">
																<input class="inc-dec" value="00" type="text" placeholder="">
															</div>
														</div>
														<div class="col-md-4">
															<label>Adults Room</label>
															<div class="field">
																<input class="inc-dec" value="00" type="text" placeholder="">
															</div>
														</div>
														<div class="col-md-4">
															<label>Kids</label>
															<div class="field">
																<input class="inc-dec" value="00" type="text" placeholder="">
															</div>
														</div>
														<div class="packages-services">
															<h5 class="simple-heading">PACKAGE SERVICES <span>Please select your services which you want?</span></h5>
															<ul>
																<li>
																	<input type="checkbox" name="person1" />
																	<span>Best Places In Berlin </span>
																	<div class="service-price">$289<i>Per Person</i></div>
																	<a href="#" title="">See Detail</a>
																</li>
																<li>
																	<input type="checkbox" name="person1" />
																	<span>Catskills In Paris </span>
																	<div class="service-price">$289<i>Per Person</i></div>
																	<a href="#" title="">See Detail</a>
																</li>
																<li>
																	<input type="checkbox" name="person1" />
																	<span>Theory Of Relativity </span>
																	<div class="service-price">$289<i>Per Person</i></div>
																	<a href="#" title="">See Detail</a>
																</li>
															</ul>
														</div>
													</div>
												</form>

											</div><!-- Per Person Form -->
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="per-person-form">
												<div class="center-heading">
													<h3>2nd PERSON INFO</h3>
													<span>Book Rooms For Your Stay</span>
												</div>

												<form>
													<div class="row">
														<div class="col-md-12">
															<div class="field"><input type="text" placeholder="Your Name" /></div>
														</div>
														<div class="col-md-6">
															<div class="field"><input type="text" placeholder="Mobile Number" /></div>
														</div>
														<div class="col-md-6">
															<div class="field"><input type="email" placeholder="Email" /></div>
														</div>
														<div class="col-md-6">
															<div class="field">
																<input class="popupDatepicker" type="text" placeholder="CheckOut">
																<img class="field-icon" src="assets/images/calendar.png" alt="" />
															</div>
														</div>
														<div class="col-md-6">
															<div class="field">
																<input class="popupDatepicker" type="text" placeholder="CheckIn">
																<img class="field-icon" src="assets/images/calendar.png" alt="" />
															</div>
														</div>
														<div class="col-md-4">
															<label>Select Rooms</label>
															<div class="field">
																<input class="inc-dec" value="00" type="text" placeholder="">
															</div>
														</div>
														<div class="col-md-4">
															<label>Adults Room</label>
															<div class="field">
																<input class="inc-dec" value="00" type="text" placeholder="">
															</div>
														</div>
														<div class="col-md-4">
															<label>Kids</label>
															<div class="field">
																<input class="inc-dec" value="00" type="text" placeholder="">
															</div>
														</div>
														<div class="packages-services">
															<h5 class="simple-heading">PACKAGE SERVICES <span>Please select your services which you want?</span></h5>
															<ul>
																<li>
																	<input type="checkbox" name="person1" />
																	<span>Best Places In Berlin </span>
																	<div class="service-price">$289<i>Per Person</i></div>
																	<a href="#" title="">See Detail</a>
																</li>
																<li>
																	<input type="checkbox" name="person1" />
																	<span>Catskills In Paris </span>
																	<div class="service-price">$289<i>Per Person</i></div>
																	<a href="#" title="">See Detail</a>
																</li>
																<li>
																	<input type="checkbox" name="person1" />
																	<span>Theory Of Relativity </span>
																	<div class="service-price">$289<i>Per Person</i></div>
																	<a href="#" title="">See Detail</a>
																</li>
															</ul>
														</div>
													</div>
												</form>

											</div><!-- Per Person Form -->
										</div>

									</div>
								</div><!-- Indivisual Forms -->
								<form>
									<div class="payment-method">
										<h5>PAYMENT METHOD <span>Would you like to buy one of our items?</span></h5>
										<ul>
											<li>
												<div class="check-radio">
													<input type="radio" name="a" class="styled" /><span>Room Price:</span><strong>$ 120.00 USD</strong>
												</div>
											</li>
											<li>
												<span>Room Discount</span>
												<strong>$ 35.00 USD</strong>
											</li>
											<li>
												<span>Total</span>
												<strong>$ 85.00 USD</strong>
											</li>
										</ul>
									</div>
									<div class="payment-method">
										<h5>SELECT PAYMENT OPTION</h5>
										<ul>
											<li class="d-flex">
												<div class="check-radio">
													<input type="radio" name="b" class="styled" />
													<span><img src="assets/images/paypal.png" alt="" /></span>
												</div>
												<div class="check-radio">
													<input type="radio" name="b" class="styled" />
													<span><img src="assets/images/visa.png" alt="" /></span>
												</div>
											</li>
										</ul>
									</div>

									<div class="card-info">
										<div class="row">
											<div class="col-md-12">
												<label>Card Type:</label>
												<div class="field">
													<select class="select">
														<option>Card Type 1</option>
														<option>Card Type 2</option>
														<option>Card Type 3</option>
														<option>Card Type 4</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<label>Enter Your 16 Digit Card Number:</label>
												<div class="field">
													<input type="" placeholder="xxxx-xxxxxxx-xxx-xxxx-xx">
												</div>
											</div>
											<div class="col-md-4">
												<label>Month & Year of Expiry:</label>
												<div class="field">
													<select class="select">
														<option>January</option>
														<option>Feburary</option>
														<option>March</option>
														<option>April</option>
														<option>May</option>
														<option>June</option>
														<option>July</option>
														<option>August</option>
														<option>September</option>
														<option>October</option>
														<option>November</option>
														<option>December</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<label>Select Year:</label>
												<div class="field">
													<select class="select">
														<option>2015</option>
														<option>2016</option>
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<label>Card Verification Number:</label>
												<div class="field">
													<input type="" placeholder="xxxx-xxxxxxx-xxx-xxxx-xx">
												</div>
											</div>
											<div class="col-md-12">
												<button class="book-now" type="submit">Book Now</button>
											</div>
										</div>
									</div>
								</form>
							</div><!-- Booking Form -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<footer>
			<div class="block darkblue-layer">
				<div data-velocity="-.1" style="background: url(images/footer-bg.jpg) repeat scroll 50% 0 transparent;" class="parallax"></div>
				<div class="container">
					<div class="footer-widgets">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="widget">
									<div class="about-widget">
										<a href="#"><img src="assets/images/footer-logo.png" alt="" /></a>
										<p>Vestibulum id ligula porta felis euismod sem per. Aenean eu leo quam. Pellentesque orn are sem lacinia quam venenatis.</p>
									</div>
								</div><!-- Widget -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="widget">
									<div class="widget-title">
										<h4>Recent News</h4>
									</div>
									<div class="widget-news">
										<div class="recent-news">
											<span class="date">
												<i>August</i><strong>25</strong>
											</span>
											<a href="blog-detail.html" title="">An Exceptional Hotel Template!</a>
										</div><!-- News -->
										<div class="recent-news">
											<span class="date">
												<i>August</i><strong>18</strong>
											</span>
											<a href="blog-detail.html" title="">Comfortable & Spacious Apartment</a>
										</div><!-- News -->
									</div><!-- News Widget -->
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="widget">
									<div class="widget-title">
										<h4>Room Special</h4>
									</div>
										<div class="offer">
											<img src="assets/images/tour-footer-2.jpg" alt="" />
											<div class="offer-overlay">
												<span>Couple Room</span>
												<a href="{{url('/packages-detail')}}" title="">Honymoon Suite</a>
											</div>
										</div><!-- Offer -->
										<div class="offer">
											<img  src="assets/images/tour-footer-3.jpg" alt="" />
											<div class="offer-overlay">
												<span>Couple Room</span>
												<a href="{{url('/packages-detail')}}" title="">Honymoon Suite</a>
											</div>
										</div><!-- Offer -->
									</div><!-- Offers Widget -->
								</div>
							<div class="col-lg-3 col-md-6">
								<div class="widget">
									<div class="widget-title">
										<h4>Luxury Offer</h4>
									</div>
									<ul>
										<li><i class="fa fa-umbrella"></i> Boutiques</li>
										<li><i class="fa fa-laptop"></i> wireless internet</li>
										<li><i class="fa fa-clock-o"></i> Private beach with service</li>
										<li><i class="fa fa-wifi"></i> Pet-friendly resort</li>
										<li><i class="fa fa-umbrella"></i> Tennis courts</li>
									</ul><!-- ul -->
								</div><!-- Luxury Offers -->
							</div>
						</div>
					</div><!-- Footer Widgets -->
				</div>
			</div>
		</footer><!-- footer -->
		<div class="bottom-footer">
			<div class="container">
				<div class="contact-bar">
					<div class="row">
					<div class="col-md-4">
						<div class="contact-details">
							<span><i class="fa fa-map-marker"></i></span>
							<strong>Address:</strong>
							<p>63 Birch Street Granada Hills USA</p>
						</div><!-- contact-details -->
					</div>
					<div class="col-md-4">
						<div class="contact-details dark">
							<span><i class="fa fa-phone"></i></span>
							<strong>Call Us Now:</strong>
							<p>888-832-5258, <span>888-832-5276</span></p>
						</div><!-- contact-details -->
					</div>
					<div class="col-md-4">
						<div class="contact-details">
							<span><i class="fa fa-envelope-square"></i></span>
							<strong>Email Address:</strong>
							<p><a href="https://html.webinane.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f1c3a3f3f203d3b0f382a2d26212e212a612c2022">[email&#160;protected]</a></p>
						</div><!-- contact-details -->
					</div>
					</div>

				</div><!-- contact-data -->
				<p>&copy; 2021 <a href="https://themeforest.net/item/hotel-room-minimalist-hotel-travel-html-template/12689422">Hotel Room</a> - All Rights Reserved - Made By <a href="https://themeforest.net/user/webinane/portfolio">Webinane</a></p>
			</div><!-- container -->
			<div class="scrollup-btn">
	<a id="scrollup" href="#" class="scrollup activate" style="display: block;"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.835 240.835" style="enable-background:new 0 0 240.835 240.835;" xml:space="preserve"> <g> <path id="Expand_Less" d="M129.007,57.819c-4.68-4.68-12.499-4.68-17.191,0L3.555,165.803c-4.74,4.74-4.74,12.427,0,17.155 c4.74,4.74,12.439,4.74,17.179,0l99.683-99.406l99.671,99.418c4.752,4.74,12.439,4.74,17.191,0c4.74-4.74,4.74-12.427,0-17.155 L129.007,57.819z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></a>
	</div>
		</div><!-- after-footer -->
	<div class="booking-popup">
			<div class="popup-container">
				<div class="popup-inner">
					<span class="close-btn"><img src="assets/images/cross.png" alt="" /></span>
					<div class="popup-title">
						<span>Any Time Worldwide</span>
						<h4>Book Your Room</h4>
						<span>Not valid for bookings less than 3 days </span>
					</div><!-- Popup Title -->
					<div class="popup-details">
						<div class="popup-block">
							<div class="row">
								<div class="col-md-5 column">
									<div class="popup-block-title">
										<span>Any Time</span>
										<h4>Choose Your Date</h4>
									</div>
								</div>
								<div class="col-md-7 column">
									<form>
										<div class="row">
											<div class="col-md-6">
												<label>Check In</label>
												<div class="field">
													<input class="popupDatepicker" type="text" placeholder="">
													<img class="field-icon" src="assets/images/calendar.png" alt="" />
												</div>
											</div>
											<div class="col-md-6">
												<label>Check Out</label>
												<div class="field">
													<input class="popupDatepicker" type="text" placeholder="">
													<img class="field-icon" src="assets/images/calendar.png" alt="" />
												</div>
											</div>
											<div class="col-md-4">
												<label>Adults</label>
												<div class="field">
													<input class="inc-dec" value="00" type="text" placeholder="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Kids</label>
												<div class="field">
													<input class="inc-dec" value="00" type="text" placeholder="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Rooms</label>
												<div class="field">
													<input class="inc-dec" value="00" type="text" placeholder="">
												</div>
											</div>
										</div>
									</form><!-- Tab Form -->
								</div>
							</div>
						</div><!-- Popup Block -->
						<div class="popup-block">
							<div class="row">
								<div class="col-md-5 column">
									<div class="popup-block-title">
										<span>Awesome Rooms</span>
										<h4>Your Room Summary</h4>
									</div>
								</div>
								<div class="col-md-7">
									<div class="popup-rooms">
										<div class="popup-room">
											<div class="popup-room-img">
												<img src="assets/images/resource/popup-room.html" alt="" />
											</div>
											<div class="popup-room-detail">
												<i>Awesome Features Room</i>
												<h5>Super Star Luxury Hotle</h5>
												<div class="room-price-from">
													<strong>Start From </strong>
													<span>$289</span>
													<strong>Per Person</strong>
												</div>
												<a class="book-now" href="#" title="">SEE DETAILS</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- Popup Block -->
						<div class="popup-block">
							<div class="row">
								<div class="col-md-5 column">
									<div class="popup-block-title">
										<span>We Stand By</span>
										<h4>Reservation Details</h4>
									</div>
								</div>
								<div class="col-md-7 column">
									<form>
										<div class="row">
											<div class="col-md-6">
												<label>First Name</label>
												<div class="field">
													<input type="text" placeholder="" />
												</div>
											</div>
											<div class="col-md-6">
												<label>Last Name</label>
												<div class="field">
													<input type="text" placeholder="" />
												</div>
											</div>
											<div class="col-md-6">
												<label>Email</label>
												<div class="field">
													<input type="email" placeholder="" />
												</div>
											</div>
											<div class="col-md-6">
												<label>Phone</label>
												<div class="field">
													<input type="email" placeholder="" />
												</div>
											</div>
											<div class="col-md-6">
												<label>City</label>
												<div class="field">
													<input type="email" placeholder="" />
												</div>
											</div>
											<div class="col-md-6">
												<label>Address</label>
												<div class="field">
													<input type="email" placeholder="" />
												</div>
											</div>
											<div class="col-md-12">
												<label>Requirements</label>
												<div class="field textarea">
													<textarea></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<button class="book-now" type="submit">BOOK NOW</button>
											</div>
										</div>
									</form><!-- Tab Form -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Booking Popup -->

		<div class="popup">
			<div class="popup-center">
				<div class="simple-popup-inner">
					<div class="alert alert-success">
						<span class="close-btn"><i class="fa fa-times"></i></span>
						<strong>WellDone!</strong>
						<p>Your message has been submitted to us successfully, We will get back to you shortly.</p>

					</div>
				</div>
			</div>
		</div><!-- Popup -->
	</div>



</body>
@endsection
