<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable=[
    	'product_name',
    	'quantity',
    	'amount_recieved',
    	'cost',
    	'profit',
    	'order_date',
    	'country'

    ];
}
