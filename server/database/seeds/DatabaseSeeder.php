<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoinsTableSeeder::class);
        $this->call(HashrateTableSeeder::class);
        $this->call(MarketsTableSeeder::class);
        $this->call(NicehashTableSeeder::class);
        $this->call(RawcoinsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(StatsTableSeeder::class);
        $this->call(BlocksTableSeeder::class);
        $this->call(AlgosTableSeeder::class);
    }
}
