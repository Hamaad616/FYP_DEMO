<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Variant;
use App\VariantValue;

class IndexController extends Controller
{
    public function portal()
    {
        $categories = \App\Category::all();
        $detail     = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
        return view('customer.index', compact(['adddetails', 'sociallink','detail','categories', 'news']));
    }

    public function index_portal(Request $request){
        $detail      = \App\PersonalDetail::first();
        $sliders     = \App\Slider::all();
        $adddetails  = \App\PersonalDetail::all();
         $categories = \App\Category::all();

        //return $categories[0]->products;
        $new_arrivals = \App\Product::where('new',1)->where('status',1)->get();
        $sales        = \App\Product::where('sale',1)->where('status',1)->get();
        $features     = \App\Product::where('feature', 1)->where('status',1)->get();
        $category     = \App\Product::where('category', 1)->where('status', 1)->get();
        //return $variant = $products[4]->variants;
       // return $products[4]->variants[0]->values;
       /* return $sliders;*/
       $sociallink = \App\SocialLink::all();
       $news = News::all();
    	return view('customer.index', compact(['sliders','adddetails','new_arrivals','sociallink','features','sales','categories','detail','news']));

    }

    public function contact()
    {
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
    	return view('customer.contact', compact(['sociallink','detail','categories', 'news']));
    }


    public function showproducts()
    {
        $categories =   \App\Category::all();
        $detail     =   \App\PersonalDetail::first();
        $sociallink =   \App\SocialLink::all();
        $categories =   \App\Category::all();
        $new_arrivals = \App\Product::where('new',1)->where('status',1)->get();
        $news = News::all();
    	return view('customer.showproducts', compact(['sociallink','new_arrivals','detail','categories', 'news']));
    }

    public function product_detail($id)
    {
        $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $product = \App\Product::find($id);
        $products = \App\Product::all();
        $variants = Variant::all();
        $values = \App\VariantValue::all();
        $images = \App\Image::all();
        $sociallink =\App\SocialLink::all();
    	return view('customer.product_detail', compact(['product','images','sociallink','detail','categories','products','variants','values', 'news']));
    }

    public function prod_detail($id)
    {
        $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $product = \App\Product::find($id);
        $products = \App\Product::all();
        $variants = Variant::all();
        $values = \App\VariantValue::all();
        $images = \App\Image::all();
        $sociallink =\App\SocialLink::all();
        return view('customer.product_detail', compact(['product','images','sociallink','detail','categories','products','variants','values', 'news']));
    }

    public function shoplist()
    {   $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
    	return view('customer.shoplist', compact(['sociallink','detail','categories', 'news']));
    }

    public function shop_grid()
    {
        $news = News::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $categories = \App\Category::all();
        $variants = Variant::all();
        $values = VariantValue::all();
        return view('customer.shop_grid', compact(['sociallink','categories','detail', 'news', 'variants', 'values']));
    }

    public function shop_grid_id($id)
    {
        $news = News::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();

            $category = \App\Category::find($id);
            $categories = \App\Category::all();
        return view('customer.shop_grid_id', compact(['sociallink','category','categories','detail', 'news']));

    }

    public function video_show()
    {
        $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $videos = \App\Video::all();
        $sociallink = \App\SocialLink::all();
        return view('customer.video_show', compact(['videos','sociallink','detail', 'categories', 'news']));
    }


    public function search($query){

        $news = News::all();
        $detail      = \App\PersonalDetail::first();
        $sliders     = \App\Slider::all();
        $adddetails  = \App\PersonalDetail::all();
         $categories = \App\Category::all();
        //return $categories[0]->products;
        $products = \App\Product::where('product_name','like','%'.$query.'%')->where('status',1)->get();
        //return $variant = $products[4]->variants;
       // return $products[4]->variants[0]->values;
       /* return $sliders;*/
       $sociallink = \App\SocialLink::all();

        return view('customer.search', compact(['sliders','adddetails','sociallink','categories','detail','products', 'news']));
    }

    public function about()
    {
        $categories = \App\Category::all();
        $detail     = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
        return view('customer.about', compact(['categories', 'detail', 'sociallink', 'news']));

    }


    public function showPage()
    {
        return view('customer.become_seller');

    }

}
