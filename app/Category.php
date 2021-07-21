<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    public $translatedAttributes = ['title'];

    protected $fillable = [
        'id',
        'title',
        'slug'
    ];

    public function meals() {
        return $this->hasMany(Meal::class);
    }
}

class CategoryTranslation extends Model {

    public $timestamps = false;

    protected $fillable = [
        'title'
    ];

}
