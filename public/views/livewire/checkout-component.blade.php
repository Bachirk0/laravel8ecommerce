<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>Commande</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<form wire:submit.prevent="placeOrder">
				<div class="row">
					<div class="col-md-12"></div>
					<div class="wrap-address-billing">
						<h3 class="box-title">Address de livraison</h3>
						<div class="billing-address">
							<p class="row-in-form">
								<label for="fname">Prenom<span>*</span></label>
								<input  type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
								@error('firstname') <span class="text-danger">{{$message}}</span> @enderror
							</p>
							<p class="row-in-form">
								<label for="lname">Nom<span>*</span></label>
								<input type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
								@error('lastname') <span class="text-danger">{{$message}}</span> @enderror

							</p>
							<p class="row-in-form">
								<label for="email"> Address Email:</label>
								<input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
								@error('email') <span class="text-danger">{{$message}}</span> @enderror

							</p>
							<p class="row-in-form">
								<label for="phone">Telephone<span>*</span></label>
								<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
								@error('mobile') <span class="text-danger">{{$message}}</span> @enderror

							</p>

							<p class="row-in-form">
								<label for="phone">Ligne1<span>*</span></label>
								<input  type="text" name="add" value="" placeholder="10 digits format" wire:model="line1">
								@error('line1') <span class="text-danger">{{$message}}</span> @enderror

							</p>

							<p class="row-in-form">
								<label for="phone">Ligne2<span>*</span></label>
								<input  type="text" name="add" value="" placeholder="10 digits format" wire:model="line2">
							</p>

							
							<p class="row-in-form">
								<label for="country">Pays<span>*</span></label>
								<input  type="text" name="country" value="" placeholder="United States" wire:model="country">
								@error('country') <span class="text-danger">{{$message}}</span> @enderror

							</p>
							<p class="row-in-form">
								<label for="country">Province<span>*</span></label>
								<input  type="text" name="province" value="" placeholder="Province" wire:model="province">
								@error('province') <span class="text-danger">{{$message}}</span> @enderror

							</p>

							<p class="row-in-form">
								<label for="city">Ville<span>*</span></label>
								<input  type="text" name="city" value="" placeholder="City name" wire:model="city">
								@error('city') <span class="text-danger">{{$message}}</span> @enderror

							</p>

							<p class="row-in-form">
								<label for="zip-code">Code Postal:</label>
								<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
							</p>


							<p class="row-in-form fill-wife">
								
								<label class="checkbox-field">
									<input name="different-add" id="different-add"  type="checkbox" wire:model="ship_to_different">
									<span>Livrer à une autre addresse?</span>
								</label>
							</p>
						</div>
					</div>
				</div>
                @if($ship_to_different)
				<div class="col-md-12">
				<div class="wrap-address-billing">
					<h3 class="box-title">Address de livraison</h3>
					<div class="billing-address">
						<p class="row-in-form">
							<label for="fname">Prenom<span>*</span></label>
							<input  type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
							@error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror

						</p>
						<p class="row-in-form">
							<label for="lname">Nom<span>*</span></label>
							<input type="text" name="lname" value=""placeholder="Your last name" wire:model="s_lastname">
							@error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror

						</p>
						<p class="row-in-form">
							<label for="email">Addresse Email:</label>
							<input  type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
							@error('s_email') <span class="text-danger">{{$message}}</span> @enderror

						</p>
						<p class="row-in-form">
							<label for="phone">Telephone <span>*</span></label>
							<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
							@error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror

						</p>
						<p class="row-in-form">
							<label for="phone">Ligne1<span>*</span></label>
							<input  type="text" name="add" value="" placeholder="10 digits format" wire:model="s_line1">
							@error('s_line1') <span class="text-danger">{{$message}}</span> @enderror

						</p>

						<p class="row-in-form">
							<label for="phone">Ligne2<span>*</span></label>
							<input  type="text" name="add" value="" placeholder="10 digits format" wire:model="s_line2">
						</p>

						
						<p class="row-in-form">
							<label for="country">Pays <span>*</span></label>
							<input  type="text" name="country" value="" placeholder="United States" wire:model="s_country">
							@error('s_country') <span class="text-danger">{{$message}}</span> @enderror

						</p>
						<p class="row-in-form">
							<label for="country">Province<span>*</span></label>
							<input  type="text" name="province" value="" placeholder="Province" wire:model="s_province">
							@error('s_province') <span class="text-danger">{{$message}}</span> @enderror

						</p>

						<p class="row-in-form">
							<label for="city">Ville<span>*</span></label>
							<input  type="text" name="city" value="" placeholder="City name" wire:model="s_city">
							@error('s_city') <span class="text-danger">{{$message}}</span> @enderror

						</p>

						<p class="row-in-form">
							<label for="zip-code">Code postal:</label>
							<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
						</p>

						
					</div>
				</div>
				@endif
			</div>

			</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box"> Methode de payment</h4>
						<p class="summary-info"><span class="title">Check / Money order</span></p>
						<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
								<span>Payement à la livraison</span>
								<span class="payment-desc">Order Now on Delivery</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
								<span>Debit / Credit Cart</span>
								<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
								<span>Paypal</span>
								<span class="payment-desc">You can pay with your credit</span>
								<span class="payment-desc">card if you don't have a paypal account</span>
							</label>
							@error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
						</div>
						@if(Session::has('checkout'))
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>
						@endif
						<button type="submit" class="btn btn-medium">Valider votre commande</button>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Methode livraison</h4>
						<p class="summary-info"><span class="title">Flat Rate</span></p>
						<p class="summary-info"><span class="title">Fixed $50.00</span></p>
						
					</div>
				</div>
			</form>
			

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
