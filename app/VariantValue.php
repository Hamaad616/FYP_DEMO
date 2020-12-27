<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariantValue extends Model
{
	public function variant()
	{
		return $this->hasOne('App\Variant','id','variant_id');
	}

	public function variants() {
		return $this->belongsToMany('App\Varaint','product_variant_value');
	}
}
