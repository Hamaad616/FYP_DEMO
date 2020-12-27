<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    public function product(){
    	return $this->hasOne('App\Product');
    }

    public function variant(){
    	return $this->hasOne('App\Variant');
    }
}
