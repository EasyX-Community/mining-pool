<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'param' => 'alcurex-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            1 => 
            array (
                'param' => 'binance-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            2 => 
            array (
                'param' => 'bittrex-withdraw_fee_btc',
                'value' => '0.0005',
                'type' => 'price',
            ),
            3 => 
            array (
                'param' => 'bleutrade-withdraw_fee_btc',
                'value' => '0.001',
                'type' => 'price',
            ),
            4 => 
            array (
                'param' => 'c-cex-DCR-BTC-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            5 => 
            array (
                'param' => 'coinbene-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            6 => 
            array (
                'param' => 'coinexchange-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            7 => 
            array (
                'param' => 'coinsmarkets-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            8 => 
            array (
                'param' => 'empoex-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            9 => 
            array (
                'param' => 'escodex-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            10 => 
            array (
                'param' => 'gateio-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            11 => 
            array (
                'param' => 'jubi-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            12 => 
            array (
                'param' => 'nova-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            13 => 
            array (
                'param' => 'stocksexchange-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            14 => 
            array (
                'param' => 'tradesatoshi-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
            15 => 
            array (
                'param' => 'yobit-DCR-BTC-disabled',
                'value' => '1',
                'type' => 'bool',
            ),
        ));
        
        
    }
}