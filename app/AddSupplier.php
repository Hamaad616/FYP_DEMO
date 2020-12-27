<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddSupplier extends Model
{
    protected $fillable = [
    'name',
    'supply',
    'company_name',
    'quantity',
    'Company_Name',
    'Phone'
  ];
}
