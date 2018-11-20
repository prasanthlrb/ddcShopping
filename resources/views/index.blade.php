@extends('layout.website')

@section('content')


			<div class="animated transparent" data-animation="fadeInDown">
							
				<!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

				<div class="revolution_slider">

					<div class="rev_slider">

						<ul>

							<!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->
			<?php foreach ($home_slider as $home_slider1) { 
            	if ($home_slider1->position % 2 != 0) { ?>

							<li data-transition="papercut" data-slotamount="7">
								
								<img src="{{asset('upload_slider/').'/'.$home_slider1->image}}" alt="">

								<div class="caption sfl stl layer_2" data-x="left" data-hoffset="60" data-y="100" data-easing="easeOutBack" data-speed="600" data-start="900">{{$home_slider1->title}}</div>

								<div class="caption sfl stl layer_11" data-x="left" data-y="155" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">{{$home_slider1->sub_title}}</div>

								<div class="caption sfl stl layer_12" data-x="left" data-y="220" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">from</div>

								<div class="caption sfl stl layer_13" data-x="left" data-y="235" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100"><span>$</span>{{$home_slider1->price}}</div>

								<div class="caption sfb stb" data-x="left" data-y="310" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
									<a href="{{$home_slider1->url}}" class="button_blue big_btn">Shop Now!</a>
								</div>

							</li>
			<?php } else{ ?>
							<li data-transition="papercut" data-slotamount="7">
								
								<img src="{{asset('upload_slider/').'/'.$home_slider1->image}}" alt="">

								<div style="font-size:30px;" class="caption sfl stl layer_2" data-x="450" data-hoffset="60" data-y="100" data-easing="easeOutBack" data-speed="600" data-start="900">{{$home_slider1->title}}</div>

								<div style="font-size:18px;" class="caption sfl stl layer_11" data-x="450" data-y="155" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">{{$home_slider1->sub_title}}</div>
								

								<div class="caption sfl stl layer_12" data-x="450" data-y="220" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">from</div>

<div class="caption sfl stl layer_13" data-x="450" data-y="235" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100"><span>$</span>{{$home_slider1->price}}</div>

<div class="caption sfb stb" data-x="450" data-y="310" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
	<a href="{{$home_slider1->url}}" class="button_blue big_btn">Shop Now!</a>
</div>

							</li>
			<?php } } ?>


							<!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->

							<!-- <li data-transition="papercut" data-slotamount="7">
								
								<img src="{{ asset('images/1900x522_slide2.jpg')}}" alt="">

								<div class="caption sfl stl layer_2" data-x="left" data-hoffset="60" data-y="100" data-easing="easeOutBack" data-speed="600" data-start="900">Beats by Dre Solo2</div>

								<div class="caption sfl stl layer_11" data-x="left" data-y="155" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">On-ear Headphones</div>

								<div class="caption sfl stl layer_12" data-x="left" data-y="220" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">from</div>

								<div class="caption sfl stl layer_13" data-x="left" data-y="235" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100"><span>$</span>227<span>.99</span></div>

								<div class="caption sfb stb" data-x="left" data-y="310" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
									<a href="#" class="button_blue big_btn">Shop Now!</a>
								</div>

							</li> -->

							<!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->

							<!-- <li data-transition="papercut" data-slotamount="7">
								
								<img src="{{ asset('images/1900x522_slide3.jpg')}}" alt="">

								<div class="caption sfl stl layer_2" data-x="450" data-hoffset="60" data-y="100" data-easing="easeOutBack" data-speed="600" data-start="900">LG 43UH6500 <br> 43-inch Class 4K UHD</div>

								<div class="caption sfl stl layer_11" data-x="450" data-y="210" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">LED Television with 120HZ Smart Tv and WebOs</div>

								<div class="caption sfl stl layer_12" data-x="450" data-y="270" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">from</div>

								<div class="caption sfl stl layer_13" data-x="450" data-y="285" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100"><span>$</span>799<span>.99</span></div>

								<div class="caption sfb stb" data-x="450" data-y="370" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
									<a href="#" class="button_blue big_btn">Shop Now!</a>
								</div>

							</li> -->

							<!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->

						</ul>

					</div><!--/ .rev_slider-->

				</div><!--/ .revolution_slider-->
				
				<!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

			</div><!--/ .section_offset -->

			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="row">

							<div class="col-sm-4">
								
								<a href="#" class="banner animated transparent" data-animation="fadeInDown">
								
									<img src="{{ asset('images/360x200_banner1.jpg')}}" alt="">

								</a>

							</div><!--/ [col]-->

							<div class="col-sm-4">
								
								<a href="#" class="banner animated transparent" data-animation="fadeInDown">
								
									<img src="{{ asset('images/360x200_banner2.jpg')}}" alt="">

								</a>

							</div><!--/ [col]-->

							<div class="col-sm-4">
								
								<a href="#" class="banner animated transparent" data-animation="fadeInDown">
								
									<img src="{{ asset('images/360x200_banner3.jpg')}}" alt="">

								</a>

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .section_offset-->

					<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

					<div class="row section_offset">

						<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

						<aside class="col-md-3 col-sm-4 has_mega_menu">

							<!-- - - - - - - - - - - - - - Todays deals - - - - - - - - - - - - - - - - -->

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<h3 class="widget_title">Today's Deals</h3>

								<!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel widgets_carousel">

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

											<img src="{{ asset('images/222x222_img1.jpg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->


											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_offer percentage">

											<div>30%</div>OFF

										</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Vizio D43-C1 43-inch 1080p 120Hz LED HDTV</a></p>

											<div class="clearfix product_info">

												<p class="product_price"><s>$435.00</s> <b>$365.00</b></p>

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>

												<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

											</div><!--/ .clearfix.product_info-->

											
													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

													<ul class="bottombar">

														<li><a href="#">Add to Wishlist</a></li>
														<li><a href="#">Add to Compare</a></li>

													</ul>

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="{{ asset('images/222x222_img1.jpg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->

												

												

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_offer percentage">

											<div>25%</div>OFF

										</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Ipsum with Ultra Dolor, Size 4 Diapers 29 ea</a></p>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating alignright">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>

												</ul>

												<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

											</div><!--/ .clearfix.product_info-->

											
													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

													<ul class="bottombar">

														<li><a href="#">Add to Wishlist</a></li>
														<li><a href="#">Add to Compare</a></li>

													</ul>

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="{{ asset('images/222x222_img1.jpg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->

												

												

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_offer percentage">

											<div>40%</div>OFF

										</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Ut  Tellus Dolor, Dapibus Eget, 1000mg, Tablets, 120 ea</a></p>

											<div class="clearfix product_info">

											  <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										
													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

													<ul class="bottombar">

														<li><a href="#">Add to Wishlist</a></li>
														<li><a href="#">Add to Compare</a></li>

													</ul>

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="{{ asset('images/deals_img_4.jpg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													
													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

													<ul class="bottombar">

														<li><a href="#">Add to Wishlist</a></li>
														<li><a href="#">Add to Compare</a></li>

													</ul>

												</div><!--/ .centered_buttons -->

												

												

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_offer percentage">

											<div>15%</div>OFF

										</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Nulla  Facilisi Aenean Nec Eros Vestibulum, Deep Cleansing 1 each</a></p>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

												<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

												<ul class="rating alignright">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>
													<li></li>

												</ul>

												<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
										
										<div class="image_wrap">

											<img src="{{ asset('images/deals_img_5.jpg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

													
													<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

													<ul class="bottombar">

														<li><a href="#">Add to Wishlist</a></li>
														<li><a href="#">Add to Compare</a></li>

													</ul>

												</div><!--/ .centered_buttons -->

												

												

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_offer percentage">

											<div>50%</div>OFF

										</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

										<div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

										<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

										<div class="description">

											<p><a href="#">Nam  Elit Agna Endrerit Sit Amet, Chocolate Milk 4 ea</a></p>

											<div class="clearfix product_info">

											  <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

											</div><!--/ .clearfix.product_info-->

										</div>

										<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

								</div><!--/ .widgets_carousel-->

								<!-- - - - - - - - - - - - - - End of carousel of todays deals - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

								<footer class="bottom_box">

									<a href="#" class="button_grey middle_btn">View All Deals</a>

								</footer>

								<!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset.animated.transparent-->

							<!-- - - - - - - - - - - - - - End of todays deals - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

							<div class="section_offset animated transparent" data-animation="fadeInDown">

								<a href="#"><img src="{{ asset('images/263x306_banner1.jpg')}}" alt=""></a>

							</div>

							<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

						</aside><!--/ [col]-->

						<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

						<main class="col-md-9 col-sm-8">

							<!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

								<div class="tabs products type5 section_offset animated transparent" data-animation="fadeInDown" data-animation-delay="150">

									<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

									<ul class="tabs_nav clearfix">

										<li><a href="#tab-1">Featured</a></li>
										<li><a href="#tab-2">New</a></li>
										<li><a href="#tab-3">Hot</a></li>
										<!-- <li><a href="#tab-4">Top Rated</a></li>
										<li><a href="#tab-5">Sale</a></li> -->

									</ul>
										
									<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

									<div class="tab_containers_wrap">

										<!-- - - - - - - - - - - - - - Featured products - - - - - - - - - - - - - - - - -->
