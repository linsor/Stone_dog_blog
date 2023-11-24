<?php

namespace App\Models;

use App\Models\Accessories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCard extends Model
{
    use HasFactory;

    public function accessories () {
        return $this->hasMany(Accessories::class);
    }
}
