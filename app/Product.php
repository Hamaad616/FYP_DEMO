<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Product extends Model
{
	use Sluggable;
    use SluggableScopeHelpers;

		public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }

    public function currentPrice(): string
    {
		    return number_format($this->price/100 , 2, '.', ',');
    }

    public function get_category()
    {
        return $this->hasOne('App\Category' ,'id' ,'category');
    }

    public function variants()
    {
        return $this->belongsToMany('App\Variant' , 'product_variant_value');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }



}
