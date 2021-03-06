<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * 
     */
    public function posts()
    {
        // カテゴリーは複数のポストを持つ
        return $this->hasMany(Post::class);
    }
}
