<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model {

		protected $fillable = ['name', 'year', 'region', 'color', 'user_id', 'price', 'stock'];

}
