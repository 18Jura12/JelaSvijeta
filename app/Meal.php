<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
