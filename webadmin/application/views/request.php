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
				<div class="active section">Request List</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Request -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
				    	<? if (isset($acl['request']) && $acl['request']->add > 0): ?>
				      		<a href="<?= base_url(); ?>request/add/" class="item">Add new Request</a>
				     		<div class="divider"></div>
				     	<? endif; ?>
			      		<div class="item">Export to Excel</div>
						<a href="<?= base_url(); ?>request/all/<?= $page; ?>/<?= $sort; ?>/<?= $row; ?>/<?= $query; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>

				<? if (isset($acl['request']) && $acl['request']->add > 0): ?>
					<a href="<?= base_url(); ?>request/add/" class="item">Add New Request</a>
				<? endif; ?>

				<a href="<?= base_url(); ?>request/export/" class="item">Download Request</a>

			  	<div class="right menu">
			    	<div class="ui right aligned category search item">
			      		<div class="ui transparent icon input">
			        		<input class="prompt" type="text" placeholder="Search Request...">
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
							<th class="sort" data-row="number" data-sort="<? if ($row == 'number'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Number <? if ($row == 'number'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></th>

							<th class="sort" data-row="shipping_name" data-sort="<? if ($row == 'shipping_name'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Shipping <? if ($row == 'shipping_name'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></th>

							<th class="sort" data-row="description" data-sort="<? if ($row == 'description'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Description <? if ($row == 'description'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="status" data-sort="<? if ($row == 'status'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Status <? if ($row == 'status'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="date" data-sort="<? if ($row == 'date'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Date <? if ($row == 'date'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="processed_date" data-sort="<? if ($row == 'processed_date'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Processed Date <? if ($row == 'processed_date'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="delivered_date" data-sort="<? if ($row == 'delivered_date'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Delivered Date <? if ($row == 'delivered_date'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th>Courier</th>
							<th>Author</th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_request) > 0): ?>
							<? foreach ($arr_request as $request): ?>
								<tr>
									<td><?= $request->number; ?></td>
									<td><?= $request->shipping_name; ?></td>
									<td><?= $request->name; ?></td>
									<td><?= $request->status; ?></td>
									<td><?= $request->date_display; ?></td>
									<td><?= $request->processed_date_display; ?></td>
									<td><?= $request->delivered_date_display; ?></td>
									<td><?= $request->courier; ?></td>
									<td><?= $request->author_name; ?></td>
									<td class="right aligned">
										<button class="main green xs" onclick="printShipping('<?= $request->id; ?>');">Print Address</button>

										<? if (isset($acl['request']) && $acl['request']->add > 0): ?>
											<a href="<?= base_url(); ?>request/clone_request/<?= $request->id; ?>">
												<button class="main green xs">Clone Request</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['request']) && $acl['request']->edit > 0): ?>
											<? if ($request->status == 'Pending'): ?>
												<button class="main green xs" onclick="updateStatus('<?= $request->id; ?>', 'Processing');">Set Processed</button>
											<? endif ?>

											<a href="<?= base_url(); ?>request/edit/<?= $request->id; ?>/">
												<button class="main green xs">View</button>
											</a>

											<button class="main green xs" onclick="updateStatusShipped('<?= $request->id; ?>');">Set Shipped</button>
										<? endif; ?>

										<? if ((isset($acl['request']) && $acl['request']->delete > 0) && $request->status == 'Pending'): ?>
											<button class="main red xs delete-button" data-name="<?= $request->number; ?>" data-id="<?= $request->id; ?>" data-updated="<?= $request->updated; ?>">Delete</button>
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
		  	<div class="header">Delete Request</div>
			<div class="content">
				<p>Your're about to delete. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-request">Yes</button>
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
			window.location.href = '<?= base_url(); ?>request/all/'+ page +'/'+ sort +'/'+ direction +'/'+ query +'/';
		}

		function deleteRequest(id, updated) {
			$('.delete-request').html('<i class="notched circle loading icon"></i> Deleting..');

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
						$('.delete-request').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>request/all/').show();
						$('.success-back').parent().hide();

						showSuccess('Request has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>request/ajax_delete/'+ id +'/',
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-request').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete `+ name +`. You cannot undo this action. Do you want to continue?`);
				$('.delete-request').html('Yes');

				$('.delete-request').click(function() {
					deleteRequest(id, updated);
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

		function printShipping(requestId) {
			$.ajax({
				data:{
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
					$('.print-receipt').html('Print Receipt');

					if (data.status == 'success') {
						var myWindow = window.open('', '', 'width = 480, height = 720');
						myWindow.document.write(data.shipping_view);

						myWindow.document.close();
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>request/ajax_print_shipping/'+ requestId +'/',
			});
		}

		function updateStatus(requestId, status) {
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
						printShipping(requestId);
						window.location.reload();
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>request/ajax_edit/'+ requestId +'/',
			});
		}

		function updateStatusShipped(requestId) {
			$.ajax({
				data:{
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
						window.location.reload();
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>request/ajax_update/'+ requestId +'/',
			});
		}
	</script>
</html>