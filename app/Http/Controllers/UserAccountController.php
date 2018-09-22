<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\User;
use App\UserRole;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::all();
        return view('superAdmin.accounts.userAccount')->with('users', $users);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superAdmin.accounts.addUserAccount');  
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
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'user_role' => 'required',
            'address' => 'required',
        ]);

        //Add user
        $user = new User;
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);
        $user->contact = $request->input('contact');
        $user->user_role_id = $request->input('user_role');
        $user->address = $request->input('address');
        $user->save();

        return redirect('/userAccount');

        // User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        // return back();
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
        $user = User::find($id);
        return view('superAdmin.accounts.editUserAccount')->with('user', $user);
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
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'user_role' => 'required',
            'address' => 'required',
        ]);

        //Create Post
        $user = User::find($id);
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->user_role_id = $request->input('user_role');
        $user->address = $request->input('address');
        $user->save();

        return redirect('/userAccount');

        // $users = User::findOrFail($request->userAccount_id);
        // $users->update($request->all());
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $users = User::findOrFail($request->userAccount_id);
        $users->delete();
        return redirect('/userAccount');
    }

    public function apiUser(){
        // $user = User::all();
        $user = DB::table('users')
            ->join('user_roles', 'users.user_role_id', '=', 'user_roles.id')
            ->select('users.*', 'user_roles.role_name')
            ->get();
        // $user = DB::table('users')
        //         ->leftJoin('user_role', 'users.user_role_id', '=', 'user_roles.id')
        //         ->get(); 

        return DataTables::of($user)
                ->addColumn('action', function($user){
                    return '<a href="/userAccount/'.$user->id.'/edit" class="btn btn-dark btn-sm">Edit</a><button class="btn btn-danger btn-sm" data-myuseraccountid="'.$user->id.'" data-toggle="modal" data-target="#delete-user-modal">Delete</button>';
                })->make(true);
    }
}
