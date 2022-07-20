<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>@yield('title')</title>
        
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
        
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="css/admin.css" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="css/custom.css" rel="stylesheet">

    <style>
      body::-webkit-scrollbar, ::-webkit-scrollbar-corner {
        width: 8px;
        height: 8px;
      }

      body::-webkit-scrollbar-track {
        background-color: rgb(252, 252, 253);
        background-color: var(--gray-50);
      }

      body::-webkit-scrollbar-thumb {
        background-color: rgb(142, 137, 162);
        background-color: var(--gray-600);
        border-radius: 4px;
      }

      body::-webkit-scrollbar-track:vertical {
        border-left: solid 1px rgba(0, 0, 0, 0.1);
      }

      body::-webkit-scrollbar-track:horizontal {
        border-top: solid 1px rgba(0, 0, 0, 0.1);
      }

      .navbar-sidenav::-webkit-scrollbar, ::-webkit-scrollbar-corner {
        display: none!important
      }

      .navbar-sidenav::-webkit-scrollbar-track {
        display: none!important
      }

      .navbar-sidenav::-webkit-scrollbar-thumb {
        display: none!important
      }

      .navbar-sidenav::-webkit-scrollbar-track:vertical {
        display: none!important
      }

      .navbar-sidenav::-webkit-scrollbar-track:horizontal {
        display: none!important
      }
    </style>
  </head>

  <body class="fixed-nav sticky-footer" id="page-top">
    @include('admin.layouts.header')
    <div class="content-wrapper">
      @yield('content')
    </div>
    @include('admin.layouts.footer')
    @include('admin.layouts.logout')

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="vendor/jquery.selectbox-0.2.js"></script>
    <script src="vendor/retina-replace.min.js"></script>
    <script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/admin-charts.js"></script>
  </body>
</html>