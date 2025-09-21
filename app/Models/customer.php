<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table = 'customers';
    //
   protected $fillable = [
        'code',
        'name',
        'arabic_name',
        'address',
        'arabic_address',
        'mobile_no',
        'action',
    ];
}
