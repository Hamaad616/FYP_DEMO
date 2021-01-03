<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('role: User|Admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('dash.users', ['users'=>$users], ['roles'=>$roles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = new User();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(User $user)
    {
        //khud hi model uthata ha user ka
        $roles = \App\Role::all();
        return view('dash.user_edit', compact(['roles','user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $password = Hash::make($request->input('password'));
        $user->name = $request->input('name'); /*request name jo hai yeah view ka form ka hai*/
        $user->email = $request->input('email'); /*roll_no jo hai yeah migration mein jo name hai*/
        $user->password = $password;
        $user->role_id = $request->input('role_id');
        if($user->save())
        {
            return redirect('users')->with('success', 'User Record Update Successfully');
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(User $user)
    {
        if ($user->delete())
        {
            return redirect('users')->with('success', 'User Record Delete Successfully');
        }
    }
}
