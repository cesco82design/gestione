<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Sentinel, DB, Activation, Mail;
use Carbon\Carbon;

class UsersController extends Controller {

    public function ajax_is_logged(){
    	$user = Sentinel::getUser();
    	return json_encode(['result'=>(isset($user->first_name))]);
    }

    /*********************************************
     * AJAX METHODS
     ********************************************/

    

    public function ajax_get_user(Request $request){
        $user = Sentinel::findById($request->user_id);
        echo json_encode([
            'result'    => true,
            'name'      => $user->name(),
            'image'     => $user->image(),
            'uri'       => $user->uri()
            ]);
    }

    public function ajaxRegister( Request $request ){
        $new_user = User::register( $request );
        $update_user = Sentinel::findById($new_user->id)->updateProfile($request);

        if ( $new_user ) {
            $activation = Activation::create($new_user);            
            Mail::send('_mail.activation', array('user' => $new_user, 'code' => $activation->code ), function ($message) use ($new_user) {
                $message->from('info@tootalky.com', 'Tootalky');
                $message->subject('Activate your account');
                $message->to( $new_user->email );
            }); 
            echo json_encode(['result'=>true]);
        } else {
            echo json_encode(['result'=>false]);
        }
    }


}