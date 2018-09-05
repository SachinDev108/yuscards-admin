<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardOrders extends Model
{
    //

    protected $fillable = [
      'orderNo','status','user_id','method',
      'country','tx_id','tx_hash','yustx_id','address','type','order_status','amount',''
    ];
}
