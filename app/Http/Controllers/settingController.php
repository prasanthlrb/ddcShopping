<?php

namespace App\Http\Controllers;
use App\home_slider;
use App\Category;
use App\homepage_recommended;
use App\homepage_category;
use App\ContactInfo;
use App\tag;
use App\newsletter;
use App\newsletter_data;
use App\faq;
use App\brand;
use App\socialMedia;
use Illuminate\Http\Request;
use DB;

class settingController extends Controller
{
    public function index(){
        return view('category');
    }

    public function homepageCategory(){
        $data = homepage_category::all();
        $Category = Category::all();
        return view('/admin/setting/homepageCategory',compact('data','Category'));
    }

    public function homepageCategoryUpdate(Request $request){
        homepage_category::truncate();
        //homepage_category::where('id', $request->id)->delete();
        foreach($request->category_ids as $row){
            $data = new homepage_category;
            $data->category_ids = $row;
            $data->save();
        }
        return redirect('/admin/homepageCategory');

    }


    public function recommendedCategory(){
        $data = homepage_recommended::all();
        $Category = Category::all();
        return view('/admin/setting/recommendedCategory',compact('data','Category'));
    }

    public function recommendedCategoryUpdate(Request $request){
        homepage_recommended::truncate();
        //homepage_category::where('id', $request->id)->delete();
        foreach($request->category_ids as $row){
            $data = new homepage_recommended;
            $data->category_ids = $row;
            $data->save();
        }
        return redirect('/admin/recommendedCategory');

    }



// public function get_category_ids(){ 
//     $data = homepage_category::all();
//     $Category = Category::all();
//     $arraydata=array();
//     foreach($data as $data1){
//         $arraydata[]=''.$data1->category_ids.'';
//     }
//     //$arraydata=array('AK', 'HI', 'CA', 'NV', 'OR','WA');
//     //echo json_encode($arraydata);
//     $output = '<optgroup label="Register Category">';
//       foreach ($Category as $row)
//       {
//         if(in_array($row->id, $arraydata)){
//                 $output .='<option selected="true" value="'.$row->id.'">'.$row->cat_name.'</option>'; 
//         }
//         else{
//             $output .='<option value="'.$row->id.'">'.$row->cat_name.'</option>'; 
//         }
//       }
//       $output .='</optgroup>';
      
//       echo $output;
      
// }


    public function contactView(){
        $data = ContactInfo::all();
        if(count($data)>=1){
           // return view('admin.setting.contact',compact('data'));
           $data = $data[0];
           return view('admin.setting.contact',compact('data'));
        }else{
            $data = array(
                'id'=>'0',
                'email'=>'',
                'phone'=>'',
                'address'=>'',
                'map1'=>'',
                'map2'=>''
            );
            //return response()->json($data['email']);
            return view('admin.setting.contact',compact('data'));
        }
        //       
    }
    public function contactUpdate(Request $request){
        if($request->id == 0){
            $data = new ContactInfo;
        }else{

            $data = ContactInfo::find($request->id);
        }
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->map1 = $request->map1;
        $data->map2 = $request->map2;
        $data->save();
        return redirect('/admin/contact-details');
    }
    public function faq(){
        $data = faq::all();
        return view('admin.setting.faq',compact('data'));
    }
    public function faqStore(Request $request){
        $faq = new faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return response()->json($faq);
    }
    public function faqUpdate(Request $request){
        $faq = faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return response()->json($faq);
    }
    public function editFaq($id){
        $faq = faq::find($id);
        return response()->json($faq); 
    }
    public function deleteFaq($id){
        $faq = faq::find($id);
        $faq->delete();
        return response()->json($id); 
    }
    public function socialMedia(){
        $data = socialMedia::all();
        if(count($data)>=1){
            $data = $data[0];
        return view('admin.setting.social',compact('data'));
        }else{
            $data = array(
                'id'=>'0',
                'facebook'=>'',
                'twitter'=>'',
                'google'=>'',
                'pinterest'=>'',
                'flickr'=>'',
                'youtube'=>'',
                'vimeo'=>'',
                'instagram'=>'',
                'linkedin'=>''
            );
            return view('admin.setting.social',compact('data'));
        }
    }
    public function updatesocialMedia(Request $request){
        if($request->id == 0){
            $data = new socialMedia;
        }else{

            $data = socialMedia::find($request->id);
        }
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->google = $request->google;
        $data->pinterest = $request->pinterest;
        $data->flickr = $request->flickr;
        $data->youtube = $request->youtube;
        $data->vimeo = $request->vimeo;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->save();
        return redirect('/admin/social-details');
    }
    public function viewBrand(){
        $data = brand::all();
       // return response()->json($data);
        return view('admin.setting.brand',compact('data')); 
    }

