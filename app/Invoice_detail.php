<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice_detail extends Model
{
    protected $table = "invoice_details";
    protected $fillable = [
        'id_invoice','product_id','num'
    ];
}
