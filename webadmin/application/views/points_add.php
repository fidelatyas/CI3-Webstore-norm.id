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
				<a class="section" href="<?= base_url(); ?>patient/profile/<?= $patient->id; ?>/"><?= $patient->name; ?></a>
				<div class="divider"> / </div>
				<a class="section" href="<?= base_url(); ?>points/all/<?= $patient->id; ?>/">Points List</a>
				<div class="divider"> / </div>
				<div class="active section">Add Points</div>
			</div>
		</div>

		<!-- form start -->
		<div class="form-container">
			<div class="ui styled fluid accordion form form-accordion">
				<div class="active title">
					<i class="dropdown icon"></i>
					Detail
				</div>
				<div class="active content">
					<div class="ui transition visible form">
						<div class="two fields">
							<div class="field">
						      	<label>Number</label>
						        <input type="text" class="form-input" name="number" placeholder="[AUTO]" data-accordion-idx="0">
					      	</div>
					      	<div class="required field">
						      	<label>Description</label>
						        <input type="text" class="form-input data-important" name="description" placeholder="Description" data-accordion-idx="0">
					      	</div>
						</div>

						<div class="two fields">
					      	<div class="required field">
						      	<label>Points</label>
						        <input type="text" class="form-input data-important number" name="points" placeholder="Points" data-accordion-idx="0">
					      	</div>
					      	<div class="required field">
						      	<label>Status</label>
						        <select id="status" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="0">
									<option value="Approve">Approve</option>
									<option value="Reject">Reject</option>
								</select>
					      	</div>
				      	</div>

					    <div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>points/all/">
					    			<button class="main small red font-10">Return</button>
					    		</a>
					    	</div>
					    	<div class="field text-right">
					    		<button class="main small blue font-10" onclick="submitForm();">Submit</button>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<? $this->load->view('popup'); ?>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			reset();
		});

		function reset() {
			$('input').val(``);
			$('input.date').val(``);
			$('input.number').val(`0`);
			$('#status').dropdown('set selected', ``);

			$('.field').removeClass('error');
		}

		function updateForm(idx) {
			$('.form-accordion').accordion('open', idx);
		}

		function submitForm() {
			$('.field').removeClass('error');

			/* validate form */
			const found = validate();

			if (found > 0) {
				return;
			}

			$('.ui.form').addClass('loading');

			/* Insert Data */
			$.ajax({
				data:{
					patient_id: `<?= $patient->id; ?>`,
					number: $('input[name="number"]').val(),
					description: $('input[name="description"]').val(),
					points: $('input[name="points"]').val(),
					status: $('#status').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>points/add/<?= $patient->id; ?>/').show();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>points/all/<?= $patient->id; ?>/');
						const message = 'You have successfully add <?= $patient->name; ?> points to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>points/ajax_add/',
			});
		}
	</script>
</html>