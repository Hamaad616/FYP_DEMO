<?php

namespace App\Http\Controllers;

use App\Bulk;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BulkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $bulks = Bulk::all();
        return view('admin.bulk_all', ['bulks'=>$bulks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('portal.product_detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Bulk $bulk
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Bulk $bulk)
    {

        // $bulk                 = new Bulk();  /*object of product model*/
        $bulk->quantity = request('quantity');
        $bulk->desire_amount = request('desire_amount');
        $bulk->time_limit = request('time_limit');
        $bulk->country = request('country');
        $bulk->email = request('email');
        $bulk->message = request('message');

        if ($bulk->save()) {
            return Redirect::back()->with('message', 'Bulk query saved successfully');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param Bulk $bulk
     * @return Response
     */
    public function show(Bulk $bulk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bulk $bulk
     * @return Factory|Application|Response|View
     */
    public function edit(Bulk $bulk)
    {
        return view('admin.bulk_all_edit', ['bulk'=>$bulk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Bulk $bulk
     * @return Response
     */
    public function update(Request $request, Bulk $bulk)
    {
        $bulk->quantity       = $request->quantity;
        $bulk->desire_amount  = $request->desire_amount;
        $bulk->time_limit     = $request->time_limit;
        $bulk->country        = $request->country;
        $bulk->message        = $request->msg;

        if ($bulk->save()) {
            return redirect('bulk')->with('success', 'Product RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bulk $bulk
     * @return Response
     */
    public function destroy(Bulk $bulk)
    {
        if ($bulk->delete())
        {
            return redirect('bulk')->with('success', 'Query Record Has Been Deleted...!');
        }
    }
}
