<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Wine;

class WineTableSeeder extends Seeder {

    public function run(){
        DB::table('wines')->truncate();
    }

}
