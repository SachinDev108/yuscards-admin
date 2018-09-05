<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
 
    /**
     * Attribute that are mass assignable
     * @TODO Add more information to track the user
    */

    protected $fillable = [
        'id','user_id','amount','tx_id',
        'ticker_symbol',
        'yustx_id','vendor','method','tx_hash','status','address'
    ];
}
