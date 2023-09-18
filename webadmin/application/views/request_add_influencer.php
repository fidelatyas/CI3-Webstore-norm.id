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
				<div class="active section">Add Request</div>
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
					      	<div class="required field">
						      	<label>Status</label>
						        <input type="text" class="form-input data-important" name="status" placeholder="Status" data-accordion-idx="0" disabled>
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
						        <input type="text" class="form-input data-important" name="shipping-name" placeholder="Shipping Name" data-accordion-idx="1">
					      	</div>
					      	<div class="required field">
						      	<label>Shipping Phone</label>
						        <input type="text" class="form-input data-important" name="shipping-phone" placeholder="Shipping Phone" data-accordion-idx="1">
					      	</div>
						</div>
						<div class="two fields">
					      	<div class="required field">
						      	<label>Shipping Email</label>
						        <input type="text" class="form-input data-important" name="shipping-email" placeholder="Shipping Email" data-accordion-idx="1">
					      	</div>
					      	<div class="field">
						      	<label>Shipping Address</label>
						       	<input type="text" class="form-input data-important" name="shipping-address-line-1" placeholder="Address Line 1" data-accordion-idx="1">
						        <input type="text" class="margin-top-7-5px form-input" name="shipping-address-line-2" placeholder="Address Line 2" data-accordion-idx="1">
						        <input type="text" class="margin-top-7-5px form-input" name="shipping-address-line-3" placeholder="Address Line 3" data-accordion-idx="1">
					      	</div>
						</div>
						<div class="two fields">
					      	<div class="required field">
						      	<label>Shipping Postcode</label>
						        <input type="text" class="form-input" name="shipping-postcode" placeholder="Shipping Postcode" data-accordion-idx="1">
					      	</div>
					      	<div class="required field">
						      	<label>Shipping</label>
						        <select id="shipping" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="1">
						        	<option value="0" data-shipping-price="0">-- Select Shipping --</option>
						        	<? foreach ($arr_shipment as $shipment): ?>
						        		<option value="<?= $shipment->id; ?>" data-shipment-price="<?= $shipment->price; ?>"><?= $shipment->type; ?> <?= $shipment->name; ?> @ IDR <?= $shipment->price_display; ?>/kg</option>
						        	<? endforeach; ?>
								</select>
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
								<? if ($influencer_id > 0): ?>
									<tbody class="product-list" data-subtotal="0" data-shipping="0">
									</tbody>
								<? else: ?>
									<tbody class="product-list" data-subtotal="0" data-shipping="0">
									</tbody>
								<? endif; ?>
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
					    <input type="text" class="form-input number" name="price" placeholder="price" disabled>
			      	</div>
			      	<div class="field">
				      	<label>Quantity</label>
				        <input type="text" class="form-input number" name="qty" placeholder="Qty">
			      	</div>
			      	<div class="field">
			      		<label>Total</label>
					    <input type="text" class="form-input number" name="total" placeholder="Total" disabled>
			      	</div>
			    </div>
		  	</div>
		  	<div class="actions">
		    	<button class="main red small cancel">Cancel</button>
		    	<button class="main red small" onclick="addProduct();">Add</button>
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

			const table = `<tr id="product-`+ productCount +`" data-product-id="`+ productId +`" data-product-weight="`+ productWeight +`" data-product-price="`+ productPrice +`" data-product-qty="`+ quantity +`" data-product-total="`+ total +`"><td>`+ productName +`</td><td>`+ productPriceDisplay +`</td><td>`+ quantity +`</td><td>`+ totalDisplay +`</td><td class="right aligned"><button class="main green xs" onclick="removeProduct(`+ productCount +`);">Remove</button></td></tr>`;

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

			$('input[name="shipping-postcode"]').change(function() {
				getShipping();
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

		function getShipping() {
			const postcode = $('input[name="shipping-postcode"]').val();

			if (postcode == '') {
				return;
			}

			$('#shipping').empty();
			$('#shipping').append('<option value="0" data-shipping-price="0">-- Select Shipping --</option>');

			$.ajax({
				data:{
					postcode: postcode,
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

						$.each(data.arr_shipment, function(key, shipping) {
							shippingList += '<option value="'+ shipping.id +'" data-shipping-price="'+ shipping.price +'">'+ shipping.name +' @ IDR'+ shipping.price_display +'/kg</option>';
						});

						$('#shipping').append(shippingList);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_get_shipment/',
			});
		}

		function removeProduct(row) {
			$('#product-'+ row).remove();

			calculateTotal();
		}

		function reset() {
			<? if ($influencer_id > 0): ?>
				$('input[name="name"]').val(`<?= $influencer->description; ?>`);
				$('input[name="date"]').val(`<?= $today; ?>`);

				$('input[name="shipping-name"]').val(`<?= $influencer->name; ?>`);
				$('input[name="shipping-phone"]').val(`<?= $influencer->phone; ?>`);
				$('input[name="shipping-email"]').val(`<?= $influencer->email; ?>`);
				$('input[name="shipping-address-line-1"]').val(`<?= $influencer->address_line_1; ?>`);
				$('input[name="shipping-address-line-2"]').val(`<?= $influencer->address_line_2; ?>`);
				$('input[name="shipping-address-line-3"]').val(`<?= $influencer->address_line_3; ?>`);
				$('input[name="shipping-postcode"]').val(`<?= $influencer->postcode; ?>`);

				$('#province').dropdown('set selected', `<?= $influencer->province_id; ?>`);
				$('#city').dropdown('set selected', `<?= $influencer->city_id; ?>`);
				$('#district').dropdown('set selected', `<?= $influencer->district_id; ?>`);
			<? else: ?>
				$('input').val(``);
				$('input.date').val(`<?= $today; ?>`);
				$('input.number').val(`0`);
			<? endif; ?>

			$('input[name="status"]').val(`Pending`);

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

			/* generate product */
			let arrRequestItem = [];
			let requestItem = {};

			$.each($('.product-list tr'), function(key, product) {
				requestItem = {};
				requestItem.product_id = $(product).attr('data-product-id');
				requestItem.quantity = $(product).attr('data-product-qty');
				requestItem.price = $(product).attr('data-product-price');
				requestItem.total = $(product).attr('data-product-total');

				arrRequestItem.push(requestItem);
			});

			if (arrRequestItem.length <= 0) {
				showWarning('You have no Product in your cart.');

				return;
			}

			if ($('#shipping').val() <= 0) {
				showWarning('You have not include your shipping data');

				return;
			}

			$('.ui.form').addClass('loading');

			/* Insert Data */
			$.ajax({
				data:{
					shipping_id: $('#shipping').val(),

					number: $('input[name="number"]').val(),
					name: $('input[name="name"]').val(),
					date: $('input[name="date"]').val(),
					status: $('input[name="status"]').val(),

					subtotal: $('.product-list').attr('data-subtotal'),
					shipping: $('.product-list').attr('data-shipping'),

					shipping_name: $('input[name="shipping-name"]').val(),
					shipping_email: $('input[name="shipping-email"]').val(),
					shipping_phone: $('input[name="shipping-phone"]').val(),
					shipping_address_line_1: $('input[name="shipping-address-line-1"]').val(),
					shipping_address_line_2: $('input[name="shipping-address-line-2"]').val(),
					shipping_address_line_3: $('input[name="shipping-address-line-3"]').val(),
					shipping_postcode: $('input[name="shipping-postcode"]').val(),
					request_item_request_item: JSON.stringify(arrRequestItem),

					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>request/add/').show();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>request/all/1/');
						const message = 'You have successfully add '+ data.number +' to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>request/ajax_add/',
			});
		}
	</script>
</html>