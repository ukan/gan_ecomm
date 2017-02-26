<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
	<ul class="nav navbar-nav ">
		<li class=" active"><a href="{{ route('home') }}" class="hyper "><span>@lang('general.menu.home')</span></a></li>	
		<li class="dropdown ">
			<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
				<ul class="dropdown-menu multi">
					<div class="row">
						<div class="col-sm-4">
							<ul class="multi-column-dropdown">

								<li><a href="women.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Women's Clothing</a></li>
								<li><a href="men.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's Clothing</a></li>
								<li><a href="kids.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Kid's Wear</a></li>
								<li><a href="party.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Party Wear</a></li>
						
							</ul>
						
						</div>
						<div class="col-sm-4">
							<ul class="multi-column-dropdown">
								<li><a href="casuals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Casuals</a></li>
								<li><a href="night.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Night Wear</a></li>
								<li><a href="formals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Formals</a></li>
								<li><a href="inner.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Inner Wear</a></li>
						
							</ul>						
						</div>
						<div class="col-sm-4 w3l">
							<a href="women.html"><img src="{{ asset('assets/frontend/images/menu1.jpg') }}" class="img-responsive" alt=""></a>
						</div>
						<div class="clearfix"></div>
					</div>	
				</ul>
		</li>
		<li class="dropdown">
				<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
				<ul class="dropdown-menu multi multi1">
					<div class="row">
						<div class="col-sm-4">
							<ul class="multi-column-dropdown">
								<li><a href="jewellery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>
								<li><a href="watches.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>
								<li><a href="cosmetics.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
								<li><a href="deos.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>
						
							</ul>
							
						</div>
						<div class="col-sm-4">
							
							<ul class="multi-column-dropdown">
								<li><a href="haircare.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
								<li><a href="shoes.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a></li>
								<li><a href="handbags.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Handbags</a></li>
								<li><a href="skincare.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
						
							</ul>
							
						</div>
						<div class="col-sm-4 w3l">
							<a href="jewellery.html"><img src="{{ asset('assets/frontend/images/menu2.jpg') }}" class="img-responsive" alt=""></a>
						</div>
						<div class="clearfix"></div>
					</div>	
				</ul>
		</li>
		<li><a href="{!! route('about') !!}" class="hyper"><span>@lang('general.menu.about')</span></a></li>
		<li><a href="{!! route('contact-us') !!}" class="hyper"><span>@lang('general.menu.contact_us')</span></a></li>
	</ul>
</div>