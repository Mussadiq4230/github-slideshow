<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAlert extends Model
{

    protected $guarded = [];

    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function product(){

    	return $this->belongsTo(Product::class);
    }

    public function our_category(){

    	return $this->belongsTo(OurCategory::class);
    }

    public function parent_category(){

    	return $this->belongsTo(ParentCategory::class);
    }

    public function store(){

    	return $this->belongsTo(Store::class);
    }
    
}
