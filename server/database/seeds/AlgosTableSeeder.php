<?php

use Illuminate\Database\Seeder;

class AlgosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('algos')->delete();
        
        \DB::table('algos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'scrypt',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'scryptn',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'neoscrypt',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'quark',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'lyra2',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'x11',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'x13',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'x14',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'x15',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'fresh',
                'profit' => 0.0026231955438411,
                'rent' => 0.0027018914101563,
                'factor' => 5.0,
                'overflow' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'sha256',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'qubit',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'skein',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'groestl',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'blake',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'keccak',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'nist5',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'zr5',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'c11',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'drop',
                'profit' => 2.5713261892185E-21,
                'rent' => 32.540632674103,
                'factor' => 1.5,
                'overflow' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'skein2',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'bmw',
                'profit' => 9.119158510914E-14,
                'rent' => 7.2523406145041E-5,
                'factor' => 100.0,
                'overflow' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'argon2',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'blake2s',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'decred',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'luffa',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'lyra2v2',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'penta',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'dmd-gr',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'myr-gr',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'm7m',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'sib',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'vanilla',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'velvet',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'yescrypt',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'whirlpool',
                'profit' => 0.0,
                'rent' => 0.0,
                'factor' => 1.0,
                'overflow' => NULL,
            ),
        ));
        
        
    }
}