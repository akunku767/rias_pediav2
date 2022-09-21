@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')

	<main onclick="tutup()">
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Rias Pedia</h3>
					<p>Bring your makeup artist in your hands </p>
					<form method="GET" action="{{ route('vendors.searchsalon') }}">
                        {{-- @csrf --}}
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
                                <a href="{{ route('vendors.detailsalon', $list->slug ) }}"><img src="{{ $list->image }}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            </figure>
                            <div class="wrapper">
                                {{-- <h4>{{ $list->slug }}</h4> --}}
                                <h3><a href="{{ route('vendors.detailsalon', $list->slug ) }}">{{ $list->name }}</a></h3>
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
                        <div class="col-xl-3">
                            <a href="{{ route('vendors.detailsalon', $popView->slug ) }}" class="grid_item">
                                <figure style="background-color:rgba(0, 255, 255, 0)">
                                    <div class="score"><strong>{{ $popView->rating }}</strong></div>
									<table style="z-index: 99; ">
										<tbody>
											<td align="center" style="width: 348px">
                                                <div style="z-index: 1;filter: blur(5px);position: absolute;">
                                                    <img src="{{ $popView->image }}" class="img" alt="" style="width: 180%;">
                                                </div>

                                                <div style="z-index: 2;position: relative;">
                                                    <img src="{{ $popView->image }}" class="img" alt="" style="align-items: center; width: 102%; object-fit: scale-down;">
                                                </div>
                                            </td>
										</tbody>
									</table>
                                    <div class="info">
                                        @if ($popView->views >= 2)
                                            <div style="font-size: 8pt" ><i class="icon-eye-1"></i> {{ $popView->views }} Views</div>
                                        @else
                                            <div style="font-size: 8pt" ><i class="icon-eye-1"></i> {{ $popView->views }} View</div>
                                        @endif

                                        <h3>{{ $popView->name }}</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- /grid_item -->
                    @endforeach
				</div>
				<!-- /row -->
                <a href="{{ route('vendors.popularsalon') }}"><strong> View All ({{ $countTable->count() }}) <i class="arrow_carrot-right"></strong></i></a>
			</section>

			{{-- banner & wrapper --}}
			<div class="banner mb-0">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
					<div>
						<h3>Make Up</h3>
						<h3>Your Perfect<br>Make Up Experience</h3>
						<p>About Us</p>
						<a href="{{ route("aboutus") }}" class="btn_1">Read more</a>
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->
		</div>
		<!-- /container -->
		
		<div class="call_section" style="background: url({{ asset('img/bg_call_section.jpg') }}) center center no-repeat fixed;">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a GREAT make up with us</h3>
							<p>Creativity is your best makeup skill, don't be afraid to experiment. Go beyond the limits and show your skills.</p>
							<a href="#0" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	<div id="toTop">
	</div><!-- Back to top button -->
@endsection
