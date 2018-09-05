<?php

use App\PaymentMethod;
use Illuminate\Database\Seeder;


class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @TODO : Add a column named 'service' which can be 'withdrawal', 'deposit', 'preoroder'
     * @return void
     */
    public function run()
    {
        //
        $monetBil = new PaymentMethod([
            'vendor'     => 'monetbil',
            'base_url'   => 'https://api.monetbil.com/payment/v1/',
            'logoSrc'    => 'images/vendorImages/monetbil.png',
            'apikey'     => '6YQK3Bw9FupSpTwHhyHHtAtp5QjGeQh9',
            'privatekey' => 'mvNpaZb9X6dOYg4Vfro0kawfcJEYfBrG0PteiE9Vtj8makRTOdgiR2XFAaJaPsAY' ,
            'cancel_url' => '',
            'return_url' => '',
            'notify_url' => 'http://178.62.23.251:7000/api/notify',
        ]);
        
        $monetBil->save();

        $cinetPay = new PaymentMethod([
            'vendor' => 'cinetpay',
            'base_url' => '',
            'logoSrc' => '',
            'apikey' => '9996631785b09ee1c5378a1.95228026',
            'cancel_url' => '',
            'return_url' => '',
            'notify_url' => '',
        ]);
        
        $cinetPay->save();

        $paydunya = new PaymentMethod([
            'vendor' => 'paydunya',
            'token' => 'lTiUw92XFgJea0CiqtB6',
            'apikey'=> str_random(22),
            'privatekey' => 'test_private_tvoBqMSdiTeuqkQMBjzuo37tzoY',
            'publickey' => 'test_public_tym4ebzmFbfwhzAk00ggQQoGuqN',
            'masterkey' => 'ViwO6V1Y-Ogj9-aTPS-BpWz-lYkphGM34ZU8',
            'base_url'=> 'https://app.paydunya.com/sandbox-api/v1/',
            'logosrc' =>'images/vendorImages/paydunya',
            'cancel_url' => 'http://178.62.23.251:7000/api/paydunya/cancel',
            'return_url' => 'http://178.62.23.251:7000/api/paydunya/returnUrl',
            'notify_url' => 'http://178.62.23.251:7000/api/paydunya/notify',
        ]);

        $paydunya->save();

        $flutterwave = new PaymentMethod([
            'vendor' => 'rave-flutterwave',
            'apikey' => 'FLWPUBK-069b9c4494abe57dab43831dbf40b98b-X',
            'privatekey'=> 'FLWSECK-9bc6457d221600eae352b1bc12c9f844-X',
            'base_url' => 'https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/',
            'logoSrc' => 'images/vendorImages/flutterwave',
            'cancel_url' => 'http://178.62.23.251:7000/api/flutterwave/failure',
            'return_url' => 'http://178.62.23.251:7000/api/flutterwave/success',
            'notify_url' => 'http://178.62.23.251:7000/api/flutterwave/notify',
        ]);

        $flutterwave->save();

        $flutterwave = new PaymentMethod([
            'vendor' => 'moneywave-flutterwave',
            'apikey' => 'ts_1H1SMJP7HCEL2SQ0HZUF',
            'privatekey' => 'ts_UA3EIAWND2OO4ZGVSLQ2V6ZVSTX9AM',
            'base_url' => 'https://moneywave.herokuapp.com/',
            'logoSrc' => 'images/vendorImages/flutterwave',
            'cancel_url' => 'http://178.62.23.251:7000/api/flutterwave/failure',
            'return_url' => 'http://178.62.23.251:7000/api/flutterwave/success',
            'notify_url' => 'http://178.62.23.251:7000/api/flutterwave/notify',
        ]);

        $flutterwave->save();
        
        // Note: privatekey in this case matches apiSecret
        $btc = new PaymentMethod([
            'vendor' => 'coinbase',
            'apikey' => 'E1EoRoHIZNQ35VPh',
            'privatekey' => 'ffM18GiYW0HPfpvIrvZOHjgYQ1VxPQPG',
            'base_url' => 'https://app.paydunya.com/sandbox-api/v1/',
            'logosrc' => 'images/vendorImages/paydunya',
            'cancel_url' => 'http://178.62.23.251:7000/api/paydunya/cancel',
            'return_url' => 'http://178.62.23.251:7000/api/paydunya/returnUrl',
            'notify_url' => 'http://178.62.23.251:7000/api/paydunya/notify',
        ]);

        $btc->save();

    }
}
