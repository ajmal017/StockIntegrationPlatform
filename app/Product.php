<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='Products';
    protected $fillable = [
        'type', 'name','sort','img','content','price'
    ];

    public function product_type(){
        return $this->belongsTo('App\ProductType','type')->orderby('sort','desc');;
    }
}
