<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Liaison 1 N avec la table "Resources" (-)
    public function resources() {
        return $this->belongsTo(Resource::class, 'resource_id');
    }
}
