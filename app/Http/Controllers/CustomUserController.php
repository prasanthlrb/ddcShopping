<?php

namespace App\Http\Controllers;
use App\custom_user;
use App\role;
use Illuminate\Http\Request;
use Hash;

class CustomUserController extends Controller
{
    public function index(){
        $custom_user = custom_user::all();
        $role = role::all();
        return view('admin/userList',compact('custom_user','role'));
    }

    public function UserSave(Request $request){
        $request->validate([
            'emp_name'=>'required',
            'emp_id'=>'required|unique:custom_users',
            'email'=>'required|email|unique:custom_users',
            'role_id'=>'required',
            'password'=>'required',
            'status'=>'required'
        ]);
        $custom_user = new custom_user;
        $custom_user->emp_name = $request->emp_name;
        $custom_user->emp_id = $request->emp_id;
        $custom_user->email = $request->email;
        $custom_user->role_id = $request->role_id;
        $custom_user->password = Hash::make ( $request->get ( 'password' ) );
        $custom_user->status = $request->status;
        $custom_user->save();
        return response()->json($custom_user); 
    }
   
    public function UserEdit($id){
        $custom_user = custom_user::find($id);
        return response()->json($custom_user); 
    }

    public function UserUpdate(Request $request){
        $request->validate([
            'emp_name'=>'required',
            'emp_id'=>'required|unique:custom_users,emp_id,'.$request->id,
            'email'=>'required|email|unique:custom_users,email,'.$request->id,
            'role_id'=>'required',
            'password'=>'required',
            'status'=>'required'
        ]);
        $custom_user = custom_user::find($request->id);
        $custom_user->emp_name = $request->emp_name;
        $custom_user->emp_id = $request->emp_id;
        $custom_user->email = $request->email;
        $custom_user->role_id = $request->role_id;
        if($request->newpassword != ""){
        $custom_user->password = Hash::make ( $request->get ( 'newpassword' ) );
        }
        $custom_user->status = $request->status;
        $custom_user->save();;
        return response()->json($custom_user);
    }

    public function UserDelete($id){
        $custom_user = custom_user::find($id);
        $custom_user->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }


    public function viewRole(){
        $role = role::all();
        return view('admin.role',compact('role'));
    }

    public function roleSave(Request $request){
        $request->validate([
            'role_name'=>'required',
        ]);
        $role = new role;
        $role->role_name = $request->role_name;
        $role->vendor = $request->vendor;
        $role->vendor_edit_delete = $request->vendor_edit_delete;
        $role->customer = $request->customer;
        $role->customer_edit_delete = $request->customer_edit_delete;
        $role->role = $request->role;
        $role->role_edit_delete = $request->role_edit_delete;
        $role->category = $request->category;
        $role->category_edit_delete = $request->category_edit_delete;
        $role->subcategory = $request->subcategory;
        $role->subcategory_edit_delete = $request->subcategory_edit_delete;
        $role->tag = $request->tag;
        $role->tag_edit_delete = $request->tag_edit_delete;
        $role->coupon = $request->coupon;
        $role->coupon_edit_delete = $request->coupon_edit_delete;
        $role->orders = $request->orders;
        $role->orders_edit_delete = $request->orders_edit_delete;
        $role->products = $request->products;
        $role->products_edit_delete = $request->products_edit_delete;
        $role->settings = $request->settings;
        $role->reports = $request->reports;
        $role->save();
        return response()->json($role); 
    }
   
    public function roleEdit($id){
        $role = role::find($id);
        return response()->json($role); 
    }

    public function roleUpdate(Request $request){
        $request->validate([
            'role_name'=>'required',
        ]);
        $role = role::find($request->id);
        $role->role_name = $request->role_name;
        $role->vendor = $request->vendor;
        $role->vendor_edit_delete = $request->vendor_edit_delete;
        $role->customer = $request->customer;
        $role->customer_edit_delete = $request->customer_edit_delete;
        $role->role = $request->role;
        $role->role_edit_delete = $request->role_edit_delete;
        $role->category = $request->category;
        $role->category_edit_delete = $request->category_edit_delete;
        $role->subcategory = $request->subcategory;
        $role->subcategory_edit_delete = $request->subcategory_edit_delete;
        $role->tag = $request->tag;
        $role->tag_edit_delete = $request->tag_edit_delete;
        $role->coupon = $request->coupon;
        $role->coupon_edit_delete = $request->coupon_edit_delete;
        $role->orders = $request->orders;
        $role->orders_edit_delete = $request->orders_edit_delete;
        $role->products = $request->products;
        $role->products_edit_delete = $request->products_edit_delete;
        $role->settings = $request->settings;
        $role->reports = $request->reports;
        $role->save();
        return response()->json($role);
    }

    public function roleDelete($id){
        $role = role::find($id);
        $role->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

}
