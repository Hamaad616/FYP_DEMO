<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    public function variant_values(){
    	return $this->hasMany('App\VariantValue');
    }

    public function products()
    {
    	return $this->belongsToMany('App\Product');
    }

    public function values(){
    	return $this->belongsToMany('App\VariantValue','product_variant_value','variant_id','value_id');
    }
}
