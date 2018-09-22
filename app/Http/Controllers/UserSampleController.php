<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use KABBOUCHI\TableView\TableView;
use App\User;

class UserSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$users = User::all();
        $searchResult = '';
        if($request->has('search') && $request->isMethod('get'))
        {
            $search = $request->get('search');
            $users = User::where('name','LIKE','%'.$search.'%')
                          ->get();

            $searchResult = '<strong>Results for "' . $search . '"</strong>'; 
        }
        else
        {
            $users = User::all();    
        }
        
        $table = TableView($users)
                          ->column('ID', 'id')
                          ->column('Name', 'name')
                          ->column('Email', 'email')
                           ->setTableRowAttributes([
                                'class' => 'tr-class'
                            ])
                            ->setTableBodyClass('sortable')
                          ->appendsQueries(true)
                          ->paginate(1);

        /*
        TableView($users)
               ->column('ID', 'id')
               ->column('Active', 'active','boolean')
               ->column('Featured', 'active','boolean|No,Yes')
               ->column('Photo', 'photo','image')
               ->column('Avatar', 'avatar','image|200,200')
               ->column('full_name') // ->column('Full name','full_name')
               ->column('Created At', function ($model) {
                               return $model->created_at->diffForHumans();
                })
                ->render();*/

        return view('superAdmin.datatableSamp',['table'=>$table,'searchResult'=>$searchResult]);
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // public function apiUser(){
    //     $user = User::all();

    //     return DataTables::of($user)
    //             ->addColumn('action', function($user){
    //                 return '<a href="" class="btn btn-dark btn-sm">Edits</a><button class="btn btn-danger btn-sm" data-myuseraccountid="{{$user->id}}" data-toggle="modal" data-target="#delete-user-modal">Delete</button>';
    //             })->make(true);
    // }
}
