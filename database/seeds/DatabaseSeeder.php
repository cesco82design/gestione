<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
    	DB::table('users')->delete();
    		DB::table('users')->insert( 
    			array(
    				array(
    					'email' => 'checco.fra@gmail.com',
    					'password' => 'test',
    					'permissions' => 'admin',
    					'first_name' => 'cesco',
    					'last_name' => 'io',
    					)
    				));
    }
}
