<!-- //views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/Style Isi.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/all.css') }}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  
  <script src="https://kit.fontawesome.com/8e6e4ad827.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #F1F1F1">
  <div class="container">
      @yield('content')
  </div>
  <script>
    function openSide() {
      document.getElementById("mySidebar").style.width = "300px";
    }
    function closeSide(){
      document.getElementById("mySidebar").style.width = "0";
    }
  </script>
</body>
</html>
