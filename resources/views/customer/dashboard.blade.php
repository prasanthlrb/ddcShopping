@extends('layout.website')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>My Account</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">

						@include('include.accountSidebar')

						<main class="col-md-9 col-sm-8">

							<h1>My Profile</h1>

							

							<section class="theme_box">

								<h4>Personal Information</h4>

								<p>prasanth s<br><a href="#" class="mail_to">male</a></p>

								<div class="buttons_row">

									<a href="#" class="button_grey middle_btn">Edit Personal Information</a>

									
								</div>

							</section>
							<section class="theme_box">

								<h4>Contact Information</h4>

								<p>Prasanth S<br><a href="#" class="mail_to">prasanthats@gmail.com</a></p>

								<div class="buttons_row">

									<a href="#" class="button_grey middle_btn">Edit Account Information</a>

									<a href="#" class="button_grey middle_btn">Change Password</a>

								</div>

							</section>
							<section class="theme_box">

								<h4>Mobile Number</h4>

								<p><a href="#" class="mail_to">9171035128</a></p>

								<div class="buttons_row">

									<a href="#" class="button_grey middle_btn">Edit Mobile Number</a>

									
								</div>

							</section>

							<section class="theme_box">

								<h4>FAQs</h4>

								<p>
										What happens when I update my email address (or mobile number)?<br>
										Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).<br>
										
										When will my DDC account be updated with the new email address (or mobile number)?<br> 
										It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.<br>
										
										What happens to my existing DDC account when I update my email address (or mobile number)?<br>
										Updating your email address (or mobile number) doesn't invalidate your account. Your account remains fully functional. You'll continue seeing your Order history, saved information and personal details.<br>
										
										Does my Seller account get affected when I update my email address?<br>
										DDC has a 'single sign-on' policy. Any changes will reflect in your Seller account also.	<br>
								</p>

							</section>

						</main><!--/ [col]-->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

@endsection

@section('extra-js')
<script>
	$('.dashboard').addClass('accSidebarActive');
</script>
@endsection