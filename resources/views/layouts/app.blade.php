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

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body class="datepicker_mobile_full" onclick="dropdownprofilebody()"><!-- Remove this class to disable datepicker full on mobile -->
  <div id="page">      
    @include('layouts.header')	
    @yield('content')
    @include('layouts.footer')
  </div>
  @include('layouts.login')
  
  
  <script type="text/javascript src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
  <script type="text/javascript src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- DATEPICKER  -->
	<script>

    $(document).ready(function ($) {
      $('.login').magnificPopup({
        type: 'inline',
  
        // Fixed position will be used
        fixContentPos: true,
  
        // Since disabled, Magnific Popup
        // will not put close button
        // inside content of popup
        closeBtnInside: false,
        preloader: false,
  
        // Delay in milliseconds before
        // popup is removed
        removalDelay: 160,
  
        // Class that is added to
        // popup wrapper and background
        mainClass: 'mfp-fade'
      });
    });

	  $(function() {
	    'use strict';
      $('input[name="dates"]').daterangepicker({
        autoUpdateInput: false,
        minDate:new Date(),
        locale: {
          cancelLabel: 'Clear'
        }
      });
      $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
      });
      $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
      });
    });
	</script>
	
	<!-- INPUT QUANTITY  -->
	<script src="{{ asset('js/input_qty.js') }}"></script>
</body>
</html>
  