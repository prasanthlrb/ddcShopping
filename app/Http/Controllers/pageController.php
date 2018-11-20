<?php

namespace App\Http\Controllers;
use App\upload;
use App\home_slider;
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

class pageController extends Controller
{
   public function index(){
      $brand = brand::all();
      $home_slider = home_slider::all();
      $homepage_category = homepage_category::all();
      $homepage_recommended = homepage_recommended::all();
      $Category = Category::all();

      $featured = DB::table('products')
            ->join('product_datas', 'products.id', '=', 'product_datas.product_id')
            ->select('*')
            ->where('product_datas.featured','=','true')
            ->orderBy('product_datas.created_at','desc')
            ->take(6)
            ->get();
      $new = DB::table('products')
            ->join('product_datas', 'products.id', '=', 'product_datas.product_id')
            ->select('*')
            ->where('product_datas.new_product','=','true')
            ->orderBy('product_datas.created_at','desc')
            ->take(6)
            ->get();
   
      $hot = DB::table('products')
            ->join('product_datas', 'products.id', '=', 'product_datas.product_id')
            ->select('*')
            ->where('product_datas.hot_product','=','true')
            ->orderBy('product_datas.created_at','desc')
            ->take(6)
            ->get();

      $product = DB::table('products')
            ->join('product_datas', 'products.id', '=', 'product_datas.product_id')
            ->select('*')
            ->where('product_datas.hot_product','=','true')
            ->orderBy('product_datas.created_at','desc')
            ->get();      

      return view('index',compact('brand','featured','hot','new','homepage_category','homepage_recommended','Category','product','home_slider'));
   }

   public function about(){
    return view('about');
   }

   public function terms(){
    return view('terms');
   }

   public function faq(){
    return view('faq');
   }
   public function contact(){
    return view('contact');
   }

