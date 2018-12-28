<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = "cates";
    protected $fillable = [
        'id','name','alias','status','parent_id','type','menu_top','menu_right','icon','footer','keywords','description','content',
    ];
    public function product(){
        return $this->hasMany('App\Product');
    }
}
