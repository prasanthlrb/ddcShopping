<?php

namespace App\Http\Controllers;

use App\Vendor;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.home');
    }


    public function viewVendor(){
        $vendor = Vendor::all();
        return view('admin.vendorList',compact('vendor'));
    }
}
