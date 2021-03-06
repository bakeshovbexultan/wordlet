<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    public function words() {
        return $this->hasMany(Word::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
