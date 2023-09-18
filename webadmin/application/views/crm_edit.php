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
				<a class="section" href="<?= base_url(); ?>crm/profile/<?= $patient->id; ?>/">CRM Profile (<?= $patient->name; ?>)</a>
				<div class="divider"> / </div>
				<div class="active section">Edit CRM</div>
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
						<div class="three fields">
							<div class="field">
						      	<label>Number</label>
						        <input type="text" class="form-input" name="number" placeholder="[AUTO]" data-accordion-idx="0">
					      	</div>
					      	<div class="required field">
						      	<label>Patient</label>
						        <input type="text" class="form-input data-important" name="patient" placeholder="Patient" data-accordion-idx="0" disabled>
					      	</div>
					      	<div class="required field">
						      	<label>Date</label>
						        <input type="text" class="form-input date data-important" name="date" placeholder="Date" data-accordion-idx="0">
					      	</div>
						</div>

						<div class="two fields">
							<div class="required field">
						      	<label>Title</label>
						        <input type="text" class="form-input data-important" name="name" placeholder="Title" data-accordion-idx="0">
					      	</div>
					      	<div class="required field">
						      	<label>Question</label>
						        <input type="text" class="form-input data-important" name="question" placeholder="Question" data-accordion-idx="0">
					      	</div>
					    </div>

					    <div class="required field">
					      	<label>Answer</label>
					        <input type="text" class="form-input data-important" name="answer" placeholder="Answer" data-accordion-idx="0">
				      	</div>

						<div class="two fields">
					      	<div class="field">
						      	<label>Type</label>
						        <select id="type" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="0">
						        	<option value="Inquiries">Inquiries</option>
						        	<option value="Reject Consultation">Reject Consultation</option>
						        	<option value="Incomplete Consultation">Incomplete Consultation</option>
						        	<option value="Refund">Refund</option>
						        	<option value="Return Order">Return Order</option>
						        	<option value="Complaint - Product">Complaint - Product</option>
						        	<option value="Complaint - Barang Rusak">Complaint - Barang Rusak</option>
						        	<option value="Complaint - Pesanan Tidak Lengkap">Complaint - Pesanan Tidak Lengkap</option>
						        	<option value="Complaint - Pengiriman Salah">Complaint - Pengiriman Salah</option>
						        	<option value="Complaint - Pengiriman (Kurir)">Complaint - Pengiriman (Kurir)</option>
						        	<option value="Complaint - Wrbsite Problem">Complaint - Wrbsite Problem</option>
						        	<option value="Complaint - Social Media">Complaint - Social Media</option>
						        	<option value="Complaint - Pacakging Rusak">Complaint - Pacakging Rusak</option>
						        	<option value="Complaint - Payment">Complaint - Payment</option>
								</select>
					      	</div>
					      	<div class="field">
						      	<label>Status</label>
						        <select id="status" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="0">
						        	<option value="Ongoing">Ongoing</option>
						        	<option value="Resolve">Resolve</option>
								</select>
					      	</div>
				      	</div>

					    <div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>crm/all/">
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

			$('input[name="number"]').val(`<?= $crm->number; ?>`);
			$('input[name="date"]').val(`<?= $crm->date_display; ?>`);

			$('input[name="name"]').val(`<?= $crm->name; ?>`);
			$('input[name="question"]').val(`<?= $crm->question; ?>`);
			$('input[name="answer"]').val(`<?= $crm->answer; ?>`);

			$('input[name="patient"]').val(`<?= $patient->name; ?>`);
			$('#type').dropdown('set selected', `<? $crm->type; ?>`);
			$('#status').dropdown('set selected', `<? $crm->status; ?>`);

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
					name: $('input[name="name"]').val(),
					date: $('input[name="date"]').val(),
					type: $('#type').val(),
					status: $('#status').val(),
					question: $('input[name="question"]').val(),
					answer: $('input[name="answer"]').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '<?= base_url(); ?>crm/add/').hide();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>crm/profile/<?= $patient->id; ?>/');
						const message = 'You have successfully edit '+ $('input[name="name"]').val() +' to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>crm/ajax_edit/<?= $crm->id; ?>/',
			});
		}
	</script>
</html>