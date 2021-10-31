<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";

    public function product_category(){
        return $this->belongsTo('App\Product_Category', 'category');
    }
    // protected $timestamps = false;
}
