<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nicehash',
                'algo' => 'scrypt',
                'price' => 0.0003646,
                'speed' => 20628000000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nicehash',
                'algo' => 'x11',
                'price' => 0.0004524,
                'speed' => 15616000000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nicehash',
                'algo' => 'x13',
                'price' => 0.0003273,
                'speed' => 185100000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Nicehash',
                'algo' => 'x15',
                'price' => 0.0004079,
                'speed' => 7200000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Nicehash',
                'algo' => 'nist5',
                'price' => 0.001,
                'speed' => 21900000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Nicehash',
                'algo' => 'sha256',
                'price' => 9.8E-6,
                'speed' => 2310347791200000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Nicehash',
                'algo' => 'scryptn',
                'price' => 0.0005521,
                'speed' => 1200000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Nicehash',
                'algo' => 'neoscrypt',
                'price' => 0.0073366,
                'speed' => 13600000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Nicehash',
                'algo' => 'lyra2',
                'price' => 0.0006123,
                'speed' => 181400000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            9 => 
            array (
                'id' => 16,
                'name' => 'Nicehash',
                'algo' => 'qubit',
                'price' => 0.0001968,
                'speed' => 72200000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            10 => 
            array (
                'id' => 17,
                'name' => 'Nicehash',
                'algo' => 'quark',
                'price' => 0.0004536,
                'speed' => 65978400000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            11 => 
            array (
                'id' => 18,
                'name' => 'Nicehash',
                'algo' => 'zr5',
                'price' => 0.0001,
                'speed' => 61865000000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            12 => 
            array (
                'id' => 19,
                'name' => 'Nicehash',
                'algo' => 'c11',
                'price' => 0.0003403,
                'speed' => 11823800000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            13 => 
            array (
                'id' => 20,
                'name' => 'Nicehash',
                'algo' => 'keccak',
                'price' => 2.7E-6,
                'speed' => 153200000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
            14 => 
            array (
                'id' => 21,
                'name' => 'Nicehash',
                'algo' => 'whirlx',
                'price' => 9.1E-6,
                'speed' => 1100700000,
                'custom_balance' => 0.0,
                'custom_accept' => 0.0,
                'custom_reject' => 0.0,
            ),
        ));
        
        
    }
}