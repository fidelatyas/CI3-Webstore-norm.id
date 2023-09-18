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
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/arrow-right.png">
							</div>
							<div class="">Payment</div>
						</div>
					</div>
				</div>

				<? if ($reseller): ?>
					<div class="row margin-top-30px">
						<div class="col-sm-3 d-none d-sm-block"></div>
						<div class="col-12 col-sm-6 text-center">
							<div class="font-semibold">Terima kasih sudah join program reseller Norm.</div>
							<div class="margin-top-15px">Selanjutnya Anda diwajibkan membeli paket Ultimate Gentleman Set untuk mendapatkan pengalaman menggunakan produk Norm secara langsung.</div>
						</div>
						<div class="col-sm-3 d-none d-sm-block"></div>
					</div>
				<? endif; ?>

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
									<div class="price subtotal"><?= $cart_record['subtotal_display']; ?></div>
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
							<div class="checkout-title">Input your Address</div>
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
									<div class="price subtotal"><?= $cart_record['subtotal_display']; ?></div>
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

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
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
		$('input[name="shipping-postcode"]').change(function() {
			$('.courier-container').empty();

			const postcode = $(this).val();

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
	                			shippingList += `<div class="courier-box" data-shipping-id="`+ shipping.id +`" data-price="`+ shipping.price +`"><div>`+ shipping.name +`</div><div class="">`+ shipping.price_display +`</div><div class="">`+ shipping.sla +`</div><div class="image"><img src="<?= base_url(); ?>assets/images/main/`+ shipping.image +`"></div></div>`;
	                		}
	                		else {
	                			shippingList += `<div class="courier-box active" data-shipping-id="`+ shipping.id +`" data-price="`+ shipping.price +`"><div>`+ shipping.name +`</div><div class="">`+ shipping.price_display +`</div><div class="">`+ shipping.sla +`</div><div class="image"><img src="<?= base_url(); ?>assets/images/main/`+ shipping.image +`"></div></div>`;
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
	            url : '<?= base_url(); ?>ajax/ajax_get_shipment/'+ postcode +'/'
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

		<? if ($reseller): ?>
			$('input[name="shipping-name"]').val(`<?= $reseller->name; ?>`);
			$('input[name="shipping-phone"]').val(`<?= $reseller->phone; ?>`);
			$('input[name="shipping-email"]').val(`<?= $reseller->email; ?>`);
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