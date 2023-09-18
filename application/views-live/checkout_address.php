<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="checkout">
		<div class="container normal margin-top-45px">
			<div class="checkout-container">
				<div class="row margin-top-30px">
					<div class="col-12">
						<div class="checkout-breadcrumb">
							<div class="active">Address</div>
							<div class="">
								<img src="<?= base_url(); ?>assets/images/main/arrow-right.png">
							</div>
							<div class="">Payment</div>
						</div>
					</div>
				</div>

				<div class="row margin-top-30px d-none d-sm-block">
					<div class="col-12">
						<div class="title">Address</div>
					</div>
				</div>

				<div class="row row-eq-height">
					<div class="col-12 col-sm-4 d-block d-sm-none margin-bottom-30px margin-top-30px">
						<div class="cart-box">
							<? $this->load->view('checkout_cart_box'); ?>

							<div class="subtotal-area">
								<div class="subtotal-container">
									<div class="text">Subtotal</div>
									<div class="price subtotal"><?= $cart_record['subtotal_cart_display']; ?></div>
								</div>

								<div class="subtotal-container">
									<div class="text">Discount</div>
									<div class="price discount"><?= $cart_record['discount_display']; ?></div>
								</div>

								<? if ($cart_record['additional_discount'] > 0): ?>
									<div class="subtotal-container">
										<div class="text"><?= $cart_record['additional_discount_text']; ?></div>
										<div class="price discount"><?= $cart_record['additional_discount_display']; ?></div>
									</div>
								<? endif; ?>

								<div class="subtotal-container">
									<div class="text">Shipping</div>
									<div class="price shipping"><?= $cart_record['shipping_display']; ?></div>
								</div>
							</div>

							<div class="subtotal-container font-semibold margin-top-7-5px">
								<div class="text">Grand Total</div>
								<div class="price shipping"><?= $cart_record['total_display']; ?></div>
							</div>
						</div>

						<? if (count($arr_voucher) > 0): ?>
							<div class="voucher-box margin-top-30px">
								<button class="main transparent modal-voucher">Add Voucher Code</button>
							</div>
						<? endif; ?>
					</div>

					<div class="col-12 col-sm-8">
						<div class="title d-block d-sm-none">Address</div>

						<div class="margin-top-15px">
							<div class="checkout-title">Select your address</div>
						</div>

						<div class="margin-top-30px">
							<div class="address-carousel owl-carousel owl-theme">
								<? foreach ($arr_address as $key => $address): ?>
									<div class="item">
										<div class="address-box <? if ($key <= 0): ?>active<? endif; ?>" data-address-id="<?= $address->id; ?>" data-province-id="<?= $address->province_id; ?>" data-city-id="<?= $address->city_id; ?>" data-district-id="<?= $address->district_id; ?>">
											<div class="checklist">
												<img src="<?= base_url(); ?>assets/images/main/check-square.png">
											</div>

											<div class="label font-semibold"><?= $address->label; ?></div>

											<div class="margin-top-7-5px"><?= $address->name; ?></div>
											<div><?= $account->email; ?></div>
											<div><?= $address->phone; ?></div>
											<div><?= $address->province_name; ?>, <?= $address->postcode; ?></div>
										</div>
									</div>
								<? endforeach; ?>

								<div class="item">
									<div class="address-box empty">
										<div>
											<div class="text-center">Add New Address</div>
											<img class="add-new-address margin-top-15px" src="<?= base_url(); ?>assets/images/main/plus-add.png">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="margin-top-30px">
							<div class="checkout-title">Select Your Courier</div>
						</div>

						<div class="margin-top-15px">
							<div class="courier-container">
								<? foreach ($arr_shipping as $key => $shipping): ?>
									<div class="courier-box <? if ($key <= 0): ?>active<? endif; ?>" data-shipping-id="<?= $shipping->id; ?>" data-price="<?= $shipping->price; ?>">
										<div><?= $shipping->type; ?> <?= $shipping->number; ?></div>
										<div class=""><?= $shipping->price_display; ?></div>
										<div class=""><?= $shipping->etd; ?></div>

										<div class="image">
											<img src="<?= base_url(); ?>assets/images/main/<?= $shipping->type; ?>.png">
										</div>
									</div>
								<? endforeach; ?>
							</div>
						</div>

						<div class="margin-top-30px text-center">
							<button class="main black set-address">Continue to Payment</button>
						</div>
					</div>
					<div class="col-12 col-sm-4 d-none d-sm-block">
						<div class="cart-box">
							<? $this->load->view('checkout_cart_box'); ?>

							<div class="subtotal-area">
								<div class="subtotal-container">
									<div class="text">Subtotal</div>
									<div class="price subtotal"><?= $cart_record['subtotal_cart_display']; ?></div>
								</div>

								<div class="subtotal-container">
									<div class="text">Discount</div>
									<div class="price discount"><?= $cart_record['discount_display']; ?></div>
								</div>

								<? if ($cart_record['additional_discount'] > 0): ?>
									<div class="subtotal-container">
										<div class="text"><?= $cart_record['additional_discount_text']; ?></div>
										<div class="price discount"><?= $cart_record['additional_discount_display']; ?></div>
									</div>
								<? endif; ?>

								<div class="subtotal-container">
									<div class="text">Shipping</div>
									<div class="price shipping"><?= $cart_record['shipping_display']; ?></div>
								</div>
							</div>

							<div class="subtotal-container font-semibold margin-top-7-5px">
								<div class="text">Grand Total</div>
								<div class="price total"><?= $cart_record['total_display']; ?></div>
							</div>
						</div>

						<? if (count($arr_voucher) > 0): ?>
							<div class="voucher-box margin-top-30px">
								<button class="main transparent modal-voucher">Add Voucher Code</button>
							</div>
						<? endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- modal-add-address -->
	<div id="modal-add-address" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content modal-address">
	      		<div class="head-title">Add New Address</div>

	      		<div class="row margin-top-15px">
	      			<div class="col-12 col-sm-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Label</div>
							<input type="text" name="shipping-label" class="data-important" placeholder="Home, Apartment, Office, etc..">
						</div>
					</div>

					<div class="col-12 col-sm-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Name</div>
							<input type="text" name="shipping-name" class="data-important" placeholder="Your Name..">
						</div>
					</div>

					<div class="col-12 col-sm-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Phone</div>
							<input type="text" name="shipping-phone" class="data-important" placeholder="Your Phone..">
						</div>
					</div>

					<div class="col-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Email</div>
							<input type="text" name="shipping-email" class="data-important" placeholder="Your Email..">
						</div>
					</div>

					<div class="col-12 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Address</div>
							<input type="text" name="shipping-address-line-1" class="data-important" placeholder="Apt, Suites, Etc..">
							<input type="text" name="shipping-address-line-2" class="margin-top-7-5px" placeholder="Address Line 1..">
							<input type="text" name="shipping-address-line-3" class="margin-top-7-5px" placeholder="Address Line 2..">
						</div>
					</div>

					<div class="col-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Postcode</div>
							<input type="text" name="shipping-postcode" class="data-important" placeholder="Your Postcode..">
						</div>
					</div>

					<div class="col-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">Province</div>
							<select id="shipping-province" class="data-important">
								<option value="0">-- Select Province --</option>

								<? foreach ($arr_province as $province): ?>
									<option value="<?= $province->id; ?>"><?= $province->name; ?></option>
								<? endforeach; ?>
							</select>
						</div>
					</div>

					<div class="col-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">City</div>
							<select id="shipping-city" disabled class="data-important">
								<option value="0">-- Select City --</option>
							</select>
						</div>
					</div>

					<div class="col-6 margin-bottom-15px">
						<div class="main-input">
							<div class="label">District</div>
							<select id="shipping-district" disabled class="data-important">
								<option value="0">-- Select District --</option>
							</select>
						</div>
					</div>
	      		</div>

	      		<div class="margin-top-15px text-center">
	      			<button class="main transparent" data-dismiss="modal">Back</button>
	      			<button class="main black submit-address">Submit</button>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<!-- modal voucher -->
	<div class="modal fade" id="modal-voucher" tabindex="-1" role="dialog" aria-labelledby="modal-voucherTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	   		<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title font-semibold">My Voucher</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<? foreach ($arr_voucher as $voucher): ?>
		        		<div class="voucher-list">
		        			<div class="icon">
		        				<img src="<?= base_url(); ?>assets/images/main/voucher/voucher-<?= $voucher->discount; ?>.png">
		        				<div class="text-center font-semibold"><?= $voucher->name; ?></div>
		        			</div>
		        			<div class="desc">
		        				<div>
		        					diskon <?= $voucher->discount; ?>%
			        				<? if ($voucher->max_discount > 0): ?>max <?= $voucher->max_discount_display; ?><? endif; ?>
			        				<? if ($voucher->shipping > 0): ?>dan diskon ongkir hingga <?= $voucher->shipping_display; ?><? endif; ?>
		        				</div>
		        				<div class="margin-top-7-5px">
		        					<? if ($voucher->eligibility > 0): ?>
		        						<? if ($cart_record['voucher_code'] == $voucher->code): ?>
		        							<button class="main transparent small">Voucher Digunakan</button>
		        						<? else: ?>
		        							<button class="main black small voucher-button voucher-<?= $voucher->id; ?>" data-voucher-id="<?= $voucher->id; ?>" data-code="<?= $voucher->code; ?>" data-discount="<?= $voucher->total_discount; ?>" data-shipping-discount="<?= $voucher->shipping; ?>">Gunakan Voucher</button>
		        						<? endif; ?>
		        					<? else: ?>
		        						<div class="not-eligible">Voucher tidak dapat digunakan</div>
		        					<? endif; ?>
		        				</div>

		        				<? if ($voucher->date_end > 0): ?>
			        				<div class="Voucher-date">Berlaku hingga <?= $voucher->date_end_display; ?></div>
			        			<? endif; ?>
		        			</div>
		        		</div>
		        	<? endforeach; ?>
	      		</div>
	      		<div class="modal-footer">
	        		<button class="main transparent" data-dismiss="modal">Close</button>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<div class="modal fade" id="modal-payment" tabindex="-1" role="dialog" aria-labelledby="modal-paymentTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	   		<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title font-semibold">Payment Method</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<div class="row row-eq-height align-items-center">
						<div class="col-12 font-semibold">Bank Transfer</div>
						<div class="col-12">
							<div class="payment-box">
								<div class="bank bg-cover active" data-bank="bca" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/bca.jpg);"></div>
								<div class="bank bg-cover" data-bank="bni" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/bni.jpg);"></div>
								<div class="bank bg-cover" data-bank="bri" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/bri.jpg);"></div>
								<div class="bank bg-cover" data-bank="permata" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/permata.jpg);"></div>
								<div class="bank bg-cover" data-bank="mandiri" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/mandiri.jpg);"></div>
							</div>
						</div>
					</div>

					<div class="row margin-top-15px row-eq-height align-items-center">
						<div class="col-12 font-semibold">Credit Card</div>
						<div class="col-12">
							<div class="payment-box">
								<div class="bank bg-cover" data-bank="credit-card" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/visa.jpg);"></div>
								<div class="bank bg-cover" data-bank="credit-card" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/mastercard.jpg);"></div>
								<div class="bank bg-cover" data-bank="credit-card" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/jcb.jpg);"></div>
							</div>
						</div>
					</div>

					<div class="row margin-top-15px row-eq-height align-items-center">
						<div class="col-12 font-semibold">E-Wallet</div>
						<div class="col-12">
							<div class="payment-box">
								<div class="bank bg-cover" data-bank="shopeepay" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/shopeepay.jpg);"></div>
								<div class="bank bg-cover" data-bank="ovo" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/ovo.jpg);"></div>
								<div class="bank bg-cover" data-bank="ewallet" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/dana.jpg);"></div>
								<div class="bank bg-cover" data-bank="ewallet" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/linkaja.jpg);"></div>
							</div>
						</div>
					</div>

					<div class="row margin-top-15px row-eq-height align-items-center">
						<div class="col-12 font-semibold">Paylater</div>
						<div class="col-12">
							<div class="payment-box">
								<div class="bank bg-cover" data-bank="kredivo" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/kredivo.jpg);"></div>
							</div>
						</div>
					</div>
	      		</div>
	      		<div class="modal-footer">
	      			<button class="main black" data-dismiss="modal">Close</button>
	        		<button class="main transparent order-submit" onclick="submitOrder();">Bayar Sekarang</button>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	let arrProductId = [];
	let productNumber = '';

	<? foreach ($cart_record['arr_cart'] as $cart): ?>
		<? if ($cart->product_id == 1): ?>
			arrProductId.push('NPRO-000001');
		<? elseif ($cart->product_id == 3): ?>
			arrProductId.push('NPRO-000002');
		<? elseif ($cart->product_id == 4): ?>
			arrProductId.push('NPRO-000003');
		<? elseif ($cart->product_id == 11): ?>
			arrProductId.push('NKIT-000011');
		<? elseif ($cart->product_id == 13): ?>
			arrProductId.push('NKIT-000012');
		<? elseif ($cart->product_id == 16): ?>
			arrProductId.push('NPRO-000009');
		<? endif; ?>
	<? endforeach; ?>

	fbq("track", "InitiateCheckout", {
		content_ids: arrProductId,
		content_type: 'Product',
		num_items: '<?= count($cart_record['arr_cart']); ?>',
		value: '<?= $cart_record['subtotal']; ?>' ,
		currency:'IDR'
	});
