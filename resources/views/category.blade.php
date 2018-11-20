@extends('layout.website')
@section('content')
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

<div class="secondary_page_wrapper">

    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li>Beauty</li>
        </ul>

        <div class="row">

            <aside class="col-md-3 col-sm-4 has_mega_menu">

                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Categories</h3>

                    <ul id="get_sidebar_category" class="theme_menu cats">

                        <!-- <li class="has_megamenu">

                            <a href="#">Medicine &amp; Health (1375)</a>

                            <div class="mega_menu clearfix">

                                <div class="mega_menu_item">
                                
                                    <ul class="list_of_links">

                                        <li><a href="#">Allergy &amp; Sinus</a></li>
                                        <li><a href="#">Children's Healthcare</a></li>
                                        <li><a href="#">Cough, Cold &amp; Flu</a></li>
                                        <li><a href="#">Diabetes Management</a></li>
                                        <li><a href="#">Digestion &amp; Nausea</a></li>
                                        <li><a href="#">Eye Care</a></li>
                                        <li><a href="#">First Aid</a></li>
                                        <li><a href="#">Foot Care</a></li>
                                        <li><a href="#">Health Clearance</a></li>

                                    </ul>

                                </div>

                                <div class="mega_menu_item">

                                    <ul class="list_of_links">

                                        <li><a href="#">Home Health Care</a></li>
                                        <li><a href="#">Home Tests</a></li>
                                        <li><a href="#">Incontinence Aids</a></li>
                                        <li><a href="#">Natural &amp; Homeopathic</a></li>
                                        <li><a href="#">Pain &amp; Fever Relief</a></li>
                                        <li><a href="#">Skin Condition Treatments</a></li>
                                        <li><a href="#">Sleep &amp; Snoring aids</a></li>
                                        <li><a href="#">Stop Smoking Aids</a></li>
                                        <li><a href="#">Support &amp; Braces</a></li>

                                    </ul>

                                </div>

                            </div>

                        </li> -->
                        
                        

                    </ul>

                </section><!--/ .animated.transparent-->

                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Filter</h3>

                    <form class="type_2">

                        <div class="table_layout list_view">

                            <div class="table_row">

                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->

                                <div class="table_cell">

                                    <label>Category</label>

                                    <div class="custom_select">

                                        <select name="">
                                            
                                            <option value="Beauty">Beauty</option>
                                            <option value="Personal Care">Personal Care</option>
                                            <option value="Diet &amp; Fitness">Diet &amp; Fitness</option>
                                            <option value="Baby Needs">Baby Needs</option>

                                        </select>

                                    </div>

                                </div><!--/ .table_cell -->

                                <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->

                                <!-- <div class="table_cell">

                                    <fieldset>

                                        <legend>Manufacturer</legend>

                                        <ul class="checkboxes_list">

                                            <li>
                                                
                                                <input type="checkbox" checked name="manufacturer" id="manufacturer_1">
                                                <label for="manufacturer_1">Manufacturer 1</label>

                                            </li>

                                            <li>
                                                
                                                <input type="checkbox" name="manufacturer" id="manufacturer_2">
                                                <label for="manufacturer_2">Manufacturer 2</label>

                                            </li>

                                            <li>
                                                
                                                <input type="checkbox" name="manufacturer" id="manufacturer_3">
                                                <label for="manufacturer_3">Manufacturer 3</label>

                                            </li>

                                        </ul>

                                    </fieldset>

                                </div> -->

                                <!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                <!-- <div class="table_cell">

                                    <fieldset>

                                        <legend>Price</legend>

                                        <div class="range">

                                            Range :

                                            <span class="min_val"></span> - 
                                            <span class="max_val"></span>

                                            <input type="hidden" name="" class="min_value">

                                            <input type="hidden" name="" class="max_value">

                                        </div>

                                        <div id="slider"></div>

                                    </fieldset>

                                </div> -->

                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                <!-- <div class="table_cell">

                                    <fieldset>

                                        <legend>Color</legend>

                                        <div class="row">

                                            <div class="col-sm-6">
                                                
                                                <ul class="simple_vertical_list">

                                                    <li>
                                                        
                                                        <input type="checkbox" name="" id="color_btn_1">
                                                        <label for="color_btn_1" class="color_btn green">Green</label>

                                                    </li>

                                                    <li>

                                                        <input type="checkbox" name="" id="color_btn_2">
                                                        <label for="color_btn_2" class="color_btn yellow">Yellow</label>

                                                    </li>

                                                    <li>
                                                        
                                                        <input type="checkbox" name="" id="color_btn_3">
                                                        <label for="color_btn_3" class="color_btn red">Red</label>

                                                    </li>

                                                </ul>

                                            </div>

                                            <div class="col-sm-6">
                                                
                                                <ul class="simple_vertical_list">

                                                    <li>

                                                        <input type="checkbox" name="" id="color_btn_4">
                                                        <label for="color_btn_4" class="color_btn blue">Blue</label>

                                                    </li>

                                                    <li>
                                                        
                                                        <input type="checkbox" name="" id="color_btn_5">
                                                        <label for="color_btn_5" class="color_btn grey">Grey</label>

                                                    </li>

                                                    <li>
                                                        
                                                        <input type="checkbox" name="" id="color_btn_6">
                                                        <label for="color_btn_6" class="color_btn orange">Orange</label>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </fieldset>

                                </div> -->

                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_row -->

                        </div><!--/ .table_layout -->

                        <footer class="bottom_box">

                            <div class="buttons_row">

                                <button type="submit" class="button_blue middle_btn">Search</button>

                                <button type="reset" class="button_grey middle_btn filter_reset">Reset</button>

                            </div>

                        </footer>

                    </form>

                </section>

                <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                <!-- <div class="section_offset">

                    <a href="#" class="banner">
                        
                        <img src="images/banner_img_10.png" alt="">

                    </a>

                </div> -->

                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Already Viewed Products</h3>

                    <ul class="products_list_widget">

                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                        <li>
                            
                            <a href="#" class="product_thumb">
                                
                                <img src="images/product_thumb_4.jpg" alt="">

                            </a>

                            <div class="wrapper">

                                <a href="#" class="product_title">Aenean auctor wisi et urna...</a>

                                <div class="clearfix product_info">

                                    <p class="product_price alignleft"><b>$5.99</b></p>

                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                    <ul class="rating alignright">

                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>

                                    </ul>
                                    
                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                </div>

                            </div>

                        </li>

                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    </ul><!--/ .list_of_products-->

                </section>

                <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Compare Products</h3>

                    <ul class="products_list_widget">

                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                        <li>
                            
                            <a href="#" class="product_thumb">
                                
                                <img src="images/product_thumb_10.jpg" alt="">

                            </a>

                            <div class="wrapper">

                                <a href="#" class="product_title">Integer rutrum ante eu lacus...</a>

                                <div class="clearfix product_info">

                                    <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>

                                </div>

                            </div>

                        </li>

                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                        <li>
                            
                            <a href="#" class="product_thumb">
                                
                                <img src="images/product_thumb_11.jpg" alt="">

                            </a>

                            <div class="wrapper">

                                <a href="#" class="product_title">Vestibulum ante ipsum primis in...</a>

                                <div class="clearfix product_info">

                                    <p class="product_price alignleft"><b>$13.99</b></p>

                                </div>

                            </div>

                        </li>

                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    </ul><!--/ .list_of_products-->

                    <footer class="bottom_box">

                        <a href="shop_product_comparison.html" class="button_grey middle_btn">Go to Compare</a>

                    </footer>

                </section>

                <!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Tags</h3>

                    <div class="tags_container">

                        <ul class="tags_cloud">
                            
                            <li><a href="#" class="button_grey">allergy</a></li>
                            <li><a href="#" class="button_grey">baby</a></li>

                        </ul><!--/ .tags_cloud-->
                        
                    </div><!--/ .tags_container-->

                </section>

                <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                <div class="section_offset">

                    <a href="#" class="banner">
                        
                        <img src="images/banner_img_11.png" alt="">

                    </a>

                </div>

                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

            </aside>

            <main class="col-md-9 col-sm-8">

                <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

               

                <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

                <section class="section_offset">
                @foreach($subCategory as $subCategory1) 
                    @if($subCategory1->id == $subCategoryid->id)     
                        <h1>{{$subCategoryid->sub_name}}</h1>
                    @endif
                @endforeach
                    <p>{{$subCategoryid->description}}</p>

                </section>

                <!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

                <div class="section_offset">

                    <header class="top_box on_the_sides">

                        <div class="left_side clearfix v_centered">

                            <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

                            <div class="v_centered">

                                <span>Sort by:</span>

                                <div class="custom_select sort_select">
                                    
                                    <select name="">
                                            
                                        <option value="Default">Default</option>
                                        <option value="Price">Price</option>
                                        <option value="Name">Name</option>
                                        <option value="Date">Date</option>

                                    </select>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->

                            <div class="v_centered">

                                <span>Show:</span>

                                <div class="custom_select">

                                    <select name="">

                                        <option value="15">15</option>
                                        <option value="12">12</option>
                                        <option value="9">9</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>

                                    </select>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->

                        </div>

                        <div class="right_side">

                            <!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->

                            <div class="layout_type buttons_row" data-table-container="#products_container">

                                <a href="#" data-table-layout="grid_view" class="button_grey middle_btn icon_btn active tooltip_container"><i class="icon-th"></i><span class="tooltip top">Grid View</span></a>

                                <a href="#" data-table-layout="list_view list_view_products" class="button_grey middle_btn icon_btn tooltip_container"><i class="icon-th-list"></i><span class="tooltip top">List View</span></a>

                            </div>

                            <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

                        </div>

                    </header>

                    <div class="table_layout" id="products_container">

                        

                                <?php $i = 0;
                                foreach($product as $key => $product1){
                                  if($i%3 == 0) {
                                    echo $i > 0 ? "</div>" : ""; 
                                    

                                        echo "<div class='table_row'>";
                                    
                                  }
                                  ?>

                            <div class="table_cell">

                                <div class="product_item">

                                    <div class="image_wrap">

                                        <?php if($product1->product_image != ""){ ?>
	                                        <img src="{{asset('upload_single_product/').'/'.$product1->product_image}}" alt="">
                                        <?php } else{ ?>
	                                        <img src="../../images/product_img_7.jpg" alt="">
                                        <?php } ?>                             

                                        <div class="actions_wrap">

                                            <div class="centered_buttons">

                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$product1->product_id}}">Quick View</a>

                                                <!-- <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a> -->
                                                <button onclick="addCart({{$product1->product_id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button>

                                            </div>

                                            <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                            <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                        </div>

                                    </div>

                                    <div class="description">

                                        <a href="#">{{$product1->product_name}}</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>${{$product1->sales_price}}</b></p>

                                            <!-- <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>

                                            </ul> -->

                                        </div>

                                    </div>

                                    <div class="full_description">

                                        <a href="#" class="product_title">{{$product1->product_name}}</a>

                                        <a href="#" class="product_category">{{$product1->sub_category}}</a>

                                        <!-- <div class="v_centered product_reviews">
                                        
                                            <ul class="rating">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>

                                            </ul>

                                            <ul class="topbar">

                                                <li><a href="#">3 Review(s)</a></li>
                                                <li><a href="#">Add Your Review</a></li>

                                            </ul>

                                        </div> -->

                                        <div>{{$product1->product_description}}</div>

                                        <!-- <a href="#" class="learn_more">Learn More</a> -->

                                    </div>

                                    <div class="actions">

                                        <p class="product_price bold">${{$product1->sales_price}}</p>

                                        <ul class="seller_stats">

                                            <li>Shipping: 
                                                @if($product1->shipping_type == 1)
                                                <span class="success">Free Shipping</span>
                                                @else
                                                <span class="success">Paid Shipping</span>
                                                @endif
                                            </li>
                                            @if($product1->stock_quantity != "")
                                            <li>Availability: <span class="success">in stock</span></li>
                                            @else
                                            <li>Availability: <span class="danger">No Stock Available</span></li>
                                            @endif
                                            <li class="seller_info_wrap">

                                                Seller: <span class="seller_name">{{$product1->vendor}}</span>

                                                <!-- <div class="seller_info_dropdown">

                                                    <ul class="seller_stats">

                                                        <li>
                                                            
                                                            <ul class="topbar">
                                                                
                                                                <li>China (Mainland)</li>

                                                                <li><a href="#">Contact Details</a></li>

                                                            </ul>

                                                        </li>

                                                        <li><span class="bold">99.8%</span> Positive Feedback</li>

                                                    </ul>

                                                    <div class="v_centered">

                                                        <a href="#" class="button_blue mini_btn">Contact Seller</a>

                                                        <a href="#" class="small_link">Chat Now</a>

                                                    </div>

                                                </div> -->

                                            </li>

                                        </ul>

                                        <ul class="buttons_col">

                                            <li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

                                            <li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

                                            <li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

                                        </ul>

                                    </div>


                                </div>

                            </div>


<?php $i++; } ?>




</div>


                        


                    </div><!--/ .table_layout -->

                    <footer class="bottom_box on_the_sides">

                        <div class="left_side">

                            <!-- <p>Showing 1 to 3 of 45 (15 Pages)</p> -->

                        </div>

                        <div class="right_side">
                        
                            <!-- <ul class="pags">

                                <li><a href="#"></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"></a></li>

                            </ul> -->
@if ($product->lastPage() > 1)
<ul class="pags">
    <li class="{{ ($product->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $product->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $product->lastPage(); $i++)
        <li class="{{ ($product->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $product->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($product->currentPage() == $product->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $product->url($product->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif
                        </div>

                    </footer>

                </div>

                <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->

            </main>

        </div><!--/ .row -->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection
