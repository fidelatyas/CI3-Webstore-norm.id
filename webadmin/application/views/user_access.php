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
				<a class="item" href="<?= base_url(); ?>user/all/">Back</a>

				<a class="ui item" onclick="selectAll();">Select All</a>
				<a class="ui item" onclick="deselectAll();">Deselect All</a>

				<? if (isset($acl['user_access']) && $acl['user_access']->edit > 0): ?>
					<a class="ui item" onclick="submit();">Save Access</a>
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
				<table class="ui fixed compact selectable table">
					<thead>
						<tr>
							<th rowspan="2">Name</th>
							<th class="center aligned" colspan="5">Access</th>
						</tr>
						<tr>
							<th class="center aligned">View</th>
							<th class="center aligned">List</th>
							<th class="center aligned">Add</th>
							<th class="center aligned">Edit</th>
							<th class="center aligned">Delete</th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_module_lookup) > 0): ?>
							<? foreach ($arr_module_lookup as $key =>$arr_module): ?>
						 		<tr>
						 			<td class="font-semibold" colspan="6"><?= $key; ?></td>
						 		</tr>
						 		<? foreach ($arr_module as $k => $module): ?>
						 			<tr>
						 				<td><?= $module->name; ?></td>
							 			<td class="center aligned">
							 				<? if ($module->view > 0): ?>
							 					<div class="inline field">
													<div class="ui toggle checkbox">
														<input id="checkbox-<?= $module->id; ?>-view" type="checkbox" tabindex="0" class="hidden">
													</div>
												</div>
							 				<? endif; ?>
							 			</td>
							 			<td class="center aligned">
							 				<? if ($module->list > 0): ?>
							 					<div class="inline field">
													<div class="ui toggle checkbox">
														<input id="checkbox-<?= $module->id; ?>-list" type="checkbox" tabindex="0" class="hidden">
													</div>
												</div>
							 				<? endif; ?>
							 			</td>
							 			<td class="center aligned">
							 				<? if ($module->add > 0): ?>
							 					<div class="inline field">
													<div class="ui toggle checkbox">
														<input id="checkbox-<?= $module->id; ?>-add" type="checkbox" tabindex="0" class="hidden">
													</div>
												</div>
							 				<? endif; ?>
							 			</td>
							 			<td class="center aligned">
							 				<? if ($module->edit > 0): ?>
							 					<div class="inline field">
													<div class="ui toggle checkbox">
														<input id="checkbox-<?= $module->id; ?>-edit" type="checkbox" tabindex="0" class="hidden">
													</div>
												</div>
							 				<? endif; ?>
							 			</td>
							 			<td class="center aligned">
							 				<? if ($module->delete > 0): ?>
							 					<div class="inline field">
													<div class="ui toggle checkbox">
														<input id="checkbox-<?= $module->id; ?>-delete" type="checkbox" tabindex="0" class="hidden">
													</div>
												</div>
							 				<? endif; ?>
							 			</td>
							 		</tr>
							 	<? endforeach; ?>
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
			$('.ui.checkbox').checkbox();

			resetPage();
		});

		function deselectAll() {
			$('input[type=checkbox]').prop('checked', false);
		}

		function resetPage() {
			<? foreach ($arr_user_access as $user_access): ?>
				<? if ($user_access->add > 0): ?>
					$('#checkbox-<?= $user_access->module_id ?>-add').prop('checked', true);
				<? endif; ?>

				<? if ($user_access->delete > 0): ?>
					$('#checkbox-<?= $user_access->module_id ?>-delete').prop('checked', true);
				<? endif; ?>

				<? if ($user_access->edit > 0): ?>
					$('#checkbox-<?= $user_access->module_id ?>-edit').prop('checked', true);
				<? endif; ?>

				<? if ($user_access->list > 0): ?>
					$('#checkbox-<?= $user_access->module_id ?>-list').prop('checked', true);
				<? endif; ?>

				<? if ($user_access->view > 0): ?>
					$('#checkbox-<?= $user_access->module_id ?>-view').prop('checked', true);
				<? endif; ?>
			<? endforeach; ?>
		}

		function selectAll() {
			$('input[type=checkbox]').prop('checked', true);
		}

		function submit() {
			$('table').addClass('loading form');

			var userAccess = {};
			var arrUserAccess = [];

			<? foreach ($arr_module_lookup as $arr_module): ?>
				<? foreach ($arr_module as $module): ?>
					userAccess = {};

					userAccess.module_id = '<?= $module->id; ?>';
					userAccess.add = ($('#checkbox-<?= $module->id ?>-add').is(":checked")) ? 1 : 0;
					userAccess.delete = ($('#checkbox-<?= $module->id ?>-delete').is(":checked")) ? 1 : 0;
					userAccess.edit = ($('#checkbox-<?= $module->id ?>-edit').is(":checked")) ? 1 : 0;
					userAccess.list = ($('#checkbox-<?= $module->id ?>-list').is(":checked")) ? 1 : 0;
					userAccess.view = ($('#checkbox-<?= $module->id ?>-view').is(":checked")) ? 1 : 0;

					arrUserAccess.push(userAccess);
				<? endforeach; ?>
			<? endforeach; ?>

			if (arrUserAccess.length <= 0) {
				$('table').removeClass('loading form');
				openWarning('error', 'Server Error.');

				return;
			}

			$.ajax({
				data:{
					user_access_user_access: JSON.stringify(arrUserAccess),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					openWarning('error', 'Server Error.');
					$('table').removeClass('loading form');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>absence/add/').hide();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>user/all/');
						const message = `You have successfully updated <?= $user->name; ?>'s access' to your own database.`;

						showSuccess(message);
					}
					else {
						openWarning('error', data.message);
						$('table').removeClass('loading form');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>user/ajax_update/<?= $user->id; ?>/',
			});
		}
	</script>
</html>