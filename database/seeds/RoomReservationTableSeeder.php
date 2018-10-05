<?php

use Illuminate\Database\Seeder;

class RoomReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('room_reservations')->insert([
        //     [
        //     'user_id'=> 4,	
        //     'room_type_id'=> 2,
        //     'room_id' => 5,
        //     'est_time_arrival' => NOW(),
        //     'check_in_date' => NOW(),
        //     'check_out_date' => NOW(),
        //     'payment' => 250,
        //     'numb_of_room' => 1,
        //     'transac_employee' => 'moderator',
        //     'transac_code' => 213,
        //     'transac_date' => NOW(),
        //     ]
        // ]);

        DB::table('room_reservations')->insert([
            [
            'user_id'=> 17,  
            'room_type_id'=> 5,
            'room_id' => 11,
            'est_time_arrival' => NOW(),
            'check_in_date' => NOW(),
            'check_out_date' => NOW(),
            'payment' => 250,
            'numb_of_room' => 1,
            'transac_employee' => 'moderator',
            'transac_code' => 23,
            'transac_date' => NOW(),
            ]
        ]);
    }
}