    public function brandStore(Request $request){
        $request->validate([
            'brand'=>'required',
            'brand_image'=>'required',
        ]);
    //image upload
    $fileName = null;
    if($request->file('brand_image')!=""){
    $image = $request->file('brand_image');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('upload_brand/'), $fileName);
    }  
        $brand = new brand;
        $brand->brand = $request->brand;
        $brand->brand_image = $fileName;
        $brand->status = $request->status;
        $brand->save();
        return response()->json(['message'=>'Successfully Store'],200); 
    }

    public function brandUpdate(Request $request){
        $request->validate([
            'brand'=>'required',
          ]);

        if($request->brand_image!=""){
            $old_image = "upload_brand/".$request->brand_image1;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            //image upload
            $fileName = null;
            if($request->file('brand_image')!=""){
            $image = $request->file('brand_image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_brand/'), $fileName);
            }
        }
        else
        {
            $fileName = $request->brand_image1;
        }

        $brand = brand::find($request->id);
        $brand->brand = $request->brand;
        $brand->brand_image = $fileName;
        $brand->status = $request->status;
        $brand->save();
        return response()->json(['message'=>'Successfully Update'],200); 
    }
    public function editBrand($id){
        $brand = brand::find($id);
        return response()->json($brand); 
    }

    public function deleteBrand($id){
        $brand = brand::find($id);
        $brand->delete(); 
        return response()->json(['message'=>'Successfully Delete'],200); 
    }


    public function viewNewsletter(){
        $newsletter = newsletter::all();
        return view('admin.newsLetter',compact('newsletter')); 
    }

    public function newsSave(Request $request){
        $request->validate([
            'title'=>'required',
            'message'=>'required',
            'news_letter_status'=>'required',
          ]);
        $newsletter = new newsletter;
        $newsletter->title = $request->title;
        $newsletter->message = $request->message;
        $newsletter->news_letter_status = $request->news_letter_status;
        $newsletter->save();
   
            foreach($request->email as $row){
                $newsletter_data = new newsletter_data;
                $newsletter_data->news_id = $newsletter->id;
                $newsletter_data->email = $row;
                $newsletter_data->save();
            }
       
        return response()->json(['message'=>'Successfully Store'],200); 
    }

    public function newsUpdate(Request $request){
        $request->validate([
            'title'=>'required',
            'message'=>'required',
            'news_letter_status'=>'required',
          ]);
        $newsletter = newsletter::find($request->id);
        $newsletter->title = $request->title;
        $newsletter->message = $request->message;
        $newsletter->news_letter_status = $request->news_letter_status;
        $newsletter->save();

        $newsletter_delete  = DB::table('newsletter_datas')
        ->select('*')
        ->where('news_id',$request->id)
        ->delete();

        foreach($request->email as $row){
            $newsletter_data = new newsletter_data;
            $newsletter_data->news_id = $newsletter->id;
            $newsletter_data->email = $row;
            $newsletter_data->save();
        }

        return response()->json(['message'=>'Successfully Update'],200); 
    }
    public function newsEdit($id){
        $newsletter = newsletter::find($id);
        $newsletter_data  = DB::table('newsletter_datas')
                            ->select('*')
                            ->where('news_id',$id)
                            ->get();
        
        $output['email']='';
        foreach ($newsletter_data as $value) {
            $email[] = collect($value->email)->implode(',');
            $output['email'] =  $email;
        }
        
        //echo json_encode($email);
        //return response()->json($output); 
        return response()->json(array($newsletter,$output)); 
    }

    public function newsDelete($id){
        $newsletter = newsletter::find($id);
        $newsletter->delete(); 
        $newsletter_data  = DB::table('newsletter_datas')
            ->select('*')
            ->where('news_id',$id)
            ->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function get_news_select($id){ 
        //$data = newsletter::find($id);
        $data  = DB::table('newsletter_datas')
            ->select('*')
            ->where('news_id',$id)
            ->get();

      $arraydata=array('AK', 'HI', 'CA', 'NV', 'OR','WA');
      $output = '<optgroup label="Register User">';
      foreach ($arraydata as $row)
      {
        foreach ($data as $value){
            if($value->email == $row){
                $output .='<option selected="true" value="'.$row.'">'.$row.'</option>'; 
            }
            else{
                $output .='<option value="'.$row.'">'.$row.'</option>'; 
            }
        }
      }
      $output .='</optgroup>';
      
      echo $output;
      
    }



    public function viewTag(){
        $tag = tag::all();
        return view('admin.tag',compact('tag')); 
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


    public function homeSlider(){
        $home_slider = home_slider::all();
        return view('admin.setting.homeSlider',compact('home_slider')); 
    }

    public function sliderSave(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'url'=>'required',
            'sub_title'=>'required',
            'position'=>'required',
            'image'=>'required',
          ]);
    //image upload
    $fileName = null;
    if($request->file('image')!=""){
    $image = $request->file('image');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('upload_slider/'), $fileName);
    }
        $home_slider = new home_slider;
        $home_slider->title = $request->title;
        $home_slider->sub_title = $request->sub_title;
        $home_slider->price = $request->price;
        $home_slider->url = $request->url;
        $home_slider->position = $request->position;
        $home_slider->image = $fileName;
        $home_slider->status = $request->status;
        $home_slider->save();
      
        return response()->json($request); 
    }

    public function sliderUpdate(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'url'=>'required',
            'sub_title'=>'required',
            'position'=>'required',
        ]);

        if($request->image!=""){
            $old_image = "upload_slider/".$request->image1;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            //image upload
            $fileName = null;
            if($request->file('image')!=""){
            $image = $request->file('image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_slider/'), $fileName);
            }
        }
        else
        {
            $fileName = $request->image1;
        }


        $home_slider = home_slider::find($request->id);
        $home_slider->title = $request->title;
        $home_slider->sub_title = $request->sub_title;
        $home_slider->price = $request->price;
        $home_slider->url = $request->url;
        $home_slider->position = $request->position;
        $home_slider->image = $fileName;
        $home_slider->status = $request->status;
        $home_slider->save();

        return response()->json($home_slider); 
    }

    public function sliderEdit($id){
        $home_slider = home_slider::find($id);
        return response()->json($home_slider); 
    }

    public function sliderDelete($id){
        $home_slider = home_slider::find($id);
        $home_slider->delete(); 
        return response()->json(['message'=>'Successfully Delete'],200); 
    }



}
