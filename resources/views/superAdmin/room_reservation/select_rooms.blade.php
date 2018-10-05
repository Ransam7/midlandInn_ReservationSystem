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
                    <div class="row">
                      <div id="" class="col-md-12 col-sm-12 col-xs-12">
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group btn-group-lg" role="group">
                          <button type="button" class="btn btn-dark">Step1: Select Dates</button>
                        </div>
                        <div class="btn-group btn-group-lg" role="group">
                          <button type="button" class="btn btn-dark">Step2: Select Rooms</button>
                        </div>
                        <div class="btn-group btn-group-lg" role="group">
                          <button type="button" class="btn btn-dark disabled">Step3: Confirmation</button>
                        </div>
                        <div class="btn-group btn-group-lg" role="group">
                          <button type="button" class="btn btn-dark disabled">Step4: Make Payment</button>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    

                    <br>
                    <div class="row">

                      <div class="col-md-10 col-sm-12 col-xs-12 " id="">
                            @foreach($roomsAndRoomTypes as $reserve)
                            @if($reserve->number_rooms != 0)
                                <div class="col-md-8 col-sm-4 col-xs-12 profile_details">
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
                                    <div class="col-xs-12 bottom text-center">
                                      <div class="col-xs-12 col-sm-6 emphasis">
                                        <p class="ratings">
                                          
                                          <a class="text-default" style="font-size:25px;"><strong>PHP {{$reserve->room_type_rates}}</strong></a>
                                          <a>Price per night </a>
                                          
                                        </p>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 emphasis">
                                                <label class="control-label col-md-2 col-sm-12 col-xs-12">Room/s</label>
                                                <div class="col-md-3 col-sm-7 col-xs-12">
                                                  <select class="select2_group form-control">
                                                      @for($x=1; $x <= $reserve->number_rooms; $x++))
                                                            <option value="{{$x}}"> {{$x}} </option>
                                                      @endfor
                                                  </select>
                                                </div>
                                        <button type="button" class="btn btn-round btn-success btn-md">
                                          <i class="fa fa-bed"> </i> Choose
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            @endif
                            @endforeach 
                      </div>

                      <div class="col-md-2 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Digital Strategist</i></h4>
                            <div class="left col-xs-7">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address: </li>
                                <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->


                  </div>

                </div>

                </div>

                </div>
@endsection
