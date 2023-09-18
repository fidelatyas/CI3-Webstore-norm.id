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
				<div class="active section">Report Consultation</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Order -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
			      		<a href="<?= base_url(); ?>report/export_consultation/<?= $date_start; ?>/<?= $date_end; ?>/" class="item">Export to Excel</a>
						<a href="<?= base_url(); ?>report/consultation/<?= $date_start; ?>/<?= $date_end; ?>/" class="item">Refresh Page</a>
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
							<th>Category</th>
							<th>Status</th>
							<th>Doctor</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($consultation_record['arr_consultation']) > 0): ?>
							<? foreach ($consultation_record['arr_consultation'] as $consultation): ?>
								<tr>
									<td><?= $consultation->number; ?></td>
									<td><?= $consultation->date_display; ?></td>
									<td><?= $consultation->patient_number; ?></td>
									<td><?= $consultation->patient_name; ?></td>
									<td><?= $consultation->category_name; ?></td>
									<td><?= $consultation->status; ?></td>
									<td>Dr. Rahmaputri Maharani</td>
									<td class="right aligned">
										<? if ($consultation->status == 'Finish'): ?>
											<button class="main green xs" onclick="printPrescription('<?= $consultation->id; ?>');">Print Prescription</button>
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

			window.location.href = '<?= base_url(); ?>report/consultation/'+ dateStart +'/'+ dateEnd +'/';
		}

		function reset() {
			$('#date-from').val(`<?= $date_start; ?>`);
			$('#date-to').val(`<?= $date_end; ?>`);
		}

		function printPrescription(consultation_id) {
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
					$('.print-prescription').html('Print Prescription');

					if (data.status == 'success') {
						var myWindow = window.open('', '', 'width = 400, height = 900');
						myWindow.document.write(data.prescription_view);

						myWindow.document.close();
					}
					else {
						alert(data.message);
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>report/ajax_print_prescription/'+ consultation_id +'/',
			});
		}
	</script>
</html>