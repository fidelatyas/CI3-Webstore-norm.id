<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="all-banner black bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/referral/referral-banner.jpg);">
		<div class="container text-left">
			<img style="width: 30%" src="<?= base_url(); ?>assets/images/main/referral/referral-title.png">
			<div class="margin-top-15px">
				<input id="input-url" type="text" name="input-url" placeholder="Input your email here..">
			</div>
			<div class="popup-error"></div>
			<div class="margin-top-15px">
				<button class="main referral-email" onclick="submitEmailPopup('desktop');">Submit Email</button>
			</div>
			<!-- <div class="tnc-small"><span class="cursor-pointer text-underline">Terms & Conditions</span> Applied</div> -->
		</div>
	</section>

	<section class="d-block d-sm-none bg-cover" style="background-image: url(<?= base_url(); ?>assets/images/main/referral/referral-banner-mobile.jpg); padding-top: 90px; padding-bottom: 450px;">
		<div class="container normal text-center">
			<img style="width: 80%" src="<?= base_url(); ?>assets/images/main/referral/referral-title-mobile.png">
			<div class="margin-top-15px">
				<input id="input-url-mobile" type="text" name="input-url" placeholder="Input your email here..">
			</div>
			<div class="popup-error"></div>
			<div class="margin-top-15px">
				<button class="main referral-email" onclick="submitEmailPopup('mobile');">Submit Email</button>
			</div>
			<!-- <div class="tnc-small"><span class="cursor-pointer text-underline">Terms & Conditions</span> Applied</div> -->
		</div>
	</section>

	<section class="bg-fafafa">
		<div class="container normal text-center d-none d-sm-block">
			<div class="row">
				<div class="col-12">
					<div class="title">Cara Dapat THR Norm</div>
				</div>
			</div>

			<div class="row margin-top-60px">
				<div class="col-4"></div>
				<div class="col-2">
					<div>
						<img class="referral-icon" src="<?= base_url(); ?>assets/images/main/referral/icon-2.png">
					</div>
					<div class="margin-top-15px">Share kode referral-mu di whatsapp</div>
				</div>
				<div class="col-2">
					<div>
						<img class="referral-icon" src="<?= base_url(); ?>assets/images/main/referral/icon-3.png">
					</div>
					<div class="margin-top-15px">Ajak semua temanmu untuk ikutan</div>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row text-center margin-top-30px">
				<div class="col-12">
					<div class="font-semibold text-uppercase">Periode program 26 Maret - 24 April 2022</div>
					<div class="font-semibold text-uppercase">Pengumuman pemenang 26 April 2022</div>
				</div>
			</div>
		</div>

		<div class="container normal text-center d-block d-sm-none">
			<div class="row">
				<div class="col-12">
					<div class="title">Cara Dapat THR Norm</div>
				</div>
			</div>

			<div class="row margin-top-60px">
				<div class="col-6">
					<div>
						<img class="referral-icon" src="<?= base_url(); ?>assets/images/main/referral/icon-2.png">
					</div>
					<div class="margin-top-15px">Share kode referral-mu di whatsapp</div>
				</div>
				<div class="col-6">
					<div>
						<img class="referral-icon" src="<?= base_url(); ?>assets/images/main/referral/icon-3.png">
					</div>
					<div class="margin-top-15px">Ajak semua temanmu untuk ikutan</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<img src="<?= base_url(); ?>assets/images/main/referral/prize.jpg" class="width-100 d-none d-sm-block">
		<img src="<?= base_url(); ?>assets/images/main/referral/prize.jpg" class="width-100 d-block d-sm-none">
	</section>

	<!-- <section>
		<div class="container normal">
			<div class="row">
				<div class="col-12 text-center">
					<div class="title">Menangkan hadiah spesial dari Norm</div>
				</div>
			</div>

			<div class="d-none d-sm-block">
				<div class="row margin-top-30px text-center align-items-center">
					<div class="col-1 d-none d-sm-block"></div>
					<div class="col-12 col-sm-3">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/referral/second-prize.png">
							</div>

							<div class="winner">Second Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">6 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 5 orang pemenang</div>
					</div>
					<div class="col-12 col-sm-4">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal first">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/referral/first-prize.png">
							</div>

							<div class="winner">First Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">1 tahun paket Ultimate Gentleman Set + 1 Utility Bag untuk 3 orang pemenang</div>
					</div>
					<div class="col-12 col-sm-3">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/referral/third-prize.png">
							</div>

							<div class="winner">Third Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">2 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 10 orang pemenang</div>
					</div>
					<div class="col-1 d-none d-sm-block"></div>
				</div>
			</div>

			<div class="d-block d-sm-none">
				<div class="row margin-top-30px text-center align-items-center small-gap">
					<div class="col-12 small-gap">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/referral/first-prize.png">
							</div>

							<div class="winner">First Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">1 tahun paket Ultimate Gentleman Set + 1 Utility Bag untuk 3 orang pemenang</div>
					</div>

					<div class="col-6 small-gap margin-top-15px">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal small">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/referral/second-prize.png">
							</div>

							<div class="winner">Second Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">6 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 5 orang pemenang</div>
					</div>
					<div class="col-6 small-gap margin-top-15px">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal small">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/referral/third-prize.png">
							</div>

							<div class="winner">Third Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">2 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 10 orang pemenang</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
	});

	function submitEmailPopup(screen) {
		const email = (screen == 'desktop') ? $('#input-url').val() : $('#input-url-mobile').val();
		$('.popup-error').html('');

		if (!isEmail(email)) {
			$('.popup-error').html("format email salah");

			return;
		}

		$('.referral-email').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading`);

		$.ajax({
            data: {
            	email: email,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	$('.popup-error').html("Server Error");
            	$('.referral-email').html(`Submit`);
            },
            success: function(data) {
            	$('.referral-email').html(`Submit`);

                if (data.status == 'success') {
                	window.location.href = '<?= base_url(); ?>referral/code/'+ data.code +'/';
                }
                else {
                    $('.popup-error').html(data.message);
                    $('.referral-email').html(`Submit`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_subscribe_email/'
        });
	}
</script>
</html>