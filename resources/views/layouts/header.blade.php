@section('head')
<!-- Bootstrap core CSS-->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection
{{-- header --}}
<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="{{ url('/') }}">
            <img src="img/logo.png" width="150" height="36" alt="" class="logo_normal">
            <img src="img/logo_sticky.png" width="150" height="36" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        <li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>0</strong></a></li>
        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        <li id="isiProfile" class="isiProfile">
            @if (session('google_id'))
                <table>
                    <tr>
                        <td>
                            <p style="font-size: 10pt; color:#151515; margin: 0 0 5px 0!important"><b>{{ (Session::has('name') ? Session::get('name') : '' ) }}</b></p>
                        </td>
                        <td align="right">
                            <p style="font-size: 8pt; color:#151515; margin: 0 0 5px 0!important">{{ (Session::has('role') ? Session::get('role') : 'User' ) }}</p>
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
        <li>@if (session('google_id'))
                <img id="profile" class="profile_btn" onclick="dropdownprofile()" style="width: 23px; cursor: pointer" src="{{ (Session::has('avatar') ? Session::get('avatar') : '' ) }}" alt="">
            @else
                <a href="javascript:void(0)" id="profile" class="profile_btn" onclick="dropdownprofile()" title="Profile"></a>
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
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="#0">Home</a></span></li>
            <li><span><a href="#0">About</a></span></li>
            <li><span><a href="#0">Vendor</a></span>
                <ul>
                    <li><a href="#0">Surabaya</a></li>
                    <li><a href="#0">Jakarta</a></li>
                    <li><a href="#0">Bandung</a></li>
                    <li><a href="#0">Bogor</a></li>
                    <li><a href="hotels-half-screen-map.html">Hotel Half Screen Map</a></li>
                    <li><a href="hotel-detail.html">Hotel Detail</a></li>
                </ul>
            </li>
            <li><span><a href="#0">Service</a></span></li>
            <li><span><a href="#0">Review</a></span></li>
            @if (session('google_id'))
            <li><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
            @endif
            {{-- <li><span><a href="adventure.html">Adventure</a></span></li>
            <li><span><a href="#0">Pages</a></span>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="media-gallery.html">Media gallery</a></li>
                    <li><a href="help.html">Help Section</a></li>
                    <li><a href="faq.html">Faq Section</a></li>
                    <li><a href="wishlist.html">Wishlist page</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="bootstrap-modal.html">Bootstrap Modal <strong>New!</strong></a></li>
                    <li><a href="modal-version-2.html">Another Modal <strong>New!</strong></a></li>
                    <li><a href="pricing-tables-2.html">Pricing Tables 1 <strong>New!</strong></a></li>
                    <li><a href="pricing-tables-3.html">Pricing Tables 2 <strong>New!</strong></a></li>
                </ul>
            </li>
            <li><span><a href="#0">Extra</a></span>
                <ul>
                    <li><a href="menu-options.html">Menu Position Options</a></li>
                    <li><a href="tour-detail-singlemonth-datepicker.html">Single month Datepicker</a></li>
                    <li><a href="404.html">404 Error page</a></li>
                    <li><a href="cart-1.html">Cart page 1</a></li>
                    <li><a href="cart-2.html">Cart page 2</a></li>
                    <li><a href="cart-3.html">Cart page 3</a></li>
                    <li><a href="pricing-tables.html">Responsive pricing tables</a></li>
                    <li><a href="coming_soon/index.html">Coming soon</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                    <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                    <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                    <li><a href="icon-pack-4.html">Icon pack 4</a></li>
                    <li><a href="hamburgers.html">Animated Hamburgers</a></li>
                </ul>
            </li> --}}
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