<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'country',
        'image',

    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'movie_actors','actor_id','movie_id');
    }
}
