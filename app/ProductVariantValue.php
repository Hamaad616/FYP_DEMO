<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantValue extends Model
{
	protected $table='product_variant_value';
    public function product_variants()
    {
    	return $this->hasMany('App\ProductVariant');
    }
}
