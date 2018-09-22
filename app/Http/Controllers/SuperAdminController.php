<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SuperAdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
    	$user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('superAdmin.dashboard')->with('user', $user);
    }
}
