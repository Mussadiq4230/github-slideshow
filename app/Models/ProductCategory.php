<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function product_categories()
    {
        return $this->hasMany(ProductCategory::class)->with('product_categories');
    }

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class)->with('product_category');
    }

    public function store_categories()
    {
        return $this->hasMany(StoreCategory::class);
    }
}
