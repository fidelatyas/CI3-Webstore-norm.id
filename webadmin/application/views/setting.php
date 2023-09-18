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
				<div class="active section">Update Setting</div>
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
						<div class="ui dividing header">Page Information</div>
						<div class="three fields">
					      	<div class="field">
						      	<label>Limit Page</label>
						        <select id="limit-page" class="ui fluid dropdown form-input form-dropdown" data-accordion-idx="0">
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="75">75</option>
									<option value="100">100</option>
								</select>
					      	</div>
						</div>

					    <div class="two fields">
					    	<div class="field">
					    		<a href="<?= base_url(); ?>">
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
			$('#limit-page').dropdown('set selected', '<?= $setting->setting__limit_page; ?>');

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
					setting__limit_page: $('#limit-page').val(),
					setting__hris_min_salary_calculation: $('input[name="min-calculation-salary"]').val(),
					setting__hris_max_salary_for_health_insurance: $('input[name="health-insurance-max-salary"]').val(),
					setting__hris_max_salary_for_employee_insurance: $('input[name="employee-insurance-max-salary	"]').val(),
					setting__hris_company_health_insurance_default_percentage: $('input[name="company-health-insurance-percentage"]').val(),
					setting__hris_employee_health_insurance_default_percentage: $('input[name="employee-health-insurance-percentage"]').val(),
					setting__hris_company_pension_plan_default_percentage: $('input[name="company-pension-plan-percentage"]').val(),
					setting__hris_employee_pension_plan_default_percentage: $('input[name="employee-pension-plan-percentage"]').val(),
					setting__hris_company_pension_insurance_default_percentage: $('input[name="company-pension-insurance-percentage"]').val(),
					setting__hris_employee_pension_insurance_default_percentage: $('input[name="employee-pension-insurance-percentage"]').val(),
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.ui.form').removeClass('loading');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.success-add').parent().attr('href', '#').hide();
						$('.success-back').parent().attr('href', '<?= base_url(); ?>setting/');
						const message = 'You have successfully add setting to your own database.';

						showSuccess(message);
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>setting/ajax_update/',
			});
		}
	</script>
</html>