@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Home")

@section('body-part')
    
<div class="container-fluid" id="container">

        <div class="row">
            <div class="col-12" style="margin:0px; padding:0px;">
                <div id="container1">
                    <div class="images" style="background-image: url({{asset('user/assets/images/home.jpg')}});">
                    </div>
                    <div class="col-12 text-center align-content-center centered" id="carry">
			        	<h1 style="overflow-y: hidden !important;" class="text-center align-self-center"> If you find it too hot </h4>
			        	<h1 id="hey" style="overflow-y: hidden !important;" class="text-center align-self-center"> in the kitchen, let us</h4>	
			        	<h1 id="sss" class="text-center align-self-center"> <span> cook for you </span> </h1>
			        </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center" id="left">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-10">
                                <h1 style="overflow-y: hidden !important;">ABOUT US</h1>
                                <h3 style="font-size:2.5rem !important; font-family:davidaa;color:rgb(250, 185, 64); overflow-y: hidden !important;">Eli's Pizzeria</h3>
                                <p>Eli’s Pizzeria is a family-owned pizza place that has been proudly serving the community for 14 years. We have the best chicken wings in the city and offer a wide variety of dry rubs and sauces, there’s something for everyone, hence the name <b>‘King of the Wings.’</b> We focus on the food, not the fast! Enjoy our delicious pizzas, mouth-watering Deluxe Cheeseburgers, Double Layer Poutines, and much more. We are always coming up with tasty creations.</p>
                                <p style="margin-top: 7px !important;">We are grateful to our amazing customers for their continued support over all these years. We promise to always provide friendly service and delicious food to all our lovely customers. We look forward to serving you tasty pizza, our famous chicken wings, and all your favorite foods in the years to come!</p>
                                <h4 style="padding-top: 8px !important;">WE CATER TO SCHOOLS, EVENTS AND BUSINESSES</h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center" id="right">
                        <div class="row">

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 right-sub" style="background-image: url({{ asset('user/assets/images/pica-desno.jpg') }});">

                            </div><!--// Right-Sub-One End -->

                        </div> <!--// Row End (row for sub section in right secton) -->
                    </div> <!--// Right End -->
                </div> <!--// End Row -->
            </div> <!--// End col-12 -->
        </div> <!--// End Row -->
</div>
    



@endsection