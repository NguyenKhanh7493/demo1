<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receive_email extends Model
{
    protected $table = "receive_email";
    protected $fillable = [
        'id','name'
    ];
}
