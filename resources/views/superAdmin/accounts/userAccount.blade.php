@extends('layouts.superadmin')

@section('content')
            
            <div class="page-title">
              <div class="title_left">
                <h3>Users Account</h3>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-11 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Manage Accounts</h2>
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
                  <!-- delete modal -->
                  <div class="modal fade" id="delete-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Delete User Account</h4>
                        </div>
                        <form action="{{route('userAccount.destroy','test')}}" method="POST" class="form-horizontal form-label-left">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <div class="modal-body">
                                <input type="hidden" name="userAccount_id" id="userAccount_id" value="">
                                <div class="form-group">
                                    <p>Are your sure you want to delete this user?</p>
                                </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                              </div>
                            </div>
                            </form>
                      </div>
                    </div>
                  </div>
                  <!-- end delete user modal -->

                  <div class="clearfix"></div>
                    <a href="/userAccount/create" class="btn btn-success">Add Account</a>
                    <table id="users-table" class="table table-striped table-bordered dataTable no-footer">
                      <thead>
                        <th>Role</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile Contact #</th>
                        <th>Address</th>
                        <th>Action</th>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              
@endsection
