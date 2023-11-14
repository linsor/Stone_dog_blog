<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function games()
    {
        return $this->belongsTo(Game::class);
    }

    public function category()
    {

        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }

}
