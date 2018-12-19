<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = "cates";
    protected $fillable = [
        'id','alias','status','parent_id','menu_top','menu_right','icon','footer','keywords','description','content',
    ];
}
