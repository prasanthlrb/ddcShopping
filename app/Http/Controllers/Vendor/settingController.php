<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\tag;
use App\Http\Controllers\Controller;
use DB;

class settingController extends Controller
{
    public function viewTag(){
        $tag = tag::all();
        return view('vendor.setting.tag',compact('tag')); 
    }

    public function tagSave(Request $request){
        $request->validate([
            'tag'=>'required',
            'status'=>'required'
          ]);
        $tag = new tag;
        $tag->tag = $request->tag;
        $tag->status = $request->status;
        $tag->save();
      
        return response()->json($request); 
    }

    public function tagUpdate(Request $request){
        $request->validate([
            'tag'=>'required',
            'status'=>'required'
          ]);
        $tag = tag::find($request->id);
        $tag->tag = $request->tag;
        $tag->status = $request->status;
        $tag->save();

        return response()->json($request); 
    }

    public function tagEdit($id){
        $tag = tag::find($id);
        return response()->json($tag); 
    }

    public function tagDelete($id){
        $tag = tag::find($id);
        $tag->delete(); 
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
}
