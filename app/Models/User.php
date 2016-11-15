<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB, Sentinel;

class User extends \Cartalyst\Sentinel\Users\EloquentUser {
    private $profile_object = NULL;
    /*
 	 * Info
 	 */

    public function name() {
        return $this->first_name . ' ' . $this->last_name;
    }


    /*
     * Edit Info
     * /
    static public function register($data) {      
        $user = Sentinel::register(['email'=>$data['email'],'password'=>$data['password']]);
        $user->first_name   = $data['first_name'];
        $user->last_name    = $data['last_name'];        
        $user->save();

        if ($user) {
            $profile = new UserProfileInfo();
            $profile->user_id = $user->id;
            $profile->save();
            $password = new UserPassword();
            $password->text = $data['password'];
            $password->user_id = $user->id;
            $password->save();
        }

        return $user;
    }*/

}
?>