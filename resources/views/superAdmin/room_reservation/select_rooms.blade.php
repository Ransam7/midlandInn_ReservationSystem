@extends('layouts.reservation_process')

@section('content')
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
              </div>

            </div>
            <div class="clearfix"></div>


            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    {!! Form::open(['action' => 'RoomReservationController@storeDatesAndRooms', 'method' => 'GET']) !!}
                                      <button type="submit" class="btn btn-round btn-success btn-md">
                                           Choose <i class="fa fa-angle-double-right"> </i>
                                        </button>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">

                      <div class="col-md-8 col-sm-12 col-xs-12 " id="">
                            @foreach($roomsAndRoomTypes as $reserve)
                            @if($reserve->number_rooms != 0)

                                <div class="col-md-12 col-sm-4 col-xs-12 profile_details">
                                  <div class="well profile_view">
                                    <div class="col-sm-12">


                                      <h4 class="brief"><i>{{$reserve->room_type_name}}</i></h4>
                                      <div class="left col-xs-7">
                                        <h2 style="font-size:35px;">{{$reserve->room_type_name}}</h2>
                                        <p style="font-size:17px;">{{$reserve->room_type_desc}} </p>
                                        <ul class="list-unstyled">
                                          <li style="font-size:17px;"><i class="fa fa-bed"></i> <strong><i>Facilities & Amenities:</i></strong> {{$reserve->room_type_amenities}}</li>
                                          <li style="font-size:15px;"><i class="fa fa-user"></i> Person/s can occupy: <span class="label label-default" style="font-size:17px;"> {{$reserve->room_type_person_occupy}}</span></li>
                                        </ul>
                                      </div>
                                      <div class="right col-xs-5 text-center">
                                        <img src="{{asset('/storage/room_type_images/'.$reserve->room_type_image)}}" alt="" class="img-circle img-responsive">
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 bottom text-center">
                                      <div class="col-md-8 col-xs-12 col-sm-6 emphasis">
                                        <p class="ratings">
                                          
                                          <a class="text-default" style="font-size:25px;"><strong>PHP {{$reserve->room_type_rates}}</strong></a>
                                          <a>Price per night </a>
                                          
                                        </p>
                                      </div>
                                      <div class="col-md-4 col-xs-12 col-sm-6 emphasis">
                                                <label style="font-size:12px;" class="control-label col-md-5 col-sm-12 col-xs-12">Only {{$reserve->number_rooms}} room/s available</label>
                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                  <select name="number_of_rooms[]" class="select2_group form-control">
                                                            <option value="" >Select Room</option>
                                                      @for($x=1; $x <= $reserve->number_rooms; $x++))
                                                            <option value="{{$x}}"> {{$x}} </option>
                                                      @endfor
                                                  </select>
                                                </div>

                                        <input type="hidden" name="choosen_room_type_id[]" value="{{$reserve->id}}">
                                        <input type="hidden" name="choosen_check_in_date" value="{{$start}}">
                                        <input type="hidden" name="choosen_check_out_date" value="{{$end}}">
                                        <input type="hidden" name="final_interval_result" value="{{$final_interval_result}}">

                                        <!-- <button type="submit" class="btn btn-round btn-success btn-md">
                                           Choose <i class="fa fa-angle-double-right"> </i>
                                        </button> -->

                                        {!! Form::close() !!}
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            @endif
                            @endforeach 
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>YOUR BOOKING SUMMARY</h2>
                              <div class="clearfix"></div>
                            </div>
                            <!-- <div class="x_title">
                              <span style="font-size:20px;" class=""><i>Your stay</i></span>
                              <div class="clearfix"></div>
                            </div> -->
                            <div class="x_content">
                              <div class="">
                                <h4>Midland Inn Davao</h4>
                                <ul class="list-unstyled">
                                  <li style="font-size:16px;">Check in Date &nbsp&nbsp&nbsp <span class="pull-right"><i>{{$start}}</i></span></li>
                                  <li style="font-size:16px;">Check out Date &nbsp&nbsp&nbsp <span class="pull-right"><i>{{$end}}</i></li>
                                  <li style="font-size:16px;">Nights &nbsp&nbsp&nbsp <span class="pull-right"><i>{{$final_interval_result}}</i></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                    </div>
                    <!-- End SmartWizard Content -->


                  </div>
                  </div>

                  </div>

                </div>

                </div>
@endsection
