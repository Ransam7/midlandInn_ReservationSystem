<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function test(){


    	$room_types = \App\RoomType::all();

    	return view('pages.index',['room_types'=>$room_types]);	
    }
}
