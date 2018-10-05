<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\User;
use App\Room;
use App\RoomType;
use App\Amenity;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superAdmin.amenities.manageAmenity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superAdmin.amenities.addAmenity');
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
            'amenity_name' => 'required',
        ]);

        //Add room
        $amenity = new Amenity;
        $amenity->amenity_name = $request->input('amenity_name');
        $amenity->amenity_status = "AVAILABLE";
        $amenity->save();

        $amenity_name_added = 'Room Type Name: '.$amenity->amenity_name;
        return redirect('/manageAmenity')->with('success', $amenity_name_added.' Room Added!');
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
        $amenity = Amenity::find($id);
        return view('superAdmin.amenities.editAmenity')->with('amenity', $amenity);
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
            'amenity_name' => 'required',
            'amenity_status' => 'required',
        ]);

        //Edit Room Type
        $amenity = Amenity::find($id);
        $amenity->amenity_name = $request->input('amenity_name');
        $amenity->amenity_status = $request->input('amenity_status');
        $amenity->save();

        $amenity_name_edited = 'Amenity Name: '.$amenity->amenity_name;

        return redirect('/manageAmenity')->with('success', $amenity_name_edited.' Edited Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenity = User::findOrFail($request->id);
        $amenity_name = $amenity->amenity_name;
        $amenity->delete();
        return redirect('/manageAmenity')->with('success', $amenity_name.' Amenity has been deleted!');
    }

    public function apiAmenity(){
        // $user = User::all();
        $room_amenity = DB::table('amenities')->get();
        // $user = DB::table('users')
        //         ->leftJoin('user_role', 'users.user_role_id', '=', 'user_roles.id')
        //         ->get(); 

        return DataTables::of($room_amenity)
                
                ->addColumn('action', function($room_amenity){
                    return '<a href="/manageAmenity/'.$room_amenity->id.'/edit" class="btn btn-dark btn-sm">Edit</a>';
                })->make(true);
    }
}
