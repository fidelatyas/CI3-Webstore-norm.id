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
				<a class="section" href="<?= base_url(); ?>patient/all/">Patient List</a>
				<div class="divider"> / </div>
				<div class="active section">Profile (<?= $patient->name; ?>)</div>
			</div>
		</div>

		<!-- View Patient Profile -->
		<div class="form-container">
			<div class="ui cards">
				<div class="blue card">
					<div class="content">
						<div class="header"><?= $patient->name; ?></div>
				     	<div class="meta"><?= $patient->number; ?></div>
				      	<div class="description">
				      		<div class="">Phone: <?= $patient->phone; ?></div>
				      		<div class="">Email: <?= $patient->email; ?></div>
				      		<div class="">birthdate: <?= $patient->birthdate_display; ?></div>
				      		<div class="">Age: <?= $patient->age; ?></div>
				      	</div>
					</div>
				</div>
				<div class="teal card">
					<div class="content">
						<div class="header">Customer Loyalty</div>
				     	<div class="meta">Point Accumulation</div>
				      	<div class="description">
				      		<div class="font-32 font-semibold margin-top-15px"><?= $patient->points; ?></div>
				      		<div class="margin-top-15px">
				      			<? if (isset($acl['points']) && $acl['points']->list > 0): ?>
				      				<a href="<?= base_url(); ?>points/all/<?= $patient->id; ?>/">
						      			<button class="main xs">View Point History</button>
						      		</a>
					      		<? endif; ?>
				      		</div>
				      	</div>
					</div>
				</div>
				<div class="red card">
					<div class="content">
						<div class="header">CRM</div>
				     	<div class="meta">count CRM Detail</div>
				      	<div class="description">
				      		<div class="font-32 font-semibold margin-top-15px"><?= $patient->count_crm; ?></div>
				      		<div class="margin-top-15px">
				      			<? if (isset($acl['crm']) && $acl['crm']->list > 0): ?>
				      				<a href="<?= base_url(); ?>crm/profile/<?= $patient->id; ?>/">
						      			<button class="main xs">View CRM Profile</button>
						      		</a>
					      		<? endif; ?>
				      		</div>
				      	</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ui segment patient-history">
			<div class="ui grid">
				<div class="ten wide column">
					<div class="row">
						<div class="column">
							<div class="font-semibold">Consultation History</div>
						</div>
						<div class="column margin-top-7-5px">
							<table class="ui compact selectable table">
								<thead>
									<tr>
										<th>Consultation ID</th>
										<th>Category</th>
										<th>Doctor</th>
										<th>Date</th>
										<th>Response</th>
										<th>Status</th>
										<th class="right aligned"></th>
									</tr>
								</thead>
								<tbody>
									<? foreach ($patient->arr_consultation as $consultation): ?>
										<tr>
											<td><?= $consultation->number; ?></td>
											<td><?= $consultation->category_name; ?></td>
											<td><?= $consultation->doctor_name; ?></td>
											<td><?= $consultation->date_display; ?></td>
											<td>
												<div>Reason: <?= $consultation->response_reason; ?></div>
												<div>Response: <?= $consultation->response; ?></div>
											</td>
											<td><?= $consultation->status; ?></td>
											<td class="right aligned">
												<? if ($consultation->status != 'Finish'): ?>
													<button class="main green xs" onclick="renewConsultation('<?= $consultation->id; ?>');">Renew</button>
												<? endif; ?>
											</td>
										</tr>
									<? endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row margin-top-30px">
						<div class="column">
							<div class="font-semibold">Order History</div>
							<div class="margin-top-7-5px">
								<? if (isset($acl['order']) && $acl['order']->add > 0): ?>
									<a href="<?= base_url(); ?>order/add/<?= $patient->id; ?>/">
										<button class="main green xs">Create Order</button>
									</a>
								<? endif; ?>
							</div>
						</div>
						<div class="column margin-top-7-5px">
							<table class="ui compact selectable table">
								<thead>
									<tr>
										<th>Number</th>
										<th>Date</th>
										<th>Total</th>
										<th>Shipping Status</th>
										<th>Payment_status</th>
										<th>Location</th>
										<th class="right aligned"></th>
									</tr>
								</thead>
								<tbody>
									<? foreach ($patient->arr_order as $order): ?>
										<tr>
											<td><?= $order->number; ?></td>
											<td><?= $order->date_display; ?></td>
											<td><?= $order->grand_total_display; ?></td>
											<td><?= $order->status; ?></td>
											<td><?= $order->payment_status; ?></td>
											<td><?= $order->location; ?></td>
											<td class="right aligned">
												<? if ($order->payment_status == 'Pending'): ?>
													<a href="https://api.whatsapp.com/send?phone=<?= $order->patient_phone; ?>&text=Halo%20<?= $order->patient_name; ?>!%0A%0ATerima%20kasih%20telah%20melakukan%20pembelian%20di%20Norm%0A%0ANo.%20Order%3A%20*<?= $order->number; ?>*%0A%0APesanan%3A%20*<?= $order->item_list; ?>*%0A%0AJumlah%20yang%20harus%20dibayar%3A%20*<?= $order->grand_total_display; ?>*%0A%0AMohon%20lanjut%20untuk%20pembayaran%20melalui%20link%20berikut%3A%20%0A%7BInvoice%20ini%20juga%20sudah%20dikirimkan%20ke%20*<?= $order->patient_email; ?>*%7D%0A%0A<?= $order->payment_url; ?>%0A%0A*Invoice%20ini%20hanya%20berlaku%20selama%2024%20jam.%20Jika%20terlewat%20harap%20melakukan%20pemesanan%20baru.%0A%0ATerima%20kasih!" target="_blank">
														<button class="main green xs">Send Payment URL</button>
													</a>
												<? endif; ?>

												<button class="main green xs" onclick="printShipping('<?= $order->id; ?>');">Print Address</button>

												<? if (isset($acl['order']) && $acl['order']->edit > 0): ?>
													<a href="<?= base_url(); ?>order/edit/<?= $order->id; ?>/">
														<button class="main green xs">View</button>
													</a>
												<? endif; ?>
											</td>
										</tr>
									<? endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="six wide column">
					<div class="row">
						<div class="column">
							<div class="font-semibold">Medication</div>
						</div>
						<div class="column margin-top-7-5px">
							<table class="ui compact selectable table">
								<thead>
									<tr>
										<th>Medication</th>
										<th>Prescribe By</th>
										<th>Method</th>
										<th>Dosage</th>
										<th>Timing</th>
									</tr>
								</thead>
								<tbody>
									<? foreach ($patient->arr_consultation_product as $consultation_product): ?>
										<tr>
											<td><?= $consultation_product->product_name; ?></td>
											<td><?= $consultation_product->doctor_name; ?></td>
											<td><?= $consultation_product->method; ?></td>
											<td><?= $consultation_product->dosage; ?></td>
											<td><?= $consultation_product->timing; ?></td>
										</tr>
									<? endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<? $this->load->view('popup'); ?>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
		});

		function printShipping(orderId) {
			$.ajax({
				data:{
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
				},
				success: function(data){
					submitQuery = false;
					$('.print-receipt').html('Print Receipt');

					if (data.status == 'success') {
						var myWindow = window.open('', '', 'width = 480, height = 720');
						myWindow.document.write(data.shipping_view);

						myWindow.document.close();
					}
					else {
						showWarning(data.message);
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_print_shipping/'+ orderId +'/',
			});
		}

		function renewConsultation(consultationId) {
			$.ajax({
				data :{
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
				},
				success: function(data){
					if (data.status == 'success') {
						window.location.reload();
					}
					else {
						showWarning(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>patient/ajax_renew_consultation/'+ consultationId +'/',
			});
		}
	</script>
</html>