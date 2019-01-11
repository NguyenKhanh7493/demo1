<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = [
        'id','name','alias','avatar','home','new','status','introduction','content','keywords','description','url_video','view','tag','cate_id','user_id'
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
