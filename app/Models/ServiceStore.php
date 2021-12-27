<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StoreServiceReview;

class ServiceStore extends Model
{
    use HasFactory;


    public function store_service_reviews()
    {
        return $this->hasMany(StoreServiceReview::class)->whereNull('parent_id');
    }
}
