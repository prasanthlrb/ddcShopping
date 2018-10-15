@extends('layout.website')
@section('content')
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

<div class="secondary_page_wrapper">

    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">

            <li><a href="index.html">Home</a></li>
            <li>About Us</li>

        </ul>

        <div class="row">
            @include('include.infoSidebar')

            <main class="col-md-9 col-sm-8">

                <h1>About Us</h1>

                <div class="theme_box clearfix">

                    <img src="images/about_img_1.jpg" class="alignleft" width="310" alt="">

                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel.</p>

                    <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                    <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>

                    <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. </p>

                </div><!--/ .theme_box-->

            </main><!--/ [col]-->

        </div><!--/ .row-->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

<footer id="footer">

    <div class="container">

        <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

        <div class="infoblocks_container">

            <ul class="infoblocks_wrap">

                <li>
                    <a href="#" class="infoblock type_1">

                        <i class="icon-paper-plane"></i>
                        <span class="caption"><b>Fast &amp; Free Delivery</b></span>

                    </a><!--/ .infoblock-->
                </li>

                <li>
                    <a href="#" class="infoblock type_1">

                        <i class="icon-lock"></i>
                        <span class="caption"><b>Safe &amp; Secure Payment</b></span>

                    </a><!--/ .infoblock-->
                </li>

                <li>
                    <a href="#" class="infoblock type_1">

                        <i class="icon-money"></i>
                        <span class="caption"><b>100% Money back Guaranted</b></span>

                    </a><!--/ .infoblock-->
                </li>

            </ul><!--/ .infoblocks_wrap.section_offset.clearfix-->

        </div><!--/ .infoblocks_container -->
            
        <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->

    </div><!--/ .container -->
@endsection