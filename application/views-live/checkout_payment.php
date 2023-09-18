<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="checkout">
		<div class="container normal margin-top-45px">
			<div class="checkout-container">
				<div class="row margin-top-30px">
					<div class="col-12">
						<div class="checkout-breadcrumb">
							<div class="">Address</div>
							<div class="">
								<img src="<?= base_url(); ?>assets/images/main/arrow-right.png">
							</div>
							<div class="active">Payment</div>
						</div>
					</div>
				</div>

				<div class="row margin-top-30px d-none d-sm-block">
					<div class="col-12">
						<div class="title">Payment</div>
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

						<? if (count($arr_voucher) > 0): ?>
							<div class="voucher-box margin-top-30px">
								<button class="main transparent modal-voucher">Add Voucher Code</button>
							</div>
						<? endif; ?>
					</div>

					<div class="col-12 col-sm-8">
						<div class="margin-top-15px">
							<div class="checkout-title">Shipping Details</div>
						</div>

						<div class="row margin-top-15px">
							<div class="col-12 col-sm-6">
								<div><?= $address_record['shipping_name']; ?></div>
								<div><?= $address_record['shipping_phone']; ?></div>
								<div><?= $address_record['shipping_email']; ?></div>

								<div class="margin-top-15px">Courier: <?= $shipping->type; ?> <?= $shipping->name; ?></div>
							</div>
							<div class="col-12 col-sm-6">
								<div><?= $address_record['shipping_address_line_1']; ?></div>
								<div><?= $address_record['shipping_address_line_2']; ?></div>
								<div><?= $address_record['shipping_address_line_3']; ?></div>
								<div><?= $shipping->district_name; ?>, <?= $shipping->city_name; ?></div>
								<div><?= $shipping->province_name; ?> <?= $address_record['shipping_postcode']; ?></div>
							</div>
						</div>

						<div class="margin-top-30px">
							<div class="checkout-title">Payment Method</div>
						</div>

						<div class="row margin-top-15px row-eq-height align-items-center">
							<div class="col-12 col-sm-3">Bank Transfer</div>
							<div class="col-12 col-sm-9">
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
							<div class="col-12 col-sm-3">Credit Card</div>
							<div class="col-12 col-sm-9">
								<div class="payment-box">
									<div class="bank bg-cover" data-bank="credit-card" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/visa.jpg);"></div>
									<div class="bank bg-cover" data-bank="credit-card" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/mastercard.jpg);"></div>
									<div class="bank bg-cover" data-bank="credit-card" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/jcb.jpg);"></div>
								</div>
							</div>
						</div>

						<div class="row margin-top-15px row-eq-height align-items-center">
							<div class="col-12 col-sm-3">E-Wallet</div>
							<div class="col-12 col-sm-9">
								<div class="payment-box">
									<div class="bank bg-cover" data-bank="shopeepay" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/shopeepay.jpg);"></div>
									<div class="bank bg-cover" data-bank="ovo" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/ovo.jpg);"></div>
									<div class="bank bg-cover" data-bank="ewallet" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/dana.jpg);"></div>
									<div class="bank bg-cover" data-bank="ewallet" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/linkaja.jpg);"></div>
								</div>
							</div>
						</div>

						<div class="row margin-top-15px row-eq-height align-items-center">
							<div class="col-12 col-sm-3">Paylater</div>
							<div class="col-12 col-sm-9">
								<div class="payment-box">
									<div class="bank bg-cover" data-bank="kredivo" style="background-image: url(<?= base_url(); ?>assets/images/main/payment/kredivo.jpg);"></div>
								</div>
							</div>
						</div>

						<div class="row margin-top-30px">
							<div class="col-12 text-center">
								<button class="main black payment-button">Continue to Payment</button>
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
		checkoutClick();
	});

	function checkoutClick() {
		$('.checkout-box-container').click(function() {
			$(this).toggleClass('active');

			if ($(this).hasClass('active')) {
				const points = parseInt(`<?= $max_use_points; ?>`);
				const total = parseInt(`<?= $cart_record['total']; ?>`) - points;
				const totalDisplay = 'IDR ' + $.number(total, 0, ',', '.');

				$('.price.points').html(`IDR <?= $max_use_points_display; ?>`);
				$('.used-points').html(`(<?= $max_use_points_display; ?> pts)`);
				$('.price.total').html(totalDisplay);
			}
			else {
				$('.price.points').html(`IDR 0`);
				$('.used-points').html(``);
				$('.price.total').html(`<?= $cart_record['total_display']; ?>`);
			}
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

		$('.payment-button').click(function() {
			submitOrder();
		});

		$('.voucher-button').click(function() {
			const voucherId = $(this).attr('data-voucher-id');
			const voucherCode = $(this).attr('data-code');
			const discount = $(this).attr('data-discount');
			const shippingDiscount = $(this).attr('data-shipping-discount');

			setVoucher(voucherId, voucherCode, discount, shippingDiscount);
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

	function submitOrder() {
		const paymentMethod = $('.payment-box .bank.active').attr('data-bank');
		const points = ($('.checkout-box-container').hasClass('active')) ? parseInt(`<?= $max_use_points; ?>`) : 0;

		$('.payment-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	method: paymentMethod,
            	points: points,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.payment-button').html(`Continue to Payment`);
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

					fbq("track", "Purchase", {
				  		content_ids: arrProductId,
						content_type: 'Product',
						num_items: '<?= count($cart_record['arr_cart']); ?>',
						value: '<?= $cart_record['subtotal']; ?>' ,
				  		currency:'IDR'
				  	});

                	if (paymentMethod != 'Kredivo') {
                		window.location.href = data.invoice.invoice_url + '#' + paymentMethod;
                	}
                	else {
                		window.location.href = data.invoice.invoice_url;
                	}
                }
                else {
                    alert(data.message);
                    $('.payment-button').html(`Continue to Payment`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_save_order/'
        });
	}
</script>
</html>