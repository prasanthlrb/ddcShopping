<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>DDC | Home</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav_icon.ico">

		<!-- Google web fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Yantramanav:400,700,900,300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="js/colorpicker/colorpicker.css">
		<link rel="stylesheet" href="js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- JS Libs
		============================================ -->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/queryloader2.min.js"></script>
		
		<script>

			$(document).ready(function(){

				$("body").queryLoader2({
	    			barHeight : 4,
	    			backgroundColor : '#fff',
	    			barColor : '#ff6a00',
	    			minimumTime : 2000,
	    			onComplete : function(){

						// show promo popup
	    				if($.arcticmodal && $('body').hasClass('promo_popup')){
							$.arcticmodal({
								url : "modals/promo.html"
							});
						}

	    			}
	    		});

			});

		</script>
		
		<script src="js/modernizr.js"></script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
	</head>
	<body class="front_page promo_popup">
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=194364450619191";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- - - - - - - - - - - - - - Styleswitcher - - - - - - - - - - - - - - - - -->
<!-- 
		<div id="styleswitcher">

			<button class="icon_btn middle_btn open_styleswitcher"><i class="icon-cog-alt"></i></button>

			<div class="dropdown stsw">

				<div class="animated_item">

					<h3 class="title">Style Switcher</h3>

				</div>

				<div class="animated_item">

					Layout type
					<div class="sw_section switch">

						<button class="theme_button active" data-layout="wide">Wide</button>
						<button class="theme_button" data-layout="boxed">Boxed</button>

					</div>

					Header style
					<div class="sw_section">

						<div class="custom_select" id="change_header_type">

							<select>

								<option value="Header 1">Header 1</option>
								<option value="Header 2">Header 2</option>
								<option value="Header 3">Header 3</option>
								<option value="Header 4">Header 4</option>
								<option value="Header 5">Header 5</option>
								<option value="Header 6">Header 6</option>

							</select>

						</div>

					</div>

					Footer style
					<div class="sw_section">

						<div class="custom_select" id="change_footer_type">

							<select>

								<option value="Footer 1">Footer 1</option>
								<option value="Footer 2">Footer 2</option>
								<option value="Footer 3">Footer 3</option>
								<option value="Footer 4">Footer 4</option>
								<option value="Footer 5">Footer 5</option>
								<option value="Footer 6">Footer 6</option>

							</select>

						</div>

					</div>

					Background for boxed layout
					<div class="sw_section">

						<div class="custom_select" id="bg_change_select">

							<select>

								<option value="Color">Color</option>
								<option value="Image">Image</option>

							</select>

						</div>

					</div>
					<div class="sw_section bg_color">

						<div class="title">Background color:</div> 

						<div class="wrapper">

							<button class="change_bg" id="change_bg_color"></button>

						</div>

					</div>
					<div class="sw_section bg_images">

						<div class="title">Background image:</div> 

						<div class="wrapper">

							<button class="change_bg" data-src="images/image_bg_1.jpg"></button>
							<button class="change_bg" data-src="images/image_bg_2.jpg"></button>

						</div>

					</div>

					<div class="sw_section">

						<button id="sw_reset" class="button_grey middle_btn">Reset</button>

					</div>

				</div>

			</div>

		</div> -->

		<!-- - - - - - - - - - - - - - end Styleswitcher - - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Cookie Message - - - - - - - - - - - - - - - - -->

		<!-- <div class="cookie_message">

			<div class="container">

				<div class="on_the_sides">

					<div class="left_side">Please note this website requires cookies in order to function correctly, they do not store any specific information about your personally.</div>

					<div class="right_side">

						<div class="buttons_row">

							<a href="#" class="button_blue accept_cookie">Accept Cookies</a>

							<a href="#" class="button_dark_grey">Read More</a>

						</div>

					</div>

				</div>

			</div>

		</div> -->

		<!-- - - - - - - - - - - - - - End of Cookie Message - - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Old ie alert message - - - - - - - - - - - - - - - - -->

		<!--[if lt IE 9]>

			<div class="ie_alert_message">

				<div class="container">

					<div class="on_the_sides">

						<div class="left_side">

							<i class="icon-attention-5"></i> <span class="bold">Attention!</span> This page may not display correctly. You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</span>

						</div>
	
						<div class="right_side">

							<a target="_blank" href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_black">Update Now!</a>

						</div>

					</div>

				</div>

			</div>
				
		<![endif]-->

		<!-- - - - - - - - - - - - - - End of old ie alert message - - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_5">

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="container">

						<div class="row">

							<div class="main_header_row">

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

									<a href="/" class="logo">

										<img src="images/logo.png" alt="">

									</a>

									<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-lg-6 col-md-5 col-sm-5">

									<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

									<div class="call_us">

										<span>Call us toll free:</span> <b>(+971) 2- 6444043</b>

									</div><!--/ .call_us-->

									<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

									<form class="clearfix search">

										<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">
										
										<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

										<div class="search_category alignleft">

											<div class="open_categories">All Categories</div>

											<ul class="categories_list dropdown">

												<li class="animated_item"><a href="#">Computers &amp; Tablets</a></li>
												<li class="animated_item"><a href="#">TV &amp; Video</a></li>
												<li class="animated_item"><a href="#">Home Theater amp; Audio</a></li>
												<li class="animated_item"><a href="#">Cameras &amp; Accessories</a></li>
												<li class="animated_item"><a href="#">Printer amp; Scanner</a></li>
												<li class="animated_item"><a href="#">Moniter &amp; Display</a></li>
												<li class="animated_item"><a href="#">Cell Phone</a></li>

											</ul>

										</div><!--/ .search_category.alignleft-->

										<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

										<button class="button_blue def_icon_btn alignleft"></button>

									</form><!--/ #search-->
									
									<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-lg-3 col-sm-4">

									<div class="clearfix">

										<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

										<div class="alignright site_settings">

											<span class="current open_"><img src="images/flag_en.jpg" alt="">English</span>

											<ul class="dropdown site_setting_list language">

												<li class="animated_item"><a href="#"><img src="images/flag_en.jpg" alt=""> English</a></li>
												<li class="animated_item"><a href="#"><img src="images/flag_g.jpg" alt=""> German</a></li>
												<li class="animated_item"><a href="#"><img src="images/flag_s.jpg" alt=""> Spanish</a></li>

											</ul>

										</div><!--/ .alignright.site_settings-->

										<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
										
										<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

										<div class="alignright site_settings currency">

											<span class="current open_">USD</span>

											<ul class="dropdown site_setting_list">

												<li class="animated_item"><a href="#">USD</a></li>
												<li class="animated_item"><a href="#">EUR</a></li>
												<li class="animated_item"><a href="#">GBP</a></li>

											</ul>

										</div><!--/ .alignright.site_settings.currency-->

										<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix-->

									<!-- - - - - - - - - - - - - - Loginbox & Wishlist & Compare - - - - - - - - - - - - - - - - -->

									<ul class="account_bar">

										<li>
											
											<a href="/wishlist" class="wishlist_button" data-amount="7"></a>

										</li>

										<li>

											<a href="/compare" class="compare_button" data-amount="3"></a>

										</li>

										<li>

											<div class="login_box"><div class="login_box_inner">Welcome visitor <a href="#" data-modal-url="modals/login.html">Login</a> or <a href="#">Register</a></div></div>

										</li>

									</ul><!--/ .account_bar-->

									<!-- - - - - - - - - - - - - - End Loginbox & Wishlist & Compare - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

							</div><!--/ .main_header_row-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

				<div id="main_navigation_wrap">

					<div class="container">

						<div class="row">

							<div class="col-xs-12">

								<!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

								<div class="sticky_inner type_2">

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_3">

										<button class="open_categories_sticky">Categories</button>

										<!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->

										<ul class="theme_menu cats dropdown">

											<li class="has_megamenu animated_item"><a href="#"><b>Todays Deals</b></a></li>
											<li class="has_megamenu animated_item"><a href="#"><b>Most Popular</b></a></li>
											<li class="has_megamenu animated_item"><a href="#"><b>New Arrivals</b></a></li>

											<li class="has_megamenu animated_item">

												<a href="#">Computers & Tablets</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div class="mega_menu clearfix">

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													{{-- <div class="mega_menu_item">
													
														<ul class="list_of_links">

															<li><a href="#">Allergy &amp; Sinus</a></li>
															<li><a href="#">Childrens Healthcare</a></li>
															<li><a href="#">Cough, Cold &amp; Flu</a></li>
															<li><a href="#">Diabetes Management</a></li>
															<li><a href="#">Digestion &amp; Nausea</a></li>
															<li><a href="#">Eye Care</a></li>
															<li><a href="#">First Aid</a></li>
															<li><a href="#">Foot Care</a></li>
															<li><a href="#">Health Clearance</a></li>

														</ul>

													</div> --}}
													
													<!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

													{{-- <div class="mega_menu_item">

														<ul class="list_of_links">

															<li><a href="#">Home Health Care</a></li>
															<li><a href="#">Home Tests</a></li>
															<li><a href="#">Incontinence Aids</a></li>
															<li><a href="#">Natural &amp; Homeopathic</a></li>
															<li><a href="#">Pain &amp; Fever Relief</a></li>
															<li><a href="#">Skin Condition Treatments</a></li>
															<li><a href="#">Sleep &amp; Snoring aids</a></li>
															<li><a href="#">Stop Smoking Aids</a></li>
															<li><a href="#">Support &amp; Braces</a></li>

														</ul>

													</div> --}}
													<!--/ .mega_menu_item-->

													<!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

												</div><!--/ .mega_menu-->

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item">

												<a href="#">TV & Video</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<!-- <div class="mega_menu type_2 clearfix">

													

													
													
													<div class="mega_menu_item">
														
														<a href="#">
															<img src="images/mega_menu_img_1.jpg" alt="">
														</a>

													</div>
													
												</div>
												 -->
											</li>
											<li class="has_megamenu animated_item">

												<a href="#">Home Theater & Audio</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div class="mega_menu clearfix">

													<!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

												

												</div><!--/ .mega_menu-->

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item">

												<a href="#">Cameras & Camcorders</a>

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

											

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

											</li>
											<li class="has_megamenu animated_item"><a href="#">Printers & Scanners</a></li>
											<li class="has_megamenu animated_item"><a href="#">Monitors & Displays</a></li>
											<li class="has_megamenu animated_item"><a href="#">Cell Phones</a></li>
											<li class="has_megamenu animated_item"><a href="#">GPS Navigation</a></li>
											<li class="has_megamenu animated_item"><a href="#" class="all"><b>All Categories</b></a></li>

										</ul>

										<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item">

										<nav class="main_navigation">

											<ul>

												<li><a href="/">Home</a></li>
												<li><a href="/account/account">My Account</a></li>
												<li><a href="/cart">Shopping Cart</a></li>
												<li><a href="/checkout">Checkout</a></li>
												<li><a href="/contact">Contact Us</a></li>
												<!-- <li class="has_submenu">

													<a href="index.html">Pages</a>

													

													<ul class="theme_menu submenu">
														
														<li class="has_submenu">

															<a href="index.html">Homepage Layouts</a>

															

															<ul class="theme_menu submenu">

																<li><a href="index.html">Home 1</a></li>
																<li><a href="home_v2.html">Home 2</a></li>
																<li><a href="home_v3.html">Home 3</a></li>
																<li><a href="home_v4.html">Home 4</a></li>
																<li><a href="home_v5.html">Home 5</a></li>
																<li><a href="home_v6.html">Home 6</a></li>

															</ul>

														

														</li>

														<li class="has_submenu">

															<a href="category_page_v1.html">Category Page Layouts</a>

															

															<ul class="theme_menu submenu">

																<li><a href="category_page_v1.html">Category page 1</a></li>
																<li><a href="category_page_v2.html">Category page 2</a></li>
																<li><a href="category_page_v3.html">Category page 3</a></li>
																<li><a href="category_page_v4.html">Category page 4</a></li>

															</ul>

														

														</li>

														<li class="has_submenu">

															<a href="product_page_v1.html">Product Page Layouts</a>

														

															<ul class="theme_menu submenu">

																<li><a href="product_page_v1.html">Product page 1</a></li>
																<li><a href="product_page_v2.html">Product page 2</a></li>
																<li><a href="product_page_v3.html">Product page 3</a></li>

															</ul>

														

														</li>

														<li class="has_submenu">

															<a href="shop_shopping_cart.html">Other Shop Pages</a>

															

															<ul class="theme_menu submenu">

																<li><a href="shop_shopping_cart.html">Shopping cart</a></li>
																<li><a href="shop_checkout.html">Checkout</a></li>
																<li><a href="shop_wishlist.html">Wishlist</a></li>
																<li><a href="shop_product_comparison.html">Product Comparison</a></li>
																<li><a href="shop_my_account.html">My Account</a></li>
																<li><a href="shop_manufacturers.html">Manufacturers</a></li>
																<li><a href="shop_manufacturer_page.html">Manufacturer Page</a></li>
																<li><a href="shop_orders_list.html">Order List</a></li>
																<li><a href="shop_order_page.html">Order Page</a></li>

															</ul>

															

														</li>

														<li class="has_submenu">

															<a href="additional_page_about.html">Additional Pages</a>

															

															<ul class="theme_menu submenu">

																<li><a href="additional_page_about.html">About Us</a></li>
																<li><a href="additional_page_contact.html">Contact Us</a></li>
																<li><a href="additional_page_faq.html">FAQ</a></li>
																<li><a href="additional_page_404.html">404 Page</a></li>
																<li><a href="additional_page_sitemap.html">Sitemap</a></li>

															</ul>

															

														</li>

														<li class="has_submenu">

															<a href="extra_stuff_elements.html">Extra Stuff</a>

															

															<ul class="theme_menu submenu">

																<li><a href="extra_stuff_elements.html">Elements</a></li>
																<li><a href="extra_stuff_typography.html">Typography</a></li>
																<li><a href="extra_stuff_columns.html">Columns</a></li>

															</ul>

															

														</li>

														<li class="has_submenu">

															<a href="blog_v1.html">Blog Pages</a>

														

															<ul class="theme_menu submenu">

																<li><a href="blog_v1.html">Blog v1</a></li>
																<li><a href="blog_v2.html">Blog v2</a></li>
																<li><a href="blog_v3.html">Blog v3</a></li>
																<li><a href="blog_post_v1.html">Blog Post v1</a></li>
																<li><a href="blog_post_v2.html">Blog Post v2</a></li>

															</ul>

															

														</li>

													</ul>

												

												</li> -->

											</ul>

										</nav><!--/ .main_navigation-->

									</div>

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_3">

										<button id="open_shopping_cart" class="open_button" data-amount="3">
											<b class="title">My Cart</b>
											<b class="total_price">$999.00</b>
										</button>

										<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

										<div class="shopping_cart dropdown">

												<div class="animated_item">

													<p class="title">Recently added item(s)</p>

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_1.jpg" alt=""></a>

														<a href="#" class="product_name">Natural Factors PGX Daily Ultra Matrix...</a>

														<p>1 x $499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_2.jpg" alt=""></a>

														<a href="#" class="product_name">Oral-B Glide Pro-Health Floss...</a>

														<p>1 x $499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_3.jpg" alt=""></a>

														<a href="#" class="product_name">Culturelle Kids! Probi-<br>otic Packets 30 ea</a>

														<p>1 x $499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

													<ul class="total_info">

														<li><span class="price">Tax:</span> $0.00</li>

														<li><span class="price">Discount:</span> $37.00</li>

														<li class="total"><b><span class="price">Total:</span> $999.00</b></li>

													</ul>
													
													<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<a href="#" class="button_grey">View Cart</a>

													<a href="#" class="button_blue">Checkout</a>

												</div><!--/ .animated_item-->

											</div><!--/ .shopping_cart.dropdown-->
										
										<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

								</div><!--/ .sticky_inner -->

								<!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .main_navigation_wrap-->

				<!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

			</header>
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

            @yield('content')

			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

			<footer id="footer" class="type_5">

				<!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

				<div class="footer_section_2">

					<div class="container">
						
						<div class="row">
							
							<!-- - - - - - - - - - - - - - Newsletter - - - - - - - - - - - - - - - - -->

							<div class="col-md-6 col-sm-7">

								<section class="streamlined_type_2">
								
									<h4 class="streamlined_title">Sign up to our newsletter</h4>

									<form class="newsletter subscribe" novalidate>

										<input type="email" name="sc_email" placeholder="Enter your email address">

										<button class="button_blue def_icon_btn"></button>

									</form>

								</section><!--/ .streamlined-->

							</div><!--/ [col]-->
							
							<!-- - - - - - - - - - - - - - End newsletter - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Follow us - - - - - - - - - - - - - - - - -->

							<div class="col-md-6 col-sm-5">

								<section class="streamlined">
								
									<h4 class="streamlined_title">Follow Us</h4>

									<!-- - - - - - - - - - - - - - Social icons list - - - - - - - - - - - - - - - - -->

									<ul class="social_btns">

										<li>
											<a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_pinterest tooltip_container"><i class="icon-pinterest-3"></i><span class="tooltip top">Pinterest</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_flickr tooltip_container"><i class="icon-flickr-1"></i><span class="tooltip top">Flickr</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_youtube tooltip_container"><i class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_vimeo tooltip_container"><i class="icon-vimeo-2"></i><span class="tooltip top">Vimeo</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_instagram tooltip_container"><i class="icon-instagram-4"></i><span class="tooltip top">Instagram</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_linkedin tooltip_container"><i class="icon-linkedin-5"></i><span class="tooltip top">LinkedIn</span></a>
										</li>

									</ul>
									
									<!-- - - - - - - - - - - - - - End social icons list - - - - - - - - - - - - - - - - -->

								</section><!--/ .streamlined-->
							
							</div><!--/ [col]-->
							
							<!-- - - - - - - - - - - - - - End follow us - - - - - - - - - - - - - - - - -->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .footer_section_2-->

				<!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

				<div class="footer_section">

					<div class="container">
						
						<div class="row">

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - Featured products widget- - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Featured Products</h4>

									<ul class="products_list_widget">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod1.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">SHARKK 5-Button 2.4G Wireless Vertical Optical </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$21.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod2.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">BLU Studio 7.0 LTE 16GB Unlocked GSM Dual-SIM </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$14.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod3.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Apple 13.3" MacBook Pro Notebook Computer</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$1524.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</ul><!--/ .list_of_products-->

								</section>
								
								<!-- - - - - - - - - - - - - - End of featured products widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - Bestseller products widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Bestseller Products</h4>

									<ul class="products_list_widget">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod4.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">TCL 40FS3750 40-inch 1080p 120Hz Roku Smart </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$355.00</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod5.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">HP Digital Sender Flow 8500 fn1 Document Cap</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$3008.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod6.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Sony Cyber-Shot DSC-H300 Black 20.1MP </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$276.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</ul><!--/ .list_of_products-->

								</section><!--/ .widget-->
								
								<!-- - - - - - - - - - - - - - End of bestseller products widget - - - - - - - - - - - - - - - - -->
							
							</div><!--/ [col]-->

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - New products widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>New Products</h4>

									<ul class="products_list_widget">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod7.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Asus VS228H-P 21.5" LED LCD Monitor - 16:9 - 5 ms</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$120.00</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod8.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Dell OptiPlex 780 Core 2 Duo 3.0GHz 8GB 500GB </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$240.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod9.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Patuoxun Wireless Headphones headsets SD Card </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$39.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</ul><!--/ .list_of_products-->

								</section><!--/ .widget-->

								<!-- - - - - - - - - - - - - - End of new products widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - On sale products widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>On Sale Products</h4>

									<ul class="products_list_widget">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod10.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Satechi Dual Sonic Conical v2.0 Computer Speak</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$67.99</s> <b>$41.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod11.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">LG G3 Beat D722J 8GB Unlocked GSM </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$139.99</s> <b>$109.99</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<li>
											
											<a href="#" class="product_thumb">
												
												<img src="images/83x83_prod12.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#" class="product_title">Apple 21.5-inch MK142LLA iMac Late </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><s>$1550.00</s> <b>$1320.00</b></p>

												</div>

											</div>

										</li>

										<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									</ul><!--/ .list_of_products-->

								</section><!--/ .widget-->

								<!-- - - - - - - - - - - - - - End of on sale products widget - - - - - - - - - - - - - - - - -->

							</div>

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .footer_section_2-->

				<!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->

				<div class="footer_section_3 align_center">

					<div class="container">

						<p class="footer_message">This is custom text. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantim, totam rem aperiam, eaque ipse quae ab illo inventore veritatis.</p>

						<!-- - - - - - - - - - - - - - Payments - - - - - - - - - - - - - - - - -->

						<ul class="payments">

							<li><img src="images/payment_1.png" alt=""></li>
							<li><img src="images/payment_2.png" alt=""></li>
							<li><img src="images/payment_3.png" alt=""></li>
							<li><img src="images/payment_4.png" alt=""></li>
							<li><img src="images/payment_5.png" alt=""></li>
							<li><img src="images/payment_6.png" alt=""></li>
							<li><img src="images/payment_7.png" alt=""></li>
							<li><img src="images/payment_8.png" alt=""></li>

						</ul>
						
						<!-- - - - - - - - - - - - - - End of payments - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Footer navigation - - - - - - - - - - - - - - - - -->

						<nav class="footer_nav">

							<ul class="bottombar">

								<li><a href="#">Sell on DDC</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Careers</a></li>
								
								<li><a href="#">About</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Shipping Details</a></li>

							</ul>

						</nav>
						
						<!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->

						<p class="copyright">&copy; 2018 <a href="/">DDC</a>. All Rights Reserved.</p>

					</div><!--/ .container-->

				</div><!--/ .footer_section-->

				<!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->

			</footer>
			
			<!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->

		</div><!--/ [layout]-->
		
		<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Social feeds - - - - - - - - - - - - - - - - -->

		<ul class="social_feeds">

			<!-- - - - - - - - - - - - - - Facebook - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_facebook open_"><i class="icon-facebook-1"></i></button>

				
				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Join Us on Facebook</h3>

					</div><!--/ .animated_item-->

					<div class="animated_item">

						<div id="fb-root"></div>
						<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="235" data-height="345" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
					</div><!--/ .animated_item-->

				</section><!--/ .dropdown-->

			</li>

			<!-- - - - - - - - - - - - - - End of Facebook - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Twitter - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_twitter open_"><i class="icon-twitter"></i></button>

				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Latest Tweets</h3>

					</div><!--/ .animated_item-->

					<div class="tweet_list_wrap"></div>
					 
					<footer class="animated_item bottom_box">

						<a href="#" class="button_grey middle_btn">Follow Us</a>	

					</footer><!--/ .animated_item-->

				</section><!--/ .dropdown-->

			</li>

			<!-- - - - - - - - - - - - - - End of Twitter - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Contact us - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_contact open_"><i class="icon-mail-8"></i></button>

				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Contact Us</h3>

					</div><!--/ .animated_item-->
					 
					<div class="animated_item">

						<p class="form_caption">Lorem ipsum dolor sit amet, adipis mauris accumsan.</p>

						<form class="contactform" novalidate>

							<ul>

								<li class="row">

									<div class="col-xs-12">

										<input type="text" required title="Name" name="cf_name" placeholder="Your name">

									</div>

								</li>

								<li class="row">

									<div class="col-xs-12">

										<input type="email" required title="Email" name="cf_email" placeholder="Your address">

									</div>

								</li>

								<li class="row">

									<div class="col-xs-12">

										<textarea placeholder="Message" required title="Message" name="cf_message" rows="6"></textarea>

									</div>

								</li>
								
								<li class="row">

									<div class="col-xs-12">

										<button class="button_grey middle_btn">Send</button>

									</div>

								</li>

							</ul>

						</form>

					</div><!--/ .animated_item-->

				</section><!--/ .dropdown-->

			</li>

			<!-- - - - - - - - - - - - - - End contact us - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Google map - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_gmap open_"><i class="icon-location-4"></i></button>

				<!--Location-->

				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Store Location</h3>

					</div><!--/ .animated_item-->
					 
					<div class="animated_item">
						
						<p class="c_info_location">Salam Street (Opposite To Municipality) <br> P.O.Box 105400 Abu Dhabi, U.A.E</p>

						<div class="proportional_frame">

							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7263.753042846161!2d54.403462!3d24.455069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e687908fa9d7b%3A0x2542892350667fa7!2sAl+Salam+St+-+Abu+Dhabi+-+United+Arab+Emirates!5e0!3m2!1sen!2sin!4v1538636678846" style="border:0"></iframe>

						</div>

						<ul class="c_info_list">

							<li class="c_info_phone">(+971) 2- 6444043</li>
							<li class="c_info_mail"><a href="mailto:#">contact@ddcuae.ae</a></li>
							<li class="c_info_schedule">

								<ul>

									<li>Monday-Friday: 8.00-20.00</li>
									<li>Saturday: 9.00-15.00</li>
									<li>Sunday: closed</li>

								</ul>

							</li>

						</ul>

					</div><!--/ .animated_item-->

				</section><!--/ .dropdown-->
			
			</li>

			<!-- - - - - - - - - - - - - - End google map - - - - - - - - - - - - - - - - -->

		</ul>

		<!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->
		
		<!-- Include Libs & Plugins
		============================================ -->
		<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/owlcarousel/owl.carousel.min.js"></script>
		<script src="js/jquery.countdown.plugin.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/arcticmodal/jquery.arcticmodal.js"></script>
		<script src="twitter/jquery.tweet.min.js"></script>
		<script src="js/colorpicker/colorpicker.js"></script>
		<script src="js/retina.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

		<!-- Theme files
		============================================ -->
		<script src="js/theme.styleswitcher.js"></script>
		<script src="js/theme.plugins.js"></script>
		<script src="js/theme.core.js"></script>
		
		<!-- extra js -->
		@yield('extra-js')
	</body>
</html>