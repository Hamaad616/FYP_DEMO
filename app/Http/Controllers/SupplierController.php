<?php

namespace App\Http\Controllers;
use App\AddSupplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = AddSupplier::all();
        return view('dash.qualified_supplier', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.add_qualified_supplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$AddSupplier = new AddSupplier([
        'name' => $request->get('name'),
        'supply'=> $request->get('supply'),
        'quantity'=> $request->get('quantity'),
        'Company_Name'=> $request->get('company'),
        'date'=> $request->get('date'),
        'Phone'=> $request->get('phone'),
        'status'=> $request->get('status')
      ]);
      $AddSupplier->save();
      return redirect('dash.add_qualified_supplier')->with('success', 'value has been added');
    }*/

        $sup = new AddSupplier();    /*AddSupplier ki jaga modal ana hai*/    
        $sup->name = request('name'); /*request name jo hai yeah view ka form ka hai*/
        $sup->supply = request('supply'); /*roll_no jo hai yeah migration mein jo name hai*/ 
        $sup->quantity = request('quantity');
        $sup->Company_Name = request('company');
        $sup->Phone = request('phone');
        $sup->Status = request('status');


       /* echo "<pre>";
        print_r($request->input());*/

       if ($sup->save()) {
            return redirect('suppliers')->with('success', 'SUPPLIER RECORD SAVED SUCCESSFULLY...!' );
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AddSupplier $supplier)
    {
        return view('dash.edit_qualified_supplier', ['supplier'=>$supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,AddSupplier $supplier)
    {
        $supplier->name = request('name'); /*request name jo hai yeah view ka form ka hai*/
        $supplier->supply = request('supply'); /*roll_no jo hai yeah migration mein jo name hai*/ 
        $supplier->quantity = request('quantity');
        $supplier->Company_Name = request('company');
        $supplier->Phone = request('phone');
        $supplier->Status = request('status');


       /* echo "<pre>";
        print_r($request->input());*/

       if ($supplier->save()) {
            return redirect('suppliers')->with('success', 'SUPPLIER RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddSupplier $suppliers)
    {
        $suppliers = AddSupplier::find($suppliers->id);
        if ($suppliers->delete())
        {
            return redirect('suppliers')->with('success', 'Supplier Record Has Been Deleted...!');
        }
    }
}
