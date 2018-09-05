<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    //

    protected $fillable= [
      'from_address',
      'to_address',
      'amount',
      'receiver_id',
      'sender_id',
      'yustx_id', // The transaction id from the platform
      'method' , // Can be mobile money or bank account
      'vendor', // Can be (Orange,MTN,Moov CI, etc..,Yus)
      'status', // Pending, Completed, Failed 
      'yus_fees_percentage'
      
    ];


}
