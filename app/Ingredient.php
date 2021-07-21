<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Ingredient extends Model
{
    use Translatable;

    public $translatedAttributes = ['title'];

    protected $fillable = [
        'id',
        'title',
        'slug'
    ];
}

class IngredientTranslation extends Model {

    public $timestamps = false;

    protected $fillable = [
        'title'
    ];

}
