<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * 
     */
    public function comments()
    {
        // 投稿は複数のコメントを持つ
        return $this->hasMany(Comment::class);
    }

    /**
     * 
     */
    public function category()
    {
        // 投稿は１つのカテゴリーに属する
        return $this->belongsTo(Category::class);
    }
}
