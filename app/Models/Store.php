<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	use HasFactory;
    protected $guarded=[];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function store_categories(){

    	return $this->hasMany(StoreCategory::class);
    }

    public function email_alerts(){

        return $this->hasMany(EmailAlert::class);
    }
}