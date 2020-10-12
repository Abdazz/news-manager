<?php

namespace Abdazz\PostsManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;

    public $fillable=["title", "category_id", "slug", "image", "content"];
    public function category()
    {
        return $this->belongsTO("Abdazz\PostsManager\Models\Category");
    }
}
