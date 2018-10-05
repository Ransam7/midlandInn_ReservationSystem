<?php

use Illuminate\Database\Seeder;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('room_types')->insert([
            [
            'room_type_name'=> 'Premium', 'room_type_desc'=> 'loremasdasdasd asdasd', 'room_type_amenities'=> '1,3', 'room_type_rates'=> '300', 'room_type_person_occupy'=> 2, 'room_type_image'=> '302306_179107915498623_1587327373_n_1537841410.jpg',
            ],
            [
            'room_type_name'=> 'Regular', 'room_type_desc'=> 'sssssasd asdkasdjasd  asdasd', 'room_type_amenities'=> '2,3', 'room_type_rates'=> '500', 'room_type_person_occupy'=> 2, 'room_type_image'=> '41937315_1812706805513058_2778415988754874368_n_1537829717.jpg',
            ],
            
        ]);
    }
}