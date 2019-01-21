<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banners";
    protected $fillable = [
        'id','name','link','title','banner_center','banner_right','banner_bottom','sort','status'
    ];
}
