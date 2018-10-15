@extends('layout.website')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>manage address</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">

						@include('include.accountSidebar')

						<main class="col-md-9 col-sm-8">

							<h1>Manage Address</h1>
							<section class="theme_box">

								
								<a href="#" class="button_blue"><i class="fas fa-plus"></i> ADD A NEW ADDRESS</a>
								
<div style="padding-top:40px"></div>
										<div class="table_wrap">
		
											<!-- - - - - - - - - - - - - - Table v2 - - - - - - - - - - - - - - - - -->
		
											<table>
		
												<tbody>
		
													<tr>
														
														<td>
																<a href="#" class="button_dark_grey">Home</a>
																<div style="padding-bottom:10px"></div>
															<h5>Prasanth - 9171035128</h5>
															<p>7/A Ayyanar puram, Muthu Patti,, Madurai, Tamil Nadu - 625003</p>
														</td>
													</tr>
													<tr>
														
														<td>
																<a href="#" class="button_dark_grey">WORK</a>
																<div style="padding-bottom:10px"></div>
															<h5>Prasanth - 9171035128</h5>
															<p>2/1/30, 1st St, Koodal Nagar, Madurai, Koodal Nagar, Madurai, Tamil Nadu - 625018</p>
														</td>
													</tr>
													<tr>
														
														<td>
																<a href="#" class="button_dark_grey">WORK</a>
																<div style="padding-bottom:10px"></div>
															<h5>Prasanth - 9171035128</h5>
															<p>2/1/30, 1st St, Koodal Nagar, Madurai, Koodal Nagar, Madurai, Tamil Nadu - 625018</p>
														</td>
													</tr>
		
		
												</tbody>
		
		
											</table>
		
											<!-- - - - - - - - - - - - - - End of table v2 - - - - - - - - - - - - - - - - -->
		
										
		
									</div>
								</section><!--/ .theme_box -->
								
                        </main>
                    </div>
                </div>
			</div>
@endsection

@section('extra-js')
<script>
	$('.address').addClass('accSidebarActive');
</script>
@endsection