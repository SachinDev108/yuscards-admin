<?php

use App\Pairs;
use Illuminate\Database\Seeder;

class PairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BTC XAF USD NGN CEDI YC
        
        $tab = [
            [
                'name' => 'Franc CFA',
                'sym'  => 'XAF',
                'rate' => 0.0,
                'fees' => 0.0
            ],
            [
                'name' => 'Dollar',
                'sym'  => 'USD',
                'rate' => 0.0,
                'fees' => 0.0
            ],
            [
                'name' => 'Nigerain Naira',
                'sym'  => 'NGN',
                'rate' => 0.0,
                'fees' => 0.0
            ],
            [
                'name' => 'CEDI',
                'sym'  => 'CEDI',
                'rate' => 0.0,
                'fees' => 0.0
            ],
            [
                'name' => 'Yuscoin',
                'sym'  => 'YusC',
                'rate' => 0.0,
                'fees' => 0.0
            ] 
            ];
        
    for ($i=0; $i< sizeof($tab) ; ++$i){
        foreach($tab as $currency){
            $base= $tab[$i];

            if($currency['sym'] != $base['sym']){

                $pair = new Pairs([
                    'base_currency_name' => $base['name'],
                    'second_currency_name' => $currency['name'],
                    'base_currency_ticker_symbol' => $base['sym'],
                    'second_currency_ticker_symbol' => $currency['sym'],
                    'rate' => '',
                    'fees' => ''
                ]);
                $pair->save();
            }

        }
    
    }

    }
}
