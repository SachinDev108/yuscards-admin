<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $fillable = ["message","user_id","email","support_id","subject"];


}
