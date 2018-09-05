<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    //

    protected $fillable = [
        'vendor','base_url','apikey','logo','cancel_url','return_url','notify_url',
        'publickey','masterkey','token','privatekey'
    ];


}
