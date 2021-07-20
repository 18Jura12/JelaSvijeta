<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug'
    ];

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}
