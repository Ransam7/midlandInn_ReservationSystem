@extends('layouts.superadmin')

@section('content')
            
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Room Type</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            @include('superAdmin.inc.messages')

              <div class="col-md-12 col-sm-11 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Room Types</h2>
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

                  <!-- modals -->
                  <!-- view modal -->
                  <div class="modal fade" id="view-room-type-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">View Room Type</h4>
                        </div>
                        <form action=" " method="POST" class="form-horizontal form-label-left">
                            {{csrf_field()}}
                            <div class="modal-body">    
                              <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="product-image">
                                  <img src="" alt="..." id="room_image" />
                                </div>
                              </div>
                              <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">
                                  
                                  <h3 class="prod_title" id="room_name"> </h3>
                                  
                                  <strong class="">Room Description: </strong><br>
                                  <i id="room_desc"></i>
                                  
                                  <hr>

                                  <div class="">
                                    <h5>Facilities and Amenities</h5>
                                    <p id="room_amenities"></p>
                                  </div>
                                  <hr>
                                  <div class="">
                                    <h5>Room Type Status</h5>
                                    <p class="" id="room_status"></p>
                                  </div>
                                  <br>
                                  <div class="">
                                    <div class="product_price">
                                      <span>Room Rate <span class="label label-default">Per night</span></span>
                                      <h2 class="price" id="room_rates"> </h2>
                                      
                                      <br>
                                    </div>
                                  </div>
                                </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                            </form>
                      </div>
                    </div>
                  </div>
                  <!-- end view user modal -->


                  <div class="clearfix"></div>
                    <a href="/manageRoomType/create" class="btn btn-success">Add Room Type</a>
                    <table id="room-types-table" class="table table-striped table-bordered dataTable no-footer">
                      <thead>
                        <th>Room Type</th>
                        <th>Room Description</th>
                        <th>Room Rates <span class="badge bg-green">per night</span></th>
                        <th>Person can occupy</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              
@endsection