<div id="tab-1" class="tab_container">

<div class="table_layout">
				
<div class="table_row">
@php ($x = 0) @endphp
@foreach($featured as $featured1)	
@php $x++ @endphp
@if($x != '4' && $x != '5' && $x != '6' )
<div class="table_cell">

	<div class="product_item">

		<div class="image_wrap">
<?php if($featured1->product_image != ""){ ?>
	<img src="{{asset('upload_single_product/').'/'.$featured1->product_image}}" alt="">
<?php } else{ ?>
	<img src="{{asset('images/qv_thumb_2.jpg')}}" alt="">
<?php } ?>
			
			<div class="actions_wrap">
				<div class="centered_buttons">
					<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$featured1->product_id}}">Quick View</a>
				</div>
			</div>
			<div class="label_new">Featured</div>
		</div>

		<div class="description">
			<a href="#">{{$featured1->product_name}}</a>
			<div class="clearfix product_info">
				<p class="product_price alignleft"><b>${{$featured1->sales_price}}</b></p>
			</div>
			<button onclick="addCart({{$featured1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>
			<ul class="bottombar">
				<li><a href="#">Add to Wishlist</a></li>
				<li><a href="#">Add to Compare</a></li>
			</ul>
		</div>
														
	</div>
</div>
@endif
@endforeach
</div>
<div class="table_row">
@php ($x = 0) @endphp
@foreach($featured as $featured1)	
@php $x++ @endphp
@if($x != '1' && $x != '2' && $x != '3' )
<div class="table_cell">

	<div class="product_item">

		<div class="image_wrap">
