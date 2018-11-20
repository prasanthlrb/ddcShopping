@extends('layout.website')
@section('content')
<style>
        section.section_offset {
            padding: 50px;
        }
    </style>
<div class="secondary_page_wrapper">
    	<div class="container">
        <section class="section_offset">

                

                <div class="relative">

                    <a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>


                    <div class="table_layout">

                        <div class="table_row">

                            <div class="row">
                               <div class="col-sm-6">
                            
                            <div class="table_cell">

                                <section>

                                    <h4>Vendor Login</h4>

                                   

                                    <form method="POST" action="{{ route('vendor.login') }}">
                                            @csrf

                                        <ul>

                                            <li class="row">

                                                <div class="col-xs-12">

                                                    <label for="login_email" class="required">Email address</label>
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                                </div>

                                            </li>

                                            <li class="row">

                                                <div class="col-xs-12">

                                                    <label for="login_password" class="required">Password</label>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </li>

                                            <li class="row">

                                                <div class="col-xs-12">

                                                    <div class="on_the_sides">

                                                        <div class="left_side">

                                                            
                                                            <a class="small_link" href="{{ route('vendor.password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                        </div>

                                                        <div class="right_side">

                                                            <span class="prompt">Required Fields</span>

                                                        </div>
                                                       

                                                    </div>
                                                    
                                                </div>

                                            </li>
                                            <li class="row">
                                                    <div class="col-sm-6">
                                                    <button type="submit" class="button_blue middle_btn">
                                                            {{ __('Login') }}
                                                        </button>
                                                    </div>
                                            </li>
                                        </ul>
                                        
                                    </form>

                                </section>

                            </div><!--/ .table_cell -->
                        </div>
                    </div>
                        </div><!--/ .table_row -->


                    </div><!--/ .table_layout -->

                </div><!--/ .relative -->

            </section><!--/ .section_offset -->
</div>

@endsection
