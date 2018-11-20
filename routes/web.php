<?php
//Route::get('/','homeController@index');
Route::get('/','pageController@index');
Route::get('/shop','categoryController@index');
Route::get('/shop/{id}','productController@index');
//pages route
Route::get('/about','pageController@about');
Route::get('/terms','pageController@terms');
Route::get('/faq','pageController@faq');
Route::get('/contact','pageController@contact');
Route::get('/get_website_category','pageController@get_website_category'); 
Route::get('/get_website_main_category','pageController@get_website_main_category'); 
Route::get('/get_home_product/{id}','topCategoryController@get_home_product'); 
Route::get('/cart','pageController@cartPage');


Route::get('/filter-product/{id}','shopController@filterProduct'); 

Route::get('/compare',function(){
    return view('compare');
});
Route::get('/wishlist',function(){
    return view('wishlist');
});
Route::get('/checkout',function(){
    return view('checkout');
});
Route::get('/register',function(){
    return view('register');
});



Route::group(['prefix' => 'vendor'],function(){
    Route::get('/dashboard',function(){
        return view('vendor.dashboard');
    });
    Route::get('/order',function(){
        return view('vendor.order');
    });
    Route::get('/product',function(){
        return view('vendor.product');
    });
    Route::get('/report',function(){
        return view('vendor.report');
    });
});
Route::group(['prefix' => 'admin'],function(){
    Route::get('/dashboard',function(){
        return view('admin.app');
    });
    Route::get('/contact',function(){
        return view('admin.contact');
    });
    Route::get('/add-contact',function(){
        return view('admin.addContact');
    });

    // Route::get('/role',function(){
    //     return view('admin.role');
    // });

    Route::get('/user',function(){
        return view('admin.userList');
    });
    
    Route::get('/order',function(){
        return view('admin.order');
    });

    // setting
   
    Route::get('/social-details','settingController@socialMedia');
    Route::post('/add-social','settingController@updatesocialMedia');
   
    
    Route::get('/contact-details','settingController@contactView');
    Route::post('/setting-contact','settingController@contactUpdate');
    Route::get('/faq','settingController@faq');
    Route::get('/edit_faq/{id}','settingController@editFaq');
    Route::get('/delete_faq/{id}','settingController@deleteFaq');
    Route::post('/faq_data','settingController@faqStore');
    Route::post('/update_faq','settingController@faqUpdate');

    Route::get('/brand','settingController@viewBrand');
    Route::get('/edit_brand/{id}','settingController@editBrand');
    Route::get('/delete_brand/{id}','settingController@deleteBrand');
    Route::post('/add-brand','settingController@brandStore');
    Route::post('/update-brand','settingController@brandUpdate');

   
});
Route::group(['prefix' => 'account'],function(){

    Route::get('/review','AccountController@review');
    Route::get('/dashboard','AccountController@dashboard');
    Route::get('/wishlist','AccountController@wishlist');
    Route::get('/address','AccountController@address');
    Route::get('/orders','AccountController@orders');
   
});


Route::group(['prefix' => 'admin'],function(){

    Route::get('/homepageCategory','settingController@homepageCategory');
    Route::post('/homepageCategoryUpdate','settingController@homepageCategoryUpdate');

    Route::get('/recommendedCategory','settingController@recommendedCategory');
    Route::post('/recommendedCategoryUpdate','settingController@recommendedCategoryUpdate');

    Route::get('/category','productController@viewCategory');
    Route::get('/category/{id}','productController@viewSubCategory');

    // Attribute Management
    Route::get('/attribute','productController@viewAttribute'); 
    Route::post('/attributeSave','productController@attributeSave');
    Route::post('/attributeUpdate','productController@attributeUpdate');
    Route::get('/attributeEdit/{id}','productController@attributeEdit');
    Route::get('/attributeDelete/{id}','productController@attributeDelete');
    
    // Attribute Management
    Route::get('/terms/{id}','productController@viewTerms'); 
    Route::post('/termsSave','productController@termsSave');
    Route::post('/termsUpdate','productController@termsUpdate');
    Route::get('/termsEdit/{id}','productController@termsEdit');
    Route::get('/termsDelete/{id}','productController@termsDelete');


    // Role Management
    Route::get('/role','CustomUserController@viewRole'); 
    Route::post('/roleSave','CustomUserController@roleSave');
    Route::post('/roleUpdate','CustomUserController@roleUpdate');
    Route::get('/roleEdit/{id}','CustomUserController@roleEdit');
    Route::get('/roleDelete/{id}','CustomUserController@roleDelete');
    
    // user Management
    Route::get('/customuser','CustomUserController@index');
    Route::post('/UserSave','CustomUserController@UserSave');
    Route::post('/UserUpdate','CustomUserController@UserUpdate');
    Route::get('/UserEdit/{id}','CustomUserController@UserEdit');
    Route::get('/UserDelete/{id}','CustomUserController@UserDelete');

    // coupon Management
    Route::get('/coupon','CouponController@index');
    Route::get('/addCoupon','CouponController@addCoupon');
    Route::get('/viewCoupon/{id}','CouponController@viewCoupon');
    Route::post('/CouponSave','CouponController@CouponSave');
    Route::post('/CouponUpdate','CouponController@CouponUpdate');
    Route::get('/CouponEdit/{id}','CouponController@CouponEdit');
    Route::get('/CouponDelete/{id}','CouponController@CouponDelete');


    // news-letter Management
    Route::get('/newsletter','settingController@viewNewsletter'); 
    Route::get('/get_news_select/{id}','settingController@get_news_select'); 
    Route::post('/newsSave','settingController@newsSave');
    Route::post('/newsUpdate','settingController@newsUpdate');
    Route::get('/newsEdit/{id}','settingController@newsEdit');
    Route::get('/newsDelete/{id}','settingController@newsDelete');

    // tag Management
    Route::get('/tag','settingController@viewTag'); 
    Route::post('/tagSave','settingController@tagSave');
    Route::post('/tagUpdate','settingController@tagUpdate');
    Route::get('/tagEdit/{id}','settingController@tagEdit');
    Route::get('/tagDelete/{id}','settingController@tagDelete');


    //produt
    Route::get('/add-product','productController@addProduct');
    //Route::get('/add-product_image','productController@addProductImage');
    Route::get('/viewProduct','productController@viewProduct'); 
    Route::get('/get_sub_category/{id}','productController@get_sub_category'); 
    Route::get('/get_terms/{id}','productController@get_terms'); 
    Route::post('/productSave','productController@productSave');
    Route::post('/attribute-terms-save','productController@productAttribute');
    Route::get('/productDelete/{id}','productController@productDelete'); 
    
    //Vendor
    Route::get('/viewVendor','VendorController@viewVendor'); 

    // HomeSlider Management
    Route::get('/homeSlider','settingController@homeSlider'); 
    Route::post('/sliderSave','settingController@sliderSave');
    Route::post('/sliderUpdate','settingController@sliderUpdate');
    Route::get('/sliderEdit/{id}','settingController@sliderEdit');
    Route::get('/sliderDelete/{id}','settingController@sliderDelete');

});


