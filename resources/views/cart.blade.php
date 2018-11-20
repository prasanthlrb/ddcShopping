@extends('layout.website')

@section('content')


<div class="secondary_page_wrapper" id="shopping_table">

    
                     


                   

</div><!--/ .page_wrapper-->



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

        @endsection

        @section('custom-js')
        <script>
                $(document).ready(function(){
                   
                    $.ajax({        
                        url : '/cart-data',
                        type: "GET",
                        success: function(data)
                        {
                               
                            $('#shopping_table').html(data);
                           
                           
                        }
                    });
                });

                
        </script>
        
        @endsection