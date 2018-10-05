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
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Step 4 description</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                          {!! Form::open(['action' => 'ReservationProcessController@storeDates', 'method' => 'GET', 'class' => 'form-horizontal form-label-left']) !!}
                          <div class="form-group">
                            <div class="well" style="overflow: auto">
                                  <div class="col-md-4">
                                    Date Range Picker
                                      <fieldset>
                                        {!! Form::open(['action' => 'ReservationProcess@searchAvailabity', 'method' => 'GET']) !!}
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
                                  <div class="col-md-12">
                                    <table class="table table-striped">
                                      <tr>
                                        <th>Code</th>
                                        <th>ID</th>
                                      </tr>

                                      @foreach($room_reservation as $reserve)
                                        <tr>
                                          <td>{{$reserve->transac_code}}</td>
                                          <td>{{$reserve->id}}</td>
                                        </tr>
                                      @endforeach 
                                    </table>
                                  </div>
                              </div>
                          </div>
                      </div>

                          <div class="form-group">
                            {{Form::submit('Submit', ['class' => 'btn btn-primary', 'name' => 'next'])}}
                          </div>

                        {!! Form::close() !!}

                      </div>
                      

                    </div>
                    <!-- End SmartWizard Content -->


                  </div>

                </div>

                </div>

                </div>
@endsection
