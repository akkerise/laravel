<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khoapham extends Model
{
    protected $table = 'khoaphams';
    protected $fillable = ['id' , 'monhoc' , 'giatien' , 'giangvien', 'image'];
//    public $timestamps = false;
}
