<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'room_type_name', 'room_type_desc', 'room_type_amenities', 'room_type_rates', 'room_type_status', 'room_type_person_occupy', 'room_type_image',
    ];

    public function countRoom($status='AVAILABLE',$start,$end){

    	$rooms_count = \App\Room::where('room_status',$status)
    							->where('room_type_id',$this->id)
    							->count();

    	$check_reservation_count = \App\RoomReservation::whereBetween('check_in_date', [$start, $end])
    												   ->where('room_type_id',$this->id)
                 									   ->count();

        $final_rooms_count = ($rooms_count>0) ? abs($rooms_count - $check_reservation_count) : 0;

        
        
    	return $final_rooms_count;

    }

    public function room(){
        return $this->hasMany('App\Room');
    }

    public function amenity(){
        return $this->hasMany('App\Amenity');
    }



}
