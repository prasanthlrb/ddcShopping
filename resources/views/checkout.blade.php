@extends('layout.website')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>Checkout</li>

					</ul>

					<h1 class="page_title">Checkout</h1>

					<!-- - - - - - - - - - - - - - Checkout method - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<h3 class="offset_title">1. Checkout Method</h3>

						<div class="relative">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>


							<div class="table_layout">

								<div class="table_row">

									<div class="table_cell">

										<section>

											<h4>Checkout as a Guest or Register</h4>

											<p class="subcaption">Register with us for future convenience:</p>

											<form>

												<ul>
													
													<li>

														<input type="radio" checked name="radio_2" id="radio_button_1">
														<label for="radio_button_1">Checkout as Guest</label>

													</li>

													<li>

														<input type="radio" name="radio_2" id="radio_button_2">
														<label for="radio_button_2">Register</label>

													</li>

												</ul>

											</form>

											<h5 class="sub bold">Register and save time!</h5>

											<p class="subcaption">Register with us for future convenience:</p>

											<ul class="list_type_7">

												<li>Fast and easy check out</li>
												<li>Easy access to your order history and status</li>

											</ul>

										</section>

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<section>

											<h4>Login</h4>

											<p class="subcaption">Already registered? Please log in below:</p>

											<form id="login_form" class="type_2">

												<ul>

													<li class="row">

														<div class="col-xs-12">

															<label for="login_email" class="required">Email address</label>
															<input type="email" name="" id="login_email">

														</div>

													</li>

													<li class="row">

														<div class="col-xs-12">

															<label for="login_password" class="required">Password</label>
															<input type="password" name="" id="login_password">

														</div>

													</li>

													<li class="row">

														<div class="col-xs-12">

															<div class="on_the_sides">

																<div class="left_side">

																	<a href="#" class="small_link">Forgot your password?</a>

																</div>

																<div class="right_side">

																	<span class="prompt">Required Fields</span>

																</div>

															</div>

														</div>

													</li>

												</ul>

											</form>

										</section>

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

								<div class="table_row">

									<div class="table_cell">

										<a href="#" class="button_blue middle_btn">Continue</a>

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<div class="on_the_sides login_with">

											<div class="left_side">

												<button type="submit" form="login_form" class="button_blue middle_btn">Login</button>

											</div>

											<div class="right_side v_centered">

												<h4>OR Log In With</h4>

												<ul class="horizontal_list social_btns">

													<li><a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a></li>

													<li><a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a></li>

													<li><a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a></li>

												</ul><!--/ .horizontal_list.social_btns-->

											</div>

										</div>

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

							</div><!--/ .table_layout -->

						</div><!--/ .relative -->

					</section><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of checkout method - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Billing information - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<h3>2. Billing Information</h3>

						<div class="theme_box">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>

							<form class="type_2">
								
								<ul>
									
									<li class="row">
										
										<div class="col-sm-6">
											
											<label for="first_name" class="required">First Name</label>
											<input type="text" name="" id="first_name">

										</div><!--/ [col] -->

										<div class="col-sm-6">
											
											<label for="last_name" class="required">Last Name</label>
											<input type="text" name="" id="last_name">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">
										
										<div class="col-sm-6">
											
											<label for="company_name">Company Name</label>
											<input type="text" name="" id="company_name">

										</div><!--/ [col] -->

										<div class="col-sm-6">
											
											<label for="email_address" class="required">Email Address</label>
											<input type="text" name="" id="email_address">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">	

										<div class="col-xs-12">

											<label for="address" class="required">Address</label>
											<input type="text" name="" id="address">

										</div><!--/ [col] -->

									</li><!-- / .row -->

									<li class="row">

										<div class="col-xs-12">

											<input type="text" name="">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">
											
											<label for="city" class="required">City</label>
											<input type="text" name="" id="city">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label class="required">State/Province</label>

											<div class="custom_select">

												<select name="">

													<option value="Alabama">Alabama</option>
													<option value="Illinois">Illinois</option>
													<option value="Kansas">Kansas</option>

												</select>

											</div>

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">

											<label for="postal_code" class="required">Zip/Postal Code</label>
											<input type="text" name="" id="postal_code">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label class="required">Country</label>

											<div class="custom_select">

												<select name="">
													
													<option value="USA">USA</option>
													<option value="Australia">Australia</option>
													<option value="Austria">Austria</option>
													<option value="Argentina">Argentina</option>
													<option value="Canada">Canada</option>

												</select>

											</div>

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">

											<label for="telephone" class="required">Telephone</label>
											<input type="text" name="" id="telephone">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label for="fax">Fax</label>
											<input type="text" name="" id="fax">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">

											<label for="password" class="required">Password</label>
											<input type="password" name="" id="password">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label for="confirm" class="required">Confirm Password</label>
											<input type="password" name="" id="confirm">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-xs-12">

											<input type="radio" checked name="ship" id="radio_1">
											<label for="radio_1">Ship to this address</label>

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-xs-12">

											<input type="radio" name="ship" id="radio_2">
											<label for="radio_2">Ship to different address</label>

										</div>

									</li><!--/ .row -->

								</ul>

							</form>

						</div>

						<footer class="bottom_box on_the_sides">

							<div class="left_side">

								<a href="#" class="button_blue middle_btn">Continue</a>

							</div>

							<div class="right_side">

								<span class="prompt">Required Fields</span>

							</div>

						</footer>

					</section><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of billing information - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Shipping information - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<h3>3. Shipping Information</h3>

						<div class="theme_box">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>

							<form class="type_2">
								
								<ul>
									
									<li class="row">
										
										<div class="col-sm-6">
											
											<label for="first_name_1" class="required">First Name</label>
											<input type="text" name="" id="first_name_1">

										</div><!--/ [col] -->

										<div class="col-sm-6">
											
											<label for="last_name_1" class="required">Last Name</label>
											<input type="text" name="" id="last_name_1">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">
										
										<div class="col-sm-6">
											
											<label for="company_name_1">Company Name</label>
											<input type="text" name="" id="company_name_1">

										</div><!--/ [col] -->

										<div class="col-sm-6">
											
											<label for="email_address_1" class="required">Email Address</label>
											<input type="text" name="" id="email_address_1">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-xs-12">

											<label for="address_1" class="required">Address</label>
											<input type="text" name="" id="address_1">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-xs-12">

											<input type="text" name="">

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">
											
											<label for="city_1" class="required">City</label>
											<input type="text" name="" id="city_1">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label class="required">State/Province</label>

											<div class="custom_select">

												<select name="">

													<option value="Alabama">Alabama</option>
													<option value="Illinois">Illinois</option>
													<option value="Kansas">Kansas</option>

												</select>

											</div>

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">

											<label for="postal_code_1" class="required">Zip/Postal Code</label>
											<input type="text" name="" id="postal_code_1">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label class="required">Country</label>

											<div class="custom_select">

												<select name="">
													
													<option value="USA">USA</option>
													<option value="Australia">Australia</option>
													<option value="Austria">Austria</option>
													<option value="Argentina">Argentina</option>
													<option value="Canada">Canada</option>

												</select>

											</div>

										</div><!--/ [col] -->

									</li><!--/ .row -->

									<li class="row">

										<div class="col-sm-6">

											<label for="telephone_1" class="required">Telephone</label>
											<input type="text" name="" id="telephone_1">

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label for="fax_1">Fax</label>
											<input type="text" name="" id="fax_1">

										</div><!--/ [col] -->

									</li><!--/ .row -->

								</ul>

							</form>

							<a href="#" class="button_grey middle_btn">Use Billing Address</a>

						</div>

						<footer class="bottom_box on_the_sides">

							<div class="left_side buttons_row">

								<a href="#" class="button_grey middle_btn">Back</a>

								<a href="#" class="button_blue middle_btn">Continue</a>

							</div>

							<div class="right_side">

								<span class="prompt">Required Fields</span>

							</div>

						</footer>

					</section><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of billing information - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Shipping method - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<h3>4. Shipping Method</h3>

						<div class="theme_box">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>

							<ul class="shipping_method">

								<li>

									<p class="subcaption bold">Free Shipping</p>

									<input type="radio" checked name="radio_3" id="radio_button_3">
									<label for="radio_button_3">Free $0</label>

								</li>

								<li>

									<p class="subcaption bold">Flat Rate</p>

									<input type="radio" name="radio_3" id="radio_button_4">
									<label for="radio_button_4">Standard Shipping $5.00</label>

								</li>

							</ul>

						</div>

						<footer class="bottom_box">

							<a href="#" class="button_blue middle_btn">Continue</a>

						</footer>

					</section>


					<!-- - - - - - - - - - - - - - End of shipping method - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Payment information - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<h3>5. Payment Information</h3>

						<div class="theme_box">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>

							<p class="subcaption bold">Free Shipping</p>

							<ul class="simple_vertical_list">

								<li>

									<input type="radio" checked name="radio_4" id="radio_button_5">
									<label for="radio_button_5">Check / Money order</label>

								</li>

								<li>

									<input type="radio" name="radio_4" id="radio_button_6">
									<label for="radio_button_6">Credit card (saved)</label>

								</li>

							</ul>

						</div>

						<footer class="bottom_box">

							<a href="#" class="button_blue middle_btn">Continue</a>

						</footer>

					</section>


					<!-- - - - - - - - - - - - - - End of payment information - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Order review - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<h3>6. Order Review</h3>

						<div class="table_wrap">

							<table class="table_type_1 order_review">

								<thead>
									
									<tr>
										
										<th class="product_title_col">Product Name</th>
										<th class="product_sku_col">SKU</th>
										<th class="product_price_col">Price</th>
										<th class="product_qty_col">Quantity</th>
										<th class="product_total_col">Total</th>

									</tr>

								</thead>

								<tbody>

									<tr>
										
										<td data-title="Product Name">
											
											<a href="#" class="product_title">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>

											<ul class="sc_product_info">

												<li>Size: Big</li>
												<li>Color: Red</li>

											</ul>

										</td>

										<td data-title="SKU">PS01</td>

										<td data-title="Price" class="subtotal">$5.99</td>

										<td data-title="Quantity">1</td>

										<td data-title="Total" class="total">$5.99</td>

									</tr>

									<tr>
										
										<td data-title="Product Name">
											
											<a href="#" class="product_title">Sed in lacus ut enim adipiscing dictum elementum velit<br>Relief 4.25 fl oz (126ml)</a>

											<ul class="sc_product_info">

												<li>Size: Big</li>
												<li>Color: Red</li>

											</ul>

										</td>

										<td data-title="SKU">PS02</td>

										<td data-title="Price" class="subtotal">$8.99</td>

										<td data-title="Quantity">1</td>

										<td data-title="Total" class="total">$8.99</td>

									</tr>

									<tr>

										<td data-title="Product Name">
											
											<a href="#" class="product_title">Donec porta diam eu massa quisque Mint 160 ea</a>

											<ul class="sc_product_info">

												<li>Size: Big</li>
												<li>Color: Red</li>

											</ul>

										</td>

										<td data-title="SKU">PS03</td>

										<td data-title="Price" class="subtotal">$76.99</td>

										<td data-title="Quantity">1</td>

										<td data-title="Total" class="total">$76.99</td>

									</tr>

								</tbody>

								<tfoot>

									<tr>
										
										<td colspan="4" class="bold">Subtotal</td>
										<td class="total">$146.87</td>

									</tr>

									<tr>
										
										<td colspan="4" class="bold">Shipping &amp; Heading (Flat Rate - Fixed)</td>
										<td class="total">$5.00</td>

									</tr>

									<tr>
										
										<td colspan="4" class="grandtotal">Grand Total</td>
										<td class="grandtotal">$151.87</td>

									</tr>

								</tfoot>

							</table>

						</div><!--/ .table_wrap -->

						<footer class="bottom_box on_the_sides">

							<div class="left_side v_centered">

								<span>Forgot an item?</span>

								<a href="#" class="button_grey middle_btn">Edit Your Cart</a>

							</div>

							<div class="right_side">

								<button class="button_blue middle_btn">Place Order</button>

							</div>

						</footer>


					</section>

					<!-- - - - - - - - - - - - - - End of order review - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->

@endsection