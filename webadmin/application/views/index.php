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

		<div class="container">
			<div class="greetings"><?= $message; ?>, <?= $account->name; ?></div>

			<div class="margin-top-15px">
				<div class="ui cards">
					<div class="blue card">
						<div class="content">
							<div class="header">Paid Order</div>
					     	<div class="meta">Total Paid Order</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['count_paid_order']; ?> Order(s)</div>
					      	</div>
						</div>
					</div>
					<div class="teal card">
						<div class="content">
							<div class="header">Pending Order</div>
					     	<div class="meta">Total Pending Order</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['count_pending_order']; ?> Order(s)</div>
					      	</div>
						</div>
					</div>
					<div class="red card">
						<div class="content">
							<div class="header">Expired Order</div>
					     	<div class="meta">Total Expired Order</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['count_expired_order']; ?> Order(s)</div>
					      	</div>
						</div>
					</div>
				</div>
			</div>

			<div class="margin-top-15px">
				<div class="ui cards">
					<div class="green card">
						<div class="content">
							<div class="header">Gross Sale</div>
					     	<div class="meta">Gross Sale accumulation</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['total_gross_sale_display']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="teal card">
						<div class="content">
							<div class="header">Shipping</div>
					     	<div class="meta">Shipping Accumulation</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['shipping_display']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="red card">
						<div class="content">
							<div class="header">Discount</div>
					     	<div class="meta">Discount Accumulation</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['discount_display']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="blue card">
						<div class="content">
							<div class="header">Net Sale</div>
					     	<div class="meta">Net Sale Accumulation</div>
					      	<div class="description">
					      		<div class="font-18 font-semibold margin-top-7-5px"><?= $dashboard_record['total_net_sale_display']; ?></div>
					      	</div>
						</div>
					</div>
				</div>
			</div>

			<div class="margin-top-15px">
				<div class="ui cards">
					<div class="green card">
						<div class="content">
							<div class="header">Consultation</div>
					     	<div class="meta">Total Consultation</div>
					      	<div class="description">
					      		<div class="font-24 font-semibold margin-top-7-5px"><?= $dashboard_record['arr_consultation_count']['total_submission']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="teal card">
						<div class="content">
							<div class="header">Pending</div>
					     	<div class="meta">Pending Consultation</div>
					      	<div class="description">
					      		<div class="font-24 font-semibold margin-top-7-5px"><?= $dashboard_record['arr_consultation_count']['total_pending']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="red card">
						<div class="content">
							<div class="header">Incomplete</div>
					     	<div class="meta">Incomplete Consultation</div>
					      	<div class="description">
					      		<div class="font-24 font-semibold margin-top-7-5px"><?= $dashboard_record['arr_consultation_count']['total_incomplete']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="red card">
						<div class="content">
							<div class="header">Reject</div>
					     	<div class="meta">Reject Consultation</div>
					      	<div class="description">
					      		<div class="font-24 font-semibold margin-top-7-5px"><?= $dashboard_record['arr_consultation_count']['total_reject']; ?></div>
					      	</div>
						</div>
					</div>
					<div class="blue card">
						<div class="content">
							<div class="header">Approve</div>
					     	<div class="meta">Approve Consultation</div>
					      	<div class="description">
					      		<div class="font-24 font-semibold margin-top-7-5px"><?= $dashboard_record['arr_consultation_count']['total_approve']; ?></div>
					      	</div>
						</div>
					</div>
				</div>
			</div>

			<div class="margin-top-15px">
				<div class="ui cards">
					<div class="green card">
						<div class="content">
							<div class="header">Referral</div>
					     	<div class="meta">Total Email</div>
					      	<div class="description">
					      		<div class="font-24 font-semibold margin-top-7-5px"><?= $referral_record['count_referral']; ?></div>
					      	</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<? if (count($dashboard_record['arr_crm_lookup']) > 0): ?>
			<!-- CRM Graphic -->
			<div class="form-container">
				<div class="ui grid">
					<div class="four wide column">
						<div class="font-18 font-semibold margin-top-7-5px text-center">CRM Graphic</div>
						<div class="margin-top-15px">
							<canvas id="crm-demographic"></canvas>
						</div>
					</div>
				</div>
			</div>
		<? endif; ?>

		<? $this->load->view('popup'); ?>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<script src="<?= base_url(); ?>assets/plugin/chart/dist/Chart.bundle.js" type="text/javascript"></script>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			<? if (count($dashboard_record['arr_crm_lookup']) > 0): ?>
				initGraphic();
			<? endif; ?>
		});

		function initGraphic() {
			let crmConfig = {
				type: 'pie',
				data: {
					datasets: [{
						data: [<? foreach ($dashboard_record['arr_crm_lookup'] as $key => $crm_lookup): ?>`<?= count($crm_lookup); ?>`,<? endforeach; ?>
						],
						backgroundColor: [
							'#1d1d1d',
							'#333333',
							'#474747',
							'#5c5c5c',
							'#707070',
							'#858585',
							'#999999',
							'#adadad',
							'#c2c2c2',
							'#d6d6d6',
							'#ebebeb',
							'#ffffff',
						],
						label: 'CRM Demographic'
					}],
					labels: [
						<? foreach ($dashboard_record['arr_crm_lookup'] as $key => $crm_lookup): ?>
							`<? if (isset($dashboard_record['arr_crm_lookup'][$key])): ?><?= $key; ?><? endif; ?>`,
						<? endforeach; ?>
					]
				},
				options: {
					responsive: true
				}
			};

			window.onload = function() {
				let crmDemo = document.getElementById('crm-demographic').getContext('2d');
				window.crmData = new Chart(crmDemo, crmConfig);
			};
		}
	</script>
</html>