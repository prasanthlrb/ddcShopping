<?php
Route::get('/','homeController@index');
Route::get('/shop','categoryController@index');
Route::get('/shop/{id}','productController@index');
//pages route
Route::get('/about','pageController@about');
Route::get('/terms','pageController@terms');
Route::get('/faq','pageController@faq');
Route::get('/contact','pageController@contact');
Route::get('/cart',function(){
    return view('cart');
});
Route::get('/compare',function(){
    return view('compare');
});
Route::get('/wishlist',function(){
    return view('wishlist');
});
Route::get('/checkout',function(){
    return view('checkout');
});



Route::group(['prefix' => 'vendor'],function(){
    Route::get('/dashboard',function(){
        return view('vendor.dashboard');
    });
});
Route::group(['prefix' => 'account'],function(){
    Route::get('/review',function(){
        return view('customer.review');
    });
    Route::get('/account',function(){
        return view('customer.dashboard');
    });
    Route::get('/wishlist',function(){
        return view('customer.wishlist');
    });
    Route::get('/address',function(){
        return view('customer.address');
    });
    Route::get('/orders',function(){
        return view('customer.orders');
    });
});
