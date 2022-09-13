@extends('layouts.app')
@section('title', 'Rias Pedia')
@section('content')
<main>
		<section class="hero_in tours_detail">
			<!-- <div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Tour detail p</h1>
				</div> -->
				<span class="magnific-gallery">
					{{-- <a href="{{ asset('img/gallery/tour_list_1.jpg') }}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
					<a href="{{ asset('img/gallery/tour_list_2.jpg') }}" title="Photo title" data-effect="mfp-zoom-in"></a>
					<a href="{{ asset('img/gallery/tour_list_3.jpg') }}" title="Photo title" data-effect="mfp-zoom-in"></a> --}}
					<a href="{{$scrape->image}}" class="btn_photos" title="Thumbnail" data-effect="mfp-zoom-in">
                        <img src="{{$scrape->image}}" style="height: 150px" alt="">
                    </a>

				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Description</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="#sidebar">Booking</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
                            {{-- <h2>{{$scrape->id}}</h2> --}}
                            <h2>{{$scrape->name}}</h2>
                            <h4>{{$scrape->views}} Views</h4>
                            <h4>Last updated on {{$scrape->updated}}</h4>
                            {{-- <h2>{{$scrape->rating}}</h2> --}}
                            {{-- <h2>{{$scrape->review}}</h2> --}}
                            {{-- <h2>{{$scrape->address}}</h2> --}}
                            {{-- <h2>{{$scrape->open}}</h2> --}}
                            {{-- <h2>{{$scrape->web}}</h2> --}}
                            {{-- <h2>{{$scrape->phone}}</h2> --}}


							<h2>About Us</h2>
							{{-- <p>Isna Dewi Makeup <strong></strong></p> --}}
							<p>Working Hours <strong>{{$scrape->open}}</strong>
								Coming soon Isna Dewi Makeup, and order according to what you want.</p>
							<h3>Instagram photos feed</h3>
							<div id="instagram.com" class="clearfix">
							<a href="{{$scrape->web}}">{{$scrape->web}}</a>
							</div>
							{{-- <hr> --}}

							<!-- <h3>Program <small>(60 minutes)</small></h3>
							<p>
								Iudico omnesque vis at, ius an laboramus adversarium. An eirmod doctus admodum est, vero numquam et mel, an duo modo error. No affert timeam mea, legimus ceteros his in. Aperiri honestatis sit at. Eos aeque fuisset ei, case denique eam ne. Augue invidunt has ad, ullum debitis mea ei, ne aliquip dignissim nec.
							</p>
							<ul class="cbp_tmtimeline">
								<li>
									<time class="cbp_tmtime" datetime="09:30"><span>30 min.</span><span>09:30</span>
									</time>
									<div class="cbp_tmicon">
										1
									</div>
									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
										</div>
										<h4>Interior of the cathedral</h4>
										<p>
											Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
										</p>
									</div>
								</li>
								<li>
									<time class="cbp_tmtime" datetime="11:30"><span>2 hours</span><span>11:30</span>
									</time>
									<div class="cbp_tmicon">
										2
									</div>
									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_2.jpg" alt="" class="rounded-circle thumb_visit">
										</div>
										<h4>Statue of Saint Reparata</h4>
										<p>
											Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
										</p>
									</div>
								</li>
								<li>
									<time class="cbp_tmtime" datetime="13:30"><span>1 hour</span><span>13:30</span>
									</time>
									<div class="cbp_tmicon">
										3
									</div>
									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_3.jpg" alt="" class="rounded-circle thumb_visit">
										</div>
										<h4>Huge clock decorated</h4>
										<p>
											Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
										</p>
									</div>
								</li>
								<li>
									<time class="cbp_tmtime" datetime="14:30"><span>2 hours</span><span>14:30</span>
									</time>
									<div class="cbp_tmicon">
										4
									</div>
									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_4.jpg" alt="" class="rounded-circle thumb_visit">
										</div>
										<h4>Vasari's fresco</h4>
										<p>
											Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
										</p>
									</div>
								</li>
							</ul>
							<hr>
							<p>Mea appareat omittantur eloquentiam ad, nam ei quas <strong>oportere democritum</strong>. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Dolorem mediocritatem</li>
										<li>Mea appareat</li>
										<li>Prima causae</li>
										<li>Singulis indoctum</li>
									</ul>
								</div> -->
								<!-- <div class="col-lg-6">
									<ul class="bullets">
										<li>Timeam inimicus</li>
										<li>Oportere democritum</li>
										<li>Cetero inermis</li>
										<li>Pertinacia eum</li>
									</ul>
								</div>
							</div> -->
							<!-- /row -->

							<hr>
							<h3>Location</h3>
							<div id="map" class="map map_single add_bottom_30">
							{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.950768970166!2d112.69136771392488!3d-7.359415694689349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e356f967045b%3A0x8735ab47f46ce057!2sAzzum%20Makeup%20Artist!5e0!3m2!1sen!2sid!4v1662605318989!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
							{{$scrape->address}}
							<iframe src="{{$scrape->iframeMap}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<!-- End Map -->
						</section>
						<!-- /section -->

						<section id="reviews">
							<h2>Reviews</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>{{$scrape->rating}}</strong>
											<small>Based on {{$scrape->review}}</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: {{$scrape->star5}}%" aria-valuenow="{{$scrape->star5}}" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: {{$scrape->star4}}%" aria-valuenow="{{$scrape->star4}}" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: {{$scrape->star3}}%" aria-valuenow="{{$scrape->star3}}" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: {{$scrape->star2}}%" aria-valuenow="{{$scrape->star2}}" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: {{$scrape->star1}}%" aria-valuenow="{{$scrape->star1}}" aria-valuemin="0" aria-valuemax="100"></div>
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

							{{-- <div class="reviews-container">

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="{{ asset('img/avatar1.jpg') }}" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Admin – April 03, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- /review-box -->
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="{{ asset('img/avatar2.jpg') }}" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Ahsan – April 01, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- /review-box -->
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="{{ asset('img/avatar3.jpg') }}" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Sara – March 31, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- /review-box -->
							</div> --}}
							<!-- /review-container -->
						</section>
						<!-- /section -->
						<hr>

							<div class="add-review">
								<h5>Leave a Suggestion</h5>
								<form>
									<div class="row">
										<div class="form-group col-md-6">
											<label>Name and Lastname *</label>
											<input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label>Email *</label>
											<input type="email" name="email_review" id="email_review" class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label>Rating </label>
											<div class="custom-select-form">
											<select name="rating_review" id="rating_review" class="wide">
												<option value="1">1 (lowest)</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5" selected>5 (medium)</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10 (highest)</option>
											</select>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label>Your Suggestion</label>
											<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
										</div>
										<div class="form-group col-md-12 add_top_20">
											<input type="submit" value="Submit" class="btn_1" id="submit-review">
										</div>
									</div>
								</form>
							</div>
					</div>
					<!-- /col -->

					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
								<h3> Phone Number </h3>
								<h3>{{$scrape->phone}}</h3>

							<!-- <div class="form-group input-dates">
								<input class="form-control" type="text" name="dates" placeholder="When..">
								<i class="icon_calendar"></i>
							</div> -->
							<!-- <div class="panel-dropdown">
								<a href="#">Guests <span class="qtyTotal">1</span></a>
								<div class="panel-dropdown-content right">
									<div class="qtyButtons">
										<label>Adults</label>
										<input type="text" name="qtyInput" value="1">
									</div>
									<div class="qtyButtons">
										<label>Childrens</label>
										<input type="text" name="qtyInput" value="0">
									</div>
								</div>
							</div> -->
							<a href="tel://{{ $scrape->phone }}" class="btn_1 full-width purchase">Need Help? Contact Us</a>
							<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
							<!-- <div class="text-center"><small>No money charged in this step</small></div> -->
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<div id="toTop"></div><!-- Back to top button -->

@endsection
