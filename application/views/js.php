<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/aos/aos.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/particles/particles.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/number.min..js"></script>


<script type="text/javascript">
	$(function() {
		initMenu();
		checkScroll();
		initPlugin();
	});

	function changeLanguage(lang) {
        $.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            success: function(data) {
                window.location.reload();
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_set_language/'+ lang +'/'
        });
    }

	function checkScroll() {
		if ($(window).scrollTop() <= 0) {
			$('nav').removeClass('box');

			$('.logo').attr('src', '<?= base_url(); ?>assets/images/main/logo-<?= $navbar; ?>.png');
			$('.account-icon').attr('src', '<?= base_url(); ?>assets/images/main/account-<?= $navbar; ?>.png');
			$('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart<? if (count($cart_record['arr_cart']) > 0): ?>-fill<? endif; ?>-<?= $navbar; ?>.png');
			$('.menu-icon').attr('src', '<?= base_url(); ?>assets/images/main/menu-<?= $navbar; ?>.png');
			$('.language-menu .icon img').attr('src', '<?= base_url(); ?>assets/images/main/down-<?= $navbar; ?>.png');
	   	}
	   	else {
	   		$('nav').addClass('box');
	   		$('.logo').attr('src', '<?= base_url(); ?>assets/images/main/logo.png');
			$('.account-icon').attr('src', '<?= base_url(); ?>assets/images/main/account.png');
			$('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart<? if (count($cart_record['arr_cart']) > 0): ?>-fill<? endif; ?>.png');
			$('.menu-icon').attr('src', '<?= base_url(); ?>assets/images/main/menu.png');
			$('.language-menu .icon img').attr('src', '<?= base_url(); ?>assets/images/main/down.png');
	   	}
	}

	function initMenu() {
		$(document).scroll(function() {
			checkScroll();
		});

		$('.login-container-nav .menu .list').click(function() {
			$('.login-container-nav .menu .list').removeClass('active');
			$(this).addClass('active');

			if ($(this).hasClass('login')) {
				$('.register-area').removeClass('active');
				$('.login-container-nav').removeClass('margin-top-120px');
				$('.login-area').addClass('active');
				$('input[type="username"]').focus();
			}
			else {
				$('.register-area').addClass('active');
				$('.login-container-nav').addClass('margin-top-120px');
				$('.login-area').removeClass('active');
				$('input[type="name"]').focus();
			}
		});

		/* Open Menu Shop */
		$('.slide-menu-shop').click(function() {
			$('html body').css('overflow', 'hidden');

			$('.shop-menu, .screen-blocker').addClass('active');
		});

		$('.cart-icon').click(function() {
			$('html body').css('overflow', 'hidden');

			$('.cart-container, .screen-blocker').addClass('active');
		});

		/* Open Login Menu */
		$('.slide-login, .show-login').click(function() {
			$('html body').css('overflow', 'hidden');

			$('.login-menu, .screen-blocker').addClass('active');
		});

		/* Close Menu all */
		$('.screen-blocker, .close-menu').click(function() {
			$('html body').css('overflow', 'auto');
			$('.shop-menu, .screen-blocker, .login-menu, .cart-container').removeClass('active');
		});

		/* Open Language Menu */
		$('.language-menu').click(function() {
			$('.language-list').toggleClass('active');
		});

		/* LOGIN */
		$('.login-nav-button').click(function() {
			login();
		});

		$('.register-nav-button').click(function() {
			register();
		});
	}

	function initPlugin() {
		$('input.date, input.number').keypress(function(e) {
			if (e.which > 31 && (e.which < 48 || e.which > 57)) {
				e.preventDefault();
			}
		});

		$('.date').daterangepicker({
		    singleDatePicker: true,
		    showDropdowns: true,
		    locale: {
			    format: 'YYYY-MM-DD'
			}
		});
	}

	function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        return regex.test(email);
    }

    function login() {
    	const email = $('input[name="login-email"]').val();
    	const password = $('input[name="login-password"]').val();
    	let count = 0;

    	if (email == '' || password == '') {
    		count += 1;
    	}

    	if (count > 0) {
    		alert('Please fill all fields');

    		return;
    	}

    	$('.login-nav-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

    	$.ajax({
            data: {
            	email: email,
            	password: password,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.login-nav-button').html(`Login`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	window.location.href = '<?= base_url(); ?>medical-grade/'
                }
                else {
                    alert(data.message);
                    $('.login-nav-button').html(`Login`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_login/'
        });
    }

    function pad (str, max) {
	  	str = str.toString();

	  	return str.length < max ? pad("0" + str, max) : str;
	}

    function register() {
    	const name = $('input[name="register-name"]').val();
    	const email = $('input[name="register-email"]').val();
    	const phone = $('input[name="register-phone"]').val();
    	const birthdate = $('input[name="register-birthdate"]').val();
    	const password = $('input[name="register-password"]').val();
    	const gender = $('#register-password').val();
    	let count = 0;

    	if (name == '' || email == '' || phone == '' || birthdate == '' || gender == '' || password == '') {
    		count += 1;
    	}

    	if (count > 0) {
    		alert('Please fill all fields');

    		return;
    	}

    	$('.register-nav-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

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
            	$('.register-nav-button').html(`Register`);
            },
            success: function(data) {
                if (data.status == 'success') {
                   	window.location.href = "<?= base_url(); ?>account/";
                }
                else {
                    alert(data.message);
                    $('.register-nav-button').html(`Register`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_register/'
        });
    }

	function validate() {
		let count = 0;

		$.each($('.data-important'), function(key, value) {
			if ($(value).val() == '' || $(value).val() == '0' || $(value).val() == null || typeof $(value).val()  === 'undefined') {
				count += 1;

				$(value).addClass('error');
			}

			if ($(value).hasClass('email') && !isEmail($(value).val())) {
				count += 1;

				$(value).addClass('error');
			}
		});

		return count;
	}

	function validateEdit() {
		let count = 0;

		$.each($('.data-edit-important'), function(key, value) {
			if ($(value).val() == '' || $(value).val() == '0' || $(value).val() == null || typeof $(value).val()  === 'undefined') {
				count += 1;

				$(value).addClass('error');
			}

			if ($(value).hasClass('email') && !isEmail($(value).val())) {
				count += 1;

				$(value).addClass('error');
			}
		});

		return count;
	}
</script>

<? $this->load->view('google_js'); ?>
<? $this->load->view('cart_js'); ?>