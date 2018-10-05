<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Room;
use App\RoomType;
use Carbon\Carbon;

class ReservationProcessController extends Controller
{

	public function index(){
		if (!isset($_POST['done'])) {
      
            $room_reservation = DB::table('room_reservations')
                 ->get();

              }

     return view('/superAdmin.reservation_process.select_dates')->with(['room_reservation' => $room_reservation]);
	}

	public function searchAvailability(Request $request)
    {   

        $reserve = $request->reservation;
        $reserve = explode('-', $reserve);
        $start = new Carbon($reserve[0]);
        $end = new Carbon($reserve[1]);

        $room_reservation = DB::table('room_reservations')
                 ->whereBetween('check_in_date', [$start, $end])
                 ->get();

        return view('/superAdmin.reservation_process.select_dates')->with(['reserve' => $reserve, 'room_reservation' => $room_reservation]);
    }

    public function storeDates(Request $request){

    	return view('/superAdmin.reservation_process.select_rooms');
    }
}
