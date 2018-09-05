<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    /**
     *  Attributes that are mass assignable 
     */

    protected $fillable = [
        'id', 'user_id', 'amount', 'tx_id', '
        yustx_id', 'vendor', 'method', 'tx_hash', 'status'
    ];


}
