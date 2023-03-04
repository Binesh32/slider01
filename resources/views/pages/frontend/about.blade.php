@extends('master');

@section('content');
<body itemscope>
	<div class="theme-layout">
		<div class="header-container">
			<div class="registration">
				<div class="container">
					<span class="close-btn"><img src="assets/images/cross.png" alt="" /></span>
					<div class="registration-form">
						<h3>Join For <span>Luxury Rooms</span></h3>
						<p>Quis autem velum lure reprehe nderit. Lorem ipsum dolor sitnulla or narjusto.</p>
						<form>
							<div class="row">
								<div class="col-md-8 column">
									<div class="input-fields">
										<div class="row">
											<div class="col-md-6"><input type="text" name="firstname" placeholder="First Name *" /></div>
											<div class="col-md-6"><input type="email" name="email" placeholder="your@email.com *" /></div>
											<div class="col-md-6"><input type="text" name="lastname" placeholder="Last Name *" /></div>
											<div class="col-md-6"><input type="password" name="psw" placeholder="Password *" /></div>
										</div>
									</div>
								</div>
								<div class="col-md-4 column">
									<p>By creating an account, you agree to our <a href="#" title="">Terms & Conditions.</a></p>
									<button class="book-now">Create Account</button>
								</div>
							</div>
						</form><!-- form -->
					</div>
					<div class="login-form">
						<h3>Sign In <span>Now</span></h3>
						<p>Quis autem velum lure reprehe nderit. Lorem ipsum dolor sitnulla or narjusto.</p>
						<form>
							<div class="row">
								<div class="col-md-8 column">
									<div class="input-fields">
										<div class="row">
											<div class="col-md-6"><input type="email" name="email" placeholder="your@email.com *" /></div>
											<div class="col-md-6"><input type="password" name="psw" placeholder="Password *" /></div>
										</div>
									</div>
								</div>
								<div class="col-md-4 column">
									<button class="book-now">Sign In</button>
								</div>
							</div>
						</form><!-- form -->
					</div>
				</div>
			</div><!-- Registration -->

			<div class="topbar">
				<div class="weather-wrapper">
					<div id="weather"></div>
				</div>
				<span class="address"><i class="fa fa-map-marker"></i> 574 New London Turnpike Norwich</span>
				<div class="registration-buttons">
					<a id="register-btn" href="#" title="">Register</a>
					<a id="login-btn" href="#" title="">Login</a>
				</div>
			</div><!-- Topbar -->

			<!-- header -->
				@include('includes.header')
			<!-- Header end -->


		<div class="pagetop">
			<div class="container">
				<h1>About us</h1>
				<ul>
					<li><a title="" href="{{url('/')}}">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div><!-- Page Top -->


		<section>
			<div class="block gray-layer">
				<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1366x768) no-repeat 50% 0;"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10 col-md-offset-1 column">
							<div class="tab-data">
								<strong>Welcome To</strong>
								<h4>Luxury Best Hotel</h4>
								<p>Duis at ante nec neque rhoncus pretium. Utpl mollis, est non scelerisque blandit, velit nunc lao in vehicula sem phasellu efore. Proin gravida nibh vel velit auctor aliquet.</p>
								<ul>
									<li>
										<p>World Best Resort No</p>
										<span>06</span>
									</li>
									<li>
										<p>We Are Awarded In</p>
										<span>2014</span>
									</li>
									<li>
										<p>Brunches In Countries</p>
										<span>24</span>
									</li>
								</ul><!-- ul -->
							</div><!-- tabs-data -->

						</div>
					</div>
				</div><!-- container -->
			</div><!-- block -->
		</section><!-- Tabs Section -->


		<section>
			<div class="block gray remove-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="adds-images">
								<div class="row">
									<div class="col-md-4">
										<div class="add">
											<a title="" href="#"><img alt="" src="assets/images/banner-1.jpg"></a>
										</div><!-- Add -->
									</div>
									<div class="col-md-4">
										<div class="add">
											<a title="" href="#"><img alt="" src="assets/images/2-banner.jpg"></a>
										</div><!-- Add -->
									</div>
									<div class="col-md-4">
										<div class="add">
											<a title="" href="#"><img alt="" src="assets/images/banner-3.jpg"></a>
										</div><!-- Add -->
									</div>
								</div>
							</div><!-- Adds Images -->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block gray no-padding merge-columns">
				<div class="row">
					<div class="col-lg-4 col-md-6 column">
						<div class="about-section">
							<img src="assets/images/parallax-1.jpg" alt="" />
							<div class="overlay">
								<div class="inner">
									<span>Want To Know About Us</span>
									<h4>Who We Are?</h4>
									<p>Curabitur blandit tempus porttitor. Maecenas sed diam eget et non magna. Fusce dapibus, tellus ac cursus commodo nibh, ut fermentum massa justo sit amet risus nibh.</p>
								</div>
							</div>
						</div><!-- About Section -->
					</div>
					<div class="col-lg-4 col-md-6 column">
						<div class="make-reservation">
							<img src="assets/images/parallax-3.jpg" alt="" />
							<div class="overlay">
								<div class="inner">
									<a class="book-now call-popup" href="#" title="">Make Reservation</a>
								</div>
							</div>
						</div><!-- Make Reservation -->
					</div>
					<div class="col-lg-4 col-md-6 column">
						<div class="testimonial-section">
							<img src="assets/images/parallax-2.jpg" alt="" />
							<div class="overlay">
								<div class="inner">
									<div class="testimonial-carousel">
										<div class="testimonial">
											<blockquote><img class="quote-start" src="assets/images/blockquote.png" alt="" />Penatibus et magni Lorem ipsum dolor massa. Cum sociis natoque  amet, consectetuer adipisi atibus parturient montes nascetur.</blockquote>
											<div class="testimonial-name">

												<strong><span>Manager</span>Tray Calvin</strong>
											</div>
										</div><!-- Testimonial -->
										<div class="testimonial">
											<blockquote><img class="quote-start" src="assets/images/blockquote.png" alt="" />Aenean massa. Cum sociis natoque penatibus et magni Lorem ipsum dolor amet, consectetuer adipisi atibus parturient montes nascetur.</blockquote>
											<div class="testimonial-name">

												<strong><span>CEO</span>Tom Lorut</strong>
											</div>
										</div><!-- Testimonial -->
										<div class="testimonial">
											<blockquote><img class="quote-start" src="assets/images/blockquote.png" alt="" />Cum sociis natoque penatibus et magni Lorem ipsum dolor. consectetuer adipisi atibus parturient montes nascetur.</blockquote>
											<div class="testimonial-name">
												<strong><span>Employee</span>Max Martin</strong>
											</div>
										</div><!-- Testimonial -->
									</div><!-- Testimonial Carousel -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<span>Resort World Best Places</span>
								<h4>RESORT STAFF</h4>
							</div><!-- Title -->

							<div class="our-team">
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<div class="team-member">
											<div class="team-img">
												<img src="assets/images/1-team.jpg" alt="" />
												<div class="team-hover">
													<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
												</div>
											</div>
											<div class="team-name">
												<span>Chife Excutive Officer</span>
												<h5><a title="" href="#">James Walter</a></h5>
											</div>
											<ul class="social-media">
												<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div><!-- Team Member -->
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="team-member">
											<div class="team-img">
												<img src="assets/images/2-team.jpg" alt="" />
												<div class="team-hover">
													<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
												</div>
											</div>
											<div class="team-name">
												<span>Chife Excutive Officer</span>
												<h5><a title="" href="#">Nikki Walter</a></h5>
											</div>
											<ul class="social-media">
												<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div><!-- Team Member -->
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="team-member">
											<div class="team-img">
												<img src="assets/images/3-%20team.jpg" alt="" />
												<div class="team-hover">
													<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
												</div>
											</div>
											<div class="team-name">
												<span>Chife Excutive Officer</span>
												<h5><a title="" href="#">Mic Waltainer</a></h5>
											</div>
											<ul class="social-media">
												<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div><!-- Team Member -->
									</div>
								</div>
							</div><!-- our-staff -->
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


		<!-- footer -->
			@include('includes.footer')
		<!-- footer end -->
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
							<p><a href="https://html.webinane.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6635131616091412261103040f080708034805090b">[email&#160;protected]</a></p>
						</div><!-- contact-details -->
					</div>
					</div>

				</div><!-- contact-data -->
				<p>&copy; 2021 <a href="https://themeforest.net/item/hotel-room-minimalist-hotel-travel-html-template/12689422">Hotel Room</a> - All Rights Reserved - Made By <a href="#https://themeforest.net/user/webinane/portfolio">Webinane</a></p>
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
