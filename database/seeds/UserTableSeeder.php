<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->truncate();
        User::create([
        	'name' => 'Test',
        	'compagny' => 'Test',
            'email' => 'test@test.fr',
            'roles' => ['admin'],
            'password' => '0000'
        ]);  
    }
    
}