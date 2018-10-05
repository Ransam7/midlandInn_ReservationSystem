@extends('layouts.superAdmin')
@section('content')
	<div class="page-title">
              <div class="title_left">
                <h3>Manage Room</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            @include('superAdmin.inc.messages')

	<div class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Room</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="clearfix"></div>
                    {!! Form::open(['action' => ['ManageRoomController@update' , $room -> id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                      <div class="form-group">
                      {{Form::label('room_number', 'Room Number')}}
                      {{Form::number('room_number', $room->room_number, ['class' => 'form-control', 'placeholder' => 'Room Number'])}}
                      </div>
                      <div class="form-group">
                        <label class="control-label">Room Type</label>
                          <select name="room_type_id" class="form-control">
                            
                            @foreach($room_types_label as $room_label)
                            <option value="{{$room_label->room_type_id}}">{{$room_label->room_type_name}}</option>
                            
                            @foreach($room_types as $room_type)
                                @if($room_type->id != $room_label->room_type_id)
                                    <option value="{{$room_type->id}}">{{$room_type->room_type_name}}</option>
                                @endif
                            @endforeach
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        {{Form::label('room_status', 'Room Status')}}
                        {{Form::select('room_status', ['AVAILABLE' => 'AVAILABLE', 'UNAVAILABLE' => 'UNAVAILABLE'], $room->room_status, ['class' => 'form-control', 'placeholder' => 'Select Room Status...'])}}
                      </div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        <a href="/manageRoom" class="btn btn-default">Cancel</a>
                    {!! Form::close() !!}
                </div>
              </div>
              <div class="clearfix"></div>
    </div>
@endsection