<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "invoices";
    protected $fillable = [
        'id','name','gender','phone','address','email','other','total'
    ];
}