</script>

<script type="text/javascript">
	$(function() {
		initCheckoutCarousel();
		calculateShipping();
	});

	function calculateShipping() {
		$.each($('.courier-box'), function(key, courier) {
			if ($(courier).hasClass('active')) {
				const shipping = parseInt($(courier).attr('data-price'));
				let total = parseInt(`<?= $cart_record['total']; ?>`);

				total = total + shipping;
				const shippingDisplay = 'IDR ' + $.number(shipping, 0, ',', '.');
				const totalDisplay = 'IDR ' + $.number(total, 0, ',', '.');

				$('.price.shipping').html(shippingDisplay);
				$('.price.total').html(totalDisplay);
			}
		});
	}

	function initCheckoutCarousel() {
		$('.address-carousel').owlCarousel({
			dots: false,
			lazyLoad: true,
		    loop: false,
		    margin: 10,
		    nav: false,
		    responsiveClass: true,
		    responsive: {
		        0: {
		            items: 1,
		            stagePadding: 40
		        },
		        768: {
		            items: 3,
		        },
		        1000: {
		            items: 3,
		        }
		    }
		});

		$('.address-box').click(function() {
			if ($(this).hasClass('empty')) {
				$('#shipping-district, #shipping-shipping').prop('disabled', true);

				$('#shipping-district').empty().html(`<option value="0">-- Select District --</option>`);
				$('#shipping-shipping').empty().html(`<option value="0">-- Select Shipping --</option>`);

				$('#modal-add-address').modal('show');

				return;
			}

			$('.address-box').removeClass('active');
			$(this).addClass('active');

			const provinceId = $(this).attr('data-province-id');
			const cityId = $(this).attr('data-city-id');
			const districtId = $(this).attr('data-district-id');

			getCourier(provinceId, cityId, districtId);
		});

		$('.modal-voucher').click(function() {
			$('#modal-voucher').modal({
				backdrop: 'static',
				keyboard: false
			});
		});

		$('.payment-box .bank').click(function() {
			$('.payment-box .bank').removeClass('active');
			$(this).addClass('active');
		});

		$('.set-address').click(function() {
			const addressId = $('.address-box.active').attr('data-address-id');
			const shippingId = $('.courier-box.active').attr('data-shipping-id');
			const shippingPrice = $('.courier-box.active').attr('data-price');

			setAddress(addressId, shippingId, shippingPrice);
		});

		$('#shipping-province').change(function() {
			$('#shipping-city, #shipping-district, #shipping-shipping').prop('disabled', true);

			$('#shipping-city').empty().html(`<option value="0">-- Select City --</option>`);
			$('#shipping-district').empty().html(`<option value="0">-- Select District --</option>`);
			$('#shipping-shipping').empty().html(`<option value="0">-- Select Shipping --</option>`);

			const provinceId = $('#shipping-province').val();

			$.ajax({
	            data: {
	                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
	            },
	            dataType: 'JSON',
	            error: function() {
	            	alert('Server Error.');
	            },
	            success: function(data) {
	                if (data.status == 'success') {
	                	let cityList = `<option value="0">-- Select City --</option>`;

	                	$.each(data.arr_city, function(key, city) {
	                		cityList += `<option value="`+ city.id +`">`+ city.name +`</option>`;
	                	});

	                	$('#shipping-city').prop('disabled', false).empty().append(cityList);
	                }
	                else {
	                    alert(data.message);
	                }
	            },
	            type : 'POST',
	            url : '<?= base_url(); ?>ajax/ajax_get_city/'+ provinceId +'/'
	        });
		});

		$('#shipping-city').change(function() {
			$('#shipping-district, #shipping-shipping').prop('disabled', true);

			$('#shipping-district').empty().html(`<option value="0">-- Select District --</option>`);
			$('#shipping-shipping').empty().html(`<option value="0">-- Select Shipping --</option>`);

			const provinceId = $('#shipping-province').val();
			const cityId = $('#shipping-city').val();

			$.ajax({
	            data: {
	                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
	            },
	            dataType: 'JSON',
	            error: function() {
	            	alert('Server Error.');
	            },
	            success: function(data) {
	                if (data.status == 'success') {
	                	let districtList = `<option value="0">-- Select District --</option>`;

	                	$.each(data.arr_district, function(key, district) {
	                		districtList += `<option value="`+ district.id +`">`+ district.name +`</option>`;
	                	});

	                	$('#shipping-district').prop('disabled', false).empty().append(districtList);
	                }
	                else {
	                    alert(data.message);
	                }
	            },
	            type : 'POST',
	            url : '<?= base_url(); ?>ajax/ajax_get_district/'+ provinceId +'/'+ cityId +'/'
	        });
		});

		$('.submit-address').click(function() {
			submitAddress();
		});

		$('.voucher-button').click(function() {
			const voucherId = $(this).attr('data-voucher-id');
			const voucherCode = $(this).attr('data-code');
			const discount = $(this).attr('data-discount');
			const shippingDiscount = $(this).attr('data-shipping-discount');

			setVoucher(voucherId, voucherCode, discount, shippingDiscount);
		});

		initCourierEvent();
	}

	function initCourierEvent() {
		$('.courier-box').click(function() {
			$('.courier-box').removeClass('active');
			$(this).addClass('active');

			calculateShipping();
		});
	}

	function getCourier(provinceId, cityId, districtId) {
		$('.courier-container').empty();

		$.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                	let shippingList = ``;

                	$.each(data.arr_shipping, function(key, shipping) {
                		if (key > 0) {
                			shippingList += `<div class="courier-box" data-shipping-id="`+ shipping.id +`" data-price="`+ shipping.price +`"><div>`+ shipping.type +` `+ shipping.number +`</div><div class="">`+ shipping.price_display +`</div><div class="">`+ shipping.etd +`</div><div class="image"><img src="<?= base_url(); ?>assets/images/main/`+ shipping.type +`.png"></div></div>`;
                		}
                		else {
                			shippingList += `<div class="courier-box active" data-shipping-id="`+ shipping.id +`" data-price="`+ shipping.price +`"><div>`+ shipping.type +` `+ shipping.number +`</div><div class="">`+ shipping.price_display +`</div><div class="">`+ shipping.etd +`</div><div class="image"><img src="<?= base_url(); ?>assets/images/main/`+ shipping.type +`.png"></div></div>`;
                		}
                	});

                	$('.courier-container').append(shippingList);

                	calculateShipping();
                	initCourierEvent();
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_get_shipping/'+ provinceId +'/'+ cityId +'/'+ districtId +'/'
        });
	}

	function setAddress(addressId, shippingId, price) {
		$('.set-address').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	address_id: addressId,
            	shipping_id: shippingId,
            	price: price,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                	$('.set-address').html('Continue to Payment');

                	$('#modal-payment').modal({
						backdrop: 'static',
						keyboard: false
					});
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_set_address/1/'
        });
	}

	function setVoucher(voucherId, voucherCode, discount, shippingDiscount) {
		$('.voucher-'+ voucherId).html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	voucher_code: voucherCode,
            	discount: discount,
            	shipping_discount: shippingDiscount,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.voucher-'+ voucherId).html(`Gunakan Voucher`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	window.location.reload();
                }
                else {
                    alert(data.message);
                    $('.voucher-'+ voucherId).html(`Gunakan Voucher`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_set_discount/'
        });
	}

	function submitAddress() {
		let countError = validate();

		if (countError > 0) {
			return;
		}

		$('.submit-address').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	label: $('input[name="shipping-label"]').val(),
            	name: $('input[name="shipping-name"]').val(),
            	phone: $('input[name="shipping-phone"]').val(),
            	email: $('input[name="shipping-email"]').val(),
            	address_line_1: $('input[name="shipping-address-line-1"]').val(),
            	address_line_2: $('input[name="shipping-address-line-2"]').val(),
            	address_line_3: $('input[name="shipping-address-line-3"]').val(),
            	postcode: $('input[name="shipping-postcode"]').val(),
            	province_id: $('#shipping-province').val(),
            	city_id: $('#shipping-city').val(),
            	district_id: $('#shipping-district').val(),
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	$('.submit-address').html('Submit');
            	alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                	window.location.reload();
                }
                else {
                	$('.submit-address').html('Submit');
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_save_address/'
        });
	}

	function submitOrder() {
		const paymentMethod = $('.payment-box .bank.active').attr('data-bank');
		const points = ($('.checkout-box-container').hasClass('active')) ? parseInt(`<?= $max_use_points; ?>`) : 0;

		$('.order-submit').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	method: paymentMethod,
            	points: 0,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.order-submit').html(`Bayar Sekarang`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	<? foreach ($cart_record['arr_cart'] as $cart): ?>
						<? if ($cart->product_id == 1): ?>
							arrProductId.push('NPRO-000001');
						<? elseif ($cart->product_id == 3): ?>
							arrProductId.push('NPRO-000002');
						<? elseif ($cart->product_id == 4): ?>
							arrProductId.push('NPRO-000003');
						<? elseif ($cart->product_id == 11): ?>
							arrProductId.push('NKIT-000011');
						<? elseif ($cart->product_id == 13): ?>
							arrProductId.push('NKIT-000012');
						<? elseif ($cart->product_id == 16): ?>
							arrProductId.push('NPRO-000009');
						<? endif; ?>
					<? endforeach; ?>

                	if (paymentMethod != 'kredivo') {
                		window.location.href = data.invoice.invoice_url + '#' + paymentMethod;
                	}
                	else {
                		window.location.href = data.invoice.invoice_url;
                	}
                }
                else {
                    alert(data.message);
                    $('.order-submit').html(`Bayar Sekarang`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_save_order/'
        });
	}
</script>
</html>