<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        /*return $sliders;*/
        return view('admin.carousel_all', ['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.carousel_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();  /*object of product model*/
        $slider->heading = request('heading');
        $file = $request->file('filename');

        $file_name = $file->getClientOriginalName();                      

        $file_path = 'uploads/';

        $file->move($file_path, $file_name);
        
        $slider->filename = $file_name;
   
      if ($slider->save()) {
            return redirect('slider')->with('success', 'SLIDER SAVED SUCCESSFULLY...!' );
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
    public function edit(Slider $slider)
    {
        return view('admin.carousel_edit', ['slider'=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {
        $slider = Slider::find($slider->id);

        $sliders->heading = $request->heading;
        $sliders->filename = $request->filename;
        
        if($sliders->save()){
            return redirect('slider')->with('success', 'Record Has Been Updated SUCCESSFULLY...!');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if ($slider->delete()) 
        {
            return redirect('slider')->with('success', 'Slider Has Been Deleted...!');
        }
    }
}
