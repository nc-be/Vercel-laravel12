<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table ='subcategories';

    public function products(){
        return $this->hasMany('App\Product');
    }
}
