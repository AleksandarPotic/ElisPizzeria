@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Menu")

@section('body-part')

	<div class="container-fluid" id="category-imagee" style="background-image: url('{{ asset('user/assets/images/large-'.$category->slug.'.jpg') }}');">
		<div class="row">
			 
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-lg-8 item-textt left">
				@if($category->slug == 'pizza')
					<h3>‘NOW SERVING 12” GLUTEN FREE CRUST $4.00’</h3>
				@elseif($category->slug == 'garlic_fingers')
					<h3>Our Garlic Fingers are smothered with Mozzarella Cheese and Brushed with Garlic Butter. Served with Donair Sauce.</h3>
				@elseif($category->slug == 'panzzaroti')
					<h3>Lightly Brushed with Garlic Butter, Your Choice: <br><b style="color: black;">Oven Baked or Deep Fried</b></h3>
				@elseif($category->slug == 'chicken')
					<h3>‘Your Choice of Sauce: <b style="color: black;">BBQ or Sweet & Sour</b></h3>
				@elseif($category->slug == 'seafood')
					<h3>Our Fresh Haddock is tossed just right in Beer Batter! <br><b style="color: #000;">Served with Tartar Sauce or Ketchup</b></h3>
				@else
					<h3>{{ strtoupper($category->name) }}</h3>
				@endif

			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 item-textt right">
				<a href="{{ route('menu') }}"><button class="btn btn-danger">Back To Menu</button></a>
			</div>
		</div>

		@if($category->slug == 'pizza')
			<div class="row">
				<div class="col-10 offset-1 col-sm-12 offset-sm-0 col-md-6 offset-md-3 col-lg-6 offset-lg-3 text-center choiceof">
					<h3>Choice of Ingredients:</h3>
					<p>Pepperoni, Salami, Bacon, Mushrooms, Onions,
					Green Peppers, Ham, Sausage, Tomoato, Pineapple,
					Hot Peppers, Green Olives, Black Olives, Ground Beef</p><br>
					<h3>Extra Items Available:</h3>
					<p>Chicken, Donair Meat, Brothers Pepperoni</p>
				</div>
			</div>
		@endif


		<div class="row items">
			@foreach($products as $product)
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 item">
				<h2 class="item-name">{{ $product->name }} @if($product->new == 1) <span class="new-item"><img src="{{ asset('user/assets/images/new-item.png') }}"></span> @endif</h2> <!--// Item Name -->
				<p class="item-description">{!!  htmlspecialchars_decode($product->description)  !!} </p><!--// This <p> is only for item description -->
				<div class="row">
					@if($product->small != 0)
					<div class="col-6 col-sm-6 col-md-3 col-lg-3">
						<p class="item-size">Small @if($product->category->slug == 'pizza')(9") @endif</p> <!--// Item Size -->
						<h2 class="item-price">${{ number_format($product->small,2) }} @if($product->name == 'Donair Meat or Bacon')each @endif</h2> <!--// Item Price -->
					</div>
					@endif
					@if($product->medium != 0)
					<div class="col-6 col-sm-6 col-md-3 col-lg-3">
						<p class="item-size">Medium @if($product->category->slug == 'pizza')(12") @endif</p>
						<h2 class="item-price">${{ number_format($product->medium,2) }} @if($product->name == 'Donair Meat or Bacon')each @endif</h2>
					</div>
					@endif
					@if($product->large != 0)
					<div class="col-6 col-sm-6 col-md-3 col-lg-3">
						<p class="item-size">Large @if($product->category->slug == 'pizza')(16") @endif</p>
						<h2 class="item-price">${{ number_format($product->large,2) }} @if($product->name == 'Donair Meat or Bacon')each @endif</h2>
					</div>
					@endif
					@if($product->extra_large != 0)
					<div class="col-6 col-sm-6 col-md-3 col-lg-3">
						<p class="item-size">Exlg @if($product->category->slug == 'pizza')(18") @endif</p>
						<h2 class="item-price">${{ number_format($product->extra_large,2) }} @if($product->name == 'Donair Meat or Bacon')each @endif</h2>
					</div>
					@endif
					@if($product->price != 0)
					<div class="col-6 col-sm-6 @if($product->name == 'Donair Meat') col-md-12 col-lg-12 @else col-md-3 col-lg-3 @endif">
						@if($product->name != 'Donair Meat' and $category->slug != 'burgers')
						<p class="item-size">Price</p>
						@elseif($category->slug == 'burgers')
							<p class="item-size">Burger</p>
						@endif
						<h2 class="item-price">@if($product->name == 'Donair Meat') minimum @endif${{ number_format($product->price,2) }}@if($product->name == 'Donair Meat') purchase @endif</h2>
					</div>
					@endif
					@if($product->platter != 0)
					<div class="col-6 col-sm-6 col-md-3 col-lg-3">
						<p class="item-size">Platter</p>
						<h2 class="item-price">${{ number_format($product->platter,2) }}</h2>
					</div>
					@endif
				</div>

				<div class="row">
					@if($product->extra_sauce != 0)
						<div class="col-6 col-sm-6 col-md-3 col-lg-5">
							<p class="item-size">Extra Cheese or Meat</p> <!--// Item Size -->
							<h2 class="item-price">${{ number_format($product->extra_sauce,2) }} each</h2> <!--// Item Price -->
						</div>
					@endif
				</div>
				<div class="row">
					@if($product->name == 'Donair Burger')
						<div class="col-6 col-sm-6 col-md-3 col-lg-5">
							<p class="item-size">Small Donair Sauce</p> <!--// Item Size -->
							<h2 class="item-price">$1.49</h2> <!--// Item Price -->
						</div>
						<div class="col-6 col-sm-6 col-md-3 col-lg-5">
							<p class="item-size">Large Donair Sauce</p> <!--// Item Size -->
							<h2 class="item-price">$2.29</h2> <!--// Item Price -->
						</div>
					@endif
				</div>
				<div class="row">
					@if($product->name == 'Chicken Caesar Salad')
						<div class="col-6 col-sm-6 col-md-3 col-lg-5">
							<p class="item-size">Add Chicken</p> <!--// Item Size -->
							<h2 class="item-price">$2.00</h2> <!--// Item Price -->
						</div>
					@endif
				</div>
			</div>
			@endforeach
			
			


			<div style="margin-top: 20px; padding-bottom: 30px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center"><h6>Prices May Expire Without Notice. Taxes Not Included.</h6></div>
		</div>
	</div>

@endsection