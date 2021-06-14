<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
// use Astrotomic\Translatable\Translatable;
// use Cviebrock\EloquentSluggable\Sluggable;


class Hospital extends Model
{
   // use Translatable, Sluggable;

    protected $guarded = [];
   // public $translatedAttributes = ['name'];

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }

  

}//end of model
