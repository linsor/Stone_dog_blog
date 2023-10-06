<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCard extends Model
{
    use HasFactory;

    public function users () {
        return $this->hasMany(User::class);
    }
}
