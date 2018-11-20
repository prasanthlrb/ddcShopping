<?php

namespace App\Http\Controllers;
use App\upload;
use App\homepage_recommended;
use App\homepage_category;
use App\brand;
use App\product;
use App\product_data;
use App\Category;
use App\subCategory;
use Cart;
use Illuminate\Http\Request;
use DB;

class topCategoryController extends Controller
{
    public function get_home_product($id){
   
           $output='<div id="tab-6" class="tab_container">

           <div class="flex_tab_prod">
               
               <div class="main_prod">
               
                   <div class="table_cell">

                       <div class="product_item">
                           
                           <div class="image_wrap">

                               <img src="{{ asset("images/536x536_prod_img1.jpg")}}" alt="">

                               <div class="actions_wrap">

                                   <div class="centered_buttons">

                                       <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                   </div>

                               </div>
                               
                               

                           </div>

                           <div class="description">

                               <a href="#">Samsung Galaxy Tab 4 SM-T230 8 GB Tablet - 7" - Wireless LAN</a>

                               <div class="clearfix product_info">

                                   <p class="product_price alignleft"><b>$299.00</b></p>

                               </div>
                               
                           </div>
                           
                           <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                           <ul class="bottombar">

                               <li><a href="#">Add to Wishlist</a></li>
                               <li><a href="#">Add to Compare</a></li>

                           </ul>

                       </div>

                   </div>

               </div>

               <div class="main_product_column">
                   
                   <div class="table_layout">

                       <div class="table_row">

                           <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                           <div class="table_cell">

                               <div class="product_item">

                                   <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                   <div class="image_wrap">

                                       <img src="{{ asset("images/product_img7.jpg")}}" alt="">

                                       <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                       <div class="actions_wrap">

                                           <div class="centered_buttons">

                                               <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                               

                                               

                                           </div><!--/ .centered_buttons -->

                                       </div><!--/ .actions_wrap-->
                                       
                                       <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                   </div><!--/. image_wrap-->

                                   <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                   <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                   <div class="description">

                                       <a href="#">Apple iPad Air Black/Space Grey 16GB Wi-Fi</a>

                                       <div class="clearfix product_info">

                                           <p class="product_price alignleft"><b>$399.00</b></p>

                                       </div>

                                       
                           <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                           <ul class="bottombar">

                               <li><a href="#">Add to Wishlist</a></li>
                               <li><a href="#">Add to Compare</a></li>

                           </ul>

                                   </div>

                                   <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                               </div><!--/ .product_item-->

                           </div>

                           <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                           <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                           <div class="table_cell">

                               <div class="product_item">

                                   <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                   <div class="image_wrap">

                                       <img src="{{ asset("images/product_img8.jpg")}}" alt="">

                                       <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                       <div class="actions_wrap">

                                           <div class="centered_buttons">

                                               <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                           </div><!--/ .centered_buttons -->

                                           

                                           

                                       </div><!--/ .actions_wrap-->
                                       
                                       <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                   </div><!--/. image_wrap-->

                                   <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                   <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                   <div class="description">

                                       <a href="#">Acer Aspire SW5-171-34ZR 11.6" Touchscreen LED</a>

                                       <div class="clearfix product_info">

                                           <p class="product_price alignleft"><b>$659.00</b></p>

                                       </div>

                                       
                           <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                           <ul class="bottombar">

                               <li><a href="#">Add to Wishlist</a></li>
                               <li><a href="#">Add to Compare</a></li>

                           </ul>

                                   </div>

                                   <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                               </div><!--/ .product_item-->

                           </div>

                           <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                       </div>

                       <div class="table_row">

                           <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                           <div class="table_cell">

                               <div class="product_item">

                                   <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                   <div class="image_wrap">

                                       <img src="{{ asset("images/product_img5.jpg")}}" alt="">

                                       <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                       <div class="actions_wrap">

                                           <div class="centered_buttons">

                                               <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                           </div><!--/ .centered_buttons -->

                                           

                                           

                                       </div><!--/ .actions_wrap-->
                                       
                                       <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                   </div><!--/. image_wrap-->

                                   <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                   <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                   <div class="description">

                                       <a href="#">Apple 13.3" MacBook Pro Notebook Computer with Retina Display</a>

                                       <div class="clearfix product_info">

                                           <p class="product_price alignleft"><b>$1590.00</b></p>

                                       </div>

                                       
                           <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                           <ul class="bottombar">

                               <li><a href="#">Add to Wishlist</a></li>
                               <li><a href="#">Add to Compare</a></li>

                           </ul>

                                   </div>

                                   <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                               </div><!--/ .product_item-->

                           </div>

                           <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                           <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                           <div class="table_cell">

                               <div class="product_item">

                                   <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                   <div class="image_wrap">

                                       <img src="{{ asset("images/product_img9.jpg")}}" alt="">

                                       <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                       <div class="actions_wrap">

                                           <div class="centered_buttons">

                                               <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                           </div><!--/ .centered_buttons -->

                                           

                                           

                                       </div><!--/ .actions_wrap-->
                                       
                                       <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                   </div><!--/. image_wrap-->

                                   <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                   <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                   <div class="description">

                                       <a href="#">Apple 27-inch MF886LLA iMac with Retina 5K Display Late 2014</a>

                                       <div class="clearfix product_info">

                                           <p class="product_price alignleft"><b>$2220.00</b></p>

                                       </div>

                                       
                           <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                           <ul class="bottombar">

                               <li><a href="#">Add to Wishlist</a></li>
                               <li><a href="#">Add to Compare</a></li>

                           </ul>

                                   </div>

                                   <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                               </div><!--/ .product_item-->

                           </div>

                           <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                       </div>

                   </div>

               </div>

           </div>

       </div>';  
      
     
        echo $output;
     }
}
