<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function our_category(){
        return $this->belongsTo(OurCategory::class);
    }
}
