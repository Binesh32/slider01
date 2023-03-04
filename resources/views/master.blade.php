<!DOCTYPE html>

<head>
	@include('includes.head')

</head>

<body itemscope>
	<div class="theme-layout">


		@include('includes.header')

		@yield('content')


        @include('includes.footer')

		<div class="bottom-footer">
			<div class="container">
				<p>&copy; 2021 <a href="https://themeforest.net/item/hotel-room-minimalist-hotel-travel-html-template/12689422">Hotel Room</a> - All Rights Reserved - Made By <a href="https://themeforest.net/user/webinane/portfolio">Webinane</a></p>
			</div><!-- container -->
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
	</div>

	<script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>

	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="{{url('assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>

	<script src="{{url('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/jquery.poptrox.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/enscroll-0.5.2.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/jquery.scrolly.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/userincr.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/select2.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/check-radio-box.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/script.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/jquery.simpleWeather.min.js')}}"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		jQuery('.tp-banner').show().revolution({
			delay:15000,
			startwidth:1170,
			startheight:650,
			autoHeight:"off",
			navigationType:"none",
			hideThumbs:10,
			fullWidth:"on",
			fullScreen:"off",
			fullScreenOffsetContainer:""
		});

		$(".select").select2();

		$('.clients-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:30000,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:true,
			margin:10,
			items:5,
			autoHeight:true,
			responsive:{
				0:{items:1},
				600:{items:2},
				1000:{items:3},
				1200:{items:5}
			}
		});
	});

	$(window).load(function(){
		$('.destination-carousel').owlCarousel({
			autoplay:false,
			autoplayTimeout:30000,
			smartSpeed:2000,
			loop:false,
			dots:false,
			mouseDrag:true,
			nav:true,
			margin:30,
			items:2,
			autoHeight:true,
			autoplayHoverPause:true,
			URLhashListener:true,
			startPosition: 'URLHash',
			responsive:{
				0:{items:1},
				600:{items:2},
				1000:{items:2},
				1200:{items:2}
			}
		});

		$(".destination-slide").owlCarousel({
			autoplay:false,
			autoplayTimeout:30000,
			smartSpeed:2000,
			loop:false,
			dots:false,
			nav:false,
			items:1,
			singleItem:true,
			autoHeight:true,
			URLhashListener:true,
		});

	});
	</script>

</body>

</html>
