@extends('layouts.superAdmin')
@section('content')
	<div class="page-title">
              <div class="title_left">
                <h3>Manage Room Type</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            @include('superAdmin.inc.messages')

	<div class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Room Type</h2>
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
                    {!! Form::open(['action' => ['RoomTypeController@update' , $room_type->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                      <div class="form-group">
                        {{Form::label('room_type_name', 'Room Type')}}
                        {{Form::text('room_type_name', $room_type->room_type_name, ['class' => 'form-control', 'placeholder' => 'Room Type'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('room_type_desc', 'Room Description')}}
                        {{Form::text('room_type_desc', $room_type->room_type_desc, ['class' => 'form-control', 'placeholder' => 'Room Description'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('room_type_rates', 'Room Rates (per night)')}}
                        {{Form::number('room_type_rates', $room_type->room_type_rates, ['class' => 'form-control', 'placeholder' => 'Room Rates'])}}
                      </div>
                      <div class="form-group col-md-12" >
                        <h4 class="control-label col-md-12 col-sm-12 col-xs-12">Facilities and Amenities</h4>
                        @foreach($room_amenities as $amenity)
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="">
                              <label>
                            <input type="checkbox" name="room_type_amenities[]" value="{{$amenity->amenity_name}}" class="js-switch" {{in_array($amenity->amenity_name, $room_type_amenities)?"checked":""}} >
                            {{$amenity->amenity_name}}
                              </label>
                            </div>
                          </div>
                        @endforeach
                      </div>
                      <br />
                      <div class="form-group">
                      {{Form::label('room_type_person_occupy', 'Person can Occupy')}}
                      {{Form::number('room_type_person_occupy', $room_type->room_type_person_occupy, ['class' => 'form-control', 'placeholder' => 'Person can Occupy'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('room_type_status', 'Room Type Status')}}
                        {{Form::select('room_type_status', ['AVAILABLE' => 'AVAILABLE', 'UNAVAILABLE' => 'UNAVAILABLE'], $room_type->room_type_status, ['class' => 'form-control', 'placeholder' => 'Select Room Type Status...'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('room_type_image', 'Room Type Image')}}
                        {{Form::file('room_type_image')}}
                      </div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        <a href="/manageRoomType" class="btn btn-default">Cancel</a>
                    {!! Form::close() !!}
                </div>
              </div>
              <div class="clearfix"></div>
    </div>
@endsection