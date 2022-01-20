<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Liaison 1 N avec la table "Resources" (3)
    public function resources() {
        return $this->hasMany(Resource::class, 'category_id');
    }
}
