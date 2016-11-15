<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Site extends Model {
    protected $table = 'sites';

    private $profile_object = NULL;
    
    public function indexSites()
    {
        $utenti = DB::table('users')->get();

        return view('user.index', ['users' => $utenti]);
    }




}
?>