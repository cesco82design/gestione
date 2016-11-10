<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sentinel, LaravelLocalization;

class AuthController extends Controller {

   public function login(Request $request) {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if ( $request->remember ) {
            $attempt = Sentinel::authenticateAndRemember($credentials);
        } else {
            $attempt = Sentinel::authenticate($credentials);
        }

        // If the user is logged in
        if ( $attempt ) {
            LaravelLocalization::setLocale(Sentinel::getUser()->settings()->lang);
            return redirect()->route('page.index');
        }
        // If the user is not logged in
        return redirect()->route('page.index');
    }

    public function logout() {
        if ( Sentinel::getUser() ) {
            Sentinel::logout();
        }
        return redirect()->route('page.index');
    }  
}