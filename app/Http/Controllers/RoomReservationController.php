<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App\User;
use App\Room;
use App\RoomType;
use Carbon\Carbon;

class RoomReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superAdmin.room_reservation.manageRoomReservation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_amenities = DB::table('amenities')
                            ->where('amenity_status', '=', 'AVAILABLE') 
                            ->get();
        
        return view('superAdmin.room_types.addRoomType')->with('room_amenities', $room_amenities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function reservationSteps()
    {   
        if (!isset($_GET['done'])) {
            $room_reservation = DB::table('room_reservations')->get();
        }

        return view('/superAdmin.room_reservation.select_dates')->with('room_reservation', $room_reservation);
    }

    public function searchAvailability(Request $request)
    {   

        $reserve = $request->reservation;
        $reserve = explode('-', $reserve);
        $start = new Carbon($reserve[0]);
        $end = new Carbon($reserve[1]);

        $roomReservation = DB::table('room_reservations')
                 ->whereBetween('check_in_date', [$start, $end])
                 ->get();

        $roomTypes = DB::table('room_types')
                 ->where('room_type_status', '=', 'AVAILABLE')
                 ->get();
        
        // $roomsAndRoomType = DB::table('room_types')
        //     ->join('rooms', 'room_types.id', '=', 'rooms.room_type_id')
        //     ->where('room_status', '=', 'AVAILABLE')
        //     ->where('room_type_status', '=', 'AVAILABLE')
        //     ->select('rooms.*', 'room_types.*' )
        //     ->get();

        /*
        $roomsAndRoomType = DB::table('room_types')
            ->join('rooms', 'room_types.id', '=', 'rooms.room_type_id')
            ->where('room_status', '=', 'AVAILABLE')
            ->where('room_type_status', '=', 'AVAILABLE')
            ->select('rooms.room_number', 'room_types.id' )
            ->get();
        */
            
        $status = 'AVAILABLE';
        $roomsAndRoomTypes = \App\RoomType::where('room_type_status',$status)
                                         ->get();
        foreach ($roomsAndRoomTypes as $key => $roomsAndRoomType) {
            $roomsAndRoomTypes[$key]->number_rooms = $roomsAndRoomType->countRoom($status,$start,$end);
        }
        
        //print_r($roomsAndRoomType);
        //exit();

        return view('/superAdmin.room_reservation.select_rooms')->with(['roomsAndRoomTypes'=>$roomsAndRoomTypes]);
    }

    public function storeDates(Request $request){

        return view('superAdmin.room_reservation.select_rooms');
    }
    public function storeChosenRoom(Request $request){

        return "rooms Stored";
    }

    public function apiRoomReservation(){
        // $user = User::all();
        // $room_reservation = DB::table('room_reservation')->get();
        // $user = DB::table('users')
        //         ->leftJoin('user_role', 'users.user_role_id', '=', 'user_roles.id')
        //         ->get(); 
        $room_reservation = DB::table('room_reservations')
            ->join('users', 'users.id', '=', 'room_reservations.user_id')
            ->join('room_types', 'room_types.id', '=', 'room_reservations.room_id')
            ->select('room_reservations.*', 'users.*', 'room_types.*')
            ->get();

        return DataTables::of($room_reservation)
                
                ->addColumn('action', function($room_reservation){
                    return '<a href="/manageRoomReservation/'.$room_reservation->id.'/edit" class="btn btn-dark btn-sm">Edit</a>';
                })->make(true);
    }
}
