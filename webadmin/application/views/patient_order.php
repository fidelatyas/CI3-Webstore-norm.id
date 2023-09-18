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
				<div class="active section">Order History (<?= $patient->name; ?>)</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Order -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
			      		<div class="item">Export to Excel</div>
						<a href="<?= base_url(); ?>order/all/<?= $page; ?>/<?= $sort; ?>/<?= $row; ?>/<?= $query; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>

				<? if (isset($acl['order']) && $acl['order']->add > 0): ?>
					<a href="<?= base_url(); ?>order/add/<?= $patient->id; ?>/" class="item">Add New Order</a>
				<? endif; ?>

			  	<div class="right menu">
			    	<div class="ui right aligned category search item">
			      		<div class="ui transparent icon input">
			        		<input class="prompt" type="text" placeholder="Search Order...">
			        		<i class="search link icon"></i>
			      		</div>
			      		<div class="results"></div>
			    	</div>
			  	</div>
			</div>
			<div class="ui bottom attached segment no-padding">
				<table class="ui compact selectable table">
					<thead>
						<tr>
							<th class="sort" data-row="date" data-sort="<? if ($row == 'date'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Date <? if ($row == 'date'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="id" data-sort="<? if ($row == 'id'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Number <? if ($row == 'id'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></th>

							<th class="sort" data-row="status" data-sort="<? if ($row == 'status'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Shipping Status <? if ($row == 'status'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="payment_status" data-sort="<? if ($row == 'payment_status'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Payment Status <? if ($row == 'payment_status'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="grand_total" data-sort="<? if ($row == 'grand_total'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Total <? if ($row == 'grand_total'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="author_name" data-sort="<? if ($row == 'author_name'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Author <? if ($row == 'author_name'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th>Courier</th>
							<th>Consultation Status</th>
							<th>Print Address</th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_order) > 0): ?>
							<? foreach ($arr_order as $order): ?>
								<tr>
									<td><?= $order->date_display; ?></td>
									<td><?= $order->number; ?></td>
									<td><?= $order->status; ?></td>
									<td><?= $order->payment_status; ?></td>
									<td><?= $order->total_display; ?></td>
									<td><?= $order->author_name; ?></td>
									<td><?= $order->courier; ?></td>
									<td><?= $order->consultation_status; ?></td>
									<td>
										<? if ($order->print > 0): ?>
											<i class="check icon"></i>
										<? endif; ?>
									</td>
									<td class="right aligned">
										<? if ($order->payment_status == 'Pending'): ?>
											<button class="main green xs">Send Payment URL</button>
										<? endif; ?>

										<button class="main green xs" onclick="printShipping('<?= $order->id; ?>');">Print Address</button>

										<? if (isset($acl['order']) && $acl['order']->edit > 0): ?>
											<? if ($order->status == 'Pending' && $order->payment_status == 'Paid'): ?>
												<button class="main green xs" onclick="updateStatus('<?= $order->id; ?>', 'Processing');">Set Processed</button>
											<? endif ?>

											<a href="<?= base_url(); ?>order/edit/<?= $order->id; ?>/">
												<button class="main green xs">View</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['order']) && $acl['order']->delete > 0): ?>
											<button class="main red xs delete-button" data-name="<?= $order->name; ?>" data-id="<?= $order->id; ?>" data-updated="<?= $order->updated; ?>">Delete</button>
										<? endif; ?>
									</td>
								</tr>
							<? endforeach; ?>
						<? else: ?>
							<tr>
								<td colspan="99">Data not found</td>
							</tr>
						<? endif; ?>
					</tbody>
					<tfoot>
						<th colspan="99">
							<div class="display-flex">
								<div>
									<button class="main white xs prev">Prev</button>
								</div>
								<div class="pagination-input">
									<input class="pagination" type="text" name="pagination"> / <?= $count_page; ?>
								</div>
								<div>
									<button class="main white xs next">Next</button>
								</div>
							</div>
						</th>
					</tfoot>
				</table>
			</div>
		</div>

		<? $this->load->view('popup'); ?>

		<!-- popup delete -->
		<div class="ui mini modal delete">
		  	<div class="header">Delete Order</div>
			<div class="content">
				<p>Your're about to delete. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-order">Yes</button>
			    <button class="cancel main red small">Cancel</button>
			</div>
		</div>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			initPagination();
			initSearch();
			initSort();
			initDelete();
		});

		function changePage(page, sort, direction, query) {
			window.location.href = '<?= base_url(); ?>patient/order/<?= $patient->id; ?>/'+ page +'/'+ sort +'/'+ direction +'/'+ query +'/';
		}

		function deleteOrder(id, updated) {
			$('.delete-order').html('<i class="notched circle loading icon"></i> Deleting..');

			$.ajax({
				data:{
					updated: updated,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.btn-reset-password').html('Reset Password');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.delete-order').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>patient/order/<?= $patient->id; ?>/').show();
						$('.success-back').parent().hide();

						showSuccess('Order has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_delete/'+ id +'/',
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-order').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete `+ name +`. You cannot undo this action. Do you want to continue?`);
				$('.delete-order').html('Yes');

				$('.delete-order').click(function() {
					deleteOrder(id, updated);
				});

				$('.delete').modal('show');
			});
		}

		function initPagination() {
			const page = parseInt('<?= $page; ?>');
			const maxPage = '<?= $count_page; ?>';

			$('input[name="pagination"]').val('<?= $page; ?>');

			$('.prev').click(function() {
				const newPage = (page - 1 <= 1) ? 1 : page - 1;

				if (page == newPage) {
					return;
				}

				changePage(newPage, '<?= $sort; ?>', '<?= $row; ?>', '<?= $query; ?>');
			});

			$('.next').click(function() {
				const newPage = (page + 1 > maxPage) ? maxPage : page + 1;

				if (page == maxPage) {
					return;
				}

				changePage(newPage, '<?= $sort; ?>', '<?= $row; ?>', '<?= $query; ?>');
			});

			$('input[name="pagination"]').keypress(function(e) {
				if (e.which == 13) {
					let newPage = parseInt($(this).val());

					if (newPage > maxPage) {
						newPage = maxPage;
					}

					changePage(newPage, '<?= $sort; ?>', '<?= $row; ?>', '<?= $query; ?>');
				}
			});
		}

		function initSearch() {
			$('.prompt').val("<?= $query; ?>");

			$('.prompt').keypress(function(e) {
				if (e.which == 13) {
					const query = $(this).val();

					changePage('1', 'ASC', 'id', query);
				}
			});
		}

		function initSort() {
			$('.sort').click(function() {
				const row = $(this).attr('data-row');
				const sort = $(this).attr('data-sort');

				changePage('<?= $page; ?>', sort, row, '<?= $query; ?>');
			});
		}

		function printShipping(orderId) {
			$.ajax({
				data:{
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					alert('Server Error.');
					submitQuery = false;
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
						alert(data.message);
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_print_shipping/'+ orderId +'/',
			});
		}

		function updateStatus(orderId, status) {
			$.ajax({
				data:{
					status: status,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error');
					$('.ui.form').removeClass('loading');

					submitQuery = false;
				},
				success: function(data){
					submitQuery = false;

					if (data.status == 'success') {
						printShipping(orderId);
						window.location.reload();
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>order/ajax_edit/'+ orderId +'/',
			});
		}
	</script>
</html>