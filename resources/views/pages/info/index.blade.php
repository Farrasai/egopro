@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 content-box left contact-info">
					<div class="contact_form_container">
						<div class="col-xs-12 text-center">
							<img class="img img-responsive contact-logo" alt="logo" src="http://egoprojogja.com/storage/app/public/img/logo20200113035327.png">
						</div>
						<div class="col-xs-12 contact-detail">
							<h2>EGOPRO | Sewa Kamera Jogja / Jogja sewa kamera / Rental kamera sewa lensa</h2>
							<p>Jl Candra Kirana no 14 Sagan, Terban, Yogyakarta, Indonesia</p>
							<a href="tel:085702222111">085-70-2222-111</a><br>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 content-box right map-container">
					<div class="contact_form_container">
					<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=egopro&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embed custom google map</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('layouts.footer')
@endsection