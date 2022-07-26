<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <meta name="google-site-verification" content="-3n39au53fTHd6KIrrldXmN3PREAyq2RIAIa1U7Hhyk" />
    <title>@yield('title')</title>

    {{-- <!-- GOOGLE WEB FONT --> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
        
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Main styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->

    <!-- Your custom styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
        background-color: #212529;
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
    {{-- Alert status --}}
    @if (session('success'))
      <script>swal("Success", "{{ session('susscess') }}", "success");</script>
    @elseif(session('fail'))
      <script>swal("Error", "{{ session('fail') }}", "error");</script>
    @elseif ($errors->any())
      @foreach ($errors->all() as $error)
        <script>swal("Error", "{{ $error }}", "error");</script>
      @endforeach
    @endif

    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <script>swal("Error", "{{ $error }}", "error");</script>
      @endforeach
    @endif
    
    @include('admin.layouts.header')
      @yield('content')
    @include('admin.layouts.footer')
    @include('admin.layouts.logout')
    
    <!-- Bootstrap core JavaScript-->
    {{-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    {{-- <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script> --}}
    <!-- Page level plugin JavaScript-->
    {{-- <script src="{{ asset('vendor/chart.js/Chart.js') }}"></script> --}}
    {{-- <script src="{{ asset('vendor/jquery.selectbox-0.2.js') }}"></script>
    <script src="{{ asset('vendor/retina-replace.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.magnific-popup.min.js') }}"></script> --}}
    
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/admin.js') }}"></script>
  </body>

</html>