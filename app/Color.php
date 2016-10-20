<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['id' , 'name'];
    public $timestamps = false;
    public function car(){
    	// bat buoc phai truyen vao ten bang trung gian
    	return $this->belongsToMany('App\Car', 'car_colors');
    }
}
