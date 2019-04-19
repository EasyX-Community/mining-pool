<?php

use Illuminate\Database\Seeder;

class NicehashTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nicehash')->delete();
        
        \DB::table('nicehash')->insert(array (
            0 => 
            array (
                'id' => 1,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'x11',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => 0,
                'accepted' => 0.0,
                'rejected' => 0.0,
            ),
            1 => 
            array (
                'id' => 2,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'scrypt',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => NULL,
                'accepted' => NULL,
                'rejected' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'sha256',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => NULL,
                'accepted' => NULL,
                'rejected' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'scryptn',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => NULL,
                'accepted' => NULL,
                'rejected' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'x13',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => NULL,
                'accepted' => NULL,
                'rejected' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'x15',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => 0,
                'accepted' => 0.0,
                'rejected' => 0.0,
            ),
            6 => 
            array (
                'id' => 7,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'nist5',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => NULL,
                'accepted' => NULL,
                'rejected' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'neoscrypt',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => 0,
                'accepted' => 0.0,
                'rejected' => 0.0,
            ),
            8 => 
            array (
                'id' => 9,
                'active' => 0,
                'orderid' => NULL,
                'last_decrease' => NULL,
                'algo' => 'lyra2',
                'btc' => NULL,
                'price' => NULL,
                'speed' => NULL,
                'workers' => 0,
                'accepted' => 0.0,
                'rejected' => 0.0,
            ),
        ));
        
        
    }
}