<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container normal">
			<div class="account-container margin-top-15px">
				<div class="title-2">My Account</div>
				<div class="row margin-top-30px row-eq-height">
					<div class="col-12 col-sm-3">
						<div class="account-left-menu">
							<a href="<?= base_url(); ?>account/" class="list active">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/my-account-icon.png">
								</div>
								<div class="text">My Details</div>
							</a>
							<a href="<?= base_url(); ?>medical-grade/" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/order-icon.png">
								</div>
								<div class="text">Order</div>
							</a>
							<a href="<?= base_url(); ?>account/recommendation/" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/recommendation-icon.png">
								</div>
								<div class="text">My Recommendation</div>
							</a>
							<a href="<?= base_url(); ?>account/history/" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/history-icon.png">
								</div>
								<div class="text">Order History</div>
							</a>
							<a onclick="signOut();" class="list">
								<div class="icon">
									<img src="<?= base_url(); ?>assets/images/main/logout-icon.png">
								</div>
								<div class="text">Logout</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-9">
						<div class="account-content">
							<div class="title">My Details</div>

							<div class="row margin-top-15px">
								<div class="col-12">
									<div class="account-subtitle">Personal Information</div>
								</div>
							</div>
							<div class="row margin-top-15px">
								<div class="col-12 col-sm-4 margin-top-15px">
									<p>Isi data diri dengan lengkap dan sesuai untuk memudahkan proses konsultasi dan pembelian.</p>
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Full Name</div>
									<input type="text" name="detail-name" class="data-important" placeholder="Your Name..">
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Phone</div>
									<input type="text" name="detail-phone" class="data-important number" placeholder="Your Phone..">
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-sm-4 d-none d-sm-block">
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Birthdate</div>
									<input type="text" name="detail-birthdate" class="data-important date" placeholder="Your Name..">
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Email</div>
									<input type="text" name="detail-email" class="data-important"  placeholder="Your Name..">
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-sm-4 d-none d-sm-block">
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Gender</div>
									<select id="detail-gender">
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
									</select>
								</div>
							</div>

							<div class="row margin-top-45px">
								<div class="col-12">
									<div class="account-subtitle">Account Information</div>
								</div>
							</div>
							<div class="row margin-top-15px">
								<div class="col-12 col-sm-4 margin-top-15px">
									<p>Masukkan password untuk melengkapi keamanan akun kamu.</p>
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Password</div>
									<input type="password" name="detail-password" placeholder="Your Password..">
								</div>
								<div class="col-12 col-sm-4 main-input margin-top-15px">
									<div class="label">Confirm Password</div>
									<input type="password" name="detail-confirm-password" class="number" placeholder="Confirm your password..">
								</div>
							</div>

							<div class="margin-top-45px text-right">
								<button class="main update-profile" onclick="updateProfile();">Update Profile</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		accountReset();
	});

	function accountReset() {
		$(`input`).val(``);

		$(`input[name="detail-name"]`).val(`<?= $account->name; ?>`);
		$(`input[name="detail-phone"]`).val(`<?= $account->phone; ?>`);
		$(`input[name="detail-birthdate"]`).val(`<?= $account->birthdate_display; ?>`);
		$(`input[name="detail-email"]`).val(`<?= $account->email; ?>`);
		$(`#detail-gender`).val(`<?= $account->gender; ?>`);
	}

	function updateProfile() {
		let count = validate();
		$('input, select').removeClass('error');

		if ($('input[name="detail-password"]').val() != '' && ($('input[name="detail-password"]').val() != $('input[name="detail-confirm-password"]').val())) {
			count += 1;

			$('input[name="detail-password"], input[name="detail-confirm-password"]').addClass('error');
		}

		if (count > 0) {
			return;
		}

		$('.update-profile').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	name: $('input[name="detail-name"]').val(),
            	birthdate: $('input[name="detail-birthdate"]').val(),
            	phone: $('input[name="detail-phone"]').val(),
            	gender: $('#detail-gender').val(),
            	email: $('input[name="detail-email"]').val(),
            	password: $('input[name="detail-password"]').val(),
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.update-profile').html(`Update Profile`);
            },
            success: function(data) {
                if (data.status == 'success') {
                   	window.location.href = "<?= base_url(); ?>account/";
                }
                else {
                    alert(data.message);
                    $('.update-profile').html(`Update Profile`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_update_profile/<?= $account->id; ?>/'
        });
	}
</script>
</html>