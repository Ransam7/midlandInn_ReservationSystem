

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
  <link href="{{ asset('img/midlandinn.png')}}" rel="icon">
  <link href="{{ asset('img/midlandinn-apple-touch.png')}}" rel="apple-touch-icon">

    <title>{{ config('app.name', 'MidLand Inn') }}</title>

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('css/customCSS.css')}}" rel="stylesheet"> -->
    <link href="{{ asset('vendors/datatables/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{ asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">

    <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    
  </head>

  <body class="nav-md" id="app">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MidLand Inn!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('img/admin.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li> -->


                  <li><a href="{{ url('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href="{{ url('roomReservation')}}"><i class="fa fa-book"></i> Reservations</a></li>
                  @if(Auth::user()->userRole->role_name == 'SuperAdmin')
                  <li><a><i class="fa fa-bed"></i> Rooms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('manageRoom')}}">Manage Rooms</a></li>
                      <li><a href="{{ url('manageRoomType')}}">Manage Room Types</a></li>
                      <li><a href="{{ url('manageAmenity')}}">Manage Room Amenities</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('userAccount')}}"><i class="fa fa-users"></i> User Accounts</a></li>
                  @endif
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('img/admin.jpg')}}" alt="">{{ Auth::user()->fname }} {{ Auth::user()->lname }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('home')}}"> Home Page</a></li>
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
          
        @yield('content')
        <!-- /page content -->
        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{ asset('vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('vendors/starrr/dist/starrr.js')}}"></script>
    
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{ asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->


     

    <script>
      $(document).ready(function(){
        
        $('#users-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('api.user')}}",
                columns: [
                    {data: 'role_name', name:'role_name'}, 
                    {data: 'fname', name:'first name'},
                    {data: 'lname', name:'last name'},
                    {data: 'email', name:'email'},
                    {data: 'contact', name:'contact'},
                    {data: 'address', name:'address'},
                    {data: 'action', name:'action', orderable: false, searchable: false},
                    // , orderable: false, searchable: false
                ]
            });
      });
            
    </script>

    <script>
      $(document).ready(function(){
        
        $('#rooms-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('api.room')}}",
                columns: [
                    {data: 'room_number', name:'room_number'},
                    {data: 'room_type_name', name:'room_type_name'},
                    {data: 'room_status', name:'room_status'},
                    {data: 'action', name:'action', orderable: false, searchable: false},
                    // , orderable: false, searchable: false
                ]
            });
      });
            
    </script>

    <script>
      $(document).ready(function(){
        
        $('#room-types-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('api.roomType')}}",
                columns: [
                    {data: 'room_type_name', name:'room_type_name'},
                    {data: 'room_type_desc', name:'room_type_desc'},
                    {data: 'room_type_rates', name:'room_type_rates'},
                    {data: 'room_type_person_occupy', name:'room_type_person_occupy'},
                    {data: 'room_type_status', name:'room_type_status'},
                    {data: 'action', name:'action', orderable: false, searchable: false},
                    // , orderable: false, searchable: false
                ]
            });
      });
            
    </script>

    <script>
      $(document).ready(function(){
        
        $('#room-amenity-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('api.amenity')}}",
                columns: [
                    {data: 'amenity_name', name:'amenity_name'},
                    {data: 'amenity_status', name:'amenity_status'},
                    {data: 'action', name:'action', orderable: false, searchable: false},
                    // , orderable: false, searchable: false
                ]
            });
      });
            
    </script>

    <script>
      $(document).ready(function(){
        
        $('#room-reservation-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('api.roomReservation')}}",
                columns: [
                    {data: 'transac_code', name:'transac_code'},
                    {data: 'fname', name:'fname'},
                    {data: 'lname', name:'lname'},
                    {data: 'check_in_date', name:'check_in_date'},
                    {data: 'check_out_date', name:'check_out_date'},
                    {data: 'payment', name:'payment'},
                    {data: 'numb_of_room', name:'numb_of_room'},
                    {data: 'action', name:'action', orderable: false, searchable: false},
                    // , orderable: false, searchable: false
                ]
            });
      });
            
    </script>




    <script type="text/javascript">

      $('#delete-user-modal').on('show.bs.modal', function (event){
        console.log('Modal Opened');
        var button = $(event.relatedTarget)
        var userAccount_id = button.data('myuseraccountid')
        var modal = $(this)
        
        modal.find('.modal-body #userAccount_id').val(userAccount_id);
      })

      $('#view-room-type-modal').on('show.bs.modal', function (event){
        console.log('Modal Opened');
        var button = $(event.relatedTarget)
        var room_type_id = button.data('myrid')
        var room_type_name = button.data('myrname')
        var room_type_desc = button.data('myrdesc')
        var room_type_rates = button.data('myrrates')
        var room_type_amenities = button.data('myrameni')
        var room_type_status = button.data('myrstat')
        var room_type_status_label = "";
        if (room_type_status == 'AVAILABLE') {
                room_type_status_label = "label label-primary";
        }else{  room_type_status_label = "label label-danger";}
        
        

        var room_type_status_attr = " ";
        var room_type_image = button.data('myrimage')
        var room_type_image_path = '/storage/room_type_images/'+room_type_image;
        var modal = $(this)

        
        
        modal.find('.modal-body #room_id').html(room_type_id);
        modal.find('.modal-body #room_name').html(room_type_name);
        modal.find('.modal-body #room_desc').html(room_type_desc);
        modal.find('.modal-body #room_rates').html(room_type_rates);
        modal.find('.modal-body #room_amenities').html(room_type_amenities);
        modal.find('.modal-body #room_status').html(room_type_status);

        modal.find('.modal-body #room_status').attr("class", room_type_status_label);

        modal.find('.modal-body #room_image').html(room_type_image);
        modal.find('.modal-body #room_image_path').html(room_type_image_path);
      
        modal.find('.modal-body #room_image').attr("src", room_type_image_path);

      })
    </script>

  </body>
  </html>