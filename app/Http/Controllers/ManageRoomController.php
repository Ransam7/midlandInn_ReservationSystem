<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App\User;
use App\RoomType;
use App\Room;

class ManageRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superAdmin.rooms.manageRoom');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $room_types = RoomType::orderBy('id', 'asc')->get();
        return view('superAdmin.rooms.addRoom')->with('room_types', $room_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'room_number' => 'required',
            'room_type_id' => 'required',
        ]);

        //Add room
        $room = new Room;
        $room->room_number = $request->input('room_number');
        $room->room_type_id = $request->input('room_type_id');
        $room->room_status = "AVAILABLE";
        $room->save();

        return redirect('/manageRoom')->with('success', $room->room_number.' Room No. Added!');

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
        $room = Room::find($id);
        $room_types_label = DB::table('rooms')
                ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
                ->where('rooms.id', '=', $id)
                ->select('rooms.*', 'room_types.room_type_name')
                ->get();

        $room_types = RoomType::orderBy('id', 'asc')->get();
        return view('superAdmin.rooms.editRoom')->with(['room'=> $room, 'room_types'=> $room_types, 'room_types_label'=> $room_types_label]);
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

        $this->validate($request, [
            'room_number' => 'required',
            'room_type_id' => 'required',
            'room_status' => 'required',
        ]);

        //Edit room
        $room = Room::find($id);
        $room->room_number = $request->input('room_number');
        $room->room_type_id = $request->input('room_type_id');
        $room->room_status = $request->input('room_status');
        
        $room->save();

        return redirect('/manageRoom')->with('success', $room->room_number.' Room No. Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $room = User::findOrFail($request->room_id);
        $room->delete();
        return redirect('/manageRoom')->with('success', $room->room_number.' Room No. has been deleted!');
    }


    public function apiRoom(){
        // $room = DB::table('rooms')->get();

        $room = DB::table('rooms')
            ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
            ->select('rooms.*', 'room_types.room_type_name')
            ->get();

        return DataTables::of($room)
                
                ->addColumn('action', function($room){
                    return ' <a href="/manageRoom/'.$room->id.'/edit" class="btn btn-dark btn-sm">Edit</a>';
                })->make(true);
    }
}