<?php if($featured1->product_image != ""){ ?>
	<img src="{{asset('upload_single_product/').'/'.$featured1->product_image}}" alt="">
<?php } else{ ?>
	<img src="{{asset('images/qv_thumb_2.jpg')}}" alt="">
<?php } ?>
			
			<div class="actions_wrap">
				<div class="centered_buttons">
				<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$featured1->product_id}}">Quick View</a>
				</div>
			</div>
			<div class="label_new">Featured</div>
		</div>

		<div class="description">
			<a href="#">{{$featured1->product_name}}</a>
			<div class="clearfix product_info">
				<p class="product_price alignleft"><b>${{$featured1->sales_price}}</b></p>
			</div>
			<button onclick="addCart({{$featured1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>
			<ul class="bottombar">
				<li><a href="#">Add to Wishlist</a></li>
				<li><a href="#">Add to Compare</a></li>
			</ul>
		</div>
														
	</div>
</div>
@endif
@endforeach
</div>

<footer class="bottom_box">
	<a href="#" class="button_grey middle_btn">View All Featured Products</a>
</footer>

</div>
</div>




<div id="tab-2" class="tab_container">

<div class="table_layout">
				
<div class="table_row">
@php ($x = 0) @endphp
@foreach($new as $new1)	
@php $x++ @endphp
@if($x != '4' && $x != '5' && $x != '6' )
<div class="table_cell">

	<div class="product_item">

		<div class="image_wrap">
<?php if($new1->product_image != ""){ ?>
	<img src="{{asset('upload_single_product/').'/'.$new1->product_image}}" alt="">
<?php } else{ ?>
	<img src="{{asset('images/qv_thumb_2.jpg')}}" alt="">
<?php } ?>
			
			<div class="actions_wrap">
				<div class="centered_buttons">
				<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$new1->product_id}}">Quick View</a>
				</div>
			</div>
			<div class="label_new">new</div>
		</div>

		<div class="description">
			<a href="#">{{$new1->product_name}}</a>
			<div class="clearfix product_info">
				<p class="product_price alignleft"><b>${{$new1->sales_price}}</b></p>
			</div>
			<button onclick="addCart({{$new1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>
			<ul class="bottombar">
				<li><a href="#">Add to Wishlist</a></li>
				<li><a href="#">Add to Compare</a></li>
			</ul>
		</div>
														
	</div>
