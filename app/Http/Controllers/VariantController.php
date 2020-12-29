<?php

namespace App\Http\Controllers;

use App\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variant = Variant::all(); /*$sign means varibale */ 
        return view('admin.variant_view', ['variants'=>$variant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.variant_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $variant = new Variant();  /*object of product model*/

        $variant->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

       if ($variant->save()) {
            return redirect('variant')->with('success', 'VARIANT SAVED SUCCESSFULLY...!' );
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
    public function edit(Variant $variant)
    {
        //return $variant;
        return view('admin.variant_edit', ['variant'=>$variant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variant $variant)
    {

        $variant->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

       if ($variant->save()) {
            return redirect('variant')->with('success', 'RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variant $variant)
    {
        if ($variant->delete()) {
            return redirect('variant')->with('success', 'Variant Has Been Deleted...!');
        }
    }
}
