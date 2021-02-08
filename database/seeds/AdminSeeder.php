<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database se
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'admin',
          'email'=> 'joshuanoviandy07@gmail.com',
          'password'=>bcrypt('joshua008')
        ]);
    }
}
