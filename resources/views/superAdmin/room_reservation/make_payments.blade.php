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
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">


                            <div class="col-md-8 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Form Design <small>different form elements</small></h2>
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
                                  <br />
                                 <form class="form-horizontal form-label-left input_mask">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" name="fname" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" name="lname" class="form-control" id="inputSuccess3" placeholder="Last Name">
                                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" name="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                      <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" name="contact" class="form-control" id="inputSuccess5" placeholder="Mobile Number">
                                      <span class="glyphicon glyphicon-phone form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                      <input type="text" name="address" class="form-control" id="inputSuccess5" placeholder="Address">
                                      <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" name="password" class="form-control" id="inputSuccess5" placeholder="Password">
                                      <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                      <input type="text" name="confirm_password" class="form-control" id="inputSuccess5" placeholder="Confirm Password">
                                      <span class="fa fa-unlock-alt form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary">Cancel</button>
                             <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                      </div>
                                    </div>

                                  </form>
                                </div>
                              </div>
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
                                  <li style="font-size:16px;">Number of room &nbsp&nbsp&nbsp <span class="pull-right"><i>{{$number_of_rooms}}</i></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  </div>

                </div>

                </div>
@endsection
