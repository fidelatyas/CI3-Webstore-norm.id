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
				<a class="section" href="<?= base_url(); ?>user/all/">User List</a>
				<div class="divider"> / </div>
				<div class="active section">Add User</div>
			</div>
		</div>

		<!-- form start -->
		<div class="form-container">
			<div class="ui styled fluid accordion form form-accordion">
				<div class="active title">
					<i class="dropdown icon"></i>
					Personal Detail
				</div>
				<div class="active content">
					<div class="ui transition visible form">
						<div class="two fields">
							<div class="field">
						      	<label>Number</label>
						        <input type="text" class="form-input" name="number" placeholder="[AUTO]" data-accordion-idx="0">
					      	</div>
							<div class="required field">
						      	<label>Full Name</label>
						        <input type="text" class="form-input data-important" name="name" placeholder="Full Name" data-accordion-idx="0">
					      	</div>
						</div>
						<div class="three fields">
					      	<div class="required field">
						      	<label>Email</label>
						        <input type="text" class="form-input email data-important" name="email" placeholder="Email" data-accordion-idx="0">
						        <div class="font-10">* Please use a proper email format (example@example.com)</div>
					      	</div>
					      	<div class="field">
						      	<label>Phone</label>
						        <input type="text" class="form-input number" name="phone" placeholder="Phone" data-accordion-idx="0">
					      	</div>
					      	<div class="field">
						      	<label>Position</label>
						        <input type="text" class="form-input" name="position" placeholder="Position" data-accordion-idx="0">
					      	</div>
					    </div>

					    <div class="two fields">
					    	<div class="field">
						      	<label>Address</label>
						        <input type="text" class="form-input" name="address" placeholder="Address Line 1" data-accordion-idx="0">
					      	</div>

					     	<div class="required field">
						      	<label>Status</label>
						        <select id="status" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="0">
									<option value="Active">Active</option>
									<option value="Drop">Drop</option>
								</select>
					      	</div>
					    </div>

					    <div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>user/all/">
					    			<button class="main small red font-10">Return</button>
					    		</a>
					    	</div>
					    	<div class="field text-right">
					    		<button class="main small blue font-10" onclick="updateForm(1);">Next</button>
					    	</div>
					    </div>
					</div>
				</div>

				<div class="title">
					<i class="dropdown icon"></i>
					Account Information
				</div>
				<div class="content">
					<div class="ui transition visible form">
						<div class="two fields">
							<div class="required field">
						      	<label>Username</label>
						        <input type="text" class="form-input data-important" name="username" placeholder="Name" data-accordion-idx="1">
					      	</div>
					      	<div class="required field">
						      	<label>Password</label>
						        <input type="text" class="form-input data-important" name="password" placeholder="Password" data-accordion-idx="1">
					      	</div>
						</div>

						<div class="two fields">
					    	<div class="field">
					    		<button class="main small red font-10" onclick="updateForm(0);">Previous</button>
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
					status: $('#status').val(),
					position: $('input[name="position"]').val(),
					email: $('input[name="email"]').val(),
					phone: $('input[name="phone"]').val(),
					address_line_1: $('input[name="address"]').val(),
					username: $('input[name="username"]').val(),
					password: $('input[name="password"]').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>user/add/').show();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>user/all/');
						const message = 'You have successfully add '+ $('input[name="name"]').val() +' to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>user/ajax_add/',
			});
		}
	</script>
</html>