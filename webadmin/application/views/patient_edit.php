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
				<div class="active section">Edit Patient (<?= $patient->name; ?>)</div>
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
						      	<label>Name</label>
						        <input type="text" class="form-input data-important" name="name" placeholder="Name" data-accordion-idx="0">
					      	</div>
						</div>

						<div class="four fields">
					      	<div class="field">
						      	<label>Birthdate</label>
						        <input type="text" class="form-input data-important date" name="date" placeholder="Date" data-accordion-idx="0">
					      	</div>
					      	<div class="field">
						      	<label>Email</label>
						        <input type="text" class="form-input email data-important" name="email" placeholder="Email" data-accordion-idx="0">
						        <div class="font-10">* Please use a proper email format (example@example.com)</div>
					      	</div>
					      	<div class="field">
						      	<label>Phone</label>
						        <input type="text" class="form-input number" name="phone" placeholder="Phone" data-accordion-idx="0">
					      	</div>
					      	<div class="field">
						      	<label>Gender</label>
						        <select id="gender" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="0">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
					      	</div>
						</div>

					    <div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>patient/all/">
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
			$('input[name="number"]').val(`<?= $patient->number; ?>`);
			$('input[name="name"]').val(`<?= $patient->name; ?>`);
			$('input[name="date"]').val(`<?= $patient->birthdate_display; ?>`);
			$('input[name="email"]').val(`<?= $patient->email; ?>`);
			$('input[name="phone"]').val(`<?= $patient->phone; ?>`);
			$('#gender').dropdown('set selected', `<?= $patient->gender; ?>`);

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
					number: $('input[name="number"]').val(),
					name: $('input[name="name"]').val(),
					birthdate: $('input[name="date"]').val(),
					email: $('input[name="email"]').val(),
					phone: $('input[name="phone"]').val(),
					gender: $('#gender').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>patient/add/').hide();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>patient/all/');
						const message = 'You have successfully add '+ $('input[name="name"]').val() +' to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>patient/ajax_edit/<?= $patient->id; ?>/',
			});
		}
	</script>
</html>