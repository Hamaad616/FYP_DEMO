<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VariantValue;

class VariantValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varval = VariantValue::all(); /*$sign means varibale */ 

        return view('admin.variantvalue_view', ['variant_value'=>$varval]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variants = \App\Variant::all();
        return view('admin.variantvalue_add',['variants'=>$variants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $varval = VariantValue::where('name',request('name'))->first();
        if(!$varval)
        {
            $varval = new VariantValue();  /*object of product model*/
            $varval->variant_id = request('variant_id');
            $varval->name = request('name');


           if ($varval->save()) {
                return redirect('variant_value')->with('success', 'VARIANT VALUE SAVED SUCCESSFULLY...!' );
            }
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
    public function edit(VariantValue $value)
    {
        return view('admin.variantvalue_edit', ['variant_value'=>$value]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VariantValue $value)
    {
        $value->variant_id = request('variant_id');
        $value->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

       if ($value->save()) {
            return redirect('variant_value')->with('success', 'RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(VariantValue $value)
    {
        if ($value->delete()) 
        {
            return redirect('variant_value')->with('success', 'Variant Value Has Been Deleted...!');
        }
    }
}
