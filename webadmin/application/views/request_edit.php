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
				<a class="section" href="<?= base_url(); ?>request/all/">Request List</a>
				<div class="divider"> / </div>
				<div class="active section">Edit Request</div>
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
						<div class="three fields">
							<div class="field">
						      	<label>Number</label>
						        <input type="text" class="form-input" name="number" placeholder="[AUTO]" data-accordion-idx="0">
					      	</div>
					      	<div class="required field">
						      	<label>Date</label>
						        <input type="text" class="form-input date data-important" name="date" placeholder="Date" data-accordion-idx="0">
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
						</div>

						<div class="five fields">
							<div class="field">
						      	<label>Processed Date</label>
						        <input type="text" class="form-input" name="processed-date" placeholder="Processed Date" data-accordion-idx="0" readonly>
					      	</div>
					      	<div class="field">
						      	<label>Delivered Date</label>
						        <input type="text" class="form-input" name="delivered-date" placeholder="Delivered Date" data-accordion-idx="0" readonly>
					      	</div>

					      	<div class="field">
						      	<label>Print Eticket</label>
						      	<? foreach ($request->arr_product as $product): ?>
						       		<button class="main small red font-10" onclick="printEticket('<?= $request->id; ?>', '<?= $product->id; ?>');"><?= $product->name; ?></button>
						       	<? endforeach;; ?>
					      	</div>

					      	<? if (count($arr_history) > 0): ?>
					      		<div class="field">
							      	<label>Tracking History</label>
							        <button class="main small red font-10 view-history">View History</button>
						      	</div>
					      	<? endif; ?>

					      	<div class="field">
						      	<label>Courier AWB</label>
						        <input type="text" class="form-input" name="tracking-id" placeholder="Delivered Date" data-accordion-idx="0" readonly>
					      	</div>
						</div>

					    <div class="required field">
					      	<label>Description</label>
					        <input type="text" class="form-input data-important" name="name" placeholder="Description" data-accordion-idx="0">
				      	</div>

					    <div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>request/all/">
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
						        <input type="text" class="form-input data-important" name="shipping-name" placeholder="Shipping Name" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
					      	<div class="required field">
						      	<label>Shipping Phone</label>
						        <input type="text" class="form-input data-important" name="shipping-phone" placeholder="Shipping Phone" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
						</div>
						<div class="two fields">
					      	<div class="required field">
						      	<label>Shipping Email</label>
						        <input type="text" class="form-input data-important" name="shipping-email" placeholder="Shipping Email" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
					      	</div>
					      	<div class="field">
						      	<label>Shipping Address</label>
						       	<input type="text" class="form-input data-important" name="shipping-address-line-1" placeholder="Address Line 1" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
						        <input type="text" class="margin-top-7-5px form-input" name="shipping-address-line-2" placeholder="Address Line 2" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
						        <input type="text" class="margin-top-7-5px form-input" name="shipping-address-line-3" placeholder="Address Line 3" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
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
						        <input type="text" class="form-input" name="shipping-postcode" placeholder="Shipping Postcode" data-accordion-idx="1" <? if ($request->status != 'Pending'): ?>readonly <? endif; ?>>
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
							<button class="main small blue font-12 add-product">Add Product</button>
						</div>

						<div class="field">
							<table class="ui compact table table-item">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Total</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="product-list" data-subtotal="0" data-shipping="0">
									<? foreach ($request->arr_request_item as $request_item): ?>
										<tr>
											<td><?= $request_item->product_name; ?></td>
											<td><?= $request_item->price_display; ?></td>
											<td><?= $request_item->quantity_display; ?></td>
											<td><?= $request_item->total_display; ?></td>
											<td class="right aligned">
											</td>
										</tr>
									<? endforeach; ?>
								</tbody>
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
			      	<div class="field">
			      		<label>Price</label>
					    <input type="text" class="form-input number" name="price" placeholder="price" readonly>
			      	</div>
			      	<div class="field">
				      	<label>Quantity</label>
				        <input type="text" class="form-input number" name="qty" placeholder="Qty">
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
		  	<div class="header">Order History</div>
		  	<div class="content">
		  		<div class="font-semibold">Shipping Details</div>
		  		<div>Courier: <?= $request->courier; ?></div>
			  	<div>AWB: <?= $request->shipping_courier_tracking_id; ?></div>
			  	<div>Booking ID: <?= $request->number; ?></div>
			  	<div>Insurance: <?= $request->insurance_display; ?></div>

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
			const total = $('input[name="total"]').val();

			if (productId <= 0 || quantity <= 0) {
				return;
			}

			const productPriceDisplay = $.number(productPrice, 0, ',', '.');
			const totalDisplay = $.number(total, 0, ',', '.');

			const table = `<tr id="product-`+ productCount +`" data-product-id="`+ productId +`" data-product-weight="`+ productWeight +`" data-product-price="`+ productPrice +`" data-product-qty="`+ quantity +`" data-product-total="`+ total +`"><td>`+ productName +`</td><td>`+ productPriceDisplay +`</td><td>`+ quantity +`</td><td>`+ totalDisplay +`</td><td class="right aligned"><button class="main green xs" onclick="removeProduct(`+ productCount +`);">Remove</button></td></ tr>`;

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

			$('#province').change(function() {
				getCity();
			});

			$('#city').change(function() {
				getDistrict();
			});

			$('#district').change(function() {
				getShipping();
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

			const subtotal = price * qty;

			const total = subtotal;
			const totalDisplay = $.number(total, 0, '', '');

			$('input[name="total"]').val(totalDisplay);
		}

		function calculateTotal() {
			let subtotal = 0;
			let weight = 0;
			const courier = parseInt($('#shipping option[value='+ $('#shipping').val() +']').attr('data-shipping-price'));

			$.each($('.product-list tr'), function(key, product) {
				subtotal += parseInt($(product).attr('data-product-total'));
				weight += parseInt($(product).attr('data-product-weight'));
			});

			weight = (weight <= 1000) ? 1000 : weight;
			weight = Math.ceil(weight / 1000);

			let shipping = courier * weight;

			$('.product-list').attr('data-subtotal', subtotal);

			$('.product-list').attr('data-shipping', shipping);
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

		function printEticket(requestId, productId) {
			$.ajax({
				data:{
					request_id: requestId,
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
				url: '<?= base_url() ?>request/ajax_print_eticket/',
			});
		}

		function removeProduct(row) {
			$('#product-'+ row).remove();
		}

		function reset() {
			$('input[name="number"]').val(`<?= $request->number; ?>`);
			$('input[name="name"]').val(`<?= $request->name; ?>`);
			$('input[name="date"]').val(`<?= $request->date_display; ?>`);

			$('input[name="shipping-name"]').val(`<?= $request->shipping_name; ?>`);
			$('input[name="shipping-phone"]').val(`<?= $request->shipping_phone; ?>`);
			$('input[name="shipping-email"]').val(`<?= $request->shipping_email; ?>`);
			$('input[name="shipping-address-line-1"]').val(`<?= $request->shipping_address_line_1; ?>`);
			$('input[name="shipping-address-line-2"]').val(`<?= $request->shipping_address_line_2; ?>`);
			$('input[name="shipping-address-line-3"]').val(`<?= $request->shipping_address_line_3; ?>`);
			$('input[name="shipping-postcode"]').val(`<?= $request->shipping_postcode; ?>`);

			$('input[name="date"]').val(`<?= $request->date_display; ?>`);
			$('input[name="processed-date"]').val(`<?= $request->processed_date_display; ?>`);
			$('input[name="delivered-date"]').val(`<?= $request->delivered_date_display; ?>`);

			$('#status').dropdown('set selected', `<?= $request->status; ?>`);
			$('input[name="tracking-id"]').val(`<?= $request->shipping_courier_tracking_id; ?>`);

			$('input[name="province"]').val(`<?= $request->shipping_province; ?>`);
			$('input[name="city"]').val(`<?= $request->shipping_city; ?>`);
			$('input[name="district"]').val(`<?= $request->shipping_district; ?>`);

			$('.field').removeClass('error');
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
					name: $('input[name="name"]').val(),
					date: $('input[name="date"]').val(),
					status: $('#status').val(),
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
						$('.success-add').parent().attr('href', '<?= base_url(); ?>request/add/').hide();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>request/all/1/');
						const message = 'You have successfully add <?= $request->number; ?> to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>request/ajax_edit/<?= $request->id; ?>/',
			});
		}

		function updateForm(idx) {
			$('.form-accordion').accordion('open', idx);
		}
	</script>
</html>