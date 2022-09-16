<footer>
    <div class="container margin_60_35">
        <div class="row pt-4">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="{{ asset('img/logo_sticky.png') }}" width="150" height="36" alt=""></p>
                <p>RiasPedia is one of the beauty e-commerce in Southeast Asia that provides the best 100% original and recommended make up artist and tools vendors. Complete your beauty needs only at RiasPedia, a safe, fun, and reliable platform for searching via the website so you can enjoy a wide selection of interesting vendors around you.</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="{{ route("aboutus") }}">About</a></li>
                    <li><a href="{{ url('/about-us/#location') }}">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                    <li><a href="mailto:info@Riaspedia.com"><i class="ti-email"></i> info@Riaspedia.com</a></li>
                </ul>
                <div id="newsletter">
                <h6>Newsletter</h6>
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                    <div class="form-group">
                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                        <input type="submit" value="Submit" id="submit-newsletter">
                    </div>
                </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 p-r-5">
            </div>
        </div>
        
        {{-- <!--/row--> --}}
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select" id="lang-selector">
                            <select>
                                <option value="English" selected>English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select" id="currency-selector">
                            <select>
                                <option value="US Dollars" selected>US Dollars</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="{{ asset('img/cards_all.svg') }}" alt=""></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                    <li><span>Copyright © RIAS PEDIA 2022</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
{{-- <!--/footer--> --}}

<!-- COMMON SCRIPTS -->
<script src="{{ asset('js/common_scripts.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('assets/validate.js') }}"></script>
