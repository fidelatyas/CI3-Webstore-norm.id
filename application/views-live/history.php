<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container normal">
			<div class="account-container margin-top-15px">
				<div class="title-2">My Account</div>
				<div class="row margin-top-30px row-eq-height">
					<div class="col-12 col-sm-3">
						<div class="account-left-menu">
							<a href="<?= base_url(); ?>account/" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/my-account-icon.png">
								</div>
								<div class="text">My Details</div>
							</a>
							<a href="<?= base_url(); ?>medical-grade/" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/order-icon.png">
								</div>
								<div class="text">Order</div>
							</a>
							<a href="<?= base_url(); ?>account/recommendation/" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/recommendation-icon.png">
								</div>
								<div class="text">My Recommendation</div>
							</a>
							<a href="<?= base_url(); ?>account/history/" class="list active">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/history-icon.png">
								</div>
								<div class="text">Order History</div>
							</a>
							<a onclick="signOut();" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/logout-icon.png">
								</div>
								<div class="text">Logout</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-9">
						<div class="account-content">
							<div class="title">Order History</div>
							<? if (count($arr_order) > 0): ?>
								<? foreach ($arr_order as $order): ?>
								<div class="margin-top-30px order-container">
										<div class="header">
											<div class="date"><?= $order->number; ?></div>
											<div class="status"><?= $order->date_display; ?></div>
										</div>
										<div class="main row">
											<div class="col-12 col-sm-5">
												<div class="font-semibold">Shipping Details</div>
												<div class="margin-top-7-5px address">
													<div><?= $order->shipping_address_line_1; ?></div>
													<div><?= $order->shipping_address_line_2; ?></div>
													<div><?= $order->shipping_address_line_3; ?></div>
													<div><?= $order->shipping_district; ?>, <?= $order->shipping_city; ?></div>
													<div><?= $order->shipping_province; ?> <?= $order->shipping_postcode; ?></div>
												</div>
											</div>
											<div class="col-12 col-sm-2">
												<div class="font-semibold">Total</div>
												<div class="margin-top-7-5px"><?= $order->grand_total_display; ?></div>
											</div>
											<div class="col-12 col-sm-3">
												<div class="font-semibold">Payment</div>
												<div class="margin-top-7-5px"><?= $order->payment_status_message; ?></div>
												<div>Status: <?= $order->payment_status; ?></div>
											</div>
											<div class="col-12 col-sm-2">
												<div class="margin-top-15px">
													<button class="main transparent small width-100 open-detail" data-order-id="<?= $order->id; ?>">View Details</button>
												</div>
												<div class="margin-top-7-5px">
													<button class="main transparent small width-100 open-track" data-order-number="<?= $order->number; ?>">Track Order</button>
												</div>
											</div>
										</div>
									</div>
								<? endforeach; ?>
							<? else: ?>
								<div class="empty-box">
									<div class="margin-bottom-30px">
										<img src="<?= base_url(); ?>assets/images/main/empty-history.png">
									</div>
									<div>Anda belum melakukan pemesanan</div>
									<div class="margin-top-30px">
										<a href="<?= base_url(); ?>all-product/">
											<button class="main black">Pesan Sekarang</button>
										</a>
									</div>
								</div>
							<? endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"></div>

	<!-- modal detail -->
	<div class="modal fade order-detail" id="modal-order-detail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="title">Order Detail</div>

	      		<div class="modal-order-container"></div>

	      		<div class="margin-top-15px text-right">
	      			<button class="main transparent" data-dismiss="modal">Close</button>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<!-- modal tracking -->
	<div class="modal fade order-detail" id="modal-order-track" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="title">Track Order</div>

	      		<div class="modal-order-track-container"></div>

	      		<div class="margin-top-15px text-right">
	      			<button class="main transparent" data-dismiss="modal">Close</button>
	      		</div>
	    	</div>
	  	</div>
	</div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initHistory();
	});

	function initHistory() {
		$('.open-detail').click(function() {
			const orderId = $(this).attr('data-order-id');
			$('.open-detail').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...');

			openOrderDetail(orderId);
		});

		$('.open-track').click(function() {
			const orderNumber = $(this).attr('data-order-number');
			$('.open-track').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...');

			openTracking(orderNumber);
		});
	}

	function openOrderDetail(orderId) {
		$.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.open-detail').html('View Details');
            },
            success: function(data) {
                if (data.status == 'success') {
                	$('.modal-order-container').empty().append(data.order_list);
                	$('#modal-order-detail').modal('show');
                }
                else {
                    alert(data.message);
                }

                $('.open-detail').html('View Details');
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_get_order/'+ orderId +'/'
        });
	}

	function openTracking(orderNumber) {
		$.ajax({
            data: {
            	order_number: orderNumber,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.open-track').html('Track Order');
            },
            success: function(data) {
                if (data.status == 'success') {
                	$('.modal-order-track-container').empty().append(data.order_tracking);
                	$('#modal-order-track').modal('show');
                }
                else {
                    alert(data.message);
                }

                $('.open-track').html('Track Order');
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_track_order/'
        });
	}
</script>
</html>