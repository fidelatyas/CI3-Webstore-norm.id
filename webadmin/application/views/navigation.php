<div class="main-navigation">
	<div class="logo">
		<img src="<?= base_url(); ?>assets/images/main/logo.png">
	</div>

	<div class="ui one column padded grid nav computer only">
		<div class="ui menu">
			<a href="<?= base_url(); ?>" class="item <? if ($title == 'Dashboard'): ?>active<? endif; ?>">Dashboard</a>

			<a href="<?= base_url(); ?>request/all/" class="item <? if ($title == 'Request'): ?>active<? endif; ?>">Shipment Request</a>

			<? if ((isset($acl['patient']) && $acl['patient']->list > 0) || (isset($acl['patient']) && $acl['patient']->list > 0)): ?>
				<div class="ui dropdown item <? if ($title == 'Data'): ?>on<? endif; ?>">
					Data
				    <i class="dropdown icon"></i>
				    <div class="menu">
						<? if (isset($acl['patient']) && $acl['patient']->list > 0): ?>
							<a class="item <? if ($nav == 'Patient List'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>patient/all/">Patient List</a>
						<? endif; ?>

						<? if (isset($acl['doctor']) && $acl['doctor']->list > 0): ?>
							<a class="item <? if ($nav == 'Doctor List'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>doctor/all/">Doctor List</a>
						<? endif; ?>
					</div>
				</div>
			<? endif; ?>

			<? if ((isset($acl['order']) && $acl['order']->list > 0)): ?>
				<div class="ui dropdown item <? if ($title == 'Order'): ?>on<? endif; ?>">
					Sale
				    <i class="dropdown icon"></i>
				    <div class="menu">
						<? if (isset($acl['order']) && $acl['order']->list > 0): ?>
							<a class="item <? if ($nav == 'Order List'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>order/all/">Order List</a>

							<a class="item <? if ($nav == 'Consultation FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/consultation/">Consultation Follow Up</a>

							<a class="item <? if ($nav == 'Order FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/order/">Order Follow Up</a>

							<a class="item <? if ($nav == 'Review FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/review/">Review Follow Up</a>

							<a class="item <? if ($nav == 'Expired Order FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/expired_order/">Expired Order Follow Up</a>

							<a class="item <? if ($nav == 'best20'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/best20/">Customer Survey</a>

							<a class="item <? if ($nav == 'hairloss-fu'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/hairloss-fu/">Hairloss Promo Follow Up</a>

							<a class="item <? if ($nav == 'pe-fu'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/pe-fu/">PE Promo Follow Up</a>
						<? endif; ?>
					</div>
				</div>
			<? endif; ?>

			<? if ((isset($acl['report_sales']) && $acl['report_sales']->view > 0) || (isset($acl['report_crm']) && $acl['report_crm']->view > 0) || (isset($acl['report_consultation']) && $acl['report_consultation']->view > 0)): ?>
				<div class="ui dropdown item <? if ($title == 'Report'): ?>on<? endif; ?>">
					Report
				    <i class="dropdown icon"></i>
				    <div class="menu">
						<? if (isset($acl['report_sales']) && $acl['report_sales']->view > 0): ?>
							<a class="item <? if ($nav == 'Report Sales'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>report/sales/">Sales Report</a>

							<a class="item <? if ($nav == 'Report Sales'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>report/reseller/">Reseller Report</a>
						<? endif; ?>

						<? if (isset($acl['report_crm']) && $acl['report_crm']->view > 0): ?>
							<a class="item <? if ($nav == 'Report CRM'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>report/crm/">CRM Report</a>
						<? endif; ?>

						<? if (isset($acl['report_consultation']) && $acl['report_consultation']->view > 0): ?>
							<a class="item <? if ($nav == 'Report Consultation'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>report/consultation/">Consultation Report</a>
						<? endif; ?>
					</div>
				</div>
			<? endif; ?>

			<? if ((isset($acl['user']) && $acl['user']->list > 0) || isset($acl['user']) && $acl['user']->add > 0): ?>
				<div class="ui dropdown item <? if ($title == 'User'): ?>on<? endif; ?>">
					User
				    <i class="dropdown icon"></i>
				    <div class="menu">
				    	<? if (isset($acl['user']) && $acl['user']->add > 0): ?>
							<a class="item <? if ($nav == 'User Add'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>user/add/">User Add</a>
						<? endif; ?>

						<div class="divider"></div>

						<? if (isset($acl['user']) && $acl['user']->list > 0): ?>
							<a class="item <? if ($nav == 'User List'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>user/all/">User List</a>
						<? endif; ?>
					</div>
				</div>
			<? endif; ?>

			<a href="<?= base_url(); ?>influencer/all/" class="item <? if ($title == 'Influencer'): ?>active<? endif; ?>">Influencer</a>

			<div class="ui dropdown item <? if ($title == 'Setting'): ?>on<? endif; ?>">
				Others
			    <i class="dropdown icon"></i>
			    <div class="menu">
			    	<? if (isset($acl['setting']) && $acl['setting']->edit > 0): ?>
						<a href="<?= base_url(); ?>setting/company/" class="item <? if ($nav == 'Company'): ?>active selected<? endif; ?>">Company</a>
						<a href="<?= base_url(); ?>setting/" class="item <? if ($nav == 'Setting'): ?>active selected<? endif; ?>">Setting</a>
					<? endif; ?>
					<div onclick="$('.about.modal').modal('show');" class="item" href="#">About</div>
					<div class="divider"></div>
					<a href="<?= base_url(); ?>logout/" class="item" href="#">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div class="ui one column padded grid nav mobile only">
		<div class="ui menu">
			<a href="<?= base_url(); ?>" class="item <? if ($title == 'Dashboard'): ?>active<? endif; ?>">Dashboard</a>

			<? if ((isset($acl['order']) && $acl['order']->list > 0)): ?>
				<div class="ui dropdown item <? if ($title == 'Order'): ?>on<? endif; ?>">
					Sale
				    <i class="dropdown icon"></i>
				    <div class="menu">
						<? if (isset($acl['order']) && $acl['order']->list > 0): ?>
							<a class="item <? if ($nav == 'Order List'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>order/all/">Order List</a>

							<a class="item <? if ($nav == 'Consultation FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/consultation/">Consultation Follow Up</a>

							<a class="item <? if ($nav == 'Order FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/order/">Order Follow Up</a>

							<a class="item <? if ($nav == 'Expired Order FU'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/expired_order/">Expired Order Follow Up</a>

							<a class="item <? if ($nav == 'best20'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/best20/">Customer Survey</a>

							<a class="item <? if ($nav == 'hairloss-fu'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/hairloss-fu/">Hairloss Promo Follow Up</a>

							<a class="item <? if ($nav == 'pe-fu'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/pe-fu/">PE Promo Follow Up</a>

							<a class="item <? if ($nav == 'TrawlBens'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>followup/custom/TrawlBens/">TrawlBens</a>
						<? endif; ?>
					</div>
				</div>
			<? endif; ?>

			<? if ((isset($acl['user']) && $acl['user']->list > 0) || isset($acl['user']) && $acl['user']->add > 0): ?>
				<div class="ui dropdown item <? if ($title == 'User'): ?>on<? endif; ?>">
					User
				    <i class="dropdown icon"></i>
				    <div class="menu">
				    	<? if (isset($acl['user']) && $acl['user']->add > 0): ?>
							<a class="item <? if ($nav == 'User Add'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>user/add/">User Add</a>
						<? endif; ?>

						<div class="divider"></div>

						<? if (isset($acl['user']) && $acl['user']->list > 0): ?>
							<a class="item <? if ($nav == 'User List'): ?>active selected<? endif; ?>" href="<?= base_url(); ?>user/all/">User List</a>
						<? endif; ?>
					</div>
				</div>
			<? endif; ?>
			<div class="ui dropdown item <? if ($title == 'Setting'): ?>on<? endif; ?>">
				Others
			    <i class="dropdown icon"></i>
			    <div class="menu">
			    	<? if (isset($acl['setting']) && $acl['setting']->edit > 0): ?>
						<a href="<?= base_url(); ?>setting/company/" class="item <? if ($nav == 'Company'): ?>active selected<? endif; ?>">Company</a>
						<a href="<?= base_url(); ?>setting/" class="item <? if ($nav == 'Setting'): ?>active selected<? endif; ?>">Setting</a>
					<? endif; ?>
					<div onclick="$('.about.modal').modal('show');" class="item" href="#">About</div>
					<div class="divider"></div>
					<a href="<?= base_url(); ?>logout/" class="item" href="#">Logout</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mobile-navigation">
</div>