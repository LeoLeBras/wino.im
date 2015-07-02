<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqItem extends Model {

	public function category(){
		return $this->belongsTo('App\FaqCategory');
	}

}
