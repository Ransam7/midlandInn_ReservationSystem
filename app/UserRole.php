<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{	
	protected $fillable = [
        'role_name',
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}
