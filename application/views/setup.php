<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container normal text-center">
			<div class="setup-container margin-top-45px">
				<div class="title">Welcome to Norm</div>
				<div>Please complete your profile in order for you to proceed with our treatment</div>

				<div class="margin-top-30px">
					<div class="main-input margin-top-30px">
						<div class="label"> Name</div>
						<input type="text" class="data-important" name="name" placeholder="Your Name..">
					</div>

					<div class="main-input margin-top-30px">
						<div class="label">Birthdate</div>
						<input type="text" class="data-important date" name="birthdate" placeholder="Your Birthdate..">
					</div>

					<div class="main-input margin-top-30px">
						<div class="label">Phone Number</div>
						<input type="text" class="data-important number" name="phone" placeholder="Your Phone..">
					</div>

					<div class="main-input margin-top-30px">
						<div class="label">Gender</div>
						<select id="gender" class="data-important">
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>
					</div>

					<div class="margin-top-30px">
						<button class="main width-100 setup-update" onclick="updateData();">Update Your Data</button>
					</div>
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
		resetForm();
	});

	function resetForm() {
		$('input').val(``);
		$('input[name="name"]').val(`<?= $account->name; ?>`);
		$('input[name="birthdate"]').val(`<?= $account->birthdate_display; ?>`);
		$('input[name="phone"]').val(`<?= $account->phone; ?>`);
		$('#gender').val(`<?= $account->gender; ?>`);
	}

	function updateData() {
		const count = validate();
		$('input, select').removeClass('error');

		if (count > 0) {
			return;
		}

		$('.setup-update').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	name: $('input[name="name"]').val(),
            	birthdate: $('input[name="birthdate"]').val(),
            	phone: $('input[name="phone"]').val(),
            	gender: $('#gender').val(),
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.setup-update').html(`Update Your Data`);
            },
            success: function(data) {
                if (data.status == 'success') {
                   	<? if ($next == 'checkout'): ?>
                   		window.location.href = "<?= base_url(); ?>checkout/address/";
                   	<? else: ?>
                   		window.location.href = "<?= base_url(); ?>account/";
                   	<? endif; ?>
                }
                else {
                    alert(data.message);
                    $('.setup-update').html(`Update Your Data`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_update_profile/<?= $account->id; ?>/'
        });
	}
</script>
</html>