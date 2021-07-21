<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Tag extends Model
{
    use Translatable;

    public $translatedAttributes = ['title'];

    protected $fillable = [
        'id',
        'title',
        'slug'
    ];

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}

class TagTranslation extends Model {

    public $timestamps = false;

    protected $fillable = [
        'title'
    ];

}
