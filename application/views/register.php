<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px text-center login-register-container">
				<div class="margin-top-30px title extra-big">Register</div>

				<div class="margin-top-30px registration-container">
					<div class="margin-top-30px">
						<div class="main-input">
							<div class="label">Name</div>
							<div>
								<input type="text" name="register-recommendation-name" placeholder="Your Name">
							</div>
						</div>
						<div class="main-input margin-top-15px">
							<div class="label">Phone</div>
							<div>
								<input type="text" name="register-recommendation-phone" class="number" placeholder="Your Phone">
							</div>
						</div>
						<div class="main-input margin-top-15px">
							<div class="label">DOB</div>
							<div>
								<input type="text" name="register-recommendation-birthdate" class="date" placeholder="Your Date of Birth">
							</div>
						</div>
						<div class="main-input margin-top-15px">
							<div class="label">Email</div>
							<div>
								<input type="text" name="register-recommendation-email" placeholder="Your Email">
							</div>
						</div>
						<div class="main-input margin-top-15px">
							<div class="label">Gender</div>
							<div>
								<select id="register-recommendation-gender">
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
							</div>
						</div>
						<div class="main-input margin-top-15px">
							<div class="label">Password</div>
							<div>
								<input type="password" name="register-recommendation-password" placeholder="Your Password">
							</div>
						</div>

						<div class="margin-top-30px">
							<button class="main black width-100 register-recommendation-button" onclick="registerRecommendation();">Register</button>
							<div class="margin-top-7-5px">or</div>
							<div id="login-nav" class="g-signin2 light margin-top-7-5px" data-onsuccess="onSignIn" data-theme="dark"></div>
						</div>
					</div>

					<div class="margin-top-60px">Sudah memiliki akun? <a href="<?= base_url(); ?>login/" class="animate">Login</a> disini</div>
				</div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
	});

	function registerRecommendation() {
    	const name = $('input[name="register-recommendation-name"]').val();
    	const email = $('input[name="register-recommendation-email"]').val();
    	const phone = $('input[name="register-recommendation-phone"]').val();
    	const birthdate = $('input[name="register-recommendation-birthdate"]').val();
    	const password = $('input[name="register-recommendation-password"]').val();
    	const gender = $('#register-recommendation-password').val();
    	let count = 0;

    	if (name == '' || email == '' || phone == '' || birthdate == '' || gender == '' || password == '') {
    		count += 1;
    	}

    	if (count > 0) {
    		alert('Please fill all fields');

    		return;
    	}

    	$('.register-recommendation-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

    	$.ajax({
            data: {
            	name: name,
            	email: email,
            	phone: phone,
            	birthdate: birthdate,
            	gender: gender,
            	password: password,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.register-recommendation-button').html(`Register`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	fbq('track', 'CompleteRegistration');

                   	window.location.href = "<?= base_url(); ?>account/";
                }
                else {
                    alert(data.message);
                    $('.register-recommendation-button').html(`Register`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_register/'
        });
    }
</script>
</html>