<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
     protected $table = 'accounts';
    //
   protected $fillable = [
        'account_id',
        'code',
        'name',
        'name_ar',
        'ledger_type',
        'acc_type',
        'allow_edit',
        'level',
    ];
}
