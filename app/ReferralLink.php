<?php

namespace App;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class ReferralLink extends Model
{
    /**
     *  Attributes that are massa assignabl
     */

     protected $fillable = [
         'user_id','referral_program_id'
     ];

     
    /**
     *  Calls ->generateCode() on boot 
     */
    protected static function boot()
    {
        static::creating(function (ReferralLink $model) {
            $model->generateCode();
        });
    }

    /**
     *  Generates a refferal code and store it inside a member variable
     * @param none 
     * @return void 
     */

    private function generateCode()
    {
        $this->code = (string)Uuid::generate(1);
    }

    /**
     * Get referral for a specified user and program 
     * @param $user App\User
     * @param $program App\ReferralProgram
     * @return Object this
     */

    public static function getReferral($user, $program)
    {
        return static::firstOrCreate([
            'user_id' => $user->id,
            'referral_program_id' => $program->id
        ]);
    }

    /**
     *  Get the link attribute 
     *  @param none 
     *  @return string 
     */

    public function getLinkAttribute()
    {
        return url($this->program->uri) . '?ref=' . $this->code;
    }

    /**
     * Defining relationship between a referral link and a user 
     * A referral link belongs to one user 
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     *  Defining the relationship between a referral link and a program
     *  A referral link belongs to a progam
     */

    public function program()
    {
        return $this->belongsTo('App\ReferralProgram', 'referral_program_id');
    }

    /**
     *  Defining the relationship between a referral link and a relationships table 
     *  Helps to map a referrer + referred
     */

    public function relationships()
    {
        return $this->hasMany('App\ReferralRelationship');
    }

}
