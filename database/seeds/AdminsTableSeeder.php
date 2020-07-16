<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'Ledama',
            'image' => '',
            'first_name' => 'Jessy',
            'last_name' => 'Ledama',
            'email' => 'ledama@gmail.com',
            'password' => bcrypt('secret'),
            'status' => '1',
        ]);
    }
}