// category Management
Route::post('/category_data','productController@createCategory');
Route::post('/update_cat','productController@updateCategory');
Route::get('/edit_cat/{id}','productController@editCategory');
Route::get('/delete_cat/{id}','productController@deleteCategory');
// Subcategory Management
Route::post('/subcategory_data','productController@createSubCategory');
Route::post('/update_sub','productController@updateSubCategory');
Route::get('/edit_sub/{id}','productController@editSubCategory');
Route::get('/delete_sub/{id}','productController@deleteSubCategory');

Route::get('/test-purpose',function(){
    return view('admin.testPurpose');
});
Route::post('/images-save', 'UploadImagesController@store');
Route::post('/images-delete', 'UploadImagesController@destroy');
Route::get('/images-show', 'UploadImagesController@create');
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('vendor/home', 'VendorController@index');
Route::get('vendor/login', 'Vendor\LoginController@showLoginForm')->name('vendor.login');

Route::get('vendor/register', 'Vendor\RegisterController@showRegistrationForm')->name('vendor.register');
Route::post('vendor/login', 'Vendor\LoginController@login');
Route::post('vendor/register', 'Vendor\RegisterController@register');
Route::post('vendor-password/email', 'Vendor\ForgotPasswordController@sendResetLinkEmail')->name('vendor.password.email');
Route::get('vendor-password/reset', 'Vendor\ForgotPasswordController@showLinkRequestForm')->name('vendor.password.request');
Route::post('vendor-password/reset', 'Vendor\ForgotPasswordController@reset');
Route::get('vendor-password/reset/{token}', 'Vendor\ForgotPasswordController@showResetForm')->name('vendor.password.reset');



Route::group(['prefix' => 'vendor'],function(){


    // Attribute Management
    Route::get('/attribute','Vendor\productController@viewAttribute'); 
    Route::post('/attributeSave','Vendor\productController@attributeSave');
    Route::post('/attributeUpdate','Vendor\productController@attributeUpdate');
    Route::get('/attributeEdit/{id}','Vendor\productController@attributeEdit');
    Route::get('/attributeDelete/{id}','Vendor\productController@attributeDelete');
    
    // Attribute Management
    Route::get('/terms/{id}','Vendor\productController@viewTerms'); 
    Route::post('/termsSave','Vendor\productController@termsSave');
    Route::post('/termsUpdate','Vendor\productController@termsUpdate');
    Route::get('/termsEdit/{id}','Vendor\productController@termsEdit');
    Route::get('/termsDelete/{id}','Vendor\productController@termsDelete');

    // tag Management
    Route::get('/tag','Vendor\settingController@viewTag'); 
    Route::post('/tagSave','Vendor\settingController@tagSave');
    Route::post('/tagUpdate','Vendor\settingController@tagUpdate');
    Route::get('/tagEdit/{id}','Vendor\settingController@tagEdit');
    Route::get('/tagDelete/{id}','Vendor\settingController@tagDelete');

    //produt
    Route::get('/add-product','Vendor\productController@addProduct');
    Route::get('/viewProduct','Vendor\productController@viewProduct'); 
    Route::get('/get_sub_category/{id}','Vendor\productController@get_sub_category'); 
    Route::get('/get_terms/{id}','Vendor\productController@get_terms'); 
    Route::post('/productSave','Vendor\productController@productSave');
    Route::post('/attribute-terms-save','Vendor\productController@productAttribute');
    Route::get('/productDelete/{id}','Vendor\productController@productDelete'); 
    
});
Route::get('/quick-view/{id}','pageController@quickModel');
Route::get('/add-cart/{id}','pageController@addCart');
Route::get('/cart-menu','pageController@cartMenu');

 Route::get('/get-cart',function(){
    $total = Cart::getTotal();
    $cartTotalQuantity = Cart::getTotalQuantity();
      $data = $total.'|'.$cartTotalQuantity;
          return json_encode($data);
 });
 Route::get('/clean-cart',function(){
    Cart::clear();
 });
 Route::get('/cart-qty-minus/{id}',function($id){
    Cart::update($id, array(
        'quantity' => -1,
      ));
 });
 Route::get('/cart-qty-plus/{id}',function($id){
    Cart::update($id, array(
        'quantity' => +1,
      ));
 });
 
 Route::get('/remove-cart/{id}',function($id){
    Cart::remove($id);
 });
 Route::get('/cart-data','pageController@cartPageData');