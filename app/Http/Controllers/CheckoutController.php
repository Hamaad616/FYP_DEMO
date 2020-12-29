<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CheckoutRequest;
use App\Image;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\SocialLink;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use mysql_xdevapi\Exception;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $products = Product::all();
        $images = Image::all();
        $sociallink =SocialLink::all();
        return view('portal.checkout', compact(['images','sociallink','detail','categories','products', 'news']));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        // Check race condition when there are less items available to purchase
//        if ($this->productsAreNoLongerAvailable()) {
//            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
//        }

        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => getNumbers()->get('newTotal'),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

//            $order = $this->addToOrdersTables($request, null);
//            Mail::send(new OrderPlaced($order));
//
//            // decrease the quantities of all the products in the cart
//            $this->decreaseQuantities();
//
//            Cart::instance('default')->destroy();
//            session()->forget('coupon');

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
//            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
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
     * @param  \Illuminate\Http\Request  $request
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
