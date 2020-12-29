<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::all();

        return view('dash.all_vendor',['vendors'=>$vendor]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.add_vendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor                  = new Vendor();  /*object of product model*/
        $vendor->name            = request('name');
        $vendor->company         = request('company');   
        $vendor->plot_number     = request('plot_number');
        $vendor->street_number   = request('street_number');
        $vendor->sector          = request('sector');
        $vendor->country         = request('country');

        
      if ($vendor->save()) {
            return redirect('vendor')->with('success', 'VENDOR RECORD SAVED SUCCESSFULLY...!' );
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
    public function edit(Vendor $vendor)
    {

          return view('dash.edit_vendor', ['vendor'=>$vendor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
         $vendor->name           = request('name');  
         $vendor->company        = request('company');   
        $vendor->plot_number     = request('plot_number');
        $vendor->street_number   = request('street_number');
        $vendor->sector          = request('sector');
        $vendor->country         = request('country');

       if ($vendor->save()) {
            return redirect('vendor')->with('success', 'RECORD Update SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
         if ($vendor->delete()) {
            return redirect('vendor')->with('success', 'Vendor Has Been Deleted...!');
        }

    }
}
