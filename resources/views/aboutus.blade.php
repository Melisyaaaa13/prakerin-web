<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 03:05:14 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ideabox - Material Blog/Magazine Template</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Tooltip plugin (zebra) css file -->
	<link rel="stylesheet" type="text/css" href="plugins/zebra-tooltip/zebra_tooltips.min.css">

	<!-- Ideabox main theme css file. you have to add all pages -->
	<link rel="stylesheet" type="text/css" href="css/main-style.css">

	<!-- Ideabox responsive css file -->
	<link rel="stylesheet" type="text/css" href="css/responsive-style.css">
</head>

<body>

	<!-- header start -->
	<header class="header">
		<div class="header-wrapper">

			<!--sidebar menu toggler start -->
			<div class="toggle-sidebar material-button">
				<i class="material-icons">&#xE5D2;</i>
			</div>
			<!--sidebar menu toggler end -->

			<!--logo start -->
			<div class="logo-box">
				<h1>
					<a href="index-2.html" class="logo"></a>
				</h1>
			</div>
			<!--logo end -->

			<div class="header-menu">

                <!-- header left menu start -->
                <ul class="header-navigation" data-show-menu-on-mobile>
                    <li>
                        <a href="#" class="material-button submenu-toggle">HOME</a>
                        <div class="header-submenu">
                            <ul>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="material-button submenu-toggle">POSTS</a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="{{ url('listtimeline') }}">List timeline</a></li>
                                <li><a href="{{ url('detailstandart') }}">Detail standart</a></li>
                                <li><a href="{{ url('detailslim') }}">Detail adbox 2</a></li>
                                <li><a href="{{ url('detailsidebar') }}">Left sidebar adbox</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="material-button submenu-toggle">VIDEO</a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="{{ url('videoplayer') }}">Video custom player</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="material-button submenu-toggle">EXTRA PAGES <i class="material-icons">&#xE313;</i></a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="{{ url('authors') }}">Authors</a></li>
                                <li><a href="{{ url('aboutus') }}">About us</a></li>
                                <li><a href="{{ url('privacy') }}">Privacy policy</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header left menu end -->

			</div>
			<div class="header-right with-seperator">

				<!-- header right menu start -->
				<ul class="header-navigation">
					<li>
						<a href="#" class="material-button search-toggle"><i class="material-icons">&#xE8B6;</i></a>
					</li>
					<li>
						<a href="#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span class="hide-on-tablet">Account</span></a>
						<div class="header-submenu">
							<ul>
								<li><a href="#" data-modal="loginModal">Login</a></li>
								<li><a href="#" data-modal="registerModal">Register</a></li>
							</ul>
						</div>
					</li>
					<li class="hide-on-mobile"><a href="#" class="material-button" data-modal="newsletterModal"><i class="material-icons">&#xE0E1;</i></a></li>
				</ul>
				<!-- header right menu end -->

			</div>

			<!--header search panel start -->
			<div class="search-bar">
				<form class="search-form">
					<div class="search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="search-input">
						<button type="submit" name="search" class="search-submit"><i class="material-icons">&#xE5C8;</i></button>
					</div>
					<span class="search-close search-toggle">
						<i class="material-icons">&#xE5CD;</i>
					</span>
				</form>
			</div>
			<!--header search panel end -->

		</div>
	</header>
	<!-- header end -->


	<!-- Left sidebar menu start -->
	<div class="sidebar">
		<div class="sidebar-wrapper">

			<!-- side menu logo start -->
			<div class="sidebar-logo">
				<a href="#"></a>
				<div class="sidebar-toggle-button">
					<i class="material-icons">&#xE317;</i>
				</div>
			</div>
			<!-- side menu logo end -->

			<!-- showing on mobile screen sizes -->
			<!-- mobile menu start -->
			<div id="mobileMenu">
				<div class="sidebar-seperate"></div>
			</div>
			<!-- mobile menu end -->

			<!-- sidebar menu start -->
			<ul class="sidebar-menu">
				<li class="active">
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
	                	<span class="menu-label">Home</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
	                	<span class="menu-label">Videos</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE0BF;</i></span>
	                	<span class="menu-label">Posts</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE866;</i></span>
	                	<span class="menu-label">Contact</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE8B0;</i></span>
	                	<span class="menu-label">Multi Menu</span>
	                	<span class="multimenu-icon"><i class="material-icons">&#xE313;</i></span>
	                </a>
	                <ul>
	                	<li>
	                		<a href="#"><span class="menu-label">Menu Level 1</span></a>
	                	</li>
	                	<li>
	                		<a href="#"><span class="menu-label">Menu Level 2</span></a>
	                	</li>
	                	<li>
	                		<a href="#"><span class="menu-label">Menu Level 3</span></a>
	                	</li>
	                </ul>
	            </li>
			</ul>
			<!-- sidebar menu end -->

			<div class="sidebar-seperate"></div>

			<!-- sidebar menu start -->
			<ul class="sidebar-menu">
				<li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
	                	<span class="menu-label">Extra Menu One</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE8B0;</i></span>
	                	<span class="menu-label">Extra Menu Two</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="material-button">
						<span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
	                	<span class="menu-label">Extra Menu Three</span>
	                </a>
	            </li>
			</ul>
			<!-- sidebar menu end -->

			<div class="sidebar-seperate"></div>

			<!-- sidebar menu start -->
			<ul class="sidebar-menu">
				<li>
					<a href="#" class="facebook material-button">
	                	<span class="menu-label">Facebook</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="twitter material-button">
	                	<span class="menu-label">Twitter</span>
	                </a>
	            </li>
	            <li>
					<a href="#" class="google-plus material-button">
	                	<span class="menu-label">Google +</span>
	                </a>
	            </li>
			</ul>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="main-container">

		<section class="main-content extra-pages">
			<div class="main-content-wrapper add-to-margin">
				<div class="content-body">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-content">
							<h1 class="extra-title">About Us</h1>
							<div class="article-inner">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<figure>
									<img src="img/news-test-images/news-img9.jpg">
									<figcaption>
										Image Caption
									</figcaption>
								</figure>

								<h4>Why do we use it?</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>


								<h4>Where does it come from?</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

								<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

								<h4>Where can I get some?</h4>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

								<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>


								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

								<h4>It has survived not only five centuries</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

						</div>
					</article>
					<!-- article body end -->

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="sidebar-spacer"></div>
						<div class="sidebar-button-group">
							<a href="about-us.html" class="sidebar-buttons material-button active"><i class="material-icons">&#xE851;</i><span class="btn-label">About Us</span></a>
							<a href="authors.html" class="sidebar-buttons material-button"><i class="material-icons">&#xE866;</i><span class="btn-label">Authors</span></a>
							<a href="privacy-policy.html" class="sidebar-buttons material-button"><i class="material-icons">&#xE87F;</i><span class="btn-label">Privacy Policy</span></a>
							<a href="contact.html" class="sidebar-buttons material-button"><i class="material-icons">&#xE894;</i><span class="btn-label">Contacts</span></a>
						</div>


					</div>
				</div>
			</div>
		</section>

	</main>

	<!-- Register popup html source start -->
	<div class="m-modal-box" id="registerModal">
		<div class="m-modal-overlay"></div>
		<div class="m-modal-content small">
			<div class="m-modal-header">
				<h3 class="m-modal-title">Register</h3>
				<span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
			</div>
			<div class="m-modal-body">
				<div class="m-modal-social-logins">
					<div class="columns column-2">
						<button class="frm-button facebook material-button full" type="button">Facebook</button>
					</div>
					<div class="columns column-2">
						<button class="frm-button twitter material-button full" type="button">Twitter</button>
					</div>
					<div class="columns column-2">
						<button class="frm-button google material-button full" type="button">Google</button>
					</div>
				</div>

				<div class="m-modal-seperator"><span>OR</span></div>

				<form>
					<div class="frm-row">
						<input class="frm-input" type="text" name="name" placeholder="Name">
					</div>
					<div class="frm-row">
						<input class="frm-input" type="text" name="username" placeholder="Username">
					</div>
					<div class="frm-row">
						<input class="frm-input" type="text" name="email" placeholder="Email">
					</div>
					<div class="frm-row">
						<input class="frm-input" type="text" name="password" placeholder="Password">
					</div>
					<div class="frm-row">
						<label class="frm-check-radio-label"><input type="checkbox" name="test"> <span>I accept your <a href="#">register policy</a>.</span></label>
					</div>
					<div class="frm-row">
						<button class="frm-button material-button full" type="button">Register</button>
					</div>
				</form>
				<div class="frm-row">
					<p class="txt-center">Do you already have an account? <a href="#" data-modal="loginModal">Login</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Register popup html source end ---->

	<!-- Login popup html source start -->
	<div class="m-modal-box" id="loginModal">
		<div class="m-modal-overlay"></div>
		<div class="m-modal-content small">
			<div class="m-modal-header">
				<h3 class="m-modal-title">Login</h3>
				<span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
			</div>
			<div class="m-modal-body">
				<div class="m-modal-social-logins">
					<div class="columns column-3">
						<button class="frm-button facebook material-button full" type="button">Facebook</button>
					</div>
					<div class="columns column-3">
						<button class="frm-button google material-button full" type="button">Google</button>
					</div>
				</div>

				<div class="m-modal-seperator"><span>OR</span></div>

				<form>
					<div class="frm-row">
						<input class="frm-input" type="text" name="email" placeholder="Email">
					</div>
					<div class="frm-row">
						<input class="frm-input" type="text" name="password" placeholder="Password">
					</div>
					<div class="frm-row">
						<button class="frm-button material-button full" type="button">Login</button>
					</div>
				</form>
				<div class="frm-row">
					<p class="txt-center">Don't you have an account yet? <a href="#" data-modal="registerModal">Register</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Login popup html source end -->

	<!-- Newsletter popup html source start -->
	<div class="m-modal-box" id="newsletterModal">
		<div class="m-modal-overlay"></div>
		<div class="m-modal-content small">
			<div class="m-modal-header">
				<h3 class="m-modal-title">Newsletter</h3>
				<span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
			</div>
			<div class="m-modal-body">
				<p>Submit to our newsletter to receive exclusive stories delivered to you inbox!</p>
				<form>
					<div class="frm-row">
						<input class="frm-input" type="text" name="email" placeholder="Email address">
					</div>
					<div class="frm-row">
						<button class="frm-button material-button full" type="button">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Newsletter popup html source end -->

	<div class="overlay"></div>

	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Tooltip plugin (zebra) js file -->
	<script src="plugins/zebra-tooltip/zebra_tooltips.min.js"></script>

	<!-- Owl Carousel plugin js file -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>

	<!-- Ideabox theme js file. you have to add all pages. -->
	<script src="js/main-script.js"></script>


</body>


<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 03:05:14 GMT -->
</html>