@extends('layout.website')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="/">Home</a></li>
						<li>Register</li>

					</ul>

					<h1 class="page_title">Register</h1>

					<!-- - - - - - - - - - - - - - Checkout method - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						

						<div class="relative">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>


							<div class="table_layout">

								<div class="table_row">

								

									<div class="table_cell">

										<section>

											<h4>Login</h4>

											<p class="subcaption">Already registered? Please log in below:</p>

											<form id="login_form" class="type_2">

												<ul>

													<li class="row">

														<div class="col-xs-6">

															<label for="login_email" class="required">Name</label>
															<input type="text" name="" id="login_email">

														</div>

													</li>
													<li class="row">

														<div class="col-xs-6">

															<label for="login_email" class="required">Email address</label>
															<input type="email" name="" id="login_email">

														</div>

													</li>
													<li class="row">

														<div class="col-xs-6">

															<label for="login_email" class="required">Mobile Number</label>
															<input type="text" name="" id="login_email">

														</div>

													</li>

													<li class="row">

														<div class="col-xs-6">

															<label for="login_password" class="required">Password</label>
															<input type="password" name="" id="login_password">

														</div>

													</li>

													<li class="row">

														<div class="col-xs-6">

															<div class="on_the_sides">

                                                                    <div class="left_side">

                                                                            <button type="submit" form="login_form" class="button_blue middle_btn">Register</button>
                            
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

								

							</div><!--/ .table_layout -->

						</div><!--/ .relative -->

					</section><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of checkout method - - - - - - - - - - - - - - - - -->

			
				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->

@endsection