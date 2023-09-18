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
				<div class="active section">Report CRM</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Order -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
			      		<a href="<?= base_url(); ?>report/export_crm/<?= $date_start; ?>/<?= $date_end; ?>/" class="item">Export to Excel</a>
						<a href="<?= base_url(); ?>report/crm/<?= $date_start; ?>/<?= $date_end; ?>/" class="item">Refresh Page</a>
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
							<th>Type</th>
							<th>Question</th>
							<th>Answer</th>
							<th>Status</th>
							<th>Resolve Date</th>
							<th>Author</th>
						</tr>
					</thead>
					<tbody>
						<? if (count($crm_record['arr_crm']) > 0): ?>
							<? foreach ($crm_record['arr_crm'] as $crm): ?>
								<tr>
									<td>
										<a href="<?= base_url(); ?>crm/edit/<?= $crm->id; ?>/"><?= $crm->number; ?></a>
									</td>
									<td><?= $crm->date_display; ?></td>
									<td><?= $crm->patient_number; ?></td>
									<td>
										<a href="<?= base_url(); ?>patient/profile/<?= $crm->patient_id; ?>/"><?= $crm->patient_name; ?></a>
									</td>
									<td><?= $crm->type; ?></td>
									<td><?= $crm->question; ?></td>
									<td><?= $crm->answer; ?></td>
									<td><?= $crm->status; ?></td>
									<td><?= $crm->resolve_date_display; ?></td>
									<td><?= $crm->author_name; ?></td>
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

			window.location.href = '<?= base_url(); ?>report/crm/'+ dateStart +'/'+ dateEnd +'/';
		}

		function reset() {
			$('#date-from').val(`<?= $date_start; ?>`);
			$('#date-to').val(`<?= $date_end; ?>`);
		}
	</script>
</html>