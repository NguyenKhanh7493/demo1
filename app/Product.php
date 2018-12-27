<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function cate(){
        return $this->belongsTo('App\Cate');
    }
    public function pimage(){
        return $this->hasMany('App\Images');
    }
}