</div>
@endif
@endforeach
</div>
<div class="table_row">
@php ($x = 0) @endphp
@foreach($new as $new1)	
@php $x++ @endphp
@if($x != '1' && $x != '2' && $x != '3' )
<div class="table_cell">

	<div class="product_item">

		<div class="image_wrap">
<?php if($new1->product_image != ""){ ?>
	<img src="{{asset('upload_single_product/').'/'.$new1->product_image}}" alt="">
<?php } else{ ?>
	<img src="{{asset('images/qv_thumb_2.jpg')}}" alt="">
<?php } ?>
			
			<div class="actions_wrap">
				<div class="centered_buttons">
				<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$new1->product_id}}">Quick View</a>
				</div>
			</div>
			<div class="label_hot">new</div>
		</div>

		<div class="description">
			<a href="#">{{$new1->product_name}}</a>
			<div class="clearfix product_info">
				<p class="product_price alignleft"><b>${{$new1->sales_price}}</b></p>
			</div>
			<button onclick="addCart({{$new1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>
			<ul class="bottombar">
				<li><a href="#">Add to Wishlist</a></li>
				<li><a href="#">Add to Compare</a></li>
			</ul>
		</div>
														
	</div>
</div>
@endif
@endforeach
</div>

<footer class="bottom_box">
	<a href="#" class="button_grey middle_btn">View All New Products</a>
</footer>

</div>
</div>


<div id="tab-3" class="tab_container">

<div class="table_layout">
				
<div class="table_row">
@php ($x = 0) @endphp
@foreach($hot as $hot1)	
@php $x++ @endphp
@if($x != '4' && $x != '5' && $x != '6' )
<div class="table_cell">

	<div class="product_item">

		<div class="image_wrap">
<?php if($hot1->product_image != ""){ ?>
	<img src="{{asset('upload_single_product/').'/'.$hot1->product_image}}" alt="">
<?php } else{ ?>
	<img src="{{asset('images/qv_thumb_2.jpg')}}" alt="">
<?php } ?>
			
			<div class="actions_wrap">
				<div class="centered_buttons">
				<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$hot1->product_id}}">Quick View</a>
				</div>
			</div>
			<div class="label_hot">hot</div>
		</div>

		<div class="description">
			<a href="#">{{$hot1->product_name}}</a>
			<div class="clearfix product_info">
				<p class="product_price alignleft"><b>${{$hot1->sales_price}}</b></p>
			</div>
			<button onclick="addCart({{$hot1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>
			<ul class="bottombar">
				<li><a href="#">Add to Wishlist</a></li>
				<li><a href="#">Add to Compare</a></li>
			</ul>
		</div>
														
	</div>
</div>
@endif
@endforeach
</div>
<div class="table_row">
@php ($x = 0) @endphp
@foreach($hot as $hot1)	
@php $x++ @endphp
@if($x != '1' && $x != '2' && $x != '3' )
<div class="table_cell">

	<div class="product_item">

		<div class="image_wrap">
<?php if($hot1->product_image != ""){ ?>
	<img src="{{asset('upload_single_product/').'/'.$hot1->product_image}}" alt="">
<?php } else{ ?>
	<img src="{{asset('images/qv_thumb_2.jpg')}}" alt="">
<?php } ?>
			
			<div class="actions_wrap">
				<div class="centered_buttons">
				<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$hot1->product_id}}">Quick View</a>
				</div>
			</div>
			<div class="label_hot">hot</div>
		</div>

		<div class="description">
			<a href="#">{{$hot1->product_name}}</a>
			<div class="clearfix product_info">
				<p class="product_price alignleft"><b>${{$hot1->sales_price}}</b></p>
			</div>
			<button onclick="addCart({{$hot1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>
			<ul class="bottombar">
				<li><a href="#">Add to Wishlist</a></li>
				<li><a href="#">Add to Compare</a></li>
			</ul>
		</div>
														
	</div>
</div>
@endif
@endforeach
</div>

<footer class="bottom_box">
	<a href="#" class="button_grey middle_btn">View All Hot Products</a>
</footer>

