@extends('layouts.superAdmin')
@section('content')
<div class="page-title">
              <div class="title_left">
                <h3>Manage Amenities</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            @include('superAdmin.inc.messages')

  <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Add Amenity</h2>
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
                    {!! Form::open(['action' => 'AmenityController@store', 'method' => 'POST']) !!}
                      <div class="form-group">
                        {{Form::label('amenity_name', 'Amenity Name')}}
                        {{Form::text('amenity_name', '', ['class' => 'form-control', 'placeholder' => 'Amenity Name'])}}
                      </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        <a href="/manageAmenity" class="btn btn-default">Cancel</a>
                    {!! Form::close() !!}
                </div>
              </div>
              <div class="clearfix"></div>
    </div>
@endsection