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


}
