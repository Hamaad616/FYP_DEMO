<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact_form', ['contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();  /*object of product model*/
        $contact->name      = $request('name');
        $contact->email     = $request('email');   /*(roll,name,address sub form ka varibales hain)*/
        $contact->phone     = $request('phone');
        $contact->subject   = $request('subject');
        $contact->message   = $request('message');
      
   
      if ($contact->save()) {
            return redirect()->route('contacts')->with('success', 'Contact RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {       /*return $contact;*/

        return view('admin.contact_edit', ['contacts'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->name    = request('name');
        $contact->email   = request('email');
        $contact->phone   = request('phone');
        $contact->subject = request('subject');
        $contact->message = request('message');

        if($contact->save())
        {
            return redirect('contacts')->with('success','Contact Record Has Been Updated SUCCESSFULLY...!');
        }
        return back()->withInput();
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    }

    public function destroy(Contact $contact)
    {
        if ($contact->delete()) 
        {
            return redirect('contacts')->with('success', 'Contact Record Has Been Deleted...!');
        }
    }
}
