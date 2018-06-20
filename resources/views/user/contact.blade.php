@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Contact Us")

@section('body-part')
    

    <div class="container-fluid" id="contact-image" style="background-image: url('{{ asset('user/assets/images/specials.jpg') }}');">
		<div class="row">
			 
		</div>
	</div>

	<div class="container" id="contact-content">
		<div class="row">
			@if(session('alert_message'))
				<div class="col-lg-12">
					<div class="alert alert-success" role="alert" style="background-color: lightgray; color: black; border: 1px solid #900816;">
						{{ session('alert_message') }}
					</div>
				</div>
			@endif
			<div class="col-10 offset-1 col-sm-12 offset-sm-0 col-md-6 col-lg-6 embed-responsive embed-responsive-16by9 contact-video">
			 	<iframe src="https://www.youtube.com/embed/vEf1_a_7XS4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			 </div>
			 <div class="col-10 offset-1 col-sm-12 offset-sm-0 col-md-6 col-lg-6 left-contact text-center">
			 	<p>Free delivery on food orders over $10 starting at 4:00 pm within our area.
				A delivery fee may apply in surrounding areas and rough weather conditions.</p>
			 	<p>We accept Cash, Debit or Credit at the Door</p>
			 	<p>Don’t forget – We deliver other items with your pizza on food orders over $10
				(Pop, Butter, Bread, Chips, Chocolate Bars, Juice, etc)</p>
			 </div>
			 
		</div>

		<div class="row" id="contact-form-section">
			<div class="col-10 offset-1 col-sm-12 offset-sm-0 col-md-6 col-lg-6 left-form">
				<p><span class="red">ADDRESS:</span> <a target="_blank" href="https://www.google.com/maps/place/47+Cranberry+Crescent,+Dartmouth,+NS+B2W+5G6,+%D0%9A%D0%B0%D0%BD%D0%B0%D0%B4%D0%B0/@44.6847189,-63.5045226,17z/data=!3m1!4b1!4m5!3m4!1s0x4b5a2466d1d2d37b:0xb5cf7e249dc91e1d!8m2!3d44.6847189!4d-63.5023339">47 Cranberry Crescent
				Dartmouth NS</a></p>
				<p><span class="red">PHONE:</span> <a href="tel:9024944444">(902) 494-4444</a></p>
				<h3>OPENING HOURS</h3>
				<p><span class="red">Mon – Thurs:</span> 12pm – 11pm</p>
				<p><span class="red">Fri & Sat:</span> 12pm – 12am</p>
				<p><span class="red">Sunday:</span> 3pm – 10pm</p>
			</div>
			<div class="col-10 offset-1 col-sm-12 offset-sm-0 col-md-6 col-lg-6 right-form">
				<form action="{{ route('contact.send') }}" method="POST">
					@csrf
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
						<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="6s" placeholder="Your Message" required></textarea>
						<br>
						<div class="g-recaptcha" data-sitekey="6Lf8yV8UAAAAAB_IxjDSNfyqrFLii8gCz6GhEI0x"></div>
						<button type="submit" class="btn btn-default">SEND</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container-fluid maps">
		<div class="row">
			<div class="col-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16047.981807060429!2d-63.51536447364681!3d44.68063361546064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5a2466d1d2d37b%3A0xb5cf7e249dc91e1d!2zNDcgQ3JhbmJlcnJ5IENyZXNjZW50LCBEYXJ0bW91dGgsIE5TIEIyVyA1RzYsINCa0LDQvdCw0LTQsA!5e0!3m2!1ssr!2srs!4v1529277976646" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>	

@endsection