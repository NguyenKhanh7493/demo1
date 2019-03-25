<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";
    protected $fillable = [
        'id','name','gender','phone','address','email','other','total','status'
    ];
    public function invoiceDetail(){
        return $this->hasMany('App\Invoice_detail');
    }
}