</div>
</div>

											

									



							

									</div>

									<!-- - - - - - - - - - - - - - End of tabs container - - - - - - - - - - - - - - - - -->

								</div>

								<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

						</main><!--/ [col]-->

						<!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

					</div><!--/ .row-->

					<!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

					<section class="section_offset animated transparent" data-animation="fadeInDown">

						<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

						<div class="tabs products type5 section_offset animated transparent" data-animation="fadeInDown" data-animation-delay="150">

							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

							<ul class="tabs_nav clearfix">
							@php ($x = 5) @endphp
							@foreach($homepage_category as $homepage_category1)
							@php $x++ @endphp
								@foreach($Category as $cat)
								@if($cat->id == $homepage_category1->category_ids)
								<li><a onclick="get_home_product({{$cat->id}})" >{{$cat->cat_name}}</a></li>
								@endif
								@endforeach
							@endforeach
							</ul>
								
							<div class="tab_containers_wrap">

									<div id="tab-6" class="tab_container">

<div class="flex_tab_prod">
	
	<div class="main_prod">
	
		<div class="table_cell">

			<div class="product_item">
				
				<div class="image_wrap">

					<img src="{{ asset('images/536x536_prod_img1.jpg')}}" alt="">

					<div class="actions_wrap">

						<div class="centered_buttons">

							<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

						</div>

					</div>
					
					

				</div>

				<div class="description">

					<a href="#">Samsung Galaxy Tab 4 SM-T230 8 GB Tablet - 7" - Wireless LAN</a>

					<div class="clearfix product_info">

						<p class="product_price alignleft"><b>$299.00</b></p>

					</div>
					
				</div>
				
				<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

				<ul class="bottombar">

					<li><a href="#">Add to Wishlist</a></li>
					<li><a href="#">Add to Compare</a></li>

				</ul>

			</div>

		</div>

	</div>

	<div class="main_product_column">
		
		<div class="table_layout">

			<div class="table_row">

				<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

				<div class="table_cell">

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="{{ asset('images/product_img7.jpg')}}" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									

									

								</div><!--/ .centered_buttons -->

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Apple iPad Air Black/Space Grey 16GB Wi-Fi</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$399.00</b></p>

							</div>

							
				<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

				<ul class="bottombar">

					<li><a href="#">Add to Wishlist</a></li>
					<li><a href="#">Add to Compare</a></li>

				</ul>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->

				</div>

				<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

				<div class="table_cell">

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="{{ asset('images/product_img8.jpg')}}" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

								</div><!--/ .centered_buttons -->

								

								

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Acer Aspire SW5-171-34ZR 11.6" Touchscreen LED</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$659.00</b></p>

							</div>

							
				<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

				<ul class="bottombar">

					<li><a href="#">Add to Wishlist</a></li>
					<li><a href="#">Add to Compare</a></li>

				</ul>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->

				</div>

				<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

			</div>

			<div class="table_row">

				<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

				<div class="table_cell">

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="{{ asset('images/product_img5.jpg')}}" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

								</div><!--/ .centered_buttons -->

								

								

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Apple 13.3" MacBook Pro Notebook Computer with Retina Display</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$1590.00</b></p>

							</div>

							
				<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

				<ul class="bottombar">

					<li><a href="#">Add to Wishlist</a></li>
					<li><a href="#">Add to Compare</a></li>

				</ul>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->

				</div>

				<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

				<div class="table_cell">

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="{{ asset('images/product_img9.jpg')}}" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

								</div><!--/ .centered_buttons -->

								

								

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Apple 27-inch MF886LLA iMac with Retina 5K Display Late 2014</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$2220.00</b></p>

							</div>

							
				<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

				<ul class="bottombar">

					<li><a href="#">Add to Wishlist</a></li>
					<li><a href="#">Add to Compare</a></li>

				</ul>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->

				</div>

				<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

			</div>

		</div>

	</div>

</div>

