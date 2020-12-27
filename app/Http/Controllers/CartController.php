<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\Slider;
use App\SocialLink;
use App\Variant;
use App\VariantValue;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */



    public function __construct(){
        $this->middleware('role:User|Admin|CEO');
    }

    public function portal()
    {

//        $categories = Category::all();
//        $detail     = PersonalDetail::all();
//        $sociallink = SocialLink::all();
//        $news = News::all();
//        return view('layout.portal', compact(['adddetails', 'sociallink','detail','categories', 'news']));
    }


    public function index()
    {
//        dd(Cart::content());
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $products = Product::all();
        $images = Image::all();
        $sociallink =SocialLink::all();
        return view('portal.cart', compact(['images','sociallink','detail','categories','products', 'news']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate(Product::class);

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Cart::destroy($id);
        return back()->with("success_message", "Item Removed Successfully!");
    }
}
