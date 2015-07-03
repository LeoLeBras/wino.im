<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model {

	public function items(){
		return $this->hasMany('App\FaqItem', 'category_id', 'id');
	}

}
