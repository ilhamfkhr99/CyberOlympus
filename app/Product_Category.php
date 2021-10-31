<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table = "product_category";
    protected $primaryKey = "id";

    public function product(){
        return $this->hasMany('App\Product', 'id');
    }
}
