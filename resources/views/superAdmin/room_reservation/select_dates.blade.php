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
                    <h2>Form Wizards <small>Sessions</small></h2>
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

                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="" class=" ">
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group btn-group-lg btn-group-md" role="group">
                          <button type="button" class="btn btn-dark">Step1: Select Dates</button>
                        </div>
                        <div class="btn-group btn-group-lg btn-group-md" role="group">
                          <button type="button" class="btn btn-dark disabled">Step2: Select Rooms</button>
                        </div>
                        <div class="btn-group btn-group-lg btn-group-md" role="group">
                          <button type="button" class="btn btn-dark disabled">Step3: Confirmation</button>
                        </div>
                        <div class="btn-group btn-group-lg btn-group-md" role="group">
                          <button type="button" class="btn btn-dark disabled">Step4: Make Payment</button>
                        </div>
                      </div>
                      <div id="step-1">
                          <div class="form-group">
                            <div class="well" style="overflow: auto">
                                  <div class="col-md-4">
                                    Date Range Picker
                                      <fieldset>
                                        {!! Form::open(['action' => 'RoomReservationController@searchAvailability', 'method' => 'GET']) !!}
                                        <div class="control-group">
                                          <div class="controls">
                                            <div class="input-prepend input-group">
                                              <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                              <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="{{NOW()}}" />
                                            </div>
                                          </div>
                                        </div>
                                        
                                      </fieldset>
                                      <div class="col-md-3">
                                         {{Form::submit('Submit', ['class' => 'btn btn-primary', 'name' => 'done'])}}
                                  </div>
                                  {!! Form::close() !!}
                                  
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
