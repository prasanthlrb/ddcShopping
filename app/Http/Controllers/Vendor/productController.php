<?php

namespace App\Http\Controllers\Vendor;
use App\brand;
use App\Vendor;
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
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
class productController extends Controller
{
    private $photos_path;
    public function __construct()
    {
        $this->photos_path = public_path('/product_image');
    }
    public function index(){
        return view('product');
    }

   
    public function viewAttribute(){
        $attribute = attribute::all();
        $terms = terms::all();
        return view('vendor/setting/attribute',compact('attribute','terms'));
    }

    public function attributeSave(Request $request){
        $request->validate([
            'attribute_name'=>'required'
          ]);
        $attribute = new attribute;
        $attribute->name = $request->attribute_name;
        $attribute->type = $request->type;
        $attribute->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function attributeUpdate(Request $request){
        $request->validate([
            'attribute_name'=>'required'
          ]);
        $attribute = attribute::find($request->id);
        $attribute->name = $request->attribute_name;
        $attribute->type = $request->type;
        $attribute->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function attributeEdit($id){
        $attribute = attribute::find($id);
        return response()->json($attribute); 
    }

    public function attributeDelete($id){
        $attribute = attribute::find($id);
        $attribute->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function viewTerms($id){
        $terms  = DB::table('terms')
           ->select('*')
           ->where('attribute_id',$id)
           ->get();
        $attribute = attribute::find($id);
        return view('vendor/setting/terms',compact('attribute','terms'));    
        //return response()->json( $attribute);   
    }

    public function termsSave(Request $request){
        $request->validate([
            'cat_name'=>'required'
          ]);
        $terms = new terms;
        $terms->terms_name = $request->cat_name;
        $terms->color_code = $request->color_code;
        $terms->attribute_id = $request->attribute_id;
        $terms->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function termsUpdate(Request $request){
        $request->validate([
            'cat_name'=>'required'
          ]);
        $terms = terms::find($request->id);
        $terms->terms_name = $request->cat_name;
        $terms->color_code = $request->color_code;
        $terms->attribute_id = $request->attribute_id;
        $terms->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function termsEdit($id){
        $terms = terms::find($id);
        return response()->json($terms); 
    }

    public function termsDelete($id){
        $terms = terms::find($id);
        $terms->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function viewProduct(){
        $category = category::all();
        $subCategory = subCategory::all();
        $id="1";
        $product = product::where('vendor', $id)->get();
        return view('vendor/setting/viewProduct',compact('category','subCategory','product'));
    }

    public function addProduct(){
        $category = category::all();
        $attribute = attribute::all();
        $product = product::all();
        $Vendor = Vendor::all();
        $brand = brand::all();
        $tag = tag::all();
        return view('vendor/setting/addProduct',compact('brand','Vendor','product','category','attribute','tag'));
    }

    public function get_sub_category($id){ 
        $data  = DB::table('sub_categories')
            ->select('*')
            ->where('cat_id',$id)
            ->get();

      $output = '<option value="none" selected="" disabled="">Select subCategory</option>';
        foreach ($data as $value){
            $output .='<option value="'.$value->id.'">'.$value->sub_name.'</option>'; 
        }
      
      echo $output;
      
    }
    public function get_terms($id){ 
        $data  = DB::table('terms')
            ->select('*')
            ->where('attribute_id',$id)
            ->get();
        
        $attribute = attribute::find($id);


      $output = '<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>';
      $output .= '<script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>';
      $output .= '<br><label>Choose The '.$attribute->name.'</label>';
      $output .= '<br><select style="width:100%" id="'.$attribute->name.'" name="'.$attribute->name.'[]" class="select2 form-control col-md-12" multiple="multiple">';
      $output .= '<optgroup label="'.$attribute->name.'">';
        foreach ($data as $value){
            $output .='<option value="'.$value->terms_name.'">'.$value->terms_name.'</option>'; 
        }
        $output .= '</optgroup>';
        $output .= '</select>';
      
      echo $output;
    }

    public function productSave(Request $request){

    //image upload
    $fileName = null;
    if($request->file('imgInp')!=""){
    $image = $request->file('imgInp');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('upload_single_product/'), $fileName);
    }

  
        $product = new product;
        $product->category = $request->category;
        $product->sub_category = $request->sub_category;
        $product->product_name = $request->product_name;
        $product->brand_name = $request->brand_name;
        $product->product_description = $request->product_description;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->seo_keywords = $request->seo_keywords;
        $product->vendor = $request->vendor;
        $product->product_image = $fileName;
        $product->save();

        $product_data = new product_data;
        $product_data->product_id = $product->id;
        $product_data->regular_price = $request->regular_price;
        $product_data->sales_price = $request->sales_price;
        $product_data->sku = $request->sku;
        $product_data->stock_quantity = $request->stock_quantity;
        $product_data->low_stock = $request->low_stock;
        $product_data->weight = $request->weight;
        $product_data->length = $request->length;
        $product_data->width = $request->width;
        $product_data->height = $request->height;
        $product_data->shipping_type = $request->shipping_type;
        $product_data->shipping_amount = $request->shipping_amount;
        $product_data->hot_product = $request->hot_product;
        $product_data->review = $request->review;
        $product_data->new_product = $request->new_product;
        $product_data->recommended = $request->recommended;
        $product_data->featured = $request->featured;
        $product_data->save();

    if(!empty($request->upsells)){
        foreach(explode(',', $request->upsells) as $upsells){
            $link_product = new link_product;
            $link_product->product_id = $product->id;
            $link_product->product =  $upsells;
            $link_product->type = '1';
            $link_product->save();
        }
    }
    if(!empty($request->cross_sells)){
        foreach(explode(',', $request->cross_sells) as $cross_sells){
            $link_product = new link_product;
            $link_product->product_id = $product->id;
            $link_product->product = $cross_sells;
            $link_product->type = '2';
            $link_product->save();
        }
    }
    if(!empty($request->tag)){
        foreach(explode(',', $request->tag) as $row){
            $product_tags = new product_tags;
            $product_tags->product_id = $product->id;
            $product_tags->tag = $row;
            $product_tags->save();
        }
    }
        
    return response()->json($product->id);  
    }

    
    public function productAttribute(Request $request){
        // attribute
        $product_id = $request->pro_id;
        $attribute_data;
       
if(count($request->attribute)>0){
    
    foreach(explode(',', $request->attribute) as $id) {
        $attribute_data[] = attribute::find($id);        
    }
   
    $terms;
    for ($x = 0; $x < count($attribute_data); $x++) {
         $attrName = $attribute_data[$x]->name;
        // $attrName = $attribute_data[$x]->name;
        $terms[] = $request->$attrName;                
    }
  
    for ($x = 0; $x < count($attribute_data); $x++) {

        foreach($terms[$x] as $term){
        $attr = new product_attribute;
        $attr->product_id = $product_id;
        $attr->attribute = $attribute_data[$x]->id;
        $attr->terms = $term;
        $attr->save();
    }
    }
}

return response()->json(['message'=>'Successfully Store'],200); 
      
        
    } 


    public function productDelete($id){
        
        $product = product::where('id', $id)->delete();
        $product_attribute = product_attribute::where('product_id', $id)->delete();
        $product_tags = product_tags::where('product_id', $id)->delete();
        $link_product = link_product::where('product_id', $id)->delete();
        $product_data = product_data::where('product_id', $id)->delete();
        $upload = upload::where('product_id', $id)->delete();

        return response()->json(['message'=>'Successfully Delete'],200); 
    }

   

}
