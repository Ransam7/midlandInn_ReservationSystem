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
        //$this->call(UsersTableSeeder::class);
        //$this->call(UserRolesTableSeeder::class);
        // $this->call(ManageRoomTableSeeder::class);
        // $this->call(RoomTypeTableSeeder::class);
        // $this->call(AmenityTableSeeder::class);
        $this->call(RoomReservationTableSeeder::class);
    }
}
