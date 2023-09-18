<!DOCTYPE html>
<html>
	<head>
		<!-- load title tag -->
		<? $this->load->view('metatag'); ?>

		<!-- load style -->
		<? $this->load->view('style'); ?>
	</head>

	<body>
		<div class="login-container">
			<div class="ui piled segment base">
				<div class="bg-cover logo" style="background-image: url(<?= base_url(); ?>assets/images/main/login-bg.jpg);">
					<img src="<?= base_url(); ?>assets/images/main/logo-white.png">
					<div class="color-white margin-top-15px">WebApps Norm 2.0</div>
				</div>

				<div class="ui form">
					<div class="title">LOGIN</div>
					<div class="form-container">
						<div class="field">
							<div class="ui left icon input width-100">
								<input class="data-important" name="username" type="text" placeholder="Username...">
								<i class="user icon"></i>
							</div>
						</div>
						<div class="field margin-top-15px">
							<div class="ui left icon input width-100">
								<input class="data-important" name="password" type="password" placeholder="Password...">
								<i class="unlock alternate icon"></i>
							</div>
						</div>

						<div class="field margin-top-15px">
							<button class="main width-100 login-button">LOGIN</button>
						</div>
					</div>
				</div>

				<div class="footer">V.<?= $setting->system_version; ?> | © PT Selestial Group International <script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</div>
			</div>
		</div>

		<? $this->load->view('popup'); ?>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			resetForm();
			formEnterClick();
		});

		function formEnterClick() {
			$('.login-button').click(function() {
				submitForm();
			});

			$('input[name="username"], input[name="password"]').keypress(function(e) {
				if (e.which == 13) {
					submitForm();
				}
			});
		}

		function resetForm() {
			$('input').val(``);

			$('input[name="username"]').focus();
		}

		function submitForm() {
			/* Validate Form */
			let found = 0;

			$.each($('.data-important'), function(key, data) {
				if ($(data).val() == '' || $(data).val() == null || typeof $(data).val() === 'undefined') {
					found += 1;
					$(this).parent().parent().addClass('error');
				}
			});

			if (found > 0) {
				return;
			}

			$('.ui.form').addClass('loading');

			$.ajax({
				data:{
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
						window.location.href = '<?= base_url(); ?>';
					}
					else {
						showWarning(data.message);
						$('.ui.form').removeClass('loading');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>login/ajax_login/',
			});
		}
	</script>
</html>