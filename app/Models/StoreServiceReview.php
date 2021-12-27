<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ServiceStore;

class StoreServiceReview extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service_store()
    {
        return $this->belongsTo(ServiceStore::class);
    }

    public function replies()
    {
        return $this->hasMany(StoreServiceReview::class, 'parent_id')->with('user');
    }
}
