<?php

namespace App\Http\Controllers\Auth;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use App\PersonalDetail;
use App\Providers\RouteServiceProvider;
use App\SocialLink;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     *
     * @param Request $request
     * @param $user
     * @return Application|RedirectResponse|Redirector
     */
    protected function authenticated(Request $request, $user)
    {
        if ( $user->hasRole('User') ){
            return redirect('/user');
        }

        if ( $user->hasRole('Admin') ){
            return redirect('/admin');
        }

        if ( $user->hasRole('CEO') ){
            return redirect('/CEO_web');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
