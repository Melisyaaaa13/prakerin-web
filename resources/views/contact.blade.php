<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Contact</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:400,600" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header>
		<div class="main-menu" id="main-menu">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div>
						<a class="navbar-brand" href="index.html">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<nav id="nav-menu-container" class="mx-auto">
						<ul class="nav-menu">
							<li><a href="/">Home</a></li>
							<li><a href="{{ url('archive') }}">Archive</a></li>
							<li><a href="{{ url('category') }}">Category</a></li>
							<li class="menu-has-children"><a href="">Pages</a>
								<ul>
									<li><a href="{{ url('post-details') }}">Post Details</a></li>
									<li><a href="{{ url('elements') }}">Elements</a></li>
								</ul>
							</li>
							<li class="menu-active"><a href="{{ url('contact') }}">Contact</a></li>
						</ul>
					</nav>
					<div class="navbar-right ml-auto">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start top-post Area -->
	<section class="top-post-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 p-0">
					<div class="hero-nav-area">
						<h1 class="text-white">Contact Us</h1>
						<p class="text-white link-nav">
							<a href="index.html">Home </a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="contact.html">Contact </a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-post Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row contact-wrap">
				<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
				<div class="col-lg-3 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Los Angeles, USA</h5>
							<p>
								56/8, Rocky beach road
							</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>00 (440) 9865 562</h5>
							<p>Mon to Fri 9am to 6 pm</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>support@colorlib.com</h5>
							<p>Send us your query</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">
							<div class="col-lg-6">
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-15 form-control" required="" type="text">

								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-15 form-control"
								 required="" type="email">
								<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'"
								 class="common-input mb-15 form-control" required="" type="text">
							</div>
							<div class="col-lg-6">
								<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="primary-btn fill" style="float: right;">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap-top">
		<div class="container">
			<div class="row pb-10">
				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget">
						<div class="mb-30">
							<img src="img/logo.png" alt="">
						</div>
						<p>
							Technology and gadgets Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones
							you’re most comfortable with. It has an iPhone-compatible jack at one end and a microphone module with an
							Answer/End/Pause button and a female 3.5mm audio jack for connectingheadphones
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget">
						<h6 class="heading">Quick Links</h6>
						<div class="row">
							<ul class="col footer-nav">
								<li><a href="#">Sitemaps</a></li>
								<li><a href="#">Categories</a></li>
								<li><a href="#">Archives</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">Ad Choice</a></li>
							</ul>
							<ul class="col footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Newsletters</a></li>
								<li><a href="#">Feedback</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="single-footer-widget mail-chimp">
						<h6 class="heading">Most Viewed News</h6>
						<div class="footer-news">
							<div class="single-news d-flex">
								<div class="image">
									<img class="img-fluid" src="img/n1.jpg" alt="">
								</div>
								<div class="details">
									<a href="#">
										<h4>Converter Ipod Video Taking Portable
											Video Viewing To A Whole Level</h4>
									</a>
									<div class="d-flex justify-content-between">
										<p>March 14, 2018</p>
										<p class="meta">
											<span class="lnr lnr-bubble"></span>
											<span class="likes">04</span>
										</p>
									</div>
								</div>
							</div>
							<div class="single-news d-flex">
								<div class="image">
									<img class="img-fluid" src="img/n2.jpg" alt="">
								</div>
								<div class="details">
									<a href="#">
										<h4>Converter Ipod Video Taking Portable
											Video Viewing To A Whole Level</h4>
									</a>
									<div class="d-flex justify-content-between">
										<p>March 14, 2018</p>
										<p class="meta">
											<span class="lnr lnr-bubble"></span>
											<span class="likes">04</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-text">
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-sm-6 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-rss"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/mn-accordion.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
