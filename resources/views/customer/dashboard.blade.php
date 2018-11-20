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

							@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

							<section class="theme_box">

								<h4>Personal Information</h4>

								<p>{{Auth::user()->name}}<br><a href="#" class="mail_to">male</a></p>

								<div class="buttons_row">

									<a href="#" class="button_grey middle_btn">Edit Personal Information</a>

									
								</div>

							</section>
							<section class="theme_box">

								<h4>Contact Information</h4>

								<p>{{Auth::user()->name}}<br><a href="#" class="mail_to">{{Auth::user()->email}}</a></p>

								<div class="buttons_row">

									<a href="#" class="button_grey middle_btn">Edit Account Information</a>

									<a href="#" class="button_grey middle_btn">Change Password</a>

								</div>

							</section>
							<section class="theme_box">

								<h4>Mobile Number</h4>

								<p><a href="#" class="mail_to">{{Auth::user()->phone}}</a></p>

								<div class="buttons_row">

									<a href="#" class="button_grey middle_btn">Edit Mobile Number</a>

									
								</div>

							</section>

							<section class="theme_box">

								

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