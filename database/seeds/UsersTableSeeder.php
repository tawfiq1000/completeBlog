<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id'=>1,
        	'name'=>'MD.admin',
        	'username'=>'admin',
        	'email'=>'tawfiq.abir@gmail.com',
        	'password'=>bcrypt('rootadmin')
        	
        ]);
        DB::table('users')->insert([
        
        	'role_id'=>2,
            'name'=>'MD.author',
        	'username'=>'author',
        	'email'=>'tawfiq.imam@gamil.com',
        	'password'=>bcrypt('rootadmin')
        	
        ]);
    }
}
