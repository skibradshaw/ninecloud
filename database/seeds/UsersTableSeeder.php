<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create(['first_name' => 'Tim', 'last_name' => 'Bradshaw','email' => 'tim@alltrips.com','password' => bcrypt('jackass')]);
        App\User::create(['first_name' => 'Mary Lynn', 'last_name' => 'Bradshaw','email' => 'marylynn@9cloudwebworks.com','password' => bcrypt('tower3')]);
    }
}
