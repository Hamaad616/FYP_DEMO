<?php

namespace App\Http\Controllers;

use App\PersonalDetail;
use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = PersonalDetail::all();
        return view('admin.personal_details', ['adddetails'=>$details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.personal_details_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $details = new PersonalDetail();
            $details->email = request('email');
            $details->phone = request('phone');
            $details->address = request('area');
        
      
       if ($details->save()) {
            return redirect('adddetails')->with('success', 'DETAILS SAVED SUCCESSFULLY...!');
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
    public function destroy(PersonalDetail $detail)
    {
       if ($detail->delete()) 
        {
            return redirect('adddetails')->with('success', 'Details Record Has Been Deleted...!');
        }
    }
}
