<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->truncate();
        User::create([
        	'name' => 'Nans',
        	'compagny' => 'Wino',
            'email' => 'nans.thomas@hetic.net',
            'roles' => ['admin'],
            'password' => 'wino2015'
        ]);
    }

}
