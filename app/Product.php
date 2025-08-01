<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';

    public function subcategory(){
        return $this->belongsTo('App\Subcategory');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
