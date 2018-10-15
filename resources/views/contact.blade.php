@extends('layout.website')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>Contact Us</li>

					</ul>

					<div class="row">

				@include('include.infoSidebar')

						<main class="col-md-9 col-sm-8">

							<h1 class="page_title">Contact Us</h1>

							<section class="section_offset">
								
								<h3>Contact Form</h3>

								<div class="theme_box">

									<p class="form_caption">Ut tellus dolor, dapibus eget, elementum vel, eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit.</p>

									<!-- - - - - - - - - - - - - - Contact form - - - - - - - - - - - - - - - - -->

									<form novalidate enctype="multipart/form-data" class="contactform type_2" id="contact_form">

										<ul>
										
											<li class="row">

												<div class="col-sm-6">
												
													<label for="cf_name" class="required">Name</label>
													<input type="text" required name="cf_name" id="cf_name" title="Name">

												</div><!--/ [col]-->

												<div class="col-sm-6">

													<label for="cf_email" class="required">Email Address</label>
													<input type="email" required name="cf_email" id="cf_email" title="Email">

												</div><!--/ [col]-->

											</li><!--/ .row -->

											<li class="row">

												<div class="col-xs-12">

													<label for="cf_order_number">Order number</label>
													<input type="text" name="cf_order_number" id="cf_order_number" title="Order number">

												</div><!--/ [col]-->

											</li><!--/ .row -->

											<li class="row">

												<div class="col-xs-12">

													<label for="cf_message" class="required">Message</label>
													<textarea id="cf_message" required name="cf_message" title="Message" rows="6"></textarea>

												</div><!--/ [col]-->

											</li><!--/ .row -->

										</ul>

									</form><!--/ .contactform -->

									<!-- - - - - - - - - - - - - - End of contact form - - - - - - - - - - - - - - - - -->

								</div><!--/ .theme_box -->

								<footer class="bottom_box on_the_sides">

									<div class="left_side">
									
										<button class="button_dark_grey middle_btn" type="submit" form="contact_form">Submit</button>

									</div>

									<div class="right_side">

										<p class="prompt">Required Fields</p>

									</div>

								</footer>

							</section>

							<section class="section_offset">

								<h3>Contact Information</h3>

								<div class="theme_box">

									<div class="row">

										<div class="col-sm-5">

											<div class="proportional_frame">

												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7263.753042846161!2d54.403462!3d24.455069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e687908fa9d7b%3A0x2542892350667fa7!2sAl+Salam+St+-+Abu+Dhabi+-+United+Arab+Emirates!5e0!3m2!1sen!2sin!4v1538636678846" style="border:0"></iframe>

											</div>

										</div><!--/ [col]-->

										<div class="col-sm-7">

											<p class="form_caption">Store Location.</p>

											<ul class="c_info_list">

												<li class="c_info_location">Salam Street (Opposite To Municipality) 
													P.O.Box 105400 Abu Dhabi, U.A.E.</li>
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

										</div><!--/ [col]-->

									</div><!--/ .row -->

								</div><!--/ .theme_box -->

							</section>

						</main><!--/ [col]-->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection