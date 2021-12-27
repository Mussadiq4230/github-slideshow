<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferType extends Model
{
     protected $guarded=[];
     public function  products(){

    	return $this->hasMany(Product::class);
    }
}
