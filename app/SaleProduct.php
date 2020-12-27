<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleProduct extends Model
{
    public function sizes()
    {
    	return $this->belongsTo('App\VariantValue','size','id');
    }

    public function colors()
    {
    	return $this->belongsTo('App\VariantValue','color','id');
    }

    public function materials()
    {
    	return $this->belongsTo('App\VariantValue','material','id');
    }

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
