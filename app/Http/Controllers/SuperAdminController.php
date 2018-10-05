<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Room;
use App\RoomType;
use Carbon\Carbon;
class SuperAdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return "index";
    }

    public function dashboard()
    {
    	$user_id = auth()->user()->id;
        $user = User::find($user_id);

        $rooms_available = DB::table('rooms')
                 ->where('room_status', '=', 'AVAILABLE')
                 ->get();

        $amenities_available = DB::table('amenities')
                 ->where('amenity_status', '=', 'AVAILABLE')
                 ->get();

        $room_types_available = DB::table('room_types')
                 ->where('room_type_status', '=', 'AVAILABLE')
                 ->get();

        if ($user->user_role_id == 3) {
            $user_path = '/home';
        }else{
            $user_path = '/superAdmin.dashboard';
        }

        return view($user_path)->with(['user' => $user, 'rooms_available' => $rooms_available, 'amenities_available' => $amenities_available, 'room_types_available' => $room_types_available]);
    }




    

}
