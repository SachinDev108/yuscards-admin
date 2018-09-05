<?php

use Illuminate\Database\Seeder;
use App\Wallet;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currencies = [
          ["BTC",1,"bitcoinAddress","btc","0.0002"],
          ["LTC",1,"ltcaddress",'ltc',"3"],
          ["XAF",1,"xafaddress","xaf","400,000"],
          ["ETH",1,"ethaddress",'eth',"19"]
        ];


        for($i=0; $i< 4; $i++){

          for( $j=0; $j< sizeof($currencies[0]); $j++ ) {

            Wallet::create([
              'ticker_symbol' => $currencies[$i][$j],
              'user_id' => $i+1,
              'address' => $currencies[$i][$j].$i,
              'label' => $currencies[$i][$j]."000".$i."wallet",
              'balance'=> "100"
            ]);

          }
        }

    }
}
