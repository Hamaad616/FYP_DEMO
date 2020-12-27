<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:ceo');
    }


    public function index_dash()
    {
        $employees = \App\Employee::all();
        $inventories = \App\Inventory::all();
        $user = User::all();
    	return view('dash.index_dash', compact(['inventories', 'employees']));
    }

     public function add_invoice()
     {
        $products = \App\Product::all();
        $invoices = \App\Invoice::all();
    	return view('dash.add_invoice', compact(['invoices', 'products']));
    }

     public function dashlogin(){

    	return view('dash.dashlogin');
    }

     public function recovery_password(){

    	return view('dash.recovery_password');
    }

     public function dashregister(){
        $roles = \App\Role::all();
    	return view('dash.dashregister',compact(['roles']));
    }

     public function view_invoice($id)
     {
        $sale = \App\Sales::find($id);
        return view('dash.view_invoice', compact(['sale']));
    }

    public function raw_material(){

        return view('dash.raw_material');
    }

    public function qualified_supplier(){
        return view('dash.qualified_supplier');
    }

     public function bulkquery(){
        return view('dash.bulkquery');
    }

     public function add_qualified_supplier(){
        return view('dash.add_qualified_supplier');
    }

     public function employee(){
        return view('dash.employee');
    }

    public function add_employee_role()
    {
        $roles = \App\Role::all();
        return view('dash.add_employee_role', compact(['roles']));
    }

    public function employee_add(){
        return view('dash.employee_add');
    }

     public function test(){
        return view('dash.test');
    }


    public function postDashRegister(Request $request, User $user){
        $password = Hash::make($request->input('password'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');   /*(roll,name,address sub form ka varibales hain)*/
        $user->password = $password;
        $user->role_id = $request->input('role_id');
        if($user->save())
        {
            return redirect('dashlogin')->with('success', 'Record Saved Successfully');
        }

        return back()->withInput();
    }

    public function postDashLogin(Request $request )

    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->role->name == "Editor"){
                return redirect()->intended('admin_index');
            }
            return redirect()->intended('index_dash');
        }
        else{
            return redirect('admin');
        }

    }

    public function roles()
    {
        $roles = \App\Role::all();
        return view('dash.roles', compact(['roles']));
    }

}
