<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function webinars()
    // {
    //     return $this->hasMany(Webinar::class);
    // }

    public function site_categories()
    {
        return $this->hasMany(SiteCategory::class);
    }
}
