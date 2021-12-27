<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $guarded=[];

    public function parent_category(){

        return $this->belongsTo(ParentCategory::class);
    }

     public function  products(){

    	return $this->belongsToMany(Product::class);
    }
}
