<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    // Liaison 1 N avec la table "Categories" (-)
    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Liaison 1 N avec la table "Comments" (3)
    public function Comments() {
        return $this->hasMany(Comment::class, 'resource_id');
    }
}
