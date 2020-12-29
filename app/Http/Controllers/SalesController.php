<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use App\SaleProduct;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $sales = SaleProduct::all();

        return view('dash.all_sales',['sales'=>$sales]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        $variants = \App\Variant::all();
        $values = \App\VariantValue::all();
        $products = \App\Product::all();
        $vendors = \App\Vendor::all();
         return view('dash.add_invoice', compact(['categories','variants','values', 'products', 'vendors']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new Sales();
        $sale->vendor_id = $request->vendor_id;
        $sale->amount_receive = $request->input('amount_received');
        $sale->save();
        $sizes = $request->size;
        $i=0;
        $price = 0;
        $cost = 0;
        foreach($sizes as $size){    
            $sale_item = new SaleProduct;
            $sale_item->product_id = $request->products[$i];
            $sale_item->size = $size;
            $sale_item->color = $request->color[$i];
            $sale_item->material = $request->material[$i];
            $sale_item->sale_id = $sale->id;
            $sale_item->per_item_price = $request->price[$i];
            $sale_item->noproducts = $request->noproduct[$i];
            $sale_item->cost = $request->cost[$i];
            $sale_item->save();

             $price += (int)$request->price[$i] * (int)$request->noproduct[$i];
                 $cost += (int)$request->cost[$i] * (int)$request->noproduct[$i];
        }
        $sale = Sales::find($sale->id);
        $sale->cost = $cost;
        $sale->price = $price;
        $sale->pending_amount =  (int)$sale->amount_receive - (int)$price;
        $sale->profit = (int)$price - $cost;
        $sale->save();
        return redirect('sales')->with('succes', 'Sales Record Saved Succesfully');
    
        return back()->withInput();

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
    public function edit(Sales $sale)
    {
        $vendors = \App\Vendor::all();
        $variants = \App\Variant::all();
        $products = \App\Product::all();
        return view('dash.edit_sales', ['sale'=>$sale], compact(['vendors','variants','products']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sale)
    {
        
         $sale->vendor_id = $request->vendor_id;
        $sale->amount_receive = $request->input('amount_received');
        $sale->save();
        $sizes = $request->size;
        $i=0;
        $price = 0;
        $cost = 0;
        foreach($sizes as $size){    
            $sale_item = new SaleProduct;
            $sale_item->product_id = $request->products[$i];
            $sale_item->size = $size;
            $sale_item->color = $request->color[$i];
            $sale_item->material = $request->material[$i];
            $sale_item->sale_id = $sale->id;
            $sale_item->per_item_price = $request->price[$i];
            $sale_item->noproducts = $request->noproduct[$i];
            $sale_item->cost = $request->cost[$i];
            $sale_item->save();

             $price += (int)$request->price[$i] * (int)$request->noproduct[$i];
                 $cost += (int)$request->cost[$i] * (int)$request->noproduct[$i];
        }
        $sale = Sales::find($sale->id);
        $sale->cost = $cost;
        $sale->price = $price;
        $sale->pending_amount =  (int)$sale->amount_receive - (int)$price;
        $sale->profit = (int)$price - $cost;
        $sale->save();
        return redirect('sales')->with('succes', 'Sales Record Saved Succesfully');
    
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sale)
    {
        if ($sale->delete()) 
        {
            return redirect('sales')->with('success', 'Sales Record Delete Suucessfully');
        }
    }
}
