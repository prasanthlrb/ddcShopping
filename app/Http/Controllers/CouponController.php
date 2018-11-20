<?php

namespace App\Http\Controllers;
use App\coupon;
use App\product;
use Illuminate\Http\Request;
use Hash;

class CouponController extends Controller
{
    public function index(){
        $coupon = coupon::all();
        return view('admin/couponList',compact('coupon'));
    }

    public function addCoupon(){
        $product = product::all();
        return view('admin/addCoupon',compact('product'));
    }

    public function CouponSave(Request $request){
        $request->validate([
            'coupon_code'=>'required|unique:coupons',
            'description'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'discount_type'=>'required',
            'amount'=>'required',
            'limit_per_user'=>'required',
            'limit_per_coupon'=>'required'
        ]);
        $coupon = new coupon;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->description = $request->description;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->discount_type = $request->discount_type;
        $coupon->product_id = $request->product_id;
        $coupon->amount = $request->amount;
        $coupon->limit_per_user = $request->limit_per_user;
        $coupon->limit_per_coupon = $request->limit_per_coupon;
        $coupon->save();
        return response()->json($coupon); 
    }
   
    public function CouponEdit($id){
        $coupon = coupon::find($id);
        return response()->json($coupon); 
    }

    public function viewCoupon($id){ 
        $product = product::all();
        return view('admin/addCoupon',compact('id','product'));
    }

    public function CouponUpdate(Request $request){
        $request->validate([
            'coupon_code'=>'required|unique:coupons,coupon_code,'.$request->id,
            'description'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'discount_type'=>'required',
            'amount'=>'required',
            'limit_per_user'=>'required',
            'limit_per_coupon'=>'required'
        ]);
        $coupon = coupon::find($request->id);
        $coupon->coupon_code = $request->coupon_code;
        $coupon->description = $request->description;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->discount_type = $request->discount_type;
        $coupon->product_id = $request->product_id;
        $coupon->amount = $request->amount;
        $coupon->limit_per_user = $request->limit_per_user;
        $coupon->limit_per_coupon = $request->limit_per_coupon;
        $coupon->save();;
        return response()->json($coupon);
    }

    public function CouponDelete($id){
        $coupon = coupon::find($id);
        $coupon->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

}
