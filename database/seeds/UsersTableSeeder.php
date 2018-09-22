<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
            'name' => 'Angelie Tangon',
            'email' => 'angelie24@gmail.com',
            'password' => Hash::make('angelieransom'),
            'user_role_id' => 1
            ]
        ]);

        /*
        DB::table('users')->insert([
            [
            'name' => 'Ransom Cailing',
            'email' => 'ransomcailing7@gmail.com',
            'password' => Hash::make('admin'),
            'user_role_id' => 1
            ]
        ]);*/

    }
}
