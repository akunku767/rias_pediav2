{{-- header --}}
<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="{{ route('home') }}">
            <img src="img/logo.png" width="150" height="36" alt="" class="logo_normal">
            <img src="img/logo_sticky.png" width="150" height="36" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        <li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        <li id="isiProfile" class="isiProfile">
            <a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a>
        </li>
        <li><a href="javascript:void(0)" id="profile" class="profile_btn" title="Profile"></a></li>           
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
            <li><span><a href="adventure.html">Adventure</a></span></li>
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
            </li>
        </ul>
    </nav>
</header>

<script>
    var profile = document.getElementById("profile");
    var isiProfile = document.getElementById("isiProfile");
    var btnIsi = document.getElementById("btnIsi");

    profile.addEventListener("mouseover", buka, false);
    isiProfile.addEventListener("mouseover", buka, false);
    isiProfile.addEventListener("mouseout", tutup, false);
    profile.addEventListener("mouseout", tutup, false);

    function buka()
    {document.getElementById('isiProfile').style.display = 'block'}
    function tutup()
    {document.getElementById('isiProfile').style.display = 'none'}
 
</script>