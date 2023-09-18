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
				<div class="active section">Add Patient</div>
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

						<div class="two fields">
					      	<div class="field">
						      	<label>Email</label>
						        <input type="text" class="form-input email" name="email" placeholder="Email" data-accordion-idx="0">
						        <div class="font-10">* Please use a proper email format (example@example.com)</div>
					      	</div>
					      	<div class="required field">
						      	<label>Phone</label>
						        <input type="text" class="form-input number data-important" name="phone" placeholder="Phone" data-accordion-idx="0">
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

		<div class="ui mini modal success-patient">
		  	<div class="header">SUCCESS</div>
			<div class="content">
				<p></p>
			</div>
			<div class="actions">
				<a href="#">
				    <button class="main blue small success-order">Create Order</button>
				</a>

				<a href="#">
				    <button class="main blue small success-inquiries">Create Inquiries</button>
				</a>

				<a href="#">
				    <button class="main red small success-back">Return</button>
				</a>
			</div>
		</div>
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
					email: $('input[name="email"]').val(),
					phone: $('input[name="phone"]').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-order').parent().attr('href', '<?= base_url(); ?>order/add/'+ data.patient_id +'/').show();
						$('.success-inquiries').parent().attr('href', '<?= base_url(); ?>crm/add/'+ data.patient_id +'/').show();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>patient/all/1/');
						const message = 'You have successfully add '+ $('input[name="name"]').val() +' to your own database.';

						$('.success-patient.modal .content p').html(message);
						$('.success-patient.modal').modal('show');
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>patient/ajax_add/',
			});
		}
	</script>
</html>