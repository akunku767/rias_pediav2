@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')

	<main onclick="tutup()">
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Rias Pedia</h3>
					<p>Bring your makeup artist in your hands </p>
					<form method="POST" action="{{ route('vendors.searchsalon') }}">
                        @csrf
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-10">
								<div class="form-group">
									<input class="form-control" name="searchMUA" type="text" placeholder="Makeup Artist...">
									<i class="icon_map_alt"></i>
								</div>
							</div>

							<div class="col-lg-2">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="container container-custom margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our Popular MUA</h2>
				<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
                @foreach ($lists as $list)
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="{{ url('detail-salon', $list->slug ) }}"><img src="{{ $list->image }}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            </figure>
                            <div class="wrapper">
                                {{-- <h4>{{ $list->slug }}</h4> --}}
                                <h3><a href="{{ url("/detail-salon", $list->slug ) }}">{{ $list->name }}</a></h3>
                                <p>{{ $list->address }}</p>
                                <strong>{{ $list->phone }}</strong>
                            </div>
                            <ul>
                                <li><div class="score"><span><em>{{ $list->review }} Reviews</em></span><strong>{{ $list->rating }}</strong></div></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                @endforeach
			</div>
			<!-- /carousel -->
			<p class="btn_home_align"><a href="{{ route('vendors.listsalon') }}" class="btn_1 rounded">View all MUA</a></p>
			<hr class="large">
		</div>
		<!-- /container -->

		<div class="container container-custom margin_30_95">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Other people are also searching</h2>
					<p>This is the search result.</p>
				</div>
				<div class="row">
                    @foreach ($popViews as $popView)
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <a href="{{ url('detail-salon', $popView->slug ) }}" class="grid_item">
                                <figure>
                                    <div class="score"><strong>{{ $popView->rating }}</strong></div>
                                    <img src="{{ $popView->image }}" class="img-fluid" alt="">
                                    <div class="info">
                                        <div class="cat_star"><i class="icon-eye-1"></i> {{ $popView->views }} View</div>
                                        <h3>{{ $popView->name }}</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- /grid_item -->
                    @endforeach
				</div>
				<!-- /row -->
                {{-- @foreach ($countTable as $countTable) --}}
			    	<a href="hotels-grid-isotope.html"><strong>View all ({{ $countTable->count() }}) <i class="arrow_carrot-right"></i></strong></a>
                {{-- @endforeach --}}
			</section>
			<!-- /section -->

			{{-- <section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Popular Restaurants</h2>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="restaurant-detail.html" class="grid_item">
							<figure>
								<div class="score"><strong>8.5</strong></div>
								<img src="img/restaurant_1.jpg" class="img-fluid" alt="">
								<div class="info">
									<h3>Da Alfredo</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="restaurant-detail.html" class="grid_item">
							<figure>
								<div class="score"><strong>7.9</strong></div>
								<img src="img/restaurant_2.jpg" class="img-fluid" alt="">
								<div class="info">
									<h3>Slow Food</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="restaurant-detail.html" class="grid_item">
							<figure>
								<div class="score"><strong>7.5</strong></div>
								<img src="img/restaurant_3.jpg" class="img-fluid" alt="">
								<div class="info">
									<h3>Bella Napoli</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="restaurant-detail.html" class="grid_item">
							<figure>
								<div class="score"><strong>9.0</strong></div>
								<img src="img/restaurant_4.jpg" class="img-fluid" alt="">
								<div class="info">
									<h3>Marcus</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /row -->
				<a href="restaurants-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section --> --}}

			<div class="banner mb-0">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
					<div>
						<h3>Make Up</h3>
						<h3>Your Perfect<br>Make Up Experience</h3>
						<p>Activities and events</p>
						<a href="adventure.html" class="btn_1">Read more</a>
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->

		</div>
		<!-- /container -->

		{{-- <div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h3>News and Events</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_1.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Mark Twain</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Pri oportere scribentur eu</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_2.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Jhon Doe</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Duo eius postea suscipit ad</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_3.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Luca Robinson</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Elitr mandamus cu has</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_4.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Paula Rodrigez</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Id est adhuc ignota delenit</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
			</div>
			<!-- /container -->
		</div> --}}
		<!-- /bg_color_1 -->

		<div class="call_section" style="background: url({{ asset('img/bg_call_section.jpg') }}) center center no-repeat fixed;">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a GREAT make up with us</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	<div id="toTop"></div><!-- Back to top button -->
@endsection
