@extends('layout.website')
@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>Wishlist</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">
					

						<main class="col-md-12 col-sm-12">

							<h1>Wishlist</h1>

							<header class="top_box on_the_sides">

								<div class="left_side v_centered">

									<p class="visible_pages">Showing 1 to 10 of 30 (3 pages)</p>

									<span>Show:</span> 

									<div class="custom_select">

										<select name="">

											<option value="10">10</option>
											<option value="9">9</option>
											<option value="8">8</option>
											<option value="7">7</option>
											<option value="6">6</option>
											<option value="5">5</option>
											<option value="4">4</option>
											<option value="3">3</option>
											<option value="2">2</option>
											<option value="1">1</option>

										</select>

									</div>

								</div>

								<div class="right_side">
								
									<ul class="pags">

										<li><a href="#"></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"></a></li>

									</ul>

								</div>

							</header><!--/ .top_box -->

							<div class="table_wrap">

								<table class="table_type_1 wishlist_table">
									 	
									<thead>
										
										<tr>
											
											<th class="product_image_col">Product Image</th>
											<th class="product_title_col">Product Name and Category</th>
											<th class="product_price_col">Price</th>
											<th class="product_qty_col">Quantity</th>
											<th>Action</th>

										</tr>

									</thead>

									<tbody>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_4.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>

												<a href="#">Beauty Clearance</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$5.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_5.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Sed in lacus ut enim adipiscing dictum elementum velit</a>

												<a href="#">Gift Sets</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$8.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_6.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Interdum vitae dapibus ac quisque diam lorem 160 ea</a>

												<a href="#">Makeup &amp; Accessories</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$76.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_10.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Adipiscing dictum elementum velit sed in lacus ut enim </a>

												<a href="#">Beauty Clearance</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total"><s>$29.99</s>$21.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_11.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Ut pharetra augue nec augue, Chocolate</a>

												<a href="#">Gift Sets</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total"><s>$19.99</s>$13.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_12.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Etiam cursus leo vel metus nulla facilisi Sponge, Deep Cleansing 1</a>

												<a href="#">Beauty Clearance</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total"><s>$5.99</s>$2.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_13.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Elementum velit sed in lacus, 100mg, Softgels 120 ea</a>

												<a href="#">Gift Sets</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$75.39</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_14.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Lorem ipsum dolor sit amet consectetuer adipis mauris 12 ea</a>

												<a href="#">Hair Care</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$24.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_15.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Sed in lacus ut enim adipiscing 30 ea</a>

												<a href="#">Beauty Clearance</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$5.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

										<tr>

											<!-- - - - - - - - - - - - - - Product image - - - - - - - - - - - - - - - - -->
											
											<td data-title="Product Image">
												
												<a href="#"><img src="images/product_thumb_16.jpg" alt=""></a>

											</td>

											<!-- - - - - - - - - - - - - - End of product image - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product name & category - - - - - - - - - - - - - - - - -->

											<td data-title="Product Name and Category">
												
												<a href="#" class="product_title">Sed ut perspiciatis unde omnis iste natus error sit, Medium 2.5 fl oz</a>

												<a href="#">Hair Care</a>

											</td>

											<!-- - - - - - - - - - - - - - End of product name & category - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product price - - - - - - - - - - - - - - - - -->

											<td data-title="Price" class="total">$5.99</td>

											<!-- - - - - - - - - - - - - - End of product price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product quantity - - - - - - - - - - - - - - - - -->

											<td data-title="Quantity">
												
												<div class="qty min clearfix">

													<button class="theme_button" data-direction="minus">&#45;</button>
													<input type="text" name="" value="1">
													<button class="theme_button" data-direction="plus">&#43;</button>

												</div><!--/ .qty.min.clearfix-->

											</td>

											<!-- - - - - - - - - - - - - - End of product quantity - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<td data-title="Action">

												<ul class="buttons_col">

													<li>
														<a href="#" class="button_blue">Add to Cart</a>
													</li>

													<li>
														<a href="#" class="button_dark_grey">Remove</a>
													</li>

												</ul>

											</td>

											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</tr>

									</tbody>

								</table>

							</div><!--/ .table_wrap -->

							<footer class="bottom_box on_the_sides">

								<div class="left_side v_centered">

									<p class="visible_pages">Showing 1 to 10 of 30 (3 pages)</p>

									<span>Show:</span> 

									<div class="custom_select">

										<select name="">

											<option value="10">10</option>
											<option value="9">9</option>
											<option value="8">8</option>
											<option value="7">7</option>
											<option value="6">6</option>
											<option value="5">5</option>
											<option value="4">4</option>
											<option value="3">3</option>
											<option value="2">2</option>
											<option value="1">1</option>

										</select>

									</div>

								</div>
								
								<div class="right_side">

									<ul class="pags">

										<li><a href="#"></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"></a></li>

									</ul>

								</div>

							</footer><!--/ .bottom_box -->

						</main><!--/ [col]-->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            
			@endsection
			@section('extra-js')
<script>
	$('.wishlist').addClass('accSidebarActive');
</script>
@endsection