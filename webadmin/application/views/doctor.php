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
				<div class="active section">Doctor List</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Doctor -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
				    	<? if (isset($acl['doctor']) && $acl['doctor']->add > 0): ?>
				      		<a href="<?= base_url(); ?>doctor/add/" class="item">Add new Doctor</a>
				     		<div class="divider"></div>
				     	<? endif; ?>
			      		<div class="item">Export to Excel</div>
						<a href="<?= base_url(); ?>doctor/all/<?= $page; ?>/<?= $sort; ?>/<?= $row; ?>/<?= $query; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>

				<? if (isset($acl['doctor']) && $acl['doctor']->add > 0): ?>
					<a href="<?= base_url(); ?>doctor/add/" class="item">Add New Doctor</a>
				<? endif; ?>

			  	<div class="right menu">
			    	<div class="ui right aligned category search item">
			      		<div class="ui transparent icon input">
			        		<input class="prompt" type="text" placeholder="Search Doctor...">
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

							<th class="sort" data-row="email" data-sort="<? if ($row == 'email'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Email <? if ($row == 'email'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="phone" data-sort="<? if ($row == 'phone'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Phone <? if ($row == 'phone'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_doctor) > 0): ?>
							<? foreach ($arr_doctor as $doctor): ?>
								<tr>
									<td><?= $doctor->number; ?></td>
									<td><?= $doctor->name; ?></td>
									<td><?= $doctor->email; ?></td>
									<td><?= $doctor->phone; ?></td>
									<td class="right aligned">
										<a href="<?= base_url(); ?>doctor/crm/<?= $doctor->id; ?>/">
											<button class="main green xs">Consultation History</button>
										</a>

										<? if (isset($acl['doctor']) && $acl['doctor']->edit > 0): ?>
											<a href="<?= base_url(); ?>doctor/edit/<?= $doctor->id; ?>/">
												<button class="main green xs">Edit</button>
											</a>
										<? endif; ?>

										<? if (isset($acl['doctor']) && $acl['doctor']->delete > 0): ?>
											<button class="main red xs delete-button" data-name="<?= $doctor->name; ?>" data-id="<?= $doctor->id; ?>" data-updated="<?= $doctor->updated; ?>">Delete</button>
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
		  	<div class="header">Delete Doctor</div>
			<div class="content">
				<p>Your're about to delete. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-doctor">Yes</button>
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
			window.location.href = '<?= base_url(); ?>doctor/all/'+ page +'/'+ sort +'/'+ direction +'/'+ query +'/';
		}

		function deleteDoctor(id, updated) {
			$('.delete-doctor').html('<i class="notched circle loading icon"></i> Deleting..');

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
						$('.delete-doctor').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>doctor/all/').show();
						$('.success-back').parent().hide();

						showSuccess('Doctor has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>doctor/ajax_delete/'+ id +'/',
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-doctor').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete `+ name +`. You cannot undo this action. Do you want to continue?`);
				$('.delete-doctor').html('Yes');

				$('.delete-doctor').click(function() {
					deleteDoctor(id, updated);
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