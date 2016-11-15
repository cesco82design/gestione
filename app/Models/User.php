<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB, Sentinel;

class User extends \Cartalyst\Sentinel\Users\EloquentUser {
    private $profile_object = NULL;
    /*
 	 * Info
 	 */
    protected $table = 'users';

    public function name() {
        return $this->first_name . ' ' . $this->last_name;
    }
    static public function allUsers()
    {   

        $utenti = DB::table('users')->get();
        //print_r($utenti);
        //echo $utenti['email'];
        $loop='';
        foreach ($utenti as $utente) {
            $loop.= $utente->email;
            $loop.= '<br>';
            $loop.= $utente->username;
            $loop.= '<br>';

        }
        
        return $loop;
        //return view('users.index');
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