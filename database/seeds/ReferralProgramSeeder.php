<?php

use App\ReferralProgram;

use Illuminate\Database\Seeder;

class ReferralProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $ref = new ReferralProgram([
            'name' => 'sign-up bonus',
            'uri'  => 'register'
        ]);
        
    }
}
