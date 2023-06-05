<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Menu extends Model
{
    use HasFactory, Favoriteable;

    protected $guarded = [];


    public function restauran()
    {
        return $this->belongsTo(Restauran::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
