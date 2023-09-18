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
				<div class="active section">Follow Up <?= $type; ?></div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Doctor -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
						<a href="<?= base_url(); ?>survey/custom/<?= $type; ?>/<?= $page; ?>/" class="item">Refresh Page</a>
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
							<th>Patient Number</th>
							<th>Patient Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>PIC</th>
							<th>Notification</th>
							<th>Date Send</th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_survey) > 0): ?>
							<? foreach ($arr_survey as $survey): ?>
								<tr>
									<td><?= $survey->number; ?></td>
									<td><?= $survey->name; ?></td>
									<td><?= $survey->phone; ?></td>
									<td><?= $survey->email; ?></td>
									<td><?= $survey->pic; ?></td>

									<td>
										<? if ($survey->notification > 0): ?>
											<i class="check icon"></i>
										<? endif; ?>
									</td>

									<td><?= $survey->date_display; ?></td>

									<td class="right aligned">
										<button id="notification-<?= $survey->id; ?>" class="main green xs" data-phone="<?= $survey->phone; ?>" data-name="<?= $survey->name; ?>" onclick="sendNotification('<?= $survey->id; ?>', '<?= $survey->message; ?>');">Send Notification</button>
										</a>
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
			window.location.href = '<?= base_url(); ?>followup/custom/<?= $type; ?>/'+ page +'/';
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

		function sendNotification(surveyId, message) {
			var name = $('#notification-'+ surveyId).attr('data-name');
			var phone = $('#notification-'+ surveyId).attr('data-phone');

			$.ajax({
				data :{
					notification: 1,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					$('.ui.dimmer.all-loader').dimmer('hide');
					$('.ui.basic.modal.all-error').modal('show');
					$('.all-error-text').html('Server Error.');
				},
				success: function(data){
					if (data.status == 'success') {
						var arrName = name.split(' ');
						var newName = arrName[0];

						window.open('https://api.whatsapp.com/send?phone='+ phone +'&text='+ message, '_blank');
						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>followup/ajax_update_survey/'+ surveyId +'/',
			});
		}
	</script>
</html>