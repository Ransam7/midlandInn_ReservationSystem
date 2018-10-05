<?php

use Illuminate\Database\Seeder;

class ManageRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
            'room_number' => 2,
            'room_name' => 'room uet',
            'room_desc' => 'This room is for eut',
            'room_type' => 'Premium eutanan',
            'room_amenities' => 'Tv, aircon',
            'room_rates' =>  500,
            'room_status' => 'Active',
            'room_image' => '2.jpg',
            ]
        ]);

        DB::table('rooms')->insert([
            [
            'room_number' => 3,
            'room_name' => 'room higda lng',
            'room_desc' => 'This room is for higda2 lng',
            'room_type' => 'Regular',
            'room_amenities' => 'Tv, aircon',
            'room_rates' =>  300,
            'room_status' => 'Active',
            'room_image' => '3.jpg',
            ]
        ]);
    }
}
