<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    public function register() 
    {
    	return view('authentication.register');
    }

    public function postRegister( Request $request) 
    {
    	$user = Sentinel::registerAndActivate( $request->all() );
    	//dd($user);
        $parameters = [];
        $parameters['password']=$request->password;
        $parameters['password_confirmation']=$request->password_confirmation;
        if ($parameters['password'] != $parameters['password_confirmation']) {
            return redirect('/badlogin')->withErrors('le password non sono uguali');
        } else {
            return redirect('/');
        }
    }
}
