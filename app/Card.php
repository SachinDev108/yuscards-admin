<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    // TODO: Poplate the  table with suitable data

   protected $fillable= [
      "card_holder", "cvv","cvn","card_number","expiration_date","qr_code",
      "card_version","type","vendor",
    ];


    // Linking the relationship between a user and a Card

    public function user(){
      return $this->belongsTo("App\User");
    }

}
