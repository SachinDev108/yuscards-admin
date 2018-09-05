<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    /**
     *  Atributes that are mass assignable
     */

    protected $fillable = ['email','token'];    
}
