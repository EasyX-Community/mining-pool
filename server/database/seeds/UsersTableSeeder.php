
  <?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

      \DB::table('users')->insert([
        'name' => 'Ryan Hein',
        'email' => 'admin@helixalpha.com',
        'password' => bcrypt('secret'),
      ]);

    }
  }