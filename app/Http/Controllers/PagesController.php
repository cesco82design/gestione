<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use DB;
use Sentinel, Activation, Mail;

class PagesController extends Controller {

    /*
     * Home
     */
    public function index( Request $request ) {
        $parameters = array();
        if ( Sentinel::getUser() ) {
            // Logged
            return redirect()->route('page.welcome');          
        } else {

            if ( $request->a ) {
                switch ($request->a) {
                    case 'activation':
                        if ( isset($request->c) ) {
                            $user = Sentinel::findById($request->u);
                            if ( Activation::complete($user, $request->c) ) {
                                $parameters = array('result'=>true,'action'=>'activation');
                                $password = $user->tempPassword()->text;
                                $user->tempPassword()->delete();
                                Mail::send('_mail.activation_confirmed', array('user' => $user, 'password'=>$password ), function ($message) use ($user) {
                                    $message->from('info@francescosciolti.com', 'getione');
                                    $message->subject('Welcome to My CRM');
                                    $message->to( $user->email );
                                }); 
                            } else {
                                $parameters = array('result'=>false,'action'=>'activation');
                            }
                        }
                        break;
                    case 'password':
                        $user = Sentinel::findById($request->u);
                        $nuova_password = str_random(10);
                        if( Reminder::complete($user, $request->c, $nuova_password) ) {
                            Mail::send('_mail.nuova_password', array('utente' => $user,'password'=>$nuova_password), function ($message) use ($user) {
                                $message->from('info@tootalky.com', 'Tootalky');
                                $message->subject('Nuova password');
                                $message->to( $user->email );
                            }); 
                            $parameters = array('result'=>true,'action'=>'password change'); 
                        } else {
                            $parameters = array('result'=>false,'action'=>'password change'); 
                        }
                        break;
                }
            }

            return  view('welcome', $parameters);  
        }
    }
    public function register( Request $request ) {
        $parameters = array();
        return view('_layout.register', $parameters);
    }

}