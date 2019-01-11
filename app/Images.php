<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = "images";
    protected $fillable = [
        'id','image_name','title','item_type','item_id','url'
    ];
    public function product(){
        return $this->belongsTo('App\Product');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
