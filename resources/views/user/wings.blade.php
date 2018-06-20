@extends('user.layout.app')

@section('title', "Eli's Pizzeria | Eli’s Wing Factory")

@section('body-part')

	<div class="container-fluid" id="category-image" style="background-image: url('{{ asset('user/assets/images/wings-2.jpg') }}');">
		<div class="row">
			 
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 item-text right">
				<a href="{{ route('menu') }}"><button class="btn btn-danger">Back To Menu</button></a>
			</div>
		</div>
		<div class="row">
			<div class="offset-1 col-10 offset-md-2 col-md-8 text-center">
				<img style="margin-top: 10px;" class="img-fluid" src="{{asset('user/assets/images/kings.jpg')}}">
			</div>

			<div style="margin-top: 10px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center"><h3>Why Go Out For Wings When You Can Get the Best Wings Delivered Right To Your Door!</h3></div>
			<div style="margin-top: 10px;" class="offset-1 col-10 offset-md-2 col-md-8 text-center"><h3 style="color:rgb(15,89,152);">Build Your Own Wings From </h3></div>
			<div style="margin-top: 10px;" class="col-12 offset-md-0 col-md-12 text-center"><h1 id="specialh1" >Eli’s Wing Factory</h1></div>

			<div style="margin-top: 10px;" class="blue offset-1 col-10 offset-md-0 col-md-12 text-center"><h3> Step 1. Battered or Not Battered?</h3></div>

			<div style="margin-top: 10px;" class="blue offset-1 col-10 offset-md-0 col-md-12 text-center"><h3> Step 2. Choose Your Dry Rub</h3></div>

			<!-- BIG DRY RUBS -->

			<div class="container-fluid" id="dry-rubs">
				<div class="row">
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2 col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Eli's Original" data-photo-url="user/assets/images/eli-original.jpg">Eli's Original Spice</div>

							<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">              
							      <div class="modal-body">
							      	<p class="text-center" id="pop-p"></p>
							      	<button type="button" style="margin-top: -10px;" class="close" data-dismiss="modal"><span style="color: black;" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <img src="" class="imagepreview" style="width: 100%;" >
							      </div>
							    </div>
							  </div>
							</div>

							<script>
								$(function() {
									$('.pop').on('click', function() {
										$('.imagepreview').attr('src', $(this).attr('data-photo-url'));
										var text = $(this).attr('data-photo-name');
										$('#pop-p').text(text);
										$('#imagemodal').modal('show');   
									});		
							});
							</script>


						<div class="col text-left pop" data-photo-name="BBQ" data-photo-url="user/assets/images/bbarbecue.jpg">BBQ</div>

						<div class="col text-left pop" data-photo-name="Lemon Pepper" data-photo-url="user/assets/images/lemon-pepper.jpg">Lemon Pepper</div>


					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Sriracha" data-photo-url="user/assets/images/sssriracha.jpg">Sriracha<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Maple Bacon" data-photo-url="user/assets/images/maple-bacon.jpg">Maple Bacon</div>
						<div class="col text-left pop" data-photo-name="White Cheddar" data-photo-url="user/assets/images/white-chedda.jpg">White Cheddar</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Buffalo" data-photo-url="user/assets/images/bbuffalo.jpg">Buffalo<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Bacon Caesar" data-photo-url="user/assets/images/bacon-caesar.jpg">Bacon Caesar</div>
						<div class="col text-left pop" data-photo-name="Jalapeno Lime" data-photo-url="user/assets/images/jalapeno-lime.jpg">Jalapeno Lime<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Dill Pickle" data-photo-url="user/assets/images/dill-pickle.jpg">Dill Pickle</div>
						<div class="col text-left pop" data-photo-name="Mango Habanero" data-photo-url="user/assets/images/mango-habanero.jpg">Mango Habanero<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Garlic Parmesan" data-photo-url="user/assets/images/garlic-parmesan.jpg">Garlic Parmesan</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="White Buffalo" data-photo-url="user/assets/images/white-buffalo.jpg">White Buffalo<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><span class="new"> New</span></div>
						<div class="col text-left pop" data-photo-name="Smokey Hickory Bacon" data-photo-url="user/assets/images/smoked-hickory.jpg">Smokey Hickory Bacon<span class="new"> New</span></div>
						<div class="col text-left pop" data-photo-name="Jalapeno Cheddar" data-photo-url="user/assets/images/jalapeno-cheddar.jpg">Jalapeno Cheddar<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><span class="new"> New</span></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Smoked Applewood BBQ" data-photo-url="user/assets/images/smoked-applewood.jpg">Smoked Applewood BBQ<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><span class="new"> New</span></div>
					</div>
				</div>
			</div>

			<!-- /BIG DRY RUBS -->

			<!-- SMALL DRY RUBS -->

			<div class="container" id="dry-rubs-small">
				<div class="row">
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2 col-lg-10 text-center" style="display: inline-flex;">
						<div class="col-6 text-left pop2" data-photo-name="Eli's Original Spice" data-photo-url="user/assets/images/eli-original.jpg">Eli's Original Spice</div>

						<div class="modal fade" id="imagemodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">              
							      <div class="modal-body">
							      	<p class="text-center" id="pop-p2"></p>
							      	<button type="button" style="margin-top: -14px;" class="close" data-dismiss="modal"><span style="color: black;"  aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <img src="" class="imagepreview2" style="width: 100%;" >
							      </div>
							    </div>
							  </div>
							</div>

							<script>
								$(function() {
									$('.pop2').on('click', function() {
										$('.imagepreview2').attr('src', $(this).attr('data-photo-url'));
										var text = $(this).attr('data-photo-name');
										$('#pop-p2').text(text);
										$('#imagemodal2').modal('show');   
									});		
							});
							</script>



						<div class="col-6 text-left pop2" data-photo-name="BBQ" data-photo-url="user/assets/images/bbarbecue.jpg">BBQ</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col-6 text-left pop2" data-photo-name="Lemon Pepper" data-photo-url="user/assets/images/lemon-pepper.jpg">Lemon Pepper</div>
						<div class="col-6 text-left pop2" data-photo-name="Sriracha" data-photo-url="user/assets/images/sssriracha.jpg">Sriracha<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col-6 text-left pop2" data-photo-name="Maple Bacon" data-photo-url="user/assets/images/maple-bacon.jpg">Maple Bacon</div>
						<div class="col-6 text-left pop2" data-photo-name="White Cheddar" data-photo-url="user/assets/images/white-chedda.jpg">White Cheddar</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col-6 text-left pop2" data-photo-name="Buffalo" data-photo-url="user/assets/images/bbuffalo.jpg">Buffalo<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col-6 text-left pop2" data-photo-name="Bacon Caesar" data-photo-url="user/assets/images/bacon-caesar.jpg">Bacon Caesar</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col-6 text-left pop2" data-photo-name="Jalapeno Lime" data-photo-url="user/assets/images/jalapeno-lime.jpg">Jalapeno Lime<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
						<div class="col-6 text-left pop2" data-photo-name="Dill Pickle" data-photo-url="user/assets/images/dill-pickle.jpg">Dill Pickle</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col-6 text-left pop2" data-photo-name="Mango Habanero" data-photo-url="user/assets/images/mango-habanero.jpg">Mango Habanero<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
						<div class="col-6 text-left pop2" data-photo-name="Garlic Parmesan" data-photo-url="user/assets/images/garlic-parmesan.jpg">Garlic Parmesan</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="long col-6 text-left pop2" data-photo-name="White Buffalo" data-photo-url="user/assets/images/white-buffalo.jpg">White Buffalo<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><span class="new"> New</span></div>
						<div class="long col-6 text-left pop2" data-photo-name="Smokey Hickory Bacon" data-photo-url="user/assets/images/smoked-hickory.jpg">Smokey Hickory Bacon<span class="new"> New</span></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="long col-6 text-left pop2" data-photo-name="Jalapeno Cheddar" data-photo-url="user/assets/images/jalapeno-cheddar.jpg">Jalapeno Cheddar<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><span class="new"> New</span></div>
						<div class="long col-6 text-left pop2" data-photo-name="Smoked Applewood BBQ" data-photo-url="user/assets/images/smoked-applewood.jpg">Smoked Applewoord BBQ<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><span class="new"> New</span></div>
					</div>
				</div>
			</div>

			<!-- /SMALL DRY RUBS -->



			<div style="margin-top: 10px;" class="blue offset-1 col-10 offset-md-0 col-md-12 text-center"><h3> Step 3. Choose Your Sauce</h3></div>

			<!-- BIG SAUCES -->

			<div class="container-fluid" id="sauces">
				<div class="row">
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2 col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Dave's Hot" data-photo-url="user/assets/images/dave-mild.jpg">Dave's Hot<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Dave's Medium" data-photo-url="user/assets/images/dave-mild.jpg">Dave's Medium<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Dave's Mild" data-photo-url="user/assets/images/dave-mild.jpg">Dave's Mild<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Honey Garlic" data-photo-url="user/assets/images/honey-garlic.jpg">Honey Garlic</div>
						<div class="col text-left pop" data-photo-name="Honey Mustard" data-photo-url="user/assets/images/honey-mustard.jpg">Honey Mustard</div>
						<div class="col text-left pop" data-photo-name="Honey Mustard" data-photo-url="user/assets/images/sweet-chili.jpg">Sweet Chili <img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Cowboy Ranch" data-photo-url="user/assets/images/rranch.jpg">Cowboy Ranch</div>
						<div class="col text-left pop" data-photo-name="Desert Mesquite" data-photo-url="user/assets/images/dessert-mesquite.jpg">Desert Mesquite</div>
						<div class="col text-left pop" data-photo-name="Red Ale Chipotle" data-photo-url="user/assets/images/red-ale-chipotle.jpg">Red Ale Chipotle<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Canadian Heat" data-photo-url="user/assets/images/canadian-heat.jpg">Canadian Heat<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Carribean Jerk" data-photo-url="user/assets/images/carribean-jerk.jpg">Carribean Jerk<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Baja Chipotle" data-photo-url="user/assets/images/baja-chipotle.jpg">Baja Chipotle<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Sriracha" data-photo-url="user/assets/images/ssriracha.jpg">Sriracha<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop" data-photo-name="Da 'BOMB'" data-photo-url="user/assets/images/dave-mild.jpg">Da 'BOMB'<img class="img-fluid paprika" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika paprika2" src="user/assets/images/red-pepper.png"><span class="new"> Extra HOT</span></div>
						<div class="col text-left pop" data-photo-name="Bullseye Bold BBQ" data-photo-url="user/assets/images/bullseye-bold-bbq.jpg">Bullseye Bold BBQ</div>
						
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop" data-photo-name="Blue Cheese" data-photo-url="user/assets/images/blue-cheese.jpg">Blue Cheese</div>
					</div>
				</div>
			</div>

			<!-- /BIG SAUCES -->

			<!-- SMALL SAUCES -->

			<div class="container" id="sauces-small">
				<div class="row">
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2 col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Dave's Hot" data-photo-url="user/assets/images/dave-mild.jpg">Dave's Hot<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop2" data-photo-name="Dave's Medium" data-photo-url="user/assets/images/dave-mild.jpg">Dave's Medium<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"></div>
						
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Dave's Mild" data-photo-url="user/assets/images/dave-mild.jpg">Dave's Mild<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop2" data-photo-name="Honey Garlic" data-photo-url="user/assets/images/honey-garlic.jpg">Honey Garlic</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Honey Mustard" data-photo-url="user/assets/images/honey-mustard.jpg">Honey Mustard</div>
						<div class="col text-left pop2" data-photo-name="Honey Mustard" data-photo-url="user/assets/images/sweet-chili.jpg">Sweet Chili<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Cowboy Ranch" data-photo-url="user/assets/images/rranch.jpg">Cowboy Ranch</div>
						<div class="col text-left pop2" data-photo-name="Desert Mesquite" data-photo-url="user/assets/images/dessert-mesquite.jpg">Desert Mesquite</div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Red Ale Chipotle" data-photo-url="user/assets/images/red-ale-chipotle.jpg">Red Ale Chipotle<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop2" data-photo-name="Canadian Heat" data-photo-url="user/assets/images/canadian-heat.jpg">Canadian Heat<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Carribean Jerk" data-photo-url="user/assets/images/carribean-jerk.jpg">Carribean Jerk<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop2" data-photo-name="Baja Chipotle" data-photo-url="user/assets/images/baja-chipotle.jpg">Baja Chipotle<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Sriracha" data-photo-url="user/assets/images/ssriracha.jpg">Sriracha<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"></div>
						<div class="col text-left pop2" data-photo-name="Da 'BOMB'" data-photo-url="user/assets/images/dave-mild.jpg">Da 'BOMB'<img class="img-fluid paprika4" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><img class="img-fluid paprika4 paprika2" src="user/assets/images/red-pepper.png"><span class="new"> Extra HOT</span></div>
					</div>
					<div class="offset-0 col-12 offset-md-0 col-md-12 offset-lg-2  col-lg-10 text-center" style="display: inline-flex;">
						<div class="col text-left pop2" data-photo-name="Bullseye Bold BBQ" data-photo-url="user/assets/images/bullseye-bold-bbq.jpg">Bullseye Bold BBQ</div>
						<div class="col text-left pop2" data-photo-name="Blue Cheese" data-photo-url="user/assets/images/blue-cheese.jpg">Blue Cheese</div>
					</div>
				</div>
			</div>

			<!-- /SMALL SAUCES -->

			<div style="margin-top: 20px;" class="blue offset-1 col-10 offset-md-0 col-md-12 text-center"><h3> Step 4. Eat & Enjoy</h3></div>

			<div style="margin-top: 10px; margin-bottom: 10px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center">
				<span class="glf-button" data-glf-cuid="c4797bde-3d86-494c-964f-65ae2d7f062b">Order Now</span>
			</div>

			<script src="https://www.fbgcdn.com/widget/js/ewm2.js" defer async></script>

			<div style="margin-top: 20px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center"><h6> (Must be in quantities of 10) | Extra Sauce <span class="redd">$1.49</span></h6></div>

			<div style="margin-top: 10px; padding-bottom: 30px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center"><h6>10 Pc <span class="redd">$11.99</span> | 20 Pc <span class="redd">$21.99</span> | 30 Pc <span class="redd">$30.99</span> | 40 Pc <span class="redd">$39.99</span></h6></div>
		</div>

		<div style="padding-bottom: 30px;" class="offset-1 col-10 offset-md-0 col-md-12 text-center"><h6>Prices May Expire Without Notice. Taxes Not Included.</h6></div>
	</div>

@endsection