<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = Inventory::all();
        return view('dash.inventory_all', ['inventories'=>$inventory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.inventory_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory                   = new Inventory();  /*object of product model*/
        $inventory->product_name     = request('product_name');
        $inventory->quantity         = request('quantity');   /*(roll,name,address sub form ka varibales hain)*/
        $inventory->amount_recieved  = request('amount_recieved');
        $inventory->cost             = request('cost');
        $inventory->profit           = request('profit');
        $inventory->order_date       = request('order_date');
        $inventory->country          = request('country');

        
      if ($inventory->save()) {
            return redirect('inventory')->with('success', 'INVENTORY RECORD SAVED SUCCESSFULLY...!' );
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
    public function edit(Inventory $inventory)
    {
        return view('dash.inventory_edit', ['inventory'=>$inventory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->product_name     = $request->product_name;
        $inventory->quantity         = $request->quantity;   /*(roll,name,address sub form ka varibales hain)*/
        $inventory->amount_recieved  = $request->amount_recieved;
        $inventory->cost             = $request->cost;
        $inventory->profit           = $request->profit;
        $inventory->order_date       = $request->order_date;
        $inventory->country          = $request->country;

        
      if ($inventory->save()) {
            return redirect('inventory')->with('success', 'Product RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        if ($inventory->delete()) 
        {
            return redirect('inventory')->with('success', 'Inventory Record Has Been Deleted...!');
        }
    }
}
