<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function review(){
    return view('customer.review');
    }
    public function dashboard(){
    return view('customer.dashboard');
    }
    public function wishlist(){
    return view('customer.wishlist');
    }
    public function address(){
    return view('customer.address');
    }
    public function orders(){
    return view('customer.orders');
    }

}
