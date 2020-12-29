<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $purchases = Purchase::all();
        return view('dash.all_purchase', ['purchases'=>$purchases]);

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
        $purchase = new Purchase();
        $purchase->amount_received = $request->input('amount_received');
        $purchase->pending_amount = $request->input('pending_amount');
        $purchase->cost = $request->input('cost');
        $purchase->profit = $request->input('profit');

        if ($purchase->save()) 
        {
            return redirect('purchase')->with('success', 'Purchase Record Saved Successfully');
        }
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
    public function edit(Purchase $purchases)
    {
        return view('dash.edit_purchase', ['purchases'=>$purchases]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $purchase->amount_received = $request->input('amount_received');
        $purchase->pending_amount = $request->input('pending_amount');
        $purchase->cost = $request->input('cost');
        $purchase->profit = $request->input('profit');

        if ($purchase->save()) 
        {
            return redirect('purchase')->with('success', 'Purchase Record Saved Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        if ($purchase->delete()) 
        {
            return redirect('purchase')->with('success', 'Purchase Record Delete Successfully');
        }
    }
}
