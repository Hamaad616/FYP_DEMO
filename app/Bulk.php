<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    protected $fillable = [
    	'product_name',
    	'quantity',
    	'desire_amount',
    	'time_limit',
    	'country',
    	'email',
    	'message'
    ];
}
