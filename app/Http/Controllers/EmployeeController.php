<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('dash.employee', ['employees'=>$employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.employee_add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();  /*object of product model*/
        $employee->name      = request('name');
        $employee->email     = request('email');   /*(roll,name,address sub form ka varibales hain)*/
        $employee->phone     = request('phone');
        $employee->designation   = request('designation');
        $employee->age   = request('age');
        $employee->joindate   = request('joindate');
        $employee->salary   = request('salary');

        $file = $request->file('filename');

        $file_name = $file->getClientOriginalName();                      

        $file_path = 'uploads/';

        $file->move($file_path, $file_name);
        
        $employee->filename = $file_name;
   
      if ($employee->save()) {
            return redirect('employees')->with('success', 'EMPLOYEE RECORD SAVED SUCCESSFULLY...!' );
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
    public function destroy(Employee $employee)
    {
        if ($employee->delete()) 
        {
            return redirect('employees')->with('success', 'Employee Record Has Been Deleted...!');
        }
    }
}
