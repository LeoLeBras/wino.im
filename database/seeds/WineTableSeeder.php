<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Wine;

class WineTableSeeder extends Seeder {

    public function run(){
        DB::table('wines')->truncate();
        Wine::create([
            'name' => 'wine1',
            'year' => '2010',
            'region' => 'region1',
            'color' => 'red',
            'price' => '12€',
            'stock' => '132',
            'user_id' => 1
        ]);  
        Wine::create([
            'name' => 'wine2',
            'year' => '2010',
            'region' => 'region2',
            'color' => 'white',
            'price' => '12€',
            'stock' => '132',
            'user_id' => 1
        ]);  
        Wine::create([
        	'name' => 'wine3',
        	'year' => '2010',
            'region' => 'region1',
            'color' => 'pink',
            'price' => '12€',
            'stock' => '132',
            'user_id' => 1
        ]);  
    }
    
}