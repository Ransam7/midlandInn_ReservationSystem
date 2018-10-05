
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'MidLand Inn') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ asset('img/midlandinn.png')}}" rel="icon">
  <link href="{{ asset('img/midlandinn-apple-touch.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"> -->

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendors/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style-landing-page.css')}}" rel="stylesheet">

  
</head>

<body>
  @yield('content')
  <script src="{{ asset('js/app.js')}}"></script>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('vendors/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendors/easing/easing.min.js')}}"></script>
  <script src="{{ asset('vendors/wow/wow.min.js')}}"></script>
  <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="{{ asset('vendors/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('vendors/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('vendors/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('vendors/superfish/superfish.min.js')}}"></script>
  

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main-landing-page.js')}}"></script>
  
  <script type="text/javascript" >
    
    var base_url ="{{url('/')}}";
    var csrf_token = "{{csrf_token()}}";

    $(document).ready(function(){

      //store state data
      $('#test-pay').data('state',0);


      $('#test-pay').click(function(e){

        e.preventDefault();
        if($(this).data('state')==0)
        { 
          $(this).html('Paying...');
          $(this).data('state',1);
          var total = $('#test-amount').val();
          var thisHere = this;
          $.post(base_url + '/post-payment',{total: total,_token: csrf_token},function(data){


            console.log(data.response);
            if(data.error_message=='')
            {
              //window.location.href = data.response.links[2].href;
              //https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=EC-25A23949SX180641T
            }
            $(thisHere).html('Pay');
            $(thisHere).data('state',0);
          });
        }

      });

    });


  </script>

</body>
</html>