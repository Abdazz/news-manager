<?php

namespace Abdazz\PostsManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory, Notifiable;

    public $fillable=["name"];
    public function posts()
    {
        return $this->hasMany("Abdazz\PostsManager\Models\Post");
    }
}
