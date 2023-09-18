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
								<div class="price total"><?= $cart_record['total_display']; ?></div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-8">
						<div class="title d-block d-sm-none">Address</div>

						<div class="margin-top-15px">
							<div class="checkout-title">Select Your Courier</div>
						</div>

						<div class="row margin-top-30px">
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
									<div class="label">Email</div>
									<input type="text" name="shipping-email" class="data-important" placeholder="Your Email..">
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

						<div class="margin-top-30px">
							<div class="checkout-title">Select Your Courier</div>
						</div>

						<div class="margin-top-15px">
							<div class="courier-container">
							</div>
						</div>

						<div class="row margin-top-30px text-center">
							<div class="col-12">
								<a href="<?= base_url(); ?>all-product/">
									<button class="main transparent">Continue Shopping</button>
								</a>
								<button class="main black payment" onclick="submitAddress();">Proceed to Payment</button>
							</div>
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
					</div>
				</div>
			</div>
		</div>
	</section>

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
		checkoutChange();
		reset();
	});

	function calculateShipping() {
		let total = parseInt(`<?= $cart_record['total']; ?>`);
		const shippingId = $('#shipping-shipping').val();

		const shipping = parseInt($('.courier-box.active').attr('data-price'));

		total = total + shipping;
		const shippingDisplay = 'IDR ' + $.number(shipping, 0, ',', '.');
		const totalDisplay = 'IDR ' + $.number(total, 0, ',', '.');

		$('.price.shipping').html(shippingDisplay);
		$('.price.total').html(totalDisplay);

	}

	function checkoutChange() {
		$('#shipping-province').change(function() {
			$('#shipping-city, #shipping-district, #shipping-shipping').prop('disabled', true);
			$('.courier-container').empty();

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
			$('.courier-container').empty();

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

		$('#shipping-district').change(function() {
			$('#shipping-shipping').prop('disabled', true);
			$('.courier-container').empty();

			$('#shipping-shipping').empty().html(`<option value="0">-- Select Shipping --</option>`);

			const provinceId = $('#shipping-province').val();
			const cityId = $('#shipping-city').val();
			const districtId = $('#shipping-district').val();

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

	        $('#shipping-shipping').change(function() {
	        	calculateShipping();
	        });
		});
	}

	function initCourierEvent() {
		$('.courier-box').click(function() {
			$('.courier-box').removeClass('active');
			$(this).addClass('active');

			calculateShipping();
		});
	}

	function reset() {
		$('input').val(``);
		$('select').val(`0`);

		<? if ($account): ?>
			$('input[name="shipping-name"]').val(`<?= $account->name; ?>`);
			$('input[name="shipping-phone"]').val(`<?= $account->phone; ?>`);
			$('input[name="shipping-email"]').val(`<?= $account->email; ?>`);
		<? endif; ?>
	}

	function submitAddress() {
		let countError = validate();

		if (countError > 0) {
			return;
		}

		$('.payment').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	shipping_name: $('input[name="shipping-name"]').val(),
            	shipping_phone: $('input[name="shipping-phone"]').val(),
            	shipping_email: $('input[name="shipping-email"]').val(),
            	shipping_address_line_1: $('input[name="shipping-address-line-1"]').val(),
            	shipping_address_line_2: $('input[name="shipping-address-line-2"]').val(),
            	shipping_address_line_3: $('input[name="shipping-address-line-3"]').val(),
            	shipping_postcode: $('input[name="shipping-postcode"]').val(),
            	shipping_id: $('.courier-box.active').attr('data-shipping-id'),
            	price: $('.courier-box.active').attr('data-price'),
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                	window.location.href = '<?= base_url(); ?>checkout/payment/';
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_set_address/'
        });
	}
</script>
</html>