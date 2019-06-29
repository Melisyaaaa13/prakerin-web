<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/detail-with-slim-adbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 03:05:10 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ideabox - Material Blog/Magazine Template</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Tooltip plugin (zebra) css file -->
	<link rel="stylesheet" type="text/css" href="plugins/zebra-tooltip/zebra_tooltips.min.css">

	<!-- Owl Carousel plugin css file. only used pages -->
	<link rel="stylesheet" type="text/css" href="plugins/owl-carousel/assets/owl.carousel.min.css">

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

		<section class="sub-highlight">

			<!-- Detail parallax start -->
			<div class="parallax-box">
				<div class="parallax-image" style="background-image: url(img/news-test-images/news-img9.jpg);"></div>
				<article class="post-box">
		    		<div class="post-overlay">
		    			<div class="post-overlay-inner">
			    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
			    			<h1 class="post-title">Lorem Ipsum is simply dummy text of the printing</h1>
			    			<div class="post-meta">
			    				<div class="post-meta-author-avatar">
			    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
			    				</div>
			    				<div class="post-meta-author-info">
			    					<span class="post-meta-author-name">
			    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
			    					</span>
			    					<span class="middot">·</span>
			    					<span class="post-meta-date">
			    						<abbr class="published updated" title="December 4, 2017">7 hours ago</abbr>
			    					</span>
			    				</div>
			    			</div>
		    			</div>
		    		</div>
		    	</article>
			</div>
			<!-- Detail parallax end -->

		</section>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-header">
							<div class="breadcrumb">
								<ul>
									<li><a href="#"><span>Home</span></a> <i class="material-icons">&#xE315;</i></li>
									<li><a href="#"><span>Technology</span></a> <i class="material-icons">&#xE315;</i></li>
									<li><span>Lorem Ipsum is simply dummy text of the printing and typesetting</span></li>
								</ul>
							</div>
						</div>
						<div class="article-content adbox120"> <!-- adbox120 or adbox160 -->
							<div class="article-left-box">
								<div class="article-left-box-inner">
									<a href="#">
										<img src="img/adbox120x600.png" width="120" height="600">
									</a>
								</div>
							</div>
							<div class="article-inner">
								<div class="article-description">
									Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</p>
								<ul>
									<li>galley of type and scrambled</li>
									<li>text of the printing</li>
									<li>lorem Ipsum has been the industry</li>
									<li>and more recently with desktop</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</p>
								<h3>It was popularised in the 1960s with the </h3>
								<p>release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<figure>
									<img src="img/news-test-images/news-img11.jpg">
									<figcaption>
										Image Caption
									</figcaption>
								</figure>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h4>It has survived not only five centuries</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<blockquote>
  									Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while. That's because they were able to connect experiences they've had and synthesize new things.
  									<span>Steve Jobs</span>
								</blockquote>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
								<figure class="left">
									<img src="img/news-test-images/news-img8.jpg" width="300">
									<figcaption>
										Image Caption
									</figcaption>
								</figure>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic</p>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

								<!-- article sources area start -->
								<div class="article-source-box">
									<div class="source-item">
										<span class="source-subtitle">Source : </span>
										<span class="source-url">https://themeforest.net/item/ideabox-mobile-web-ui-template/20489553</span>
									</div>
									<div class="source-item">
										<span class="source-subtitle">Source : </span>
										<span class="source-url">https://help.market.envato.com/hc/en-us/articles/202499864-How-to-Withdraw-Earnings</span>
									</div>
								</div>
								<!-- article sources area end -->

								<!-- article tags area start -->
								<div class="article-tags">
									<span class="tag-subtitle">Tags : </span>
									<a href="#">theme</a><span class="tag-dot"></span>
									<a href="#">template</a><span class="tag-dot"></span>
									<a href="#">mobile ui</a>
								</div>
								<!-- article tags area end -->
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

							<!-- More article unit start -->
							<div class="more-article">
								<div class="w-header">
									<div class="w-title">Continue Reading</div>
									<div class="w-seperator"></div>
								</div>
								<div class="more-posts">
									<div class="columns column-2">

								    	<article class="post-box" style="background-image: url(img/news-test-images/news-img5.jpg);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>
								    <div class="columns column-2">

								    	<article class="post-box" style="background-image: url(img/news-test-images/news-img1.jpg);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>
								    <div class="columns column-2">

								    	<article class="post-box" style="background-image: url(img/news-test-images/news-img6.jpg);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">John Doe</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>


								</div>
							</div>
							<!-- More article unit end -->

							<!-- article comment area start -->
							<div class="article-comments">
								<div class="w-header">
									<div class="w-title">Comments (7)</div>
									<div class="w-seperator"></div>
								</div>
								<div class="comment-form">
									<form>
										<div class="comment-columns">
											<div class="frm-row columns column-2">
												<input type="text" name="n" placeholder="Name" class="frm-input">
											</div>
											<div class="frm-row columns column-2">
												<input type="text" name="e" placeholder="Email" class="frm-input">
											</div>
											<div class="frm-row columns column-2">
												<input type="text" name="w" placeholder="Website" class="frm-input">
											</div>
										</div>
										<div class="frm-row">
											<textarea class="frm-input" rows="4" placeholder="Your comments..."></textarea>
										</div>
										<div class="frm-row">
											<div class="comment-form-notice columns column-4">
												<div>Your comments must be minimum 30 charachter.</div>
												<div>You are commenting as a visitor, you can <a href="#" data-modal="loginModal">login</a> or <a href="#" data-modal="registerModal">register</a></div>
											</div>
											<div class="columns column-2">
												<button type="button" class="frm-button full material-button">Send your comment</button>
											</div>
											<div class="clearfix"></div>
										</div>

									</form>
								</div>
								<div class="all-comments">

									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<span class="author-name">Visitor</span> -
												<span class="comment-date">3 hours ago</span>
											</div>
											<div class="comment-wrapper">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
											</div>
											<div class="comment-meta">
												<span class="replay-button">Replay</span>
												<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
												<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
											</div>
										</div>
									</div>
									<!-- comment item end -->

									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<span class="author-name">Visitor</span> -
												<span class="comment-date">3 hours ago</span>
											</div>
											<div class="comment-wrapper">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											</div>
											<div class="comment-meta">
												<span class="replay-button">Replay</span>
												<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+2</span></button>
												<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
											</div>
										</div>
									</div>
									<!-- comment item end -->

									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<a href="#" class="author-name">Mr. Spock</a> -
												<span class="comment-date">3 hours ago</span>
											</div>
											<div class="comment-wrapper">
												Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
											</div>
											<div class="comment-meta">
												<span class="replay-button">Replay</span>
												<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+1</span></button>
												<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-12</span></button>
											</div>

											<!-- comment item start -->
											<div class="comment-item">
												<div class="comment-avatar">
													<span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" width="50" height="50"></span>
												</div>
												<div class="comment-content">
													<div class="comment-header">
														<span class="author-name">Visitor</span> -
														<span class="comment-date">3 hours ago</span>
													</div>
													<div class="comment-wrapper">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
													</div>
													<div class="comment-meta">
														<span class="replay-button">Replay</span>
														<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
														<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
													</div>

													<!-- comment item start -->
													<div class="comment-item">
														<div class="comment-avatar">
															<span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
														</div>
														<div class="comment-content">
															<div class="comment-header">
																<a href="#" class="author-name">Mr. Spock</a> -
																<span class="comment-date">3 hours ago</span>
															</div>
															<div class="comment-wrapper">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
															</div>
															<div class="comment-meta">
																<span class="replay-button">Replay</span>
																<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
																<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
															</div>
														</div>
													</div>
													<!-- comment item end -->

												</div>
											</div>
											<!-- comment item end -->

											<!-- comment item start -->
											<div class="comment-item">
												<div class="comment-avatar">
													<span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
												</div>
												<div class="comment-content">
													<div class="comment-header">
														<a href="#" class="author-name">Mr. Spock</a> -
														<span class="comment-date">3 hours ago</span>
													</div>
													<div class="comment-wrapper">
														Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
													</div>
													<div class="comment-meta">
														<span class="replay-button">Replay</span>
														<button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
														<button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
													</div>
												</div>
											</div>
											<!-- comment item end -->

										</div>
									</div>
									<!-- comment item end -->

								</div>
							</div>
							<!-- article comment area start -->

						</div>
					</article>
					<!-- article body end -->


				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Editor's Picks</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>
									<li class="active">
										<a href="#" style="background-image: url(img/news-test-images/news-img7.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>1</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img5.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>2</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img6.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>3</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img3.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>4</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Carousel Posts</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-carousel-post">
								<div class="owl-carousel" id="widgetCarousel">
								    <div class="item">
								    	<a href="#">
								    		<div class="w-play-img">
								    			<img src="img/news-test-images/news-img4.jpg" width="300">
								    			<span class="w-video-icon"><i class="material-icons">&#xE038;</i></span>
								    		</div>
								    		<span class="w-post-title">It has roots in a piece of classical Latin literature from</span>

								    	</a>
								    </div>
								    <div class="item">
								    	<a href="#">
								    		<img src="img/news-test-images/news-img5.jpg" width="300">
								    		<span class="w-post-title">Lorem Ipsum used since</span>
								    	</a>
								    </div>
								    <div class="item">
								    	<a href="#">
								    		<img src="img/news-test-images/news-img6.jpg" width="300">
								    		<span class="w-post-title">English versions from the 1914 translation</span>
								    	</a>
								    </div>
								    <div class="item">
								    	<a href="#">
								    		<img src="img/news-test-images/news-img7.jpg" width="300">
								    		<span class="w-post-title">The standard chunk of Lorem Ipsum used since</span>
								    	</a>
								    </div>
								</div>
							</div>
						</div>

						<div class="seperator"></div>

						<a href="#" class="widget-ad-box">
							<img src="img/adbox300x250.png" width="300" height="250">
						</a>


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

	<script type="text/javascript">

		//widget carousel initialize
		$('#widgetCarousel').owlCarousel({
		    dots:true,
		    nav:false,
		    items:1
		})

	</script>

</body>


<!-- Mirrored from tevratgundogdu.com/works/ideabox-html-template/detail-with-slim-adbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 03:05:11 GMT -->
</html>
