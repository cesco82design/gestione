<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\User;
use Sentinel;

class PageController extends Controller
{
    public function profile() 
    {
        Sentinel::getUser();
        return view('layouts.profile');
    }

    public function utenti() 
    {
        //Sentinel::getUser();
        User::allUsers();
        return view('users.index');
    }

    public function sites() 
    {
        return view('layouts.siti');
    }

    public function addSites() 
    {
    	return view('sites.add_site');
    }

    public function postRegSite( Request $request )
    {
        Sentinel::authenticate($request->all());
        
        return redirect('/siti');
        /*
        //dd($request->all());
        */
    }


}
