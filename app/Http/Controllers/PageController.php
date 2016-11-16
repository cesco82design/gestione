<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\User;
use Sentinel;
use DB;

class PageController extends Controller
{
    public function profile() 
    {
        if (Sentinel::getUser()) {
            return view('layouts.profile');
        } 
        else
        {
            return redirect('/');
        }
    }

    public function utenti() 
    {
        //Sentinel::getUser();
        //User::allUsers();
        //return view('users.index');
        $utenti = DB::table('users')->get();
        //print_r($utenti);
        //echo $utenti['email'];
        
        return view('users.index', array('utenti'=>$utenti));
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
