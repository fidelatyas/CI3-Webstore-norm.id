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
				<div class="active section">CRM Profile (<?= $patient->name; ?>)</div>
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
			</div>
		</div>

		<div class="form-container">
			<div class="ui grid">
				<div class="ten wide column">
					<div class="row">
						<div class="column">
							<div class="font-semibold">CRM History</div>
							<div class="margin-top-7-5px">
								<? if (isset($acl['crm']) && $acl['crm']->add > 0): ?>
									<a href="<?= base_url(); ?>crm/add/<?= $patient->id; ?>/">
										<button class="main green xs">Add CRM Data</button>
									</a>
								<? endif; ?>
							</div>
						</div>

						<div class="column margin-top-7-5px">
							<table class="ui compact selectable table">
								<thead>
									<tr>
										<th>Number</th>
										<th>Type</th>
										<th>Title</th>
										<th>Description</th>
										<th>Date</th>
										<th>Status</th>
										<th class="right aligned"></th>
									</tr>
								</thead>
								<tbody>
									<? foreach ($patient->arr_crm as $crm): ?>
										<tr>
											<td><?= $crm->number; ?></td>
											<td><?= $crm->type; ?></td>
											<td><?= $crm->name; ?></td>
											<td><?= $crm->question; ?></td>
											<td><?= $crm->date_display; ?></td>
											<td><?= $crm->status; ?></td>
											<td class="right aligned">
												<? if (isset($acl['crm']) && $acl['crm']->edit > 0): ?>
													<a href="<?= base_url(); ?>crm/edit/<?= $crm->id; ?>/">
														<button class="main green xs">Edit</button>
													</a>
												<? endif; ?>

												<? if (isset($acl['crm']) && $acl['crm']->delete > 0): ?>
													<button class="main green xs delete-button" data-name="<?= $crm->name; ?>" data-id="<?= $crm->id; ?>" data-updated="<?= $crm->updated; ?>">Delete</button>
												<? endif; ?>
											</td>
										</tr>
									<? endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- popup delete -->
		<div class="ui mini modal delete">
		  	<div class="header">Delete CRM</div>
			<div class="content">
				<p>Your're about to delete this data. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-crm" >Yes</button>
			    <button class="cancel main red small">Cancel</button>
			</div>
		</div>

		<? $this->load->view('popup'); ?>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			initDelete();
		});

		function deleteCrm(id, updated) {
			$('.delete-crm').html('<i class="notched circle loading icon"></i> Deleting..');

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
						$('.delete-crm').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>crm/profile/<?= $patient->id; ?>/').show();
						$('.success-back').parent().hide();

						showSuccess('Doctor has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>crm/ajax_delete/'+ id +'/',
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-crm').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete this data. You cannot undo this action. Do you want to continue?`);
				$('.delete-crm').html('Yes');

				$('.delete-crm').click(function() {
					deleteCrm(id, updated);
				});

				$('.delete').modal('show');
			});
		}
	</script>
</html>