<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id' , 'name' , 'price' , 'cate_id'];
    public $timestamps = false;

    public function images(){
    	$this->hasMany('App\Images');
    	// $this->hasMany('App\Product','products.id','images.product_id');
    }
}
