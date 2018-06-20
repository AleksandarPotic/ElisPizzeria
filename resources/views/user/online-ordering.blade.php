@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Online Ordering")

@section('body-part')
	
	<div class="container-fluid " id="online-image" style="background-image: url('{{ asset('user/assets/images/home.jpg') }}');">  
		<div class="row">
			<div class="container centered" id="online-section">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center">Order Online Now</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<span class="glf-button" data-glf-cuid="c4797bde-3d86-494c-964f-65ae2d7f062b">Order Now</span>

						<script src="https://www.fbgcdn.com/widget/js/ewm2.js" defer async></script>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	

@endsection