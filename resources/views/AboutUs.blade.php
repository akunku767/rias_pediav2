@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<main>
    <section class="hero_in adventure_detail">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="main_info">
                <div class="row">
                    <div class="col-lg-4">
                        <h1>Rias Pedia</h1>
                        <p>Graha Office, Jalan Ahmad Yani, Ketintang, Kota Surabaya, Jawa Timur</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <h3>Find the makeup spot you want</h3>
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
                </div>
                <!-- /row -->
            </div>
                <!-- /main_info -->
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1" style="padding-top: 10px">
        <div class="container margin_60_35 adventure_description">
            <div class="row mb-5">
                <div class="col-lg-4 fixed_title">
                    <h2>What you'll do</h2>
                </div>
                <div class="col-lg-8">
                    <div class="pl-lg-4">
                        <p class="lead">"You can do the makeup you want, find a comfortable place and fit what you want"</p> 
                        <p>RiasPedia is one of the beauty e-commerce in Southeast Asia that provides the best 100% original and recommended make up artist and tools vendors. Complete your beauty needs only at RiasPedia, a safe, fun, and reliable platform for searching via the website so you can enjoy a wide selection of interesting vendors around you.</p>
                        <h6>Pictures from our users</h6>
                        <div class="pictures magnific-gallery clearfix">
                            @foreach($photos as $photo)
                                <figure><a href="{{ $photo->image }}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{ $photo->image }}" alt=""></a></figure>

                            @endforeach
                        </div>
                        <!-- /pictures -->
                    </div>
                </div>
            </div>
            <!-- /row -->

            <div class="row mb-5">
                <div class="col-lg-4 fixed_title">
                    <h2>What do you get</h2>
                    <span id="location"></span>
                </div>
                <div class="col-lg-8">
                    <div class="pl-lg-4">
                        <ul class="list_feat clearfix">
                            <li>
                                <figure><i style="font-size:30pt" class="icon-home"></i></figure>
                                <h4>Vendor</h4>
                                <p>Find the most complete vendor</p>
                            </li>
                            <li>
                                <figure><i style="font-size:30pt" class="icon-cart shopping"></i></figure>
                                <h4>Payment</h4>
                                <p>Free charges</p>
                            </li>
                            <li>
                                <figure><i style="font-size:30pt" class="icon-bell concierge"></i></figure>
                                <h4>Service</h4>
                                <p>Complete services offered</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->            

            <!-- /row -->
            <h4>Location</h4>
            <div id="map" class="map map_single mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2963883025977!2d112.72988141472293!3d-7.320566394716773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e48893dffefd%3A0x774941139bb587ac!2sGraha%20Office!5e0!3m2!1sid!2sid!4v1663212760118!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <!-- End Map -->

            <div class="row">
                <div class="col-lg-4 fixed_title">
                    <h2>Reviews</h2>
                </div>
                <div class="col-lg-8">
                    <div class="pl-lg-4">
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>4.4</strong>
                                        <small>Based on 5 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <hr>

                        <div class="reviews-container">
                            <h3>5 Recent Reviews</h3>
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="{{ asset('img/avatar3.jpg')}}" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Elis – September 31, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                        Service memuaskan hasil make up top banget gak rugi event apapun disini
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src={{ asset('img/avatar2.jpg')}} alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Nidya – September 01, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Alhamdulillah, rekomend banget buat pemula dari 0 yg cari tempat kursus🌝.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src={{ asset('img/avatar1.jpg')}} alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Jimmy – Juni 15, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                        Pelayanan bagus. Ownernya ramah, Harga yang di tawarkan flexible sesuai kebutuhan customer..
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src={{ asset('img/avatar4.jpg')}} alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                                    </div>
                                    <div class="rev-info">
                                        Nana – Juni 06, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                           Terimakasih, mantap poll.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src={{ asset('img/avatar5.jpg')}} alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                                    </div>
                                    <div class="rev-info">
                                        Jennie – April 16, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                           Webnya mantap poll, suka, lopee.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </div>
                </div>
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->

@endsection
