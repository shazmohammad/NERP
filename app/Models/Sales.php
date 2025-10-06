<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
     protected $table = 'sales';
    //
   protected $fillable = [
        'invoice_no',
        'date',
        'h_date',
        'time',
        'acc_code',
        'acc_name',
        'vat_no',
        'id_no',
        'total_amount',
        'total_vat',
        'net_total',
    ];

    
   protected $hidden = [
        'acc_id',
        'time',
        'branch_id',
    ];
}
