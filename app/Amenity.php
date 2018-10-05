<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use RoomType;
class Amenity extends Model
{
    protected $fillable = [
        'amenity_name', 'amenity_status',
    ];

    public function RoomType(){
        return $this->belongsTo('App\RoomType');
    }
}
