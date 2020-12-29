<?php

namespace App\Http\Controllers;

use App\PersonalDetail;
use App\Category;
use App\Sales;
use App\SocialLink;
use App\Slider;
use App\Product;
use App\News;
use App\Variant;
use App\VariantValue;
use App\Image;
use App\Video;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

class PortalController extends Controller
{

    public function __construct(){
        $this->middleware('role:User|Admin|CEO');
    }

    public function portal()
    {
        $categories = Category::all();
        $detail     = PersonalDetail::all();
        $sociallink = SocialLink::all();
        $news = News::all();
        return view('layout.portal', compact(['sociallink','detail','categories', 'news']));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index_portal(Request $request){
            $query = $request->input('search');
        $categories = Category::all();
        $detail     = PersonalDetail::all();
        $sociallink = SocialLink::all();
        $news = News::all();
        $detail      = PersonalDetail::first();
        $adddetails  = PersonalDetail::all();
        $categories =  Category::all();
        $sociallink = SocialLink::all();
       $news = News::all();


        //return $categories[0]->products;
        $new_arrivals = Product::where('new',1)->where('status',1)->get();
        $sales        = Product::where('sale',1)->where('status',1)->get();
        $features     = Product::where('feature', 1)->where('status',1)->get();
        $category     = Product::where('category', 1)->where('status', 1)->get();
        //return $variant = $products[4]->variants;
       // return $products[4]->variants[0]->values;
       /* return $sliders;*/
       $sociallink = SocialLink::all();
       $news = News::all();
       $sliders = Slider::all();
        return view('portal.index_portal', compact(['sliders','category','adddetails','new_arrivals','sociallink','features','sales','categories','detail','news']));

    }

    public function contact()
    {
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();
        $news = News::all();
    	return view('portal.contact', compact(['sociallink','detail','categories', 'news']));
    }


    public function showproducts()
    {
        $categories =   Category::all();
        $detail     =   PersonalDetail::first();
        $sociallink =   SocialLink::all();
        $categories =   Category::all();
        $new_arrivals = Product::where('new',1)->where('status',1)->get();
        $news = News::all();
    	return view('portal.showproducts', compact(['sociallink','new_arrivals','detail','categories', 'news']));
    }

    public function product_detail($id)
    {
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $product = Product::find($id);
        $products = Product::all();
        $variants = Variant::all();
        $values = VariantValue::first();
        $images = Image::all();
        $sociallink =SocialLink::all();
        $sales = Product::where('sale',1)->where('status',1)->get();
    	return view('portal.product_detail', compact(['sales','product','images','sociallink','detail','categories','products','variants','values', 'news']));
    }

    public function shoplist()
    {   $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();
    	return view('portal.shoplist', compact(['sociallink','detail','categories', 'news']));
    }

    public function shop_grid()
    {
        $news = News::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();

            $categories = Category::all();

        return view('portal.shop_grid', compact(['sociallink','categories','detail', 'news']));
    }

    public function shop_grid_id($id)
    {
        $news = News::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();

            $category = Category::find($id);
            $categories = Category::all();
        return view('portal.shop_grid_id', compact(['sociallink','category','categories','detail', 'news']));

    }

    public function video_show()
    {
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $videos = Video::all();
        $sociallink = SocialLink::all();
        return view('portal.video_show', compact(['videos','sociallink','detail', 'categories', 'news']));
    }


//     public function search(){

//         $q = Input::get ( 'search' );
//         $news = News::all();
//         $detail      = PersonalDetail::first();
//         $sliders     = Slider::all();
//         $adddetails  = PersonalDetail::all();
//         $categories = Category::all();

//         if(isset($q))
//         {
//             $products = Product::where('product_name','like','%'.$q.'%')->where('status',1)->get();
//         //return $variant = $products[4]->variants;
//        // return $products[4]->variants[0]->values;
//        /* return $sliders;*/

//         return view('portal.search', compact(['sliders','adddetails','sociallink','categories','detail','products','news']));

//     }
// }

}
