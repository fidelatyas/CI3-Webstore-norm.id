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
						        <input type="text" class="form-input" name="number" placeholder="[AUTO]" data-accordion-idx="0">
					      	</div>
					      	<div class="field">
						      	<label>Patient</label>
						        <input type="text" class="form-input" name="patient" placeholder="Patient Name" data-accordion-idx="0" disabled>
					      	</div>
					      	<div class="field">
						      	<label>Shipping Status</label>
						        <input type="text" class="form-input" name="status" placeholder="Shipping Status" data-accordion-idx="0" disabled>
					      	</div>
					      	<div class="field">
						      	<label>Payment Status</label>
						        <input type="text" class="form-input" name="payment" placeholder="Payment Status" data-accordion-idx="0" disabled>
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
						<div class="three fields">
					      	<div class="required field">
						      	<label>Shipping Postcode</label>
						        <input type="text" class="form-input data-important" name="shipping-postcode" placeholder="Shipping Postcode" data-accordion-idx="1">
					      	</div>

					      	<div class="required field">
						      	<label>Shipping</label>
						        <select id="shipping" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="1">
						        	<option value="0" data-shipping-price="0">-- Select Shipping --</option>
								</select>
					      	</div>

					      	<div class="field">
						      	<label>Shipping Promo</label>
						        <select id="promo" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="1">
						        	<option value="0">No Promo</option>
						        	<option value="15000">IDR 15.000 off shipping fee</option>
						        	<option value="30000">IDR 30.000 off shipping fee</option>
						        	<option value="9999999">Free Shipping</option>
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
										<th class="width-20">Discount</th>
										<th>Total</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="product-list">
								</tbody>
								<tfoot>
									<tr>
										<td colspan="4" class="right aligned font-semibold">Subtotal</td>
										<td class="subtotal-container" data-subtotal="">0</td>
										<td></td>
									</tr>
									<tr>
										<td colspan="4" class="right aligned font-semibold">Shipping</td>
										<td class="shipping-container" data-shipping="0">0</td>
										<td></td>
									</tr>
									<tr>
										<td colspan="3"></td>
										<td class="right aligned font-semibold">
											<div class="two fields">
												<div class="field">
													<div>Discount</div>
													<input type="text" class="form-input number width-100" name="order-discount-number" placeholder="Discount" data-accordion-idx="2">
												</div>
												<div class="field">
													<div>Discount (%)</div>
													<input type="text" class="form-input number width-100" name="order-discount" placeholder="Discount (%)" data-accordion-idx="2">
												</div>
											</div>
										</td>
										<td class="discount-container" data-discount="0">0</td>
										<td></td>
									</tr>
									<tr>
										<td colspan="4" class="right aligned font-semibold">Grand Total</td>
										<td class="grand-total-container" data-grand-total="0">0</td>
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
					    <input type="text" class="form-input number" name="price" placeholder="price" disabled>
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

			$('input[name="shipping-postcode"]').change(function() {
				getShipping();
			});

			$('#shipping, input[name="order-discount"], input[name="order-discount-number"], #promo').change(function() {
				calculateTotal();
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
			let subtotalAtferDiscount = 0;
			let weight = 0;
			let discount = parseInt($('input[name="order-discount"]').val());
			let discountNumber = parseInt($('input[name="order-discount-number"]').val());
			const courier = parseInt($('#shipping option[value='+ $('#shipping').val() +']').attr('data-shipping-price'));

			$.each($('.product-list tr'), function(key, product) {
				subtotal += parseInt($(product).attr('data-product-price')) * parseInt($(product).attr('data-product-qty'));
				subtotalAtferDiscount += parseInt($(product).attr('data-product-total'));
				weight += parseInt($(product).attr('data-product-weight'));
			});

			weight = (weight <= 1000) ? 1000 : weight;
			weight = Math.ceil(weight / 1000);

			let shipping = courier * weight;
			const promo = parseInt($('#promo').val());

			if (promo > 0) {
				shipping = (shipping > promo) ? shipping - promo : 0;
			}

			discount = (discount / 100) * subtotalAtferDiscount;
			discount = discount + discountNumber;
			const grandTotal = subtotalAtferDiscount - discount + shipping;

			const subtotalDisplay = $.number(subtotalAtferDiscount, 0, '.', ',');
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
			$('#product-'+row).remove();

			calculateTotal();
		}

		function reset() {
			$('input').val(``);
			$('input.date').val(``);
			$('input.number').val(`0`);
			$('select').val(0);
			$('#product, #province, #city, #district, #shipping, #promo').dropdown(`set selected`, 0);
			$('input[name="shipping-name"]').val(`<?= $patient->name; ?>`);
			$('input[name="shipping-phone"]').val(`<?= $patient->phone; ?>`);
			$('input[name="shipping-email"]').val(`<?= $patient->email; ?>`);

			$('input[name="patient"]').val(`<?= $patient->number; ?> - <?= $patient->name; ?>`);
			$('input[name="status"]').val(`Pending`);
			$('input[name="payment"]').val(`Pending`);

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
			let arrOrderItem = [];
			let orderItem = {};

			$.each($('.product-list tr'), function(key, product) {
				orderItem = {};
				orderItem.product_id = $(product).attr('data-product-id');
				orderItem.quantity = $(product).attr('data-product-qty');
				orderItem.price = $(product).attr('data-product-price');
				orderItem.discount = $(product).attr('data-product-discount');
				orderItem.total = $(product).attr('data-product-total');

				arrOrderItem.push(orderItem);
			});

			if (arrOrderItem.length <= 0) {
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
					patient_id: '<?= $patient->id; ?>',
					shipping_id: $('#shipping').val(),
					number: $('input[name="number"]').val(),
					status: 'Pending',
					payment_status: 'Pending',
					payment_type: 'Xendit Manual Order',

					subtotal: $('.subtotal-container').attr('data-subtotal'),
					shipping: $('.shipping-container').attr('data-shipping'),
					discount: $('.discount-container').attr('data-discount'),
					grand_total: $('.grand-total-container').attr('data-grand-total'),
					shipping_name: $('input[name="shipping-name"]').val(),
					shipping_email: $('input[name="shipping-email"]').val(),
					shipping_phone: $('input[name="shipping-phone"]').val(),
					shipping_address_line_1: $('input[name="shipping-address-line-1"]').val(),
					shipping_address_line_2: $('input[name="shipping-address-line-2"]').val(),
					shipping_address_line_3: $('input[name="shipping-address-line-3"]').val(),
					shipping_postcode: $('input[name="shipping-postcode"]').val(),
					order_item_order_item: JSON.stringify(arrOrderItem),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>order/add/<?= $patient->id; ?>/').show();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>patient/profile/<?= $patient->id; ?>/');
						const message = 'You have successfully add '+ data.number +' to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_add/',
			});
		}
	</script>
</html>