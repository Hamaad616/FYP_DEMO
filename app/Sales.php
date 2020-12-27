<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
	public function vendor(){
		return $this->belongsTo('App\Vendor');
	}    

	public function sale_products(){
		return $this->hasMany('App\SaleProduct','sale_id','id');
	}

	
}
