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
                        {{-- <div class="d-flex align-items-center justify-content-between mb-3"><em>3 Day Trip</em><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div> --}}
                        <h1>Rias Pedia</h1>
                        <p>Graha Office, Jalan Ahmad Yani, Ketintang, Kota Surabaya, Jawa Timur</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                        <h3>Find the makeup spot you want</h3>
                        {{-- <ul>
                            <li><i class="pe-7s-clock"></i>Duration <span>3 days</span></li>
                            <li><i class="pe-7s-graph3"></i>Activity level <span>Medium</span></li>
                            <li><i class="pe-7s-shopbag"></i>Includes <span>Equipment, Drinks, Accommodations, Food</span></li>
                        </ul> --}}
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

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    {{-- <div><h6 class="m-0">From $200 per person</h6></div> --}}
                    {{-- <div><a class="aside-panel-bt btn_1" href="#0">See dates</a></div> --}}
                </div>
            </div>
        </nav>
        <div class="container margin_60_35 adventure_description">
            <div class="row mb-5">
                <div class="col-lg-4 fixed_title">
                    <h2>What you'll do</h2>
                </div>
                <div class="col-lg-8">
                    <div class="pl-lg-4">
                        <p class="lead">"you can do the makeup you want, find a comfortable place and fit what you want"</p>
                        <p>Makeup pedia is the place to find.</p>
                        <p>Suas porro eam et, essent dicunt mollis eu ius, sea assum consectetuer ad. Eu albucius vivendum gloriatur vim, ei mei prima choro admodum, eu iudico aliquando cotidieque vim.</p>
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
                                <figure><img src="img/icon_included_2.svg" alt=""></figure>
                                <h4>Payment</h4>
                                <p>Free admin</p>
                            </li>
                            <li>
                                <figure><img src="img/icon_included_3.svg" alt=""></figure>
                                <h4>Service</h4>
                                <p>Complete services offered</p>
                            </li>
                            {{-- <li>
                                <figure><img src="img/icon_included_4.svg" alt=""></figure>
                                <h4>Accommodation</h4>
                                <p>Bed and breakfast</p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <div class="row mb-5">
                <div class="col-lg-4 fixed_title">
                    {{-- <h2>Your itinerary</h2> --}}
                </div>
                <div class="col-lg-8">
                    <div class="pl-lg-4">
                        <div class="timeline">
                            {{-- <div class="mb-5">
                                <h3>Day one - Trek to the National Park</h3>
                                <figure><img src="img/itinerary_1.jpg" class="img-fluid" alt=""></figure>
                                <p>Legimus voluptaria voluptatibus in sit. An simul nostrud mea, et mei stet partem moderatius, in sea porro equidem principes. Eu mei suas nullam facilis, id iusto mundi scripserit eum. Id per diam magna semper, an qui quidam principes.</p>
                                <div class="content_more">
                                    <p>Ad nam commune convenire, eu justo porro posidonium nec, mel natum patrioque at. Harum omittam persequeris cu vim, at justo nemore mei. Ut ridens malorum has. Agam everti alterum an cum, utinam perpetua maluisset eu vis. Id mutat omnes eos, porro euripidis ut sed.</p>
                                </div>
                                <!-- /content_more -->
                                <a href="#0" class="show_hide" data-content="toggle-text"><strong>Read More</strong></a>
                            </div>
                            <div class="mb-5">
                                <h3>Day two - Dinner and games with great views</h3>
                                <figure><img src="img/itinerary_2.jpg" class="img-fluid" alt=""></figure>
                                <p>Legimus voluptaria voluptatibus in sit. An simul nostrud mea, et mei stet partem moderatius, in sea porro equidem principes. Eu mei suas nullam facilis, id iusto mundi scripserit eum. Id per diam magna semper, an qui quidam principes.</p>
                                <div class="content_more">
                                    <p>Ad nam commune convenire, eu justo porro posidonium nec, mel natum patrioque at. Harum omittam persequeris cu vim, at justo nemore mei. Ut ridens malorum has. Agam everti alterum an cum, utinam perpetua maluisset eu vis. Id mutat omnes eos, porro euripidis ut sed.</p>
                                </div>
                                <!-- /content_more -->
                                <a href="#0" class="show_hide" data-content="toggle-text"><strong>Read More</strong></a>
                            </div>
                            <div>
                                <h3>Day three - Hiking down the mountain streams</h3>
                                <figure><img src="img/itinerary_3.jpg" class="img-fluid" alt=""></figure>
                                <p>Legimus voluptaria voluptatibus in sit. An simul nostrud mea, et mei stet partem moderatius, in sea porro equidem principes. Eu mei suas nullam facilis, id iusto mundi scripserit eum. Id per diam magna semper, an qui quidam principes.</p>
                                <div class="content_more">
                                    <p>Ad nam commune convenire, eu justo porro posidonium nec, mel natum patrioque at. Harum omittam persequeris cu vim, at justo nemore mei. Ut ridens malorum has. Agam everti alterum an cum, utinam perpetua maluisset eu vis. Id mutat omnes eos, porro euripidis ut sed.</p>
                                </div>
                                <!-- /content_more -->
                                <a href="#0" class="show_hide" data-content="toggle-text"><strong>Read More</strong></a>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
            </div>
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
                                        <strong>8.5</strong>
                                        <em>Superb</em>
                                        <small>Based on 4 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
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

                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Jimmy – April 15, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                        Pelayanan bagus. Parkiran luas.. Sudah ada studio foto sendiri, jadi bisa private tanpa banyak orang lain, apalagi musim covid.. Harga yang di tawarkan flexible sesuai kebutuhan customer..
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Nidya – September 01, 2021:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                        Owner ramah dan memberikan konsultasi dg baik mengenai event
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Elis – March 31, 2022:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                        Service memuaskan hasil make up top banget gak rugi event apapun disini
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
