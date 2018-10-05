<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number',  'room_type',  'room_status',
    ];

    public function roomType(){
        return $this->belongsTo('App\RoomType');
    }
}
