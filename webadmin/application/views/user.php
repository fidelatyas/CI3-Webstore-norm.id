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
				<div class="active section">User List</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of User -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
				    	<? if (isset($acl['user']) && $acl['user']->add > 0): ?>
				      		<a href="<?= base_url(); ?>user/add/" class="item">Add new User</a>
				     		<div class="divider"></div>
				     	<? endif; ?>
			      		<div class="item">Export to Excel</div>
						<a href="<?= base_url(); ?>user/all/<?= $page; ?>/<?= $sort; ?>/<?= $row; ?>/<?= $query; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>

				<? if (isset($acl['user']) && $acl['user']->add > 0): ?>
					<a href="<?= base_url(); ?>user/add/" class="item">Add New User</a>
				<? endif; ?>

			  	<div class="right menu">
			    	<div class="ui right aligned category search item">
			      		<div class="ui transparent icon input">
			        		<input class="prompt" type="text" placeholder="Search User...">
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

							<th class="sort" data-row="name" data-sort="<? if ($row == 'name'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Name <? if ($row == 'name'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="position" data-sort="<? if ($row == 'position'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Position <? if ($row == 'position'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="phone" data-sort="<? if ($row == 'phone'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Phone <? if ($row == 'phone'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="email" data-sort="<? if ($row == 'email'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Email <? if ($row == 'email'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="status" data-sort="<? if ($row == 'status'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Status <? if ($row == 'status'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_user) > 0): ?>
							<? foreach ($arr_user as $user): ?>
								<tr>
									<td><?= $user->number; ?></td>
									<td><?= $user->name; ?></td>
									<td><?= $user->position; ?></td>
									<td><?= $user->phone; ?></td>
									<td><?= $user->email; ?></td>
									<td><?= $user->status; ?></td>
									<td class="right aligned">
										<? if (isset($acl['user_history']) && $acl['user_history']->list > 0): ?>
											<a href="<?= base_url(); ?>user_history/all/<?= $user->id; ?>/">
												<button class="main green xs">History</button>
											</a>
										<? endif; ?>

										<? if ($user->id > 1): ?>
											<? if (isset($acl['user_access']) && $acl['user_access']->list > 0): ?>
												<a href="<?= base_url(); ?>user/access/<?= $user->id; ?>/">
													<button class="main green xs">Access</button>
												</a>
											<? endif; ?>
										<? endif; ?>

										<? if (isset($acl['user']) && $acl['user']->edit > 0): ?>
											<a href="<?= base_url(); ?>user/edit/<?= $user->id; ?>/">
												<button class="main green xs">Edit</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['user']) && $acl['user']->delete > 0): ?>
											<button class="main red xs delete-button" data-name="<?= $user->name; ?>" data-id="<?= $user->id; ?>" data-updated="<?= $user->updated; ?>">Delete</button>
										<? endif; ?>

										<? if ($user->position == 'Reseller'): ?>
											<a href="https://api.whatsapp.com/send?phone=<?= $user->phone; ?>&text=Halo,%0ATerima%20kasih%20sudah%20daftar%20program%20Reseller.%0A%0AApakah%20kamu%20sudah%20melakukan%20pemesanan%20pertama%20untuk%20mendapatkan%20diskon%20spesial%20dari%20Norm?%0AJika%20belum%20dan%20ingin%20melakukan%20pemesanan,%20bisa%20menghubungi%20tim%20reseller%20Norm.%20Apabila%20ada%20informasi%20yang%20kurang%20jelas%20terkait%20reseller%20program,%20bisa%20langsung%20ditanyakan%20saja%20ya.%0A%0ATerima%20kasih" target="_blank">
												<button class="main green xs">Send Notification</button>
											</a>
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
		  	<div class="header">Delete User</div>
			<div class="content">
				<p>Your're about to delete. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-user">Yes</button>
			    <button class="cancel main red small">Cancel</button>
			</div>
		</div>

		<!-- popup calculate salary -->
		<div class="ui small modal calculate">
		  	<div class="header">Calculate Salary</div>
			<div class="content">
				<div class="ui form">
					<div class="two fields">
						<div class="required field">
					      	<label>From</label>
					        <input type="text" class="form-input data-important date" name="calculate-date-from" placeholder="Date" data-accordion-idx="0">
				      	</div>
				      	<div class="required field">
					      	<label>To</label>
					        <input type="text" class="form-input data-important date" name="calculate-date-to" placeholder="Date" data-accordion-idx="0">
				      	</div>
					</div>
				</div>
			</div>
			<div class="actions">
				<button class="cancel main red small">Cancel</button>
				<button class="main blue small calculate-payroll">Calculate</button>
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
			initCalculate();
		});

		function changePage(page, sort, direction, query) {
			window.location.href = '<?= base_url(); ?>user/all/'+ page +'/'+ sort +'/'+ direction +'/'+ query +'/';
		}

		function calculatePayroll() {
			const dateFrom = $('input[name="calculate-date-from"]').val();
			const dateTo = $('input[name="calculate-date-to"]').val();

			$('.calculate-payroll').html('<i class="notched circle loading icon"></i> Calculating..');

			$.ajax({
				data:{
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.btn-reset-password').html('Reset Password');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.calculate-payroll').html('Calculate');

						$('.calculate').modal('hide');

						$('.success-add').html('Continue').parent().attr('href', '<?= base_url(); ?>payroll/all/'+ data.date_to +'/').show();
						$('.success-back').parent().hide();

						showSuccess('Payroll calculation has been made. Press continue to see the results.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>payroll/ajax_calculate/'+ dateFrom +'/'+ dateTo +'/',
			});
		}

		function deleteUser(id, updated) {
			$('.delete-user').html('<i class="notched circle loading icon"></i> Deleting..');

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
						$('.delete-user').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>user/all/').show();
						$('.success-back').parent().hide();

						showSuccess('User has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>user/ajax_delete/'+ id +'/',
			});
		}

		function initCalculate() {
			$('input[name="calculate-date-from"]').val(`<?= $calculate_date_start; ?>`);
			$('input[name="calculate-date-to"]').val(`<?= $calculate_date_end; ?>`);

			$('.payroll-button').click(function() {
				$('.calculate').modal('show');
			});

			$('.calculate-payroll').click(function() {
				calculatePayroll();
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-user').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete `+ name +`. You cannot undo this action. Do you want to continue?`);
				$('.delete-user').html('Yes');

				$('.delete-user').click(function() {
					deleteUser(id, updated);
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
	</script>
</html>