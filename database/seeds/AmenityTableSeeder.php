<?php

use Illuminate\Database\Seeder;

class AmenityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->insert([
            [
            'amenity_name'=> 'Air Condition', 'amenity_status'=> 'ACTIVE'
            ],
            [
            'amenity_name'=> 'Cable TV', 'amenity_status'=> 'ACTIVE'
            ],
            [
            'amenity_name'=> 'Bathroom', 'amenity_status'=> 'ACTIVE'
            ],
            [
            'amenity_name'=> 'WiFi', 'amenity_status'=> 'ACTIVE'
            ],
            
        ]);
    }
}
