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

                
                <section class="section_offset">

                        <h3>My Reviews</h3>

                        <ul class="reviews">

                            <li>

                                <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->
                                
                                <article class="review">

                                    <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->

                                    <ul class="review-rates">

                                       
                                        <li class="v_centered">
                                                <img src="{{ asset('images/product_img2.jpg')}}" alt="product_img2.jpg" width="100" class="review-product">

                                           

                                           

                                        </li>

                                        <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->

                                    </ul>

                                    <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->

                                    <div class="review-body">

                                        <div class="review-meta">
                                            
                                            <h5 class="bold">Good Quality   <ul class="rating">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>

                                            </ul></h5>

                                           
                                        </div>

                                        <p>Aliquam Erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
                                       <br> Review by <a href="#" class="bold">Prasanth</a> on 12/4/2014

                                    </div>

                                    <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->

                                </article>

                                <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->

                            </li>

                           

                        </ul>

                        <a href="#" class="button_grey middle_btn">Show All</a>

                    </section>
            </main>
        </div>
    </div>
</div>
@endsection
@section('extra-js')
<script>
	$('.rating-rev').addClass('accSidebarActive');
</script>
@endsection