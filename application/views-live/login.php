<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px text-center login-register-container">
				<div class="margin-top-30px title extra-big">Welcome!</div>

				<div class="margin-top-30px registration-container">
					<div class="margin-top-30px">
						<div class="main-input margin-top-15px">
							<div class="label">Email</div>
							<div>
								<input type="text" name="login-recommendation-email" placeholder="Your Email">
							</div>
						</div>
						<div class="main-input margin-top-15px">
							<div class="label">Password</div>
							<div>
								<input type="password" name="login-recommendation-password" placeholder="Your Password">
							</div>
						</div>

						<div class="margin-top-30px">
							<button class="main black width-100 login-recommendation-button" onclick="loginRecommendation();">Login</button>
							<div class="margin-top-7-5px">or</div>
							<div id="login-nav" class="g-signin2 light margin-top-7-5px" data-onsuccess="onSignIn" data-theme="dark"></div>
						</div>
					</div>

					<div class="margin-top-60px">Belum memiliki akun? <a href="<?= base_url(); ?>register/" class="animate">Register</a> disini</div>
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
	});

	function loginRecommendation() {
    	const email = $('input[name="login-recommendation-email"]').val();
    	const password = $('input[name="login-recommendation-password"]').val();
    	let count = 0;

    	if (email == '' || password == '') {
    		count += 1;
    	}

    	if (count > 0) {
    		alert('Please fill all fields');

    		return;
    	}

    	$('.login-recommendation-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

    	$.ajax({
            data: {
            	email: email,
            	password: password,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.login-recommendation-button').html(`Login`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	fbq('track', 'CompleteRegistration');

                   	window.location.href = "<?= base_url(); ?>account/";
                }
                else {
                    alert(data.message);
                    $('.login-recommendation-button').html(`Login`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_login/'
        });
    }
</script>
</html>