   public function get_website_category(){ 
      $brand = brand::all();
      $Category = Category::all();
      $subCategory = subCategory::all();

   $output='';
   foreach ($Category as $Category1){
      $output .= '<li class="has_megamenu animated_item">';
      $output .= '<a href="#">'.$Category1->cat_name.'</a>';
      $output .= '<div class="mega_menu clearfix">';
      $output .= '<div class="mega_menu_item">';
      $output .= '<h6><b>By Category</b></h6>';
      $output .= '<ul class="list_of_links">';
   foreach ($subCategory as $subCategory1){
      if($subCategory1->cat_id == $Category1->id){
            $output .= '<li><a href="/filter-product/'.$subCategory1->id.'">'.$subCategory1->sub_name.'</a></li>';
      }
   }
      $output .= '</ul>';
      $output .= '</div>';
      $output .= '<div class="mega_menu_item">';
      $output .= '<h6><b>By Brand</b></h6>';
      $output .= '<ul class="list_of_links">';
      $brand_id;
      $product = DB::table('products')
         ->select('brand_name')
         ->where('category','=',$Category1->id)
         ->groupBy('brand_name')
         ->get();
      foreach ($brand as $brand1){
         foreach ($product as $product1){
            if($product1->brand_name == $brand1->id){
                  $output .= '<li><a href="#">'.$brand1->brand.'</a></li>';
            }
         }
      }
      $output .= '</ul>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</li>';
   }

echo $output;

  }


public function get_website_main_category(){ 
$Category = Category::all();

$output='';
foreach ($Category as $Category1){
   $output .= '<li class="animated_item"><a href="#">'.$Category1->cat_name.'</a></li>';
}

echo $output;

}

public function quickModel($id){
   $upload = upload::where('product_id', $id)->get();
   $product = DB::table('products')
   ->where('products.id','=',$id)
   ->join('product_datas', 'products.id', '=', 'product_datas.product_id')
   ->select('*')
   ->get();

foreach($product as $product1){

      $output='<!--==================================
      Quick view modal window
======================================-->

<div id="quick_view" class="modal_window">

<button class="close arcticmodal-close"></button>

<div class="clearfix">

      <!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

      <div class="single_product">

            <!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

            <div class="image_preview_container" id="qv_preview">';
if($product1->product_image != ""){
   $output.="<img id='img_zoom' data-zoom-image='images/product_img5.JPG' src='upload_single_product/".$product1->product_image."' alt=''>";
}else{ 
   $output.='<img src="images/qv_thumb_2.jpg" alt="">';
} 
$output.='</div><!--/ .image_preview_container-->

            <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
            
            <div class="product_preview" data-output="#qv_preview">

                  <div class="owl_carousel" id="thumbnails">';
foreach($upload as $upload1){
if(!empty($upload1)){
    $output.='<img src="product_image/'.$upload1->filename.'" data-large-image="product_image/'.$upload1->filename.'" alt="">';
}else{ 
   $output.='<img src="images/qv_thumb_2.jpg" data-large-image="images/qv_img_2.jpg" alt="">';
}                   
}
$output.='</div><!--/ .owl-carousel-->

            </div><!--/ .product_preview-->
            
            <!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->
            
            <div class="v_centered">

                  <span class="title">Share this:</span>

                  <div class="addthis_widget_container">
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_2"></a>
                        <a class="addthis_button_preferred_3"></a>
                        <!-- <a class="addthis_button_preferred_4"></a> -->
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                        </div>
                        <!-- AddThis Button END -->
                  </div>
                  
            </div>
            
            <!-- - - - - - - - - - - - - - End of share - - - - - - - - - - - - - - - - -->

      </div>

      <!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

      <!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

      <div class="single_product_description">

            <h3><a href="#">'.$product1->product_name.'
            </a></h3>

            <div class="description_section v_centered">

                  <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
            
                  <ul class="rating">

                        <li class="active"></li>
                        <li class="active"></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>

                  </ul>
                        
                  <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                  <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

                  <ul class="topbar">

                        <li><a href="#">3 Review(s)</a></li>
                        <li><a href="#">Add Your Review</a></li>

                  </ul>

                  <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

            </div>

            <div class="description_section">

                  <table class="product_info">

                        <tbody>

                              <tr>

                                    <td>Vendor: </td>
                                    <td><a href="#">'.$product1->vendor.'</a></td>

                              </tr>

                              <tr>

                                    <td>Availability: </td>';
if($product1->stock_quantity !=""){
   $output.='<td><span class="in_stock">in stock</span> '.$product1->stock_quantity.' item(s)</td>';
}else{
   $output.='<td><span style="color:red;">No stocks Available</span> '.$product1->stock_quantity.' item(s)</td>';
}
                            
$output.='</tr>

                              <tr>

                                    <td>Product Code: </td>
                                    <td>'.$product1->sku.'</td>

                              </tr>

                        </tbody>

                  </table>

            </div>

            <hr>

            <div class="description_section">

                  <p>'.$product1->product_description.'</p>

            </div>

            <hr>';
if($product1->regular_price!=""){
      $output.=' <p class="product_price"><s>$'.$product1->regular_price.'</s> <b class="theme_color">$'.$product1->sales_price.'</b></p>';
}else{
   $output.=' <p class="product_price"><b class="theme_color">$'.$product1->sales_price.'</b></p>';
}
           

$output.='<!-- - - - - - - - - - - - - - Product size - - - - - - - - - - - - - - - - -->

            <!-- <div class="description_section_2 v_centered">
                  
                  <span class="title">Size:</span>

                  <div class="custom_select min">

                        <select>

                              <option value="Small">Small</option>
                              <option value="Middle">Middle</option>
                              <option value="Big">Big</option>

                        </select>

                  </div>

            </div> -->

            <!-- - - - - - - - - - - - - - End of product size - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

            <div class="description_section_2 v_centered">
                  
                  <span class="title">Qty:</span>

                  <div class="qty min clearfix">

                        <button class="theme_button" type="button" data-direction="minus">&#45;</button>
                        <input type="text" name="" value="1">
                        <button class="theme_button" type="button" data-direction="plus">&#43;</button>

                  </div>

            </div>

            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

            <div class="buttons_row">

                  <button class="button_blue middle_btn">Add to Cart</button>

                  <button class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

                  <button class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

            </div>

            <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

      </div>

      <!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

</div>

</div>

<!--==================================
      End quick view modal window
====================================== -->';  
}

   echo $output;
}


public function addCart($id){
      $product = product::find($id);      
      $product_data = product_data::where('product_id','=',$id)->get();      
            Cart::add(array(
              'id' => $id,
              'name' => $product->product_name,
              'price' => $product_data[0]->sales_price,
              'quantity' => 1,
              'attributes' => array()
          ));
          //$cartCollection = Cart::getContent();
          $total = Cart::getTotal();
          $cartTotalQuantity = Cart::getTotalQuantity();
        
      //     $data1 = array(
      //           'total'=> Cart::getTotal(),
                
      //     );
      //     $data2 = array(
               
      //           'qty'=> Cart::getTotalQuantity(),
      //     );
      //     $data[] = $data1;
      //     $data[] = $data2;
      $data = $total.'|'.$cartTotalQuantity;
          return json_encode($data);
      }

