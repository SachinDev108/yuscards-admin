<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
  // Attributes that are mass assignable
    protected $fillable = ["ticker_symbol","address","label","balance","user_id"];


    // Modeling the relationship between user and a wallet
    // A wallet belongs to a user 

   public function user(){
     return $this->belongsTo('App\User');
   }

}
