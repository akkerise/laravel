<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarColor extends Model
{
    protected $table = 'car_colors';
    protected $fillable = ['id','car_id','color_id'];
    public $timestamps = false;
}
