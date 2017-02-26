<!-- newsletter -->
<div class="newsletter">
	<div class="container">
		<div class="col-md-6 w3agile_newsletter_left">
			<h3>@lang('general.title.newsletter')</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
		</div>
		<div class="col-md-6 w3agile_newsletter_right">
			<form action="#" method="post">
				<input class="form-control" type="email" id="email" name="email" placeholder="@lang('general.form.email')" required>
				<input type="submit" value="@lang('general.button.subscribe')" />
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><img src="{{ asset('assets/frontend/images/logo2.png') }}" alt=" " /><h3>FASHION<span>CLUB</span></h3></a>
		<ul>
			<li>1234k Avenue, 4th block,</li>
			<li>New York City.</li>
			<li><a href="mailto:info@example.com">info@example.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>@lang('general.title.information')</h4> 
			<ul>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="icons.html">Web Icons</a></li>
				<li><a href="typography.html">Typography</a></li>
				<li><a href="faq.html">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>@lang('general.title.shop')</h4> 
			<ul>
				<li><a href="jewellery.html">Jewellery</a></li>
				<li><a href="cosmetics.html">Cosmetics</a></li>
				<li><a href="Shoes.html">Shoes</a></li>
				<li><a href="deos.html">Deos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>@lang('general.title.my_account')</h4> 
			<ul>
				
				<li><a href="login.html">@lang('general.title.login')</a></li>
				<li><a href="register.html">@lang('general.title.register')</a></li>
				<li><a href="recommended.html">@lang('general.title.recommended')</a></li>
				<li><a href="payment.html">@lang('general.title.payment')</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2017 Fashion Club . All rights reserved</p>
	</div>
</div>
<!-- cart-js -->
{!! Html::script('assets/frontend/js/minicart.js') !!}
<script>
    w3ls1.render();

    w3ls1.cart.on('w3sb1_checkout', function (evt) {
    	var items, len, i;

    	if (this.subtotal() > 0) {
    		items = this.items();

    		for (i = 0, len = items.length; i < len; i++) {
    			items[i].set('shipping', 0);
    			items[i].set('shipping2', 0);
    		}
    	}
    });
</script>  
<!-- //cart-js -->  