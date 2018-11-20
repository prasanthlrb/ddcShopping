<?php

namespace App\Http\Controllers;
use App\brand;
use App\product;
use App\product_data;
use App\Upload;
use App\link_product;
use App\product_tags;
use App\Category;
use App\tag;
use App\terms;
use App\attribute;
use App\subCategory;
use App\product_attribute;
use Illuminate\Http\Request;
use DB;

class shopController extends Controller
{
    public function filterProduct($id){
        // $brand = brand::all();
        // $home_slider = home_slider::all();
        // $homepage_category = homepage_category::all();
        // $homepage_recommended = homepage_recommended::all();
        $subCategoryid = subCategory::find($id);

        $subCategory = subCategory::where('cat_id','=',$subCategoryid->cat_id)->get(); 

        $product = DB::table('products')
            ->where('products.sub_category','=',$id)      
            ->join('product_datas', 'products.id', '=', 'product_datas.product_id')
              ->select('*')
              ->where('product_datas.featured','=','true')
              ->orderBy('product_datas.created_at','desc')
              ->paginate(3);
  
        return view('category',compact('product','subCategory','subCategoryid'));
     }
}