      public function cartMenu(){

            $cartCollection = Cart::getContent();
            $output='';
            foreach($cartCollection as $cartData){
                  $amount = ($cartData->quantity * $cartData->price);
                  $product = product::find($cartData->id);

            $output .='            
            <div class="animated_item">


            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

            <div class="clearfix sc_product">

                  <a href="#" class="product_thumb"><img src="upload_single_product/'.$product->product_image.'" alt="" style="width:50px"></a>

                  <a href="#" class="product_name">'.$cartData->name.'</a>

                  <p>'.$cartData->quantity.'x'.$amount.'</p>

                  <button class="close" onclick="removeCartItem('.$cartData->id.')"></button>

            </div><!--/ .clearfix.sc_product-->
            
            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

      </div><!--/ .animated_item-->';
            }
      

      $output .='<div class="animated_item">

            <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

            <ul class="total_info">

                  <li><span class="price">Tax:</span> $0.00</li>

                  <li><span class="price">Discount:</span> $37.00</li>

                  <li class="total"><b><span class="price">Total:</span> $999.00</b></li>

            </ul>
            
            <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

      </div><!--/ .animated_item-->

      <div class="animated_item">

            <a href="/cart" class="button_grey">View Cart</a>

            <a href="#" class="button_blue">Checkout</a>

      </div><!--/ .animated_item-->';
      echo $output;
      //echo json_encode($cartCollection);
      
      }
      public function cartPage(){

            return view('cart');
      }
      public function cartPageData(){
            $cartCollection = Cart::getContent();
            $subTotal = Cart::getSubTotal();
            $total = Cart::getTotal();

            if(!Cart::isEmpty()){
            $output='<div class="container">

     
            <ul class="breadcrumbs">
    
                <li><a href="index.html">Home</a></li>
                <li>Shopping Cart</li>
    
            </ul>
    
            <section class="section_offset">
    
                <h1>Shopping Cart</h1>
    
                <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->
    
                <div class="table_wrap">
    
                    <table class="table_type_1 shopping_cart_table">
    
                        <thead>
    
                            <tr>
                                <th class="product_image_col">Product Image</th>
                                <th class="product_title_col">Product Name</th>
                               
                                <th>Price</th>
                                <th class="product_qty_col">Quantity</th>
                                <th>Total</th>
                                <th class="product_actions_col">Action</th>
                            </tr>
    
                        </thead>
    
                        <tbody>';
            foreach($cartCollection as $cartData){
                  $amount = ($cartData->quantity * $cartData->price);
                  $product = product::find($cartData->id);

            $output .=' <tr>

            <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                
            <td class="product_image_col" data-title="Product Image">
                
                <a href="#"><img src="upload_single_product/'.$product->product_image.'" alt=""></a>

            </td>

            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->

            <td data-title="Product Name">

                <a href="#" class="product_title">'.$cartData->name.'</a>

                <ul class="sc_product_info">

                    <li>Size: Big</li>
                    <li>Color: Red</li>

                </ul>

            </td>

            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->

           
            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

            <td class="subtotal" data-title="Price">
                
               '.$cartData->price.'

            </td>

            <!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

            <td data-title="Quantity">

                <div class="qty min clearfix">

                    <button class="theme_button" data-direction="minus" onclick="updateqtyMinus('.$cartData->id.')">&#45;</button>
                    <input type="text" name="cartQty" id="cartQty" value="'.$cartData->quantity.'">
                    <button class="theme_button" data-direction="plus" onclick="updateqtyPlus('.$cartData->id.')">&#43;</button>

                </div><!--/ .qty.min.clearfix-->

            </td>

            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->

            <td class="total" data-title="Total">

            '.$amount.'

            </td>

            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->

            <td data-title="Action">

               

                <a href="javascript:void(null)" onclick="removeCartItem('.$cartData->id.')" class="button_dark_grey icon_btn remove_product"><i class="icon-cancel-2"></i></a>

            </td>

            <!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->

        </tr>';
            }

            $output .=' </tbody>

            </table>

        </div>

        <footer class="bottom_box on_the_sides">

            <div class="left_side">

                <a href="#" class="button_blue middle_btn">Continue Shopping</a>

            </div>

            <div class="right_side">

                <a href="#" class="button_grey middle_btn">Clear Shopping Cart</a>

            </div>

        </footer><!--/ .bottom_box -->

        <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->

    </section><!--/ .section_offset -->

    <div class="section_offset">

        <div class="row">

            <section class="col-sm-6">

                <h3>Discount Codes</h3>

                <div class="theme_box">

                    <p class="form_caption">Enter your coupon code if you have one.</p>

                    <form id="discount_code">

                        <ul>

                            <li class="row">

                                <div class="col-xs-12">

                                    <input type="text" name="">

                                </div>

                            </li>

                        </ul>

                    </form>

                </div><!--/ .theme_box -->

                <footer class="bottom_box">

                    <button type="submit" form="discount_code" class="button_grey middle_btn">Apply Coupon</button>

                </footer>

            </section><!--/ [col] -->

           

            <section class="col-sm-6">

                <h3>Total</h3>

                <div class="table_wrap">

                    <table class="zebra">

                        <tfoot>

                            <tr>
                                    
                                <td>Subtotal</td>
                                <td>'.$subTotal.'</td>

                            </tr>

                            <tr class="total">
                                    
                                <td>Total</td>
                                <td>'.$total.'</td>

                            </tr>

                        </tfoot>

                    </table>

                </div>

                <footer class="bottom_box text-center">

                    <a class="button_blue middle_btn" href="#">Proceed to Checkout</a>

                    <div class="single_link_wrap">

                       

                    </div>

                </footer>

            </section><!-- / [col] -->

        </div><!--/ .row -->

    </div><!--/ .section_offset -->

   

</div><!--/ .container-->';
      }else{
            $output = '<div class="container">

     
            <ul class="breadcrumbs">
    
                <li><a href="index.html">Home</a></li>
                <li>Shopping Cart</li>
    
            </ul>
    
            <section class="section_offset">
    
                <h1 style="text-align:center">Your Shopping Cart is Empty</h1>
                </section>
                </div>
                ';
      }
        print $output;

      }




public function get_sidebar_category()
{ 
      $brand = brand::all();
      $Category = Category::all();
      $subCategory = subCategory::all();
      
         $output='';
         foreach ($Category as $Category1){
            $output .= '<li class="has_megamenu animated_item">';
            $output .= '<a href="#">'.$Category1->cat_name.'</a>';
            $output .= '<div class="mega_menu clearfix">';
            $output .= '<div class="mega_menu_item">';
            $output .= '<h6><b>By Category</b></h6>';
            $output .= '<ul class="list_of_links">';
         foreach ($subCategory as $subCategory1){
            if($subCategory1->cat_id == $Category1->id){
            $output .= '<li><a href="/filter-product/'.$subCategory1->id.'">'.$subCategory1->sub_name.'</a></li>';
            }
         }
            $output .= '</ul>';
            $output .= '</div>';
            $output .= '<div class="mega_menu_item">';
            $output .= '<h6><b>By Brand</b></h6>';
            $output .= '<ul class="list_of_links">';
            $brand_id;
            $product = DB::table('products')
               ->select('brand_name')
               ->where('category','=',$Category1->id)
               ->groupBy('brand_name')
               ->get();
            foreach ($brand as $brand1){
               foreach ($product as $product1){
                  if($product1->brand_name == $brand1->id){
                        $output .= '<li><a href="#">'.$brand1->brand.'</a></li>';
                  }
               }
            }
            $output .= '</ul>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</li>';
         }
      
      echo $output;
      
}




}
