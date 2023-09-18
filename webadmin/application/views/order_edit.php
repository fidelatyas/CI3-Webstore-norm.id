<!DOCTYPE html>
<html>
	<head>
		<!-- load title tag -->
		<? $this->load->view('metatag'); ?>

		<!-- load style -->
		<? $this->load->view('style'); ?>
	</head>

	<body>
		<? $this->load->view('navigation'); ?>

		<!-- breadcrumbs -->
		<div class="container">
			<div class="ui breadcrumb">
				<a class="section" href="<?= base_url(); ?>">Dashboard</a>
				<div class="divider"> / </div>
				<a class="section" href="<?= base_url(); ?>patient/all/">Order List</a>
				<div class="divider"> / </div>
				<div class="active section">Add Order</div>
			</div>
		</div>

		<!-- form start -->
		<div class="form-container">
			<div class="ui styled fluid accordion form form-accordion">
				<div class="active title">
					<i class="dropdown icon"></i>
					Detail
				</div>
				<div class="active content">
					<div class="ui transition visible form">
						<div class="four fields">
							<div class="required field">
						      	<label>Number</label>
						        <input type="text" class="form-input" name="number" placeholder="[AUTO]" data-accordion-idx="0" readonly>
					      	</div>
					      	<div class="field">
						      	<label>Patient</label>
						        <input type="text" class="form-input" name="patient" placeholder="Patient Name" data-accordion-idx="0" readonly>
					      	</div>
					      	<div class="field">
					      		<label>Shipping Status</label>
						        <select id="status" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="1">
						        	<option value="Pending">Pending</option>
						        	<option value="Processing">Processing</option>
						        	<option value="Delivered">Delivered</option>
						        	<option value="Cancelled">Cancelled</option>
								</select>
					      	</div>
					      	<div class="field">
						      	<label>Payment Status</label>
						        <select id="payment-status" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="1">
						        	<option value="Pending">Pending</option>
						        	<option value="Paid">Paid</option>
						        	<option value="EXPIRED">EXPIRED</option>
						        	<option value="deny">deny</option>
						        	<option value="Refund">Refund</option>
								</select>
					      	</div>
						</div>
						<div class="four fields">
							<div class="field">
						      	<label>Order Date</label>
						        <input type="text" class="form-input" name="date" placeholder="Order date" data-accordion-idx="0" readonly>
					      	</div>
							<div class="field">
						      	<label>Payment Date</label>
						        <input type="text" class="form-input" name="payment-date" placeholder="Payment Date" data-accordion-idx="0" readonly>
					      	</div>
							<div class="field">
						      	<label>Processed Date</label>
						        <input type="text" class="form-input" name="processed-date" placeholder="Processed Date" data-accordion-idx="0" readonly>
					      	</div>
					      	<div class="field">
						      	<label>Delivered Date</label>
						        <input type="text" class="form-input" name="delivered-date" placeholder="Delivered Date" data-accordion-idx="0" readonly>
					      	</div>
						</div>
						<div class="four fields">
					      	<div class="field">
						      	<label>Print Eticket</label>
						      	<? foreach ($order->arr_product as $product): ?>
						       		<button class="main small red font-10" onclick="printEticket('<?= $order->id; ?>', '<?= $product->id; ?>');"><?= $product->name; ?></button>
						       	<? endforeach;; ?>
					      	</div>

					      	<? if (count($arr_history) > 0): ?>
					      		<div class="field">
							      	<label>Tracking History</label>
							        <button class="main small red font-10 view-history">View History</button>
						      	</div>

						      	<div class="field">
							      	<label>Courier AWB</label>
							        <input type="text" class="form-input" name="tracking-id" placeholder="Delivered Date" data-accordion-idx="0" readonly>
						      	</div>
					      	<? endif; ?>

					      	<div class="field">
						      	<label>Open Payment Url</label>
						      	<a href="<?= $order->payment_url; ?>" target="_blank">
							       	<button class="main small red font-10">Open Payment</button>
							    </a>
					      	</div>
						</div>
						<div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>patient/all/">
					    			<button class="main small red font-10">Return</button>
					    		</a>
					    	</div>
					    	<div class="field text-right">
					    		<button class="main small blue font-10" onclick="updateForm(1);">Next</button>
					    	</div>
					    </div>
					</div>
				</div>

				<div class="title">
					<i class="dropdown icon"></i>
					Shipping Details
				</div>
				<div class="content">
					<div class="ui transition visible form">
						<div class="two fields">
							<div class="required field">
						      	<label>Shipping Name</label>
						        <input type="text" class="form-input data-important" name="shipping-name" placeholder="Shipping Name" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
					      	<div class="required field">
						      	<label>Shipping Phone</label>
						        <input type="text" class="form-input data-important" name="shipping-phone" placeholder="Shipping Phone" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
						</div>
						<div class="two fields">
					      	<div class="required field">
						      	<label>Shipping Email</label>
						        <input type="text" class="form-input data-important" name="shipping-email" placeholder="Shipping Email" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
					      	<div class="field">
						      	<label>Shipping Address</label>
						       	<input type="text" class="form-input data-important" name="shipping-address-line-1" placeholder="Address Line 1" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
						        <input type="text" class="margin-top-7-5px form-input" name="shipping-address-line-2" placeholder="Address Line 2" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
						        <input type="text" class="margin-top-7-5px form-input" name="shipping-address-line-3" placeholder="Address Line 3" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
						</div>
						<div class="two fields">
					      	<div class="required field">
						      	<label>Province</label>
						        <input type="text" class="form-input data-important" name="province" placeholder="Province" data-accordion-idx="1" readonly>
					      	</div>
					      	<div class="required field">
						      	<label>City</label>
						        <input type="text" class="form-input data-important" name="city" placeholder="City" data-accordion-idx="1" readonly>
					      	</div>
						</div>
						<div class="two fields">
					      	<div class="required field">
						      	<label>District</label>
						        <input type="text" class="form-input data-important" name="district" placeholder="District" data-accordion-idx="1" readonly>
					      	</div>
					      	<div class="required field">
						      	<label>Shipping Postcode</label>
						        <input type="text" class="form-input" name="shipping-postcode" placeholder="Shipping Postcode" data-accordion-idx="1" <? if ($order->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
						</div>

						<div class="two fields">
					    	<div class="field text-left">
					    		<button class="main small blue font-10" onclick="updateForm(0);">Prev</button>
					    	</div>
					    	<div class="field text-right">
					    		<button class="main small blue font-10" onclick="updateForm(2);">Next</button>
					    	</div>
					    </div>
					</div>
				</div>

				<div class="title">
					<i class="dropdown icon"></i>
					Products
				</div>
				<div class="content">
					<div class="ui transition visible form">
						<div class="field">
							<table class="ui compact table table-item">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Discount</th>
										<th>Total</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="product-list">
									<? foreach ($order->arr_order_item as $order_item): ?>
										<tr>
											<td><?= $order_item->product_name; ?></td>
											<td><?= $order_item->price_display; ?></td>
											<td><?= $order_item->quantity_display; ?></td>
											<td><?= $order_item->discount_display; ?></td>
											<td><?= $order_item->total_display; ?></td>
											<td class="right aligned">
											</td>
										</tr>
									<? endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="4" class="right aligned font-semibold">Subtotal</td>
										<td class="subtotal-container" data-subtotal=""><?= $order->subtotal_display; ?></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="4" class="right aligned font-semibold">Shipping</td>
										<td class="shipping-container" data-shipping="0"><?= $order->shipping_display; ?></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="3"></td>
										<td class="right aligned font-semibold">Discount</td>
										<td class="discount-container" data-discount="0"><?= $order->discount_display; ?></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="4" class="right aligned font-semibold">Grand Total</td>
										<td class="grand-total-container" data-grand-total="0"><?= $order->grand_total_display; ?></td>
										<td></td>
									</tr>
								</tfoot>
							</table>
						</div>

						<div class="two fields">
					    	<div class="field">
					    		<button class="main small blue font-10" onclick="updateForm(1);">Prev</button>
					    	</div>
					    	<div class="field text-right">
					    		<button class="main small blue font-10" onclick="submitForm();">Submit</button>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<? $this->load->view('popup'); ?>

		<!-- Modal Add product -->
		<div class="ui modal-add-product tiny modal">
		  	<div class="header">Add Product</div>
		  	<div class="content">
			    <div class="ui form">
			    	<div class="field">
				      	<label>Product</label>
				        <select id="product" class="ui fluid dropdown form-input form-dropdown">
			        		<option value="0" data-product-name="-" data-product-price="0" data-product-weight="0">-- Select Product --</option>

				        	<? foreach ($arr_product as $product): ?>
								<option value="<?= $product->id; ?>" data-product-name="<?= $product->name; ?>" data-product-price="<?= $product->price; ?>" data-product-weight="<?= $product->weight; ?>"><?= $product->name; ?></option>
							<? endforeach; ?>
						</select>
			      	</div>
			      	<div class="two fields">
			      		<div class="field">
					      	<label>Quantity</label>
					        <input type="text" class="form-input number" name="qty" placeholder="Qty">
				      	</div>
				      	<div class="field">
					      	<label>Discount (%)</label>
					        <input type="text" class="form-input number" name="discount" placeholder="Discount">
				      	</div>
			      	</div>
			      	<div class="field">
			      		<label>Price</label>
					    <input type="text" class="form-input number" name="price" placeholder="price" readonly>
			      	</div>
			      	<div class="field">
			      		<label>Total</label>
					    <input type="text" class="form-input number" name="total" placeholder="Total" readonly>
			      	</div>
			    </div>
		  	</div>
		  	<div class="actions">
		    	<button class="main red small cancel">Cancel</button>
		    	<button class="main red small" onclick="addProduct();">Add</button>
		  	</div>
		</div>

		<div class="ui modal-history tiny modal">
		  	<div class="header">Tracking History</div>
		  	<div class="content">
		  		<div class="font-semibold">Shipping Details</div>
		  		<div>Courier: <?= $order->courier; ?></div>
			  	<div>AWB: <?= $order->shipping_courier_tracking_id; ?></div>
			  	<div>Booking ID: <?= $order->number; ?></div>
			  	<div>Price: <?= $order->shipping_display; ?></div>
			  	<div>Insurance: <?= $order->insurance_display; ?></div>

			    <div class="history-container margin-top-7-5px">
			    	<? foreach ($arr_history as $key => $history): ?>
				    	<div class="list <? if ($key <= 0): ?>active<? endif; ?>">
				    		<div class="font-semibold font-14"><?= $history->rowstate_name; ?></div>
				    		<div class="color-bbb"><?= $history->create_date; ?></div>
				    		<div class=""><?= $history->description; ?></div>
				    	</div>
				    <? endforeach; ?>
			    </div>
		  	</div>
		  	<div class="actions">
		    	<button class="main red small cancel">Close</button>
		  	</div>
		</div>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			reset();
			btnClick();
		});

		let productCount = 0;

		function addProduct() {
			productCount += 1;

			const productId = $('#product').val();
			const productName = $('#product option[value="'+ productId +'"]').attr('data-product-name');
			const productPrice = parseInt($('#product option[value="'+ productId +'"]').attr('data-product-price'));
			const productWeight = $('#product option[value="'+ productId +'"]').attr('data-product-weight');
			const quantity = $('input[name="qty"]').val();
			const discount = $('input[name="discount"]').val();
			const total = $('input[name="total"]').val();

			if (productId <= 0 || quantity <= 0) {
				return;
			}

			const productPriceDisplay = $.number(productPrice, 0, ',', '.');
			const totalDisplay = $.number(total, 0, ',', '.');

			const table = `<tr id="product-`+ productCount +`" data-product-id="`+ productId +`" data-product-weight="`+ productWeight +`" data-product-price="`+ productPrice +`" data-product-qty="`+ quantity +`" data-product-discount="`+ discount +`" data-product-total="`+ total +`"><td>`+ productName +`</td><td>`+ productPriceDisplay +`</td><td>`+ quantity +`</td><td>`+ discount +`%</td><td>`+ totalDisplay +`</td><td class="right aligned"><button class="main green xs" onclick="removeProduct(`+ productCount +`);">Remove</button></td></ tr>`;

			$('.product-list').append(table);
			$('.modal-add-product.modal').modal('hide');

			calculateTotal();
		}

		function btnClick() {
			$('.add-product').click(function() {
				$('.modal-add-product.modal').modal('show').modal({
					dimmerSettings: {
						closable : false,
					}
				});
			});

			$('#product').change(function() {
				const productName = $('#product option[value="'+ $(this).val() +'"]').attr('data-product-name');
				const productPrice = parseInt($('#product option[value="'+ $(this).val() +'"]').attr('data-product-price'));
				const productWeight = $('#product option[value="'+ $(this).val() +'"]').attr('data-product-weight');

				const productPriceDisplay = $.number(productPrice, 0, '', '');

				$('input[name="qty"]').val(`1`);
				$('input[name="discount"]').val(`0`);
				$('input[name="price"], input[name="total"]').val(productPriceDisplay);
			});

			$('input[name="qty"]').change(function() {
				calculateItem();
			});

			$('input[name="discount"]').change(function() {
				const discount = ($(this).val() > 100) ? 100 : $(this).val();

				$('input[name="discount"]').val(discount);
				calculateItem();
			});

			$('#province').change(function() {
				getCity();
			});

			$('#city').change(function() {
				getDistrict();
			});

			$('#district').change(function() {
				getShipping();
			});

			$('#shipping, input[name="order-discount"], #promo').change(function() {
				calculateTotal();
			});

			$('.view-history').click(function() {
				$('.modal-history.modal').modal('show').modal({
					dimmerSettings: {
						closable : false,
					}
				});
			});
		}

		function calculateItem() {
			const price = parseInt($('input[name="price"]').val());
			const qty = parseInt($('input[name="qty"]').val());
			let discount = parseInt($('input[name="discount"]').val());

			const subtotal = price * qty;
			discount = (discount / 100) * subtotal;

			const total = subtotal - discount;
			const totalDisplay = $.number(total, 0, '', '');

			$('input[name="total"]').val(totalDisplay);
		}

		function calculateTotal() {
			let subtotal = 0;
			let weight = 0;
			let discount = parseInt($('input[name="order-discount"]').val());
			const courier = parseInt($('#shipping option[value='+ $('#shipping').val() +']').attr('data-shipping-price'));

			$.each($('.product-list tr'), function(key, product) {
				subtotal += parseInt($(product).attr('data-product-total'));
				weight += parseInt($(product).attr('data-product-weight'));
			});

			weight = (weight <= 1000) ? 1000 : weight;
			weight = Math.ceil(weight / 1000);

			let shipping = courier * weight;
			const promo = parseInt($('#promo').val());

			if (promo > 0) {
				shipping = (shipping > promo) ? shipping - promo : 0;
			}

			discount = (discount / 100) * subtotal;
			const grandTotal = subtotal - discount + shipping;

			const subtotalDisplay = $.number(subtotal, 0, '.', ',');
			const shippingDisplay = $.number(shipping, 0, '.', ',');
			const discountDisplay = $.number(discount, 0, '.', ',');
			const grandTotalDIsplay = $.number(grandTotal, 0, '.', ',');

			$('.subtotal-container').attr('data-subtotal', subtotal);
			$('.subtotal-container').html(subtotalDisplay);

			$('.shipping-container').attr('data-shipping', shipping);
			$('.shipping-container').html(shippingDisplay);

			$('.discount-container').attr('data-discount', discount);
			$('.discount-container').html(discountDisplay);

			$('.grand-total-container').attr('data-grand-total', grandTotal);
			$('.grand-total-container').html(grandTotalDIsplay);
		}

		function getCity() {
			const provinceId = $('#province').val();

			if (provinceId <= 0) {
				return;
			}

			$('#city, #district, #shipping').empty();
			$('#city').append('<option value="0">-- Select City --</option>');
			$('#district').append('<option value="0">-- Select District --</option>');
			$('#shipping').append('<option value="0" data-shipping-price="0">-- Select Shipping --</option>');

			$.ajax({
				data:{
					province_id: provinceId,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('#city').empty();
						let cityList = '<option value="0">-- Select City --</option>';

						$.each(data.arr_city, function(key, city) {
							cityList += '<option value="'+ city.id +'">'+ city.name +'</option>';
						});

						$('#city').append(cityList);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_get_city/',
			});
		}

		function getDistrict() {
			const provinceId = $('#province').val();
			const cityId = $('#city').val();

			if (provinceId <= 0 || cityId <= 0) {
				return;
			}

			$('#district, #shipping').empty();
			$('#district').append('<option value="0">-- Select District --</option>');
			$('#shipping').append('<option value="0" data-shipping-price="0">-- Select Shipping --</option>');

			$.ajax({
				data:{
					province_id: provinceId,
					city_id: cityId,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('#district').empty();
						let districtList = '<option value="0">-- Select District --</option>';

						$.each(data.arr_district, function(key, district) {
							districtList += '<option value="'+ district.id +'">'+ district.name +'</option>';
						});

						$('#district').append(districtList);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_get_district/',
			});
		}

		function getShipping() {
			const provinceId = $('#province').val();
			const cityId = $('#city').val();
			const districtId = $('#district').val();

			if (provinceId <= 0 || cityId <= 0 || districtId <= 0) {
				return;
			}

			$('#shipping').empty();
			$('#shipping').append('<option value="0" data-shipping-price="0">-- Select Shipping --</option>');

			$.ajax({
				data:{
					province_id: provinceId,
					city_id: cityId,
					district_id: districtId,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('#shipping').empty();
						let shippingList = '<option value="0" data-shipping-price="0">-- Select Shipping --</option>';

						$.each(data.arr_shipping, function(key, shipping) {
							shippingList += '<option value="'+ shipping.id +'" data-shipping-price="'+ shipping.price +'">'+ shipping.type +' '+ shipping.name +' @ IDR'+ shipping.price_display +'/kg</option>';
						});

						$('#shipping').append(shippingList);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_get_shipping/',
			});
		}

		function printEticket(orderId, productId) {
			$.ajax({
				data:{
					order_id: orderId,
					product_id: productId,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');

					submitQuery = false;
				},
				success: function(data){
					submitQuery = false;
					$('.print-receipt').html('Print Receipt');

					if (data.status == 'success') {
						var myWindow = window.open('', '', 'width = 360, height = 240');
						myWindow.document.write(data.receipt_view);

						myWindow.document.close();
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_print_eticket/',
			});
		}

		function removeProduct(row) {
			$('#product-'+row).remove();
		}

		function reset() {
			$('input').val(``);
			$('input.date').val(``);
			$('input.number').val(`0`);
			$('select').val(0);
			$('#product').dropdown(`set selected`, 0);
			$('input[name="number"]').val(`<?= $order->number; ?>`);
			$('input[name="shipping-name"]').val(`<?= $order->shipping_name; ?>`);
			$('input[name="shipping-phone"]').val(`<?= $order->shipping_phone; ?>`);
			$('input[name="shipping-email"]').val(`<?= $order->shipping_email; ?>`);
			$('input[name="shipping-address-line-1"]').val(`<?= $order->shipping_address_line_1; ?>`);
			$('input[name="shipping-address-line-2"]').val(`<?= $order->shipping_address_line_2; ?>`);
			$('input[name="shipping-address-line-3"]').val(`<?= $order->shipping_address_line_3; ?>`);
			$('input[name="shipping-postcode"]').val(`<?= $order->shipping_postcode; ?>`);

			$('input[name="date"]').val(`<?= $order->date_display; ?>`);
			$('input[name="payment-date"]').val(`<?= $order->payment_date_display; ?>`);
			$('input[name="processed-date"]').val(`<?= $order->processed_date_display; ?>`);
			$('input[name="delivered-date"]').val(`<?= $order->delivered_date_display; ?>`);

			$('#status').dropdown('set selected', `<?= $order->status; ?>`);
			$('#payment-status').dropdown('set selected', `<?= $order->payment_status; ?>`);

			$('input[name="tracking-id"]').val(`<?= $order->shipping_courier_tracking_id; ?>`);

			$('input[name="province"]').val(`<?= $order->shipping_province; ?>`);
			$('input[name="city"]').val(`<?= $order->shipping_city; ?>`);
			$('input[name="district"]').val(`<?= $order->shipping_district; ?>`);

			$('input[name="patient"]').val(`<?= $patient->number; ?> - <?= $patient->name; ?>`);

			$('.field').removeClass('error');
		}

		function updateForm(idx) {
			$('.form-accordion').accordion('open', idx);
		}

		function submitForm() {
			$('.field').removeClass('error');

			/* validate form */
			const found = validate();

			if (found > 0) {
				return;
			}

			$('.ui.form').addClass('loading');

			/* Insert Data */
			$.ajax({
				data:{
					status: $('#status').val(),
					payment_status: $('#payment-status').val(),
					shipping_name: $('input[name="shipping-name"]').val(),
					shipping_email: $('input[name="shipping-email"]').val(),
					shipping_phone: $('input[name="shipping-phone"]').val(),
					shipping_address_line_1: $('input[name="shipping-address-line-1"]').val(),
					shipping_address_line_2: $('input[name="shipping-address-line-2"]').val(),
					shipping_address_line_3: $('input[name="shipping-address-line-3"]').val(),
					shipping_postcode: $('input[name="shipping-postcode"]').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>order/add/').hide();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>patient/order/<?= $patient->id; ?>/');
						const message = 'You have successfully update <?= $order->number; ?> to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_edit/<?= $order->id; ?>/',
			});
		}
	</script>
</html>