<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container normal text-center">
			<div class="margin-top-45px">
				<img style="width: 90px;" src="<?= base_url(); ?>assets/images/main/check-new.png">

				<div class="title margin-top-15px">Terima Kasih</div>

				<div class="margin-top-15px">Sudah memesan di Norm. Cek kembali kesesuaian pesanan kamu.</div>

				<div class="margin-top-30px title">LANGKAH SELANJUTNYA?</div>
				<div class="margin-top-15px">Apabila terdapat kendala dalam pemakaian atau barang yang kamu terima tidak sesuai dengan pesanan kamu,<br>jangan ragu untuk menghubungi <a class="animate black" href="https://api.whatsapp.com/send?phone=6281210779710&text=Hi%20Norm%20Team%2c%20Saya%20produk%20pesanan%20saya%20bermasalah.&source=&data=">customer service</a> kami</div>

				<div class="margin-top-30px">
					<a href="<?= base_url(); ?>">
						<button class="main black">Kembali ke Home</button>
					</a>
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