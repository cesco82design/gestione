<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class PageController extends Controller
{
    public function profile() 
    {
        Sentinel::getUser();
        return view('layout.profile');
    }
    public function sites() 
    {
        Sentinel::getUser();
    	return view('layout.siti');
    }


}