</div>

							</div>


						</div>

						<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

					</section><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

					<h3 class="product-title">Recommended Products</h3>

					<div class="tabs products type5 section_offset animated transparent" data-animation="fadeInDown">

						<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

						<ul class="tabs_nav clearfix">

							<li><a href="#tab-11">LED TVs</a></li>
							<li><a href="#tab-12">Desktops</a></li>
							<li><a href="#tab-13">Memory Cards</a></li>
							<li><a href="#tab-14">Handheld GPS</a></li>
							<li><a href="#tab-15">Scanners</a></li>

						</ul>
						
						<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

						<div class="tab_containers_wrap">

							<div id="tab-11" class="tab_container">

								<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel owl_carousel_2 owl_item_style_2 carousel_in_tabs">

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img2.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Canon PowerShot SX610 HS 20.2 Megapixel</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$255.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img5.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Viewsonic LightStream 3D Ready DLP Projector</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$399.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img3.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung H40B 40" 1080p LED-LCD TV - 16:9 </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$815.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img6.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Adesso EasyTouch135 - Gaming Keyboard</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$59.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>
									
								</div><!--/ .sh_container-->
								
								<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

							</div><!--/ #tab-1-->

							<div id="tab-12" class="tab_container">

								<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel owl_carousel_2 owl_item_style_2 carousel_in_tabs">

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img2.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Canon PowerShot SX610 HS 20.2 Megapixel</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$255.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img5.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Viewsonic LightStream 3D Ready DLP Projector</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$399.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img3.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung H40B 40" 1080p LED-LCD TV - 16:9 </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$815.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img6.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Adesso EasyTouch135 - Gaming Keyboard</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$59.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>
									
								</div><!--/ .sh_container-->
								
								<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

							</div><!--/ #tab-2-->

							<div id="tab-13" class="tab_container">

								<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel owl_carousel_2 owl_item_style_2 carousel_in_tabs">

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img2.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Canon PowerShot SX610 HS 20.2 Megapixel</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$255.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img5.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Viewsonic LightStream 3D Ready DLP Projector</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$399.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img3.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung H40B 40" 1080p LED-LCD TV - 16:9 </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$815.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img6.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Adesso EasyTouch135 - Gaming Keyboard</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$59.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>
									
								</div><!--/ .sh_container-->
								
								<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

							</div><!--/ #tab-3-->

							<div id="tab-14" class="tab_container">

								<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel owl_carousel_2 owl_item_style_2 carousel_in_tabs">

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img2.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Canon PowerShot SX610 HS 20.2 Megapixel</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$255.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img5.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Viewsonic LightStream 3D Ready DLP Projector</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$399.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img3.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung H40B 40" 1080p LED-LCD TV - 16:9 </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$815.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img6.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Adesso EasyTouch135 - Gaming Keyboard</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$59.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>
									
								</div><!--/ .sh_container-->
								
								<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

							</div><!--/ #tab-4-->

							<div id="tab-15" class="tab_container">

								<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel owl_carousel_2 owl_item_style_2 carousel_in_tabs">

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img2.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Canon PowerShot SX610 HS 20.2 Megapixel</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$255.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img5.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Viewsonic LightStream 3D Ready DLP Projector</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$399.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img3.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung H40B 40" 1080p LED-LCD TV - 16:9 </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$815.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img6.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Adesso EasyTouch135 - Gaming Keyboard</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$59.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>

									<div class="products">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img1.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Samsung Galaxy J1 Mini J105B 8GB 5MP Camera </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$99.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<a href="#" class="image_wrap">

												<img src="{{ asset('images/130x130_img4.jpg')}}" alt="">

											</a><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Beats by Dre Powerbeats 2 In-ear Bluetooth Wireless </a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>$235.00</b></p>

												</div>

												<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

												<ul class="bottombar">

													<li><a href="#">Add to Wishlist</a></li>
													<li><a href="#">Add to Compare</a></li>

												</ul>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div>
									
								</div><!--/ .sh_container-->
								
								<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

							</div><!--/ #tab-5-->

						</div>

						<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

					</div><!--/ .tabs.section_offset-->

					<!-- - - - - - - - - - - - - - Our brands - - - - - - - - - - - - - - - - -->

					<section class="section_offset animated transparent" data-animation="fadeInDown">

						<h3 class="product-title">Our Brands</h3>

						<!-- - - - - - - - - - - - - - Carousel of brands - - - - - - - - - - - - - - - - -->

						<div class="owl_carousel owl_carousel_2 nav_style_2 brands_full_width">
						@foreach ($brand as $brand1)
							<!--Brand-->
							<a href="#">
								<img src="{{asset('upload_brand/').'/'.$brand1->brand_image}}" alt="">
							</a>
							<!--End brand-->
						@endforeach	
							


						</div><!--/ .owl_carousel-->
						
						<!-- - - - - - - - - - - - - - End of carousel of brands - - - - - - - - - - - - - - - - -->

					</section><!--/ .section_offset.animated.transparent-->
					
					<!-- - - - - - - - - - - - - - End our brands - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            
			@endsection
