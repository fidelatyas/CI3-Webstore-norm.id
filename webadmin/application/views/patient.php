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
				<div class="active section">Patient List</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Patient -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
				    	<? if (isset($acl['patient']) && $acl['patient']->add > 0): ?>
				      		<a href="<?= base_url(); ?>patient/add/" class="item">Add new Patient</a>
				     		<div class="divider"></div>
				     	<? endif; ?>
			      		<a class="item" href="<?= base_url(); ?>patient/export/">Export to Excel</a>
						<a href="<?= base_url(); ?>patient/all/<?= $page; ?>/<?= $sort; ?>/<?= $row; ?>/<?= $query; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>

				<? if (isset($acl['patient']) && $acl['patient']->add > 0): ?>
					<a href="<?= base_url(); ?>patient/add/" class="item">Add New Patient</a>
				<? endif; ?>

			  	<div class="right menu">
			    	<div class="ui right aligned category search item">
			      		<div class="ui transparent icon input">
			        		<input class="prompt" type="text" placeholder="Search Patient...">
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

							<th class="sort" data-row="date" data-sort="<? if ($row == 'date'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Date Join <? if ($row == 'date'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="birthdate" data-sort="<? if ($row == 'birthdate'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Birthdate <? if ($row == 'birthdate'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="gender" data-sort="<? if ($row == 'gender'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Gender <? if ($row == 'gender'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="email" data-sort="<? if ($row == 'email'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Email <? if ($row == 'email'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="phone" data-sort="<? if ($row == 'phone'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Phone <? if ($row == 'phone'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th>Status</th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_patient) > 0): ?>
							<? foreach ($arr_patient as $patient): ?>
								<tr>
									<td><?= $patient->number; ?></td>
									<td><?= $patient->name; ?></td>
									<td><?= $patient->date_display; ?></td>
									<td><?= $patient->birthdate_display; ?></td>
									<td><?= $patient->gender; ?></td>
									<td><?= $patient->email; ?></td>
									<td><?= $patient->phone; ?></td>
									<td><?= $patient->consultation_status; ?></td>
									<td class="right aligned">
										<? if (isset($acl['order']) && $acl['order']->add > 0): ?>
											<a href="<?= base_url(); ?>order/add/<?= $patient->id; ?>/">
												<button class="main green xs">Create Order</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['patient']) && $acl['patient']->view > 0): ?>
											<a href="<?= base_url(); ?>patient/profile/<?= $patient->id; ?>/">
												<button class="main green xs">View Profile</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['crm']) && $acl['crm']->view > 0): ?>
											<a href="<?= base_url(); ?>crm/profile/<?= $patient->id; ?>/">
												<button class="main green xs">CRM</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['order']) && $acl['order']->view > 0): ?>
											<a href="<?= base_url(); ?>patient/order/<?= $patient->id; ?>/">
												<button class="main green xs">Order History</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['patient']) && $acl['patient']->edit > 0): ?>
											<a href="<?= base_url(); ?>patient/edit/<?= $patient->id; ?>/">
												<button class="main green xs">Edit</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['patient']) && $acl['patient']->delete > 0): ?>
											<button class="main red xs delete-button" data-name="<?= $patient->name; ?>" data-id="<?= $patient->id; ?>" data-updated="<?= $patient->updated; ?>">Delete</button>
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
		  	<div class="header">Delete Patient</div>
			<div class="content">
				<p>Your're about to delete. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-patient">Yes</button>
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
			window.location.href = '<?= base_url(); ?>patient/all/'+ page +'/'+ sort +'/'+ direction +'/'+ query +'/';
		}

		function deletePatient(id, updated) {
			$('.delete-patient').html('<i class="notched circle loading icon"></i> Deleting..');

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
						$('.delete-patient').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>patient/all/').show();
						$('.success-back').parent().hide();

						showSuccess('Patient has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>patient/ajax_delete/'+ id +'/',
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-patient').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete `+ name +`. You cannot undo this action. Do you want to continue?`);
				$('.delete-patient').html('Yes');

				$('.delete-patient').click(function() {
					deletePatient(id, updated);
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