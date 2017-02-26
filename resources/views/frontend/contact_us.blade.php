@extends('layouts.frontend.layout')

@section('title', 'Contact Us')

@section('content')
<div class="sub-banner">
</div>
<div class="contact">
	<div class="container">
		<h3>@lang('general.menu.contact_us')</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>@lang('general.title.address_us')</h4>
				<h5>345 Setwant natrer,</h5>
				<h5>Washington. United States.</h5>
			</div>
			<div class="phone">
				<h4>@lang('general.title.phone_us')</h4>
				<h5>+1(401) 1234 567.</h5>
				<h5>+1(804) 4261 150.</h5>
			</div>
			<div class="email">
				<h4>@lang('general.title.email_us')</h4>
				<h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
				<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="#" method="post">
				<input class="col-sm-3 form-control" type="text" id="full_name" name="full_name" placeholder="@lang('general.form.full_name')" required>
				<input class="col-sm-3 form-control" type="text" id="email" name="email" placeholder="@lang('general.form.email')" required>
				<input class="col-sm-3 form-control" type="text" id="subject" name="subject" placeholder="@lang('general.form.subject')" required>
				<input class="col-sm-3 form-control" type="text" id="phone_number" name="phone_number" placeholder="@lang('general.form.phone')" required>
				<textarea class="form-control" id="content" name="content" placeholder="@lang('general.form.message')" required=" "></textarea>
				<input type="submit" value="@lang('general.button.send')">
			</form>
		</div>
	</div>
</div>
<div class="map-w3ls">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
</div>
@endsection