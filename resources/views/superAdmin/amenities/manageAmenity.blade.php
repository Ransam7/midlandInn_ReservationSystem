@extends('layouts.superadmin')

@section('content')
            
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Room Amenities</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            @include('superAdmin.inc.messages')

              <div class="col-md-12 col-sm-11 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Room Amenity</h2>
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
                    <a href="/manageAmenity/create" class="btn btn-success">Add Amenity</a>
                    <table id="room-amenity-table" class="table table-striped table-bordered dataTable no-footer">
                      <thead>
                        <th>Amenity name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              
@endsection
