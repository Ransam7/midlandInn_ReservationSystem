@extends('layouts.superAdmin')
@section('content')
<div class="page-title">
              <div class="title_left">
                <h3>User Accounts</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>
            @include('superAdmin.inc.messages')
  <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Add User Account</h2>
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
                    {!! Form::open(['action' => 'UserAccountController@store', 'method' => 'POST']) !!}
                      <div class="form-group">
                      {{Form::label('fname', 'First Name')}}
                      {{Form::text('fname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('lname', 'Last Name')}}
                        {{Form::text('lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('username', 'Username')}}
                        {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('password', 'Password')}}
                        {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('user_role', 'User Role')}}
                        {{Form::select('user_role', ['1' => 'Super Admin', '2' => 'Moderator', '3' => 'Customer'], null, ['class' => 'form-control', 'placeholder' => 'Select User Role...'])}}
                      </div>
                      <div class="form-group">
                      {{Form::label('email', 'Email')}}
                      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('contact', 'Contact')}}
                        {{Form::text('contact', '', ['class' => 'form-control', 'placeholder' => 'Contact'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('address', 'Address')}}
                        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
                      </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        <a href="/userAccount" class="btn btn-default">Cancel</a>
                    {!! Form::close() !!}
                </div>
              </div>
              <div class="clearfix"></div>
    </div>
@endsection