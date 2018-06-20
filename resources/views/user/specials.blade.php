@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Specials")

@section('body-part')

	<div class="container-fluid" id="category-image" style="background-image: url('{{ asset('user/assets/images/specials.jpg') }}');">
		<div class="row">
			 
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 item-text left">
				<h3>SPECIALS</h3>
				<h6>*BBQ Chicken, Greek, Bubba, Donair, Canadian Classic, Meat Lovers, Pepperoni Lovers, 4 Cheese & Works Pizzas are not included in Specials</h6>
			</div>
		</div>

		<div class="row items" id="special-container">
			@foreach($specials as $special)
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 item" style="border: 1px solid #900816;">
					@if($special->name != '2 Medium Donairs OR 2 Small Reg. Poutine + 2 cans of Pop')
						<h2 class="item-name" style="border:none !important;">{{ $special->name }}<span></span></h2> <!--// Item Name -->
					@else
						<h2 class="item-name" style="border:none;">2 Medium Donairs <span style="color:#900816;">OR</span> 2 Small Reg. Poutine + 2 cans of Pop</h2>
					@endif
					@if($special->price and $special->price2)
						<h3><b>{{ $special->price }} or <span style="color: #FAB940">2</span> for {{ $special->price2 }}*</b></h3>
					@endif
					<p>{!!  htmlspecialchars_decode($special->description)  !!} </p><!--// This <p> is only for item description -->
					<div class="row">
						@if($special->price and !$special->price2)
						<div class="col-6 col-sm-6 col-md-3 col-lg-3">
							@if($special->price != 0)
							<p class="item-size">Price</p> <!--// Item Size -->
								<h2 class="item-price">${{ number_format($special->price,2) }}</h2> <!--// Item Price -->
							@endif
							@if($special->price2 != 0)
								<p class="item-size">or</p> <h2 class="item-price">${{ number_format($special->price2,2) }}</h2> <!--// Item Price -->
							@endif
						</div>
						@endif
					</div>
				</div>
			@endforeach
		</div>
	<div style="margin-top: 20px; padding-bottom: 30px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center"><h6>Prices May Expire Without Notice. Taxes Not Included.</h6></div>
	</div>


@endsection