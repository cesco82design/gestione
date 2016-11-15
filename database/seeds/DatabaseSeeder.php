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
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	            'id' => '1',
	            'email' => 'checco.fra@gmail.com',
	            'username' => 'cesco',
	            'password' => bcrypt('secret'),
	            'first_name' => 'Francesco',
	            'last_name' => 'Sciolti',
	            'location' => 'Senago'
	        ]);

        DB::table('activations')->insert([
                'user_id' => '1',
                'completed' => 1
            ]); 
    }
}