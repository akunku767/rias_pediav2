@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')

	<main>

		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp" style="margin-bottom: 100px"><span></span>List Make Up Artist</h1>

                    <form method="GET" action="{{ route('vendors.searchsalon') }}">
                        {{-- @csrf --}}
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-10">
								<div class="form-group">
                                    @if ($set == "0")
									    <input class="form-control" name="searchMUA" type="text" value="{{ $keyword->searchMUA }}" placeholder="Makeup Artist...">
                                    @else
									    <input class="form-control" name="searchMUA" type="text" value="" placeholder="Makeup Artist...">
                                    @endif
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
		<!--/hero_in-->

		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
                            <input type="radio" id="all" name="listing_filter" value="all">
							<label for="all">
                                @if ($set == "1")
                                    <a style="color: #d9a451" href="{{ route('vendors.listsalon') }}">All</a>
                                @else
                                    <a style="color: #000000" href="{{ route('vendors.listsalon') }}">All</a>
                                @endif
                            </label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">
                                @if ($set == "2")
                                    <a style="color: #d9a451" href="{{ route('vendors.popularsalon') }}">Popular</a>
                                @else
                                    <a style="color: #000000" href="{{ route('vendors.popularsalon') }}">Popular</a>
                                @endif

                            </label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">
                                @if ($set == "3")
                                    <a style="color: #d9a451" href="{{ route('vendors.latestsalon') }}">Latest</a>
                                @else
                                    <a style="color: #000000" href="{{ route('vendors.latestsalon') }}">Latest</a>
                                @endif
                            </label>
						</div>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		{{-- <div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map --> --}}

		<div class="container margin_60_35">
            @if (($lists->count()) != 0)
                <div style="margin: 10px 15px;">
                    <h5>Successful get {{ $lists->count() }} relevant results</h5>
                </div>
                @foreach ($lists as $list)
                    <div class="box_list">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    {{-- <small>Historic</small> --}}
                                    <a href="{{ url('detail-salon', $list->slug ) }}"><img src="{{ $list->image }}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="#0" class="wish_bt"></a>
                                    <h3><a href="{{ url('detail-salon', $list->slug ) }}">{{ $list->name }}</a></h3>
                                    <p>{{ $list->address }}</p>
                                    <span class="price"><strong>{{ $list->phone }}</strong></span>
                                </div>
                                <ul>
                                    <li><div class="score"><span><em>{{ $list->review }} Reviews</em></span><strong>{{ $list->rating }}</strong></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /box_list -->
                @endforeach

                <div style="margin: 10px 15px;">
                    <center>
                        <h5>
                            You have reached the end of the list.
                        </h5>
                    </center>
                </div>

            @else
                <div style="margin: 10px 15px;">
                    <center>
                        <h5>Sorry, there is no result for <b>"{{ $keyword->searchMUA }}"</b> or please check again your keyword</h5>
                    </center>
                </div>
            @endif

		</div>
		<!-- /container -->
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Cum appareat maiestatis interpretaris et, et sit.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments and Refunds</h4>
							<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Quality Standards</h4>
							<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
						</a>
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
