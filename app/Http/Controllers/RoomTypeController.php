<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App\User;
use App\Room;
use App\RoomType;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superAdmin.room_types.manageRoomType');
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
        $this->validate($request, [
            'room_type_name' => 'required',
            'room_type_desc' => 'required',
            'room_type_amenities' => 'required',
            'room_type_rates' => 'required',
            'room_type_person_occupy' => 'required',
            'room_type_image' => 'image|nullable|max:1999',
        ]);



        //Handle File upload
        if ($request->hasfile('room_type_image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('room_type_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('room_type_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('room_type_image')->storeAs('public/room_type_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noImage.jpg';
        }

        //Add room type
        $room_type = new RoomType;
        $room_type->room_type_name = $request->input('room_type_name');
        $room_type->room_type_desc = $request->input('room_type_desc');
        $room_type->room_type_amenities = implode(" , ",$request->input('room_type_amenities'));
        $room_type->room_type_rates = $request->input('room_type_rates');
        $room_type->room_type_status = "AVAILABLE";
        $room_type->room_type_person_occupy = $request->input('room_type_person_occupy');
        $room_type->room_type_image = $fileNameToStore;
        $room_type->save();
        return redirect('/manageRoomType')->with('success', $room_type->room_type_name.' Room Added!');
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
        $room_type = RoomType::find($id);
        $room_amenities = DB::table('amenities')->where('amenity_status', '=', 'AVAILABLE')->get();
        $room_type_amenities = explode(" , ", $room_type->room_type_amenities);
        return view('superAdmin.room_types.editRoomType')->with(['room_type' => $room_type , 'room_type_amenities' => $room_type_amenities, 'room_amenities' => $room_amenities]);
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
            'room_type_name' => 'required',
            'room_type_desc' => 'required',
            'room_type_amenities' => 'required',
            'room_type_rates' => 'required',
            'room_type_status' => 'required',
            'room_type_person_occupy' => 'required',
            'room_type_image' => 'image|nullable|max:1999',
        ]);

        //Handle File upload
        if ($request->hasfile('room_type_image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('room_type_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('room_type_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('room_type_image')->storeAs('public/room_type_images', $fileNameToStore);
        }

        //Edit Room Type
        $room_type = RoomType::find($id);
        $room_type->room_type_name = $request->input('room_type_name');
        $room_type->room_type_desc = $request->input('room_type_desc');
        $room_type->room_type_amenities = implode(" , ",$request->input('room_type_amenities'));
        $room_type->room_type_rates = $request->input('room_type_rates');
        $room_type->room_type_status = $request->input('room_type_status');
        $room_type->room_type_person_occupy = $request->input('room_type_person_occupy');
        if ($request->hasfile('room_type_image')){
            if ($room_type->room_type_image != 'noImage.jpg') {
                //delete image
                Storage::delete('public/room_type_images/'.$room_type->room_type_image);
            }
            $room_type->room_type_image = $fileNameToStore;
        }
        $room_type->save();

        return redirect('/manageRoomType')->with('success', $room_type->room_type_name.' Room Type Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room_type = User::findOrFail($request->room_type_id);
        $room_type_name = $room_type->room_type_name;
        $room_type->delete();
        return redirect('/manageRoomType')->with('success', $room_type_name.' Room Type has been deleted!');
    }

    public function apiRoomType(){
        // $user = User::all();
        $room_type = DB::table('room_types')->get();
        // $user = DB::table('users')
        //         ->leftJoin('user_role', 'users.user_role_id', '=', 'user_roles.id')
        //         ->get(); 

        return DataTables::of($room_type)
                
                ->addColumn('action', function($room_type){
                    return '<button class="btn btn-primary btn-sm" data-myrid="'.$room_type->id.'"  data-myrname="'.$room_type->room_type_name.'" data-myrdesc="'.$room_type->room_type_desc.'" data-myrrates="'.$room_type->room_type_rates.'" data-myrameni="'.$room_type->room_type_amenities.'" data-myrstat="'.$room_type->room_type_status.'" data-myrimage="'.$room_type->room_type_image.'" data-toggle="modal" data-target="#view-room-type-modal">Details</button><a href="/manageRoomType/'.$room_type->id.'/edit" class="btn btn-dark btn-sm">Edit</a>';
                })->make(true);
    }
}
