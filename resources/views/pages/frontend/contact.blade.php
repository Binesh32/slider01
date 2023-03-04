@extends('master');

@section('content');
<body itemscope>
	<div class="theme-layout">
		<!-- Header -->
		@include('includes.header')
		<!-- Header end-->


		<div class="pagetop">
			<div class="container">
				<h1>Contact Us</h1>
				<ul>
					<li><a title="" href="{{url('/')}}">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div><!-- Page Top -->


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-8 column">
							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d617841.1234395928!2d19.098163777520817!3d-33.78760119441866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1437982891919"></iframe>
							</div>
							<div class="block-gap"></div>
							<div class="contact-content">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="address-sec">
											<span>Resort World Best Place</span>
											<h4>Get In Touch</h4>
											<p>Lorem ipsum dolor sit amddiet, consectetur adipisicing mod tempor incididutrgnt ut labore et dolore magna aliq minim veniam, quis dsfinostrud exercitation ullamco.</p>
											<ul>
												<li><span><i class="fa fa-home"></i></span> <strong>Address:</strong>123 Seward Street Oskla USA</li>
												<li><span><i class="fa fa-phone"></i></span> <strong>Phone:</strong>82347 483 23</li>
												<li><span><i class="fa fa-fax"></i></span> <strong>Fax:</strong>92374 2349 577</li>
												<li><span><i class="fa fa-envelope"></i></span> <strong>Email:</strong><a href="https://html.webinane.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452c2b232a053c2a30372028242c296b262a28">[email&#160;protected]</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="contact-img">
											<img src="assets/images/footer-1.jpg" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="block-gap"></div>

							<div class="title">
								<span>Resort World Best Places</span>
								<h4>Send Us Message</h4>
							</div>
							<div class="comment-form center">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enm minim veniam, quis nostrud exercitation ullamco.</p>
								<div id="message"></div>
								<form class="input-fields" method="post" action="https://html.webinane.com/hotel-room/contact.php" name="contactform" id="contactform">
									<div class="row">
										<div class="col-md-4"><input id="name" name="name" type="text" placeholder="Complete Name *" /></div>
										<div class="col-md-4"><input id="email" name="email" type="email" placeholder="Email Address *" /></div>
										<div class="col-md-4"><input type="text" placeholder="Website" /></div>
										<div class="col-md-12"><textarea id="comments" name="comments" placeholder="Enter Your Message"></textarea></div>
										<div class="col-md-12"><button id="submit" class="book-now submit" type="submit">Submit Now</button></div>
									</div>
								</form>
							</div>
						</div>
						<aside class="col-md-4 column">
							<div class="sidebar">
								<div class="widget">
									<form class="searchform">
										<input type="text" placeholder="Search">
										<button><i class="fa fa-search"></i></button>
									</form>
								</div><!-- Widget -->
								<div class="widget">
									<div class="widget-title">
										<h4>Meta Links</h4>
									</div>
									<ul>
										<li><a href="#" title="">Log in</a></li>
										<li><a href="#" title="">Entries RSS</a></li>
										<li><a href="#" title="">Comments RSS</a></li>
										<li><a href="#" title="">Wordpress.org</a></li>
									</ul><!-- ul -->
								</div><!-- Widget -->
								<div class="widget">
									<div class="widget-title">
										<h4>Gallery Widget</h4>
									</div>
									<div class="gallery-widget lightbox">
										<div class="row">
											<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="assets/images/1-small-image.jpg" alt="" /></a></div>
											<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="assets/images/2-small-image.jpg" alt="" /></a></div>
											<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="assets/images/3-small-image.jpg" alt="" /></a></div>
											<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="assets/images/4-small-image.jpg" alt="" /></a></div>
											<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="assets/images/5-small-image.jpg" alt="" /></a></div>
											<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="assets/images/6-small-image.jpg" alt="" /></a></div>
										</div>
									</div>
								</div><!-- Widget -->
								<div class="widget">
									<div class="widget-title">
										<h4>Blog Archives</h4>									</div>
									<ul>
										<li><a href="#" title="">Boutiques</a><span>(20)</span></li>
										<li><a href="#" title="">Complimentary wireless internet</a><span>(01)</span></li>
										<li><a href="#" title="">Private beach with service</a><span>(08)</span></li>
										<li><a href="#" title="">Pet-friendly resort</a><span>(10)</span></li>
										<li><a href="#" title="">Tennis courts</a><span>(20)</span></li>
									</ul>
								</div><!-- Widget -->
								<div class="widget">
									<div class="widget-title">
										<h4>Tag Clouds</h4>									</div>
									<div class="tagcloud">
										<a href="#" title="">Tennis Courts</a>
										<a href="#" title="">Resort</a>
										<a href="#" title="">Private</a>
										<a href="#" title="">Hotel</a>
										<a href="#" title="">Blog</a>
									</div>
								</div>
							</div>
						</aside>
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
							<p><a href="https://html.webinane.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90c3e5e0e0ffe2e4d0e7f5f2f9fef1fef5bef3fffd">[email&#160;protected]</a></p>
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
