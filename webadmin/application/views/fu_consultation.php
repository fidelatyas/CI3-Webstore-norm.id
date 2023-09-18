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
				<div class="active section">Follow Up Consultation</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Doctor -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
				    	<a href="<?= base_url(); ?>followup/consultation/<?= $page; ?>/" class="item">Refresh Page</a>
						<a href="<?= base_url(); ?>followup/export_consultation/" class="item">Export to Excel</a>
			    	</div>
				</div>

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
							<th>Consultation ID</th>
							<th>Patient Number</th>
							<th>Patient Name</th>
							<th>Category</th>
							<th>Date</th>
							<th>Doctor</th>
							<th>Status</th>
							<th>Follow Up</th>
							<th>Date Follow Up</th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_consultation) > 0): ?>
							<? foreach ($arr_consultation as $consultation): ?>
								<tr>
									<td><?= $consultation->number; ?></td>
									<td><?= $consultation->patient_number; ?></td>
									<td><?= $consultation->patient_name; ?></td>
									<td><?= $consultation->category_name; ?></td>
									<td><?= $consultation->date_display; ?></td>
									<td><?= $consultation->doctor_name; ?></td>
									<td><?= $consultation->status; ?></td>

									<td>
										<? if ($consultation->follow_up > 0): ?>
											<i class="check icon"></i>
										<? endif; ?>
									</td>

									<td><?= $consultation->date_follow_up_display; ?></td>
									<td class="right aligned">
										<button id="notification-<?= $consultation->id; ?>" data-name="<?= $consultation->patient_name; ?>" data-phone="<?= $consultation->patient_phone; ?>" class="main green xs" onclick="sendNotification('<?= $consultation->id; ?>', '<?= $consultation->has_order; ?>');">Send Notification</button>
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
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			initPagination();
		});

		function changePage(page) {
			window.location.href = '<?= base_url(); ?>followup/consultation/'+ page +'/';
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

				changePage(newPage);
			});

			$('.next').click(function() {
				const newPage = (page + 1 > maxPage) ? maxPage : page + 1;

				if (page == maxPage) {
					return;
				}

				changePage(newPage);
			});

			$('input[name="pagination"]').keypress(function(e) {
				if (e.which == 13) {
					let newPage = parseInt($(this).val());

					if (newPage > maxPage) {
						newPage = maxPage;
					}

					changePage(newPage);
				}
			});
		}

		function sendNotification(consultationId, hasOrder) {
			var name = $('#notification-'+ consultationId).attr('data-name');
			var phone = $('#notification-'+ consultationId).attr('data-phone');

			$.ajax({
				data :{
					follow_up: 1,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						window.open('https://api.whatsapp.com/send?phone='+ phone +'&text=Halo%20*'+ name +'*,%20Dokter%20sudah%20meninjau%20konsultasi%20kamu.%0A%0ASilakan%20masuk%20ke%20akun%20kamu%20untuk%20melihat%20hasil%20rekomendasi%20dokter.%0A%0AJika%20ada%20yang%20masih%20kurang%20jelas,%20kamu%20bisa%20menghubungi%20Customer%20Service%20Norm.', '_blank');
						window.location.reload();
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>followup/ajax_update_consultation/'+ consultationId +'/',
			});
		}
	</script>
</html>