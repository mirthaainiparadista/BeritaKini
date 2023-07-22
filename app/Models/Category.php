<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_image','category_name',];
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
