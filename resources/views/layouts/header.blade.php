@section('head')
<!-- Bootstrap core CSS-->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection
{{-- header --}}
<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" width="150" height="36" alt="" class="logo_normal">
            <img src="{{ asset('img/logo_sticky.png') }}" width="150" height="36" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu" style="width: 77px;">
        <li style="margin-left: 22px;margin-right: -1px;"><a href="/wishlist" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        <li id="isiProfile" class="isiProfile">
            @if (session('name'))
                <table>
                    <tr>
                        <td>
                            <p style="font-size: 10pt; color:#151515; margin: 0 0 5px 0!important"><b>{{ (Session::has('name') ? Session::get('name') : '' ) }}</b></p>
                        </td>
                        <td align="right">
                            <p style="font-size: 8pt; color:#dc3545; margin: 0 0 5px 0!important"><strong>[{{ (Session::has('role') ? Session::get('role') : 'User' ) }}]</strong></p>
                        </td>
                    </tr>
                </table>
                <p style="font-size: 9pt; color:#151515; margin: 0 0 5px 0!important">{{ (Session::has('email') ? Session::get('email') : '' ) }}</p>
                <div style="width: 100%; border-bottom: solid 2px; position: relative"></div>
                <a href="javascript:void(0)" class="sign-out" id="sign-out" data-toggle="modal" data-target="#exampleModal"  title="Logout" style="padding: 10px; margin: 4px -10px -11px -11px; border-radius: 0px 0px 3px 3px;">
                    <p class="changelogout" style="font-family: 'Poppins', Helvetica, sans-serif!important; font-weight: 500; color: #151515; margin: 0px">
                        <i style="color:#151515" class="fa-solid fa-arrow-right-from-bracket changelogout"  onclick="document.getElementById('sign-out').click()"></i>
                        Logout
                    </p>
                </a>
            @else
                <a href="#sign-in-dialog" class="sign-in" id="sign-in" title="Login" style="padding: 20px 15px; margin: -10px -10px -11px -11px; border-radius: 3px;">
                    <p class="changelogin" style="font-family: 'Poppins', Helvetica, sans-serif!important; font-weight: 500; color: #151515; margin: 0px">
                        <i style="color:#151515" class="fa-solid fa-arrow-right-to-bracket changelogin" onclick="document.getElementById('sign-in').click()"></i>
                        Login
                    </p>
                </a>

            @endif
        </li>
        <li>@if (session('name'))
                <img style="right: -10px;top: 7px;" id="profile" class="profile_btn" onclick="dropdownprofile()" style="width: 23px; cursor: pointer; border-radius: 30px" src="{{ (Session::has('avatar') ? Session::get('avatar') : '' ) }}" alt="">
            @else
                <a style="right: -10px;top: 7px;" href="javascript:void(0)" id="profile" class="profile_btn" onclick="dropdownprofile()" title="Profile"></a>
            @endif
        </li>
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu" style="margin-right: -29px;top: 9px;">
        <ul>
            <li><span><a href="{{ url('/') }}">Home</a></span></li>
            <li><span><a href="{{ route("aboutus") }}">About</a></span></li>
            <li><span><a href="{{ route("vendors.listsalon") }}">Vendor</a></span></li>
            @if (session('role')!="User" && session('role')!="")
                <li><span><a href="{{ route('dashboard.index') }}">Dashboard</a></span>
            @endif
        </ul>
    </nav>
</header>

<script>
    var i=0;
    var profile = document.getElementById("profile");
    var isiProfile = document.getElementById("isiProfile");
    var btnIsi = document.getElementById("btnIsi");

    profile.addEventListener("mouseover", buka, false);
    isiProfile.addEventListener("mouseover", buka, false);
    isiProfile.addEventListener("mouseout", tutup, false);

    function dropdownprofile(){
        i++;
        if((i%2) != 0){
            document.getElementById('isiProfile').style.display = 'block';
        }else{
            document.getElementById('isiProfile').style.display = 'none';
        }
    }

    function dropdownprofilebody(){
        if((i%2) != 0){
            i++;
            document.getElementById('isiProfile').style.display = 'block';
        }else{
            document.getElementById('isiProfile').style.display = 'none';
        }
    }

    function buka()
    {document.getElementById('isiProfile').style.display = 'block'}
    function tutup()
    {document.getElementById('isiProfile').style.display = 'none'}

</script>
