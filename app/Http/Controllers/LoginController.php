<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login() 
    {
    	return view('authentication.login');
    }

    public function postLogin( Request $request )
    {
        Sentinel::authenticate($request->all());

        if (! Sentinel::check()) {
            return redirect()->guest('/');
        }

        //return $next($request);
        //return Sentinel::check();
        return redirect('/');
        /*
        if (( Sentinel::check() ) =='true') {
            redirect('/');
        }
        else {
            redirect('/badlogin');
        }

        //return redirect('/');

        //dd($request->all());
        */
    }

}
