<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* HasFactory FUNCIONA EN LARAVEL >8.0 */

    protected $table ='categories';

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function subcategories(){
        return $this->hasMany('App\Subcategory');
    }
}
