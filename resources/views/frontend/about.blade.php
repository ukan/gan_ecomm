@extends('layouts.frontend.layout')

@section('title', 'About')

@section('content')
<div class="sub-banner">
</div>
<div class="about">
	<div class="container"> 
		<h3>@lang('general.title.about_us')</h3>
		<div class="about-info">
			<div class="col-md-8 about-grids">
				<h4>@lang('general.title.our_latest_collection')</h4>
				<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia. </p>		
				<div class="about-w3ls-row">
					<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo3").flexisel({
									visibleItems:2,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems:2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems:2
										}
									}
								});
								
							});
					</script>
					{!! Html::script('assets/frontend/js/jquery.flexisel.js') !!} 
					<ul id="flexiselDemo3">
						<li>
							<img src="{{ asset('assets/frontend/images/a1.jpg') }}" class="img-responsive" alt="" />
						</li>
						<li> 
							<img src="{{ asset('assets/frontend/images/a2.jpg') }}" class="img-responsive" alt="" />
						</li>
						<li> 
							<img src="{{ asset('assets/frontend/images/a3.jpg') }}" class="img-responsive" alt="" />
						</li>
						<li> 
							<img src="{{ asset('assets/frontend/images/a4.jpg') }}" class="img-responsive" alt="" />
						</li>
					</ul> 
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 about-grids">
					<h4>Our Advantages</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>01</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>02</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>03</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>04</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3> Flat <span>50%</span> Off</h3>
			<h4>On women Accessories</h4>
			<a href="Jewellery.html">Shop Now</a>
		</div>
	</div>
<!-- //about-bottom -->
<!--team-->
<div class="team" id="team">
	<div class="container">
		<h3>@lang('general.title.our_team')</h3>
		<div class="team-grids">
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets/frontend/images/t1.jpg') }}" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>John Filmr Doe</h4>
				<h5>Managing Director</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets/frontend/images/t3.jpg') }}" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Jaye Smith</h4>
				<h5>Lead Developer</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets/frontend/images/t2.jpg') }}" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Mike Arney</h4>
				<h5>Fashion Designer</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets/frontend/images/t4.jpg') }}" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Michele Lampa</h4>
				<h5>fashion Designer</h5>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--team-->
@endsection