@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Menu")

@section('body-part')
    

<div class="container-fluid" id="container">
    <div class="row" id="menu">
        
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/pizza.jpg') }}');">
            <a href="{{ route('product', ['category=pizza']) }}">
                <div class="hover hover1">
                    <h1 class="h1">PIZZA</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/fingers.jpg') }}');">
            <a href="{{ route('product', ['category=garlic_fingers']) }}">
                <div class="hover hover1">
                    <h1 class="h1">GARLIC FINGERS</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/panza.jpg') }}');">
            <a href="{{ route('product', ['category=panzzaroti']) }}">
                <div class="hover hover1">
                    <h1 class="h1">PANZAROTTI</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/poutine.jpg') }}');">
            <a href="{{ route('product', ['category=poutine']) }}">
                <div class="hover hover1">
                    <h1 class="h1">POUTINE</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/wings.jpg') }}');">
            <a href="{{ route('wings') }}">
                <div class="hover hover1">
                    <h1 class="h1">CHICKEN WINGS</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/chicken.jpg') }}');">
            <a href="{{ route('product', ['category=chicken']) }}">
                <div class="hover hover1">
                    <h1 class="h1">CHICKEN</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/subs.jpg') }}');">
            <a href="{{ route('product', ['category=subs_sandwiches']) }}">
                <div class="hover hover1">
                    <h1 class="h1">SUBS & SANDWICHES</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/donair.jpg') }}');">
            <a href="{{ route('product', ['category=donairs']) }}">
                <div class="hover hover1">
                    <h1 class="h1">DONAIRS</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/seafood.jpg') }}');">
            <a href="{{ route('product', ['category=seafood']) }}">
                <div class="hover hover1">
                    <h1 class="h1">SEAFOOD</h1>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/burger.jpg') }}');">
            <a href="{{ route('product', ['category=burgers']) }}">
                <div class="hover hover1">
                    <h1 class="h1">BURGERS</h1>
                </div>
            </a>
        </div>

    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 menu-item" style="background-image: url('{{ asset('user/assets/images/appetizers.jpg') }}');">
            <a href="{{ route('product', ['category=appetizers']) }}">
            	<div class="hover hover1">
                    <h1 class="h1">APPETIZERS</h1>
                </div>
            </a>
        </div>  
   
    </div>
</div>
	


@endsection