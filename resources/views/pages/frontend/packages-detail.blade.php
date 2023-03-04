@extends('master');

@section('content');
<body itemscope>
	<div class="theme-layout">



		<div class="pagetop">
			<div class="container">
				<h1>Package Detail</h1>
				<ul>
					<li><a title="" href="{{url('/')}}">Home</a></li>
					<li><a title="" href="{{url('/packages-detail')}}">Packages</a></li>
					<li>Room Packages</li>
				</ul>
			</div>
		</div><!-- Page Top -->



		<section>
			<div class="block remove-gap gray">
				<div class="room-gallery">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane  active" id="room-image1">
							<img src="assets/images/1-product.jpg" alt="" />
						</div>
						<div role="tabpanel" class="tab-pane " id="room-image2">
							<img src="assets/images/2-product.jpg" alt="" />
						</div>
						<div role="tabpanel" class="tab-pane " id="room-image3">
							<img src="assets/images/3-product.jpg" alt="" />
						</div>
						<div role="tabpanel" class="tab-pane " id="room-image4">
							<img src="assets/images/4-product.jpg" alt="" />
						</div>
						<div role="tabpanel" class="tab-pane " id="room-image5">
							<img src="assets/images/5-product.jpg" alt="" />
						</div>
						<div role="tabpanel" class="tab-pane " id="room-image6">
							<img src="assets/images/6-product.jpg" alt="" />
						</div>
					</div>
					<div class="room-thumbs">
						<div class="container">
							<div class="room-specs">
								<h4>ROOM <span>SPECS</span></h4>
								<ul class="features-list">
									<li><strong>Beds: :</strong> King</li>
									<li><strong>Size:</strong>  139 sqm/ 1,500sq.ft.</li>
									<li><strong>2021 rates:</strong> US $590 (excluding peak season)</li>
								</ul>
								<a class="book-now" href="{{url('/booking-form')}}" title="">Book Now</a>
							</div>
							<ul class="nav nav-tabs d-flex">
								<li >
									<a class="active" href="#room-image1" data-toggle="tab"><img src="assets/images/1-product-thmb.jpg" alt=""></a>
								</li>
								<li>
									<a href="#room-image2" data-toggle="tab"><img src="assets/images/2-product-thmb.jpg" alt=""></a>
								</li>
								<li>
									<a href="#room-image3" data-toggle="tab"><img src="assets/images/3-product-thmb.jpg" alt=""></a>
								</li>
								<li>
									<a href="#room-image4" data-toggle="tab"><img src="assets/images/4-product-thmb.jpg" alt=""></a>
								</li>
								<li>
									<a href="#room-image5" data-toggle="tab"><img src="assets/images/5-product-thmb.jpg" alt=""></a>
								</li>
								<li>
									<a href="#room-image6" data-toggle="tab"><img src="assets/images/6-product-thmb.jpg" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- Room Gallery -->
			</div>
		</section>

		<section>
			<div class="block remove-gap gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="package-single-detail">
								<span>Complimentry Services & Amenities</span>
								<h3 class="package-name">Super Star Luxury Hotle</h3>
								<div class="package-price">
									<strong>Start From</strong>
									<i>$559</i>
									<span>Per Person</span>
									<a class="book-now" href="{{url('/booking-form')}}" title="">Book Now</a>
								</div><!-- Package price -->
								<p>Prima luce, cum quibus mons aliud consensu ab eo. Praeterea iter est quasdam res quas ex communi. Etiam habebis sem dicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Contraegem facit qui id facit. Cum ceteris in veneratione tui montes, nascetur mus. Non equidem invideo, miror magis posuere velit aliquet. Priema luce, cum quibus mons aliud consensu ab eo. Praeterea iter est quasdam res dicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Contra legem facit qui id facit. Cum ceteris in veneratione tui montes, nascetur mus. Non equidem invideo, miror magis posuere velit aliquet. Prima luce, cum quibus mons aliud consensab eo. Praeterea iter est quasdam residicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagitis lacus vel augue laoreet rutrum faucibus. Contra legem facit qui id facit. Cum ceteris in veneratione tui montes, nascetur mus. Non equidem invideo, miror magis posuere velit aliquet. Prima luce, cum quibus mons aliud consensu ab eo. Praeterea iter est quasdam resdicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.Contra legem facit qui id facit. Cum ceteris in veneratione tui montes, nascetur mus. Non equidem invideo.</p>
								<div class="room-services">
									<div class="row">
										<div class="col-md-3">
											<div class="about-service">
												<span>OUR SERVICES</span>
												<h5>Rooms Facilities</h5>
												<p>Praeterea iter est quasdam resdican tur magna mollis euismodminim veni Contra legem facit qui id facit.</p>
											</div><!-- About Service -->
										</div>
										<div class="col-md-9">
											<ul>
												<li><i class="fa fa-unlink"></i>Air Conditioning</li>
												<li><i class="fa fa-unlink"></i>Room Service</li>
												<li><i class="fa fa-unlink"></i>Satellite TV</li>
												<li><i class="fa fa-unlink"></i>Deposit box</li>
												<li><i class="fa fa-unlink"></i>HDTV</li>
												<li><i class="fa fa-unlink"></i>Free Newspaper</li>
												<li><i class="fa fa-unlink"></i>Private Bathroom</li>
												<li><i class="fa fa-unlink"></i>Free WiFi</li>
												<li><i class="fa fa-unlink"></i>Hair Dryer</li>
												<li><i class="fa fa-unlink"></i>SI Pod </li>
												<li><i class="fa fa-unlink"></i>Deposit box</li>
												<li><i class="fa fa-unlink"></i>Tea Maker</li>
											</ul>
										</div>
									</div>
								</div><!-- Room Services -->
								<p>Prima luce, cum quibus mons aliud consensu ab eo. Praeterea iter est quasdam res quas ex communi. Etiam habebis sem dicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Contra egem facit qui id facit. Cum ceteris in veneratione tui montes, nascetur mus. Non equidem invideo, miror magis posuere velit aliquet. Priema luce, cum quibus mons aliud consensu ab eo. Praeterea iter est quasdam res dicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block remove-gap gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="side-title">PEOPLE <span>REVIEWS</span></h2>
							<div class="comments-thread">
								<ul>
									<li>
										<div class="comment">
											<img src="assets/images/comment-1.jpg" alt="" />
											<a class="reply" href="#" title="">Reply</a>
											<div class="comment-detail">
												<div class="comment-info">
													<h6>MARGARETTE <i>Says:</i></h6>
													<span>November 17, 2014</span>
													<span>at 9:55 am</span>
												</div>
												<div class="comment-rating">
													<span>Quality</span>
													<div class="stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<p>Curabitur blandit tempus porttitor. Maecenas sediam egetrius blandit sit accumsan urna molestie interdum.</p>
											</div>
										</div><!-- Comment -->
									</li>
									<li>
										<div class="comment">
											<img src="assets/images/comment-2.jpg" alt="" />
											<a class="reply" href="#" title="">Reply</a>
											<div class="comment-detail">
												<div class="comment-info">
													<h6>MARGARETTE <i>Says:</i></h6>
													<span>November 17, 2014</span>
													<span>at 9:55 am</span>
												</div>
												<div class="comment-rating">
													<span>Quality</span>
													<div class="stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<p>Curabitur blandit tempus porttitor. Maecenas sediam egetrius blandit sit accumsan urna molestie interdum.</p>
											</div>
										</div><!-- Comment -->
										<ul>
											<li>
												<div class="comment">
													<img src="assets/images/comment-1.jpg" alt="" />
													<a class="reply" href="#" title="">Reply</a>
													<div class="comment-detail">
														<div class="comment-info">
															<h6>MARGARETTE <i>Says:</i></h6>
															<span>November 17, 2014</span>
															<span>at 9:55 am</span>
														</div>
														<div class="comment-rating">
															<span>Quality</span>
															<div class="stars">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
														</div>
														<p>Curabitur blandit tempus porttitor. Maecenas sediam egetrius blandit sit accumsan urna molestie interdum.</p>
													</div>
												</div><!-- Comment -->
											</li>
										</ul>
									</li>
								</ul>
							</div><!-- Comments Thread -->
							<div class="block-gap"></div>
							<div class="comment-form">
								<h2 class="side-title">LEAVE <span>A REPLY</span></h2>
								<div class="input-fields">
									<div class="row">
										<div class="col-md-4"><input type="text" placeholder="Complete Name *" /></div>
										<div class="col-md-4"><input type="email" placeholder="Email Address *" /></div>
										<div class="col-md-4"><input type="text" placeholder="Website" /></div>
										<div class="col-md-12"><textarea placeholder="Enter Your Message"></textarea></div>
										<div class="col-md-12"><button class="book-now" type="submit">Submit Now</button></div>
									</div>
								</div>
							</div>

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
												<a href="packages-detail.html" title="">Honymoon Suite</a>
											</div>
										</div><!-- Offer -->
										<div class="offer">
											<img  src="assets/images/tour-footer-3.jpg" alt="" />
											<div class="offer-overlay">
												<span>Couple Room</span>
												<a href="packages-detail.html" title="">Honymoon Suite</a>
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
							<p><a href="https://html.webinane.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c89bbdb8b8a7babc88bfadaaa1a6a9a6ade6aba7a5">[email&#160;protected]</a></p>
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
