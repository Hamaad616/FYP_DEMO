<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\PersonalDetail;
use App\Category;
use App\SocialLink;
use App\Slider;
use App\Product;
use App\News;
use App\Variant;
use App\VariantValue;
use App\Image;
use App\Video;
use App\User;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('role:Admin|CEO');
    }

//    public function index(Request $request){
//        $detail      = PersonalDetail::first();
//        $adddetails  = PersonalDetail::all();
//        $categories =  Category::all();
//        $sociallink = SocialLink::all();
//       $news = News::all();
//
//
//        //return $categories[0]->products;
//        $new_arrivals = Product::where('new',1)->where('status',1)->get();
//        $sales        = Product::where('sale',1)->where('status',1)->get();
//        $features     = Product::where('feature', 1)->where('status',1)->get();
//        $category     = Product::where('category', 1)->where('status', 1)->get();
//        //return $variant = $products[4]->variants;
//       // return $products[4]->variants[0]->values;
//       /* return $sliders;*/
//       $sociallink = SocialLink::all();
//       $news = News::all();
//       $sliders = Slider::all();
//       $user = User::all();
//        return view('portal.index_portal', compact(['sliders','adddetails','new_arrivals','sociallink','features','sales','categories','detail','news']));
//        return view('portal.index_portal');
//    }

    public function admin_index(){
        $products=\App\Product::all();
        $image = \App\Image::all();
        $categories=\App\Category::all();
        $bulks=\App\Bulk::all();
    	return view('admin.admin_index', compact(['image','products','categories','bulks']));
    }

    public function product_add(){

    	return view('admin.product_add');
    }

    public function product_details(){

    	return view('admin.product_details');
    }

    public function products(){

    	return view('admin.products');
    }

    public function product_edit()
    {
        $image = \App\Image::all();
    	return view('admin.product_edit', compact(['image']));
    }

     public function product_order(){

    	return view('admin.product_order');
    }

    public function carousel_edit(){
    	return view('admin.carousel_edit');
    }

    public function social_links(){
    	return view('admin.social_links');
    }



    public function product_view(){
    	return view('admin.product_view');
    }

     public function category_add(){
    	return view('admin.category_add');
    }

     public function variant_add(){
        return view('admin.variant_add');
    }

     public function variantvalue_add(){
        return view('admin.variantvalue_add');
    }

     public function category_all(){
    	return view('admin.category_all');
    }

    public function demographics(){
        return view('admin.demographics');
    }


    public function index_form(){
        return view('admin.index_form');
    }

    public function contact_form(){
        return view('admin.contact_form');
    }

    public function contact_edit(){
        return view('admin.contact_edit');
    }

    public function personal_details_add(){
        return view('admin.personal_details_add');
    }

    public function personal_details(){
        return view('admin.personal_details');
    }

    public function news(){

        return view('admin.news');
    }

    public function all_news()
    {
        $news = \App\News::all();
        return view('admin.all_news', compact(['news']));
    }

/*

        public function contact_form(){
        return view('admin.contact_form');
    }*/

}
