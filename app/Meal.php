<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Meal extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'description'];

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

class TagTranslation extends Model {

    public $timestamps = false;

    protected $fillable = [
        'title',
        'descripiton'
    ];

}
