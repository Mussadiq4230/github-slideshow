<?php

namespace App\Models;
use App\Models\ArticleComment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function article_comments()
    {
        return $this->hasMany(ArticleComment::class)->whereNull('parent_id');
    }
}
