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
				<div class="active section">Report Sales</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Order -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
			      		<a href="<?= base_url(); ?>report/export_sales/<?= $date_start; ?>/<?= $date_end; ?>/" class="item">Export to Excel</a>
						<a href="<?= base_url(); ?>report/sales/<?= $date_start; ?>/<?= $date_end; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>
				<div class="ui category search item">
				  	<div class="ui transparent icon input">
					    <input id="date-from" class="prompt date" type="text" placeholder="Date From...">
					    <i class="search link icon"></i>
				  	</div>
				  	<div class="results"></div>
				</div>
				<div class="ui category search item">
				  	<div class="ui transparent icon input">
					    <input id="date-to" class="prompt date" type="text" placeholder="Date To...">
					    <i class="search link icon"></i>
				  	</div>
				  	<div class="results"></div>
				</div>
			</div>
			<div class="ui bottom attached segment no-padding">
				<table class="ui compact selectable table">
					<thead>
						<tr>
							<th>Number</th>
							<th>Date</th>
							<th>Patient Number</th>
							<th>Name</th>
							<th>Status</th>
							<th>Payment Status</th>
							<th>Payment Date</th>
							<th>Processed Date</th>
							<th>Delivered Date</th>
							<th>Subtotal</th>
							<th>Discount</th>
							<th>Shipping</th>
							<th>Total</th>
							<th>Discount Item</th>
							<th>Points</th>
							<th>Courier</th>
							<th>Category</th>
							<th>Location</th>
							<th>Source</th>
							<th>Author</th>
						</tr>
					</thead>
					<tbody>
						<? if (count($sales_record['arr_order']) > 0): ?>
							<? foreach ($sales_record['arr_order'] as $order): ?>
								<tr>
									<td><?= $order->number; ?></td>
									<td><?= $order->date_display; ?></td>
									<td><?= $order->patient_number; ?></td>
									<td><?= $order->patient_name; ?></td>
									<td><?= $order->status; ?></td>
									<td><?= $order->payment_status; ?></td>
									<td><?= $order->payment_date_display; ?></td>
									<td><?= $order->processed_date_display; ?></td>
									<td><?= $order->delivered_date_display; ?></td>
									<td><?= $order->subtotal_display; ?></td>
									<td><?= $order->discount_display; ?></td>
									<td><?= $order->shipping_display; ?></td>
									<td><?= $order->grand_total_display; ?></td>
									<td><?= $order->discount_item_display; ?></td>
									<td><?= $order->points_display; ?></td>
									<td><?= $order->courier; ?></td>
									<td><?= $order->category; ?></td>
									<td><?= $order->location; ?></td>
									<td><?= $order->source; ?></td>
									<td><?= $order->author_name; ?></td>
								</tr>
							<? endforeach; ?>
						<? else: ?>
							<tr>
								<td colspan="99">Data not found</td>
							</tr>
						<? endif; ?>
					</tbody>
				</table>
			</div>
		</div>

		<? $this->load->view('popup'); ?>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			change();
			reset();
		});

		function change() {
			$('#date-from, #date-to').change(function() {
				reload();
			});
		}

		function reload() {
			const dateStart = $('#date-from').val();
			const dateEnd = $('#date-to').val();

			window.location.href = '<?= base_url(); ?>report/sales/'+ dateStart +'/'+ dateEnd +'/';
		}

		function reset() {
			$('#date-from').val(`<?= $date_start; ?>`);
			$('#date-to').val(`<?= $date_end; ?>`);
		}
	</script>
</html>