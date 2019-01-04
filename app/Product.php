<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'id','name','alias','num' , 'price_old', 'price_new','percent','avatar','home','new','hot','best_sale','status','title','introduction','content','keywords','description','cate_id','user_id','view','cart'
    ];
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
