<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="all-banner black bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/referral/referral-banner.jpg);">
		<div class="container text-left">
			<div class="title-2">Menangkan<br>Produk Baru Norm<br>Selama 1 Tahun GRATIS</div>
			<div class="banner-text margin-top-7-5px">Hey Bro! Bagikan kode unik ini ke semua grup WhatsApp temanmu untuk ajak mereka join challenge. Semakin banyak teman bergabung, semakin besar peluangmu untuk menang!</div>
			<div class="margin-top-15px">
				<input id="input-url" type="text" name="copy-url" readonly value="<?= $referral->url; ?>">
			</div>
			<div class="margin-top-15px">
				<a href="https://api.whatsapp.com/send?text=Gais%21+Gak+sabar+nih+nunggu+launching-nya+%40norm.id.+Untuk+lo+yang+pada+blom+tau%2C+norm+itu+brand+grooming+cowo+yang+beneran+THE+BEST.+%0D%0A%0D%0AGa+pernah+liat+gw+brand+lokal+untuk+cowo+sekelas+ini%21+%F0%9F%99%8C%F0%9F%8F%BC%F0%9F%8C%8FGw+mau+coba+dapet+PAKET+PRODUK+NORM+GRATIS+selama+1+TAHUN%21+%F0%9F%98%8EGila+gais+kalo+bisa+dapet+perlengkapan+grooming+gratis+selama+se-tahun%F0%9F%A4%AF%F0%9F%A4%AF%F0%9F%98%8E%0D%0A%0D%0A<?= $referral->url; ?>%0D%0A%0D%0AIkutan+yuk+guys%21%0D%0AUdah+waktunya+buat+%23UpgradeYourself" target="_blank">
					<button class="main green"><i class="fa fa-whatsapp" aria-hidden="true"></i> Share via Whatsapp</button>
				</a>
			</div>
		</div>
	</section>

	<section class="d-block d-sm-none">
		<div>
			<img class="width-100" src="<?= base_url(); ?>assets/images/main/referral/referral-banner-mobile.jpg">
		</div>
		<div class="container normal text-center">
			<div class="title">Menangkan<br>Produk Baru Norm<br>Selama 1 Tahun GRATIS</div>
			<div class="banner-text margin-top-7-5px">Hey Bro! Bagikan kode unik ini ke semua grup WhatsApp temanmu untuk ajak mereka join challenge. Semakin banyak teman bergabung, semakin besar peluangmu untuk menang!</div>
			<div class="margin-top-15px">
				<input id="input-url" type="text" name="copy-url" readonly value="<?= $referral->url; ?>">
			</div>
			<div class="margin-top-15px">
				<a href="https://api.whatsapp.com/send?text=Gais%21+Gak+sabar+nih+nunggu+launching-nya+%40norm.id.+Untuk+lo+yang+pada+blom+tau%2C+norm+itu+brand+grooming+cowo+yang+beneran+THE+BEST.+%0D%0A%0D%0AGa+pernah+liat+gw+brand+lokal+untuk+cowo+sekelas+ini%21+%F0%9F%99%8C%F0%9F%8F%BC%F0%9F%8C%8FGw+mau+coba+dapet+PAKET+PRODUK+NORM+GRATIS+selama+1+TAHUN%21+%F0%9F%98%8EGila+gais+kalo+bisa+dapet+perlengkapan+grooming+gratis+selama+se-tahun%F0%9F%A4%AF%F0%9F%A4%AF%F0%9F%98%8E%0D%0A%0D%0A<?= $referral->url; ?>%0D%0A%0D%0AIkutan+yuk+guys%21%0D%0AUdah+waktunya+buat+%23UpgradeYourself" target="_blank">
					<button class="main green"><i class="fa fa-whatsapp" aria-hidden="true"></i> Share via Whatsapp</button>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-fafafa">
		<div class="container normal text-center d-none d-sm-block">
			<div class="row">
				<div class="col-12">
					<div class="title">HOW TO WIN</div>
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
					<div class="font-semibold text-uppercase">Periode program 21 - 27 Juni 2021</div>
					<div class="font-semibold text-uppercase">Pengumuman pemenang 28 Juni 2021</div>
				</div>
			</div>
		</div>

		<div class="container normal text-center d-block d-sm-none">
			<div class="row">
				<div class="col-12">
					<div class="title">HOW TO WIN</div>
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
		<div class="container normal">
			<div class="row">
				<div class="col-12 text-center">
					<div class="title">Semakin banyak teman bergabung, semakin besar peluangmu untuk menang!</div>
				</div>
			</div>

			<div class="row margin-top-15px align-items-center">
				<div class="col-2 d-none d-sm-block"></div>
				<div class="col-12 prize-container text-center">
					<div class="font-semibold">JUMLAH TEMAN YANG SUDAH PAKAI KODE REFERRAL-MU</div>
				</div>
				<div class="col-12">
					<div class="target-circle">
						<div><?= $referral->count_referral ?></div>
						<div class="small">Friend(s)</div>
					</div>

					<div class="margin-top-30px text-center">Cek email kamu untuk track kode referral kamu dan beberapa banyak teman sudah kamu refer!</div>
				</div>
			</div>

			<div class="row margin-top-30px">
				<div class="col-3 d-none d-sm-block"></div>
				<div class="col-12 col-sm-6">
					<div class="font-semibold">Syarat & Ketentuan</div>
					<ol class="margin-top-7-5px">
						<li>Program dimulai pada tanggal <b>21 – 27 Juni 2021</b></li>
						<li>Peserta diwajibkan untuk mengikuti akun instagram <b><a class="animate active black" href="https://www.instagram.com/norm.id/">@norm.id</a></b></li>
						<li>Pemenang akan diumumkan pada tanggal <b>28 Juni 2021</b> via Instagram Story <b><a class="animate active black" href="https://www.instagram.com/norm.id/">@norm.id</a></b>.</li>
						<li>Pemenang akan dipilih secara acak dengan sistem undian. Semakin banyak referensi yang Anda dapatkan, semakin tinggi peluang Anda untuk dipilih.</li>
					</ol>
				</div>
				<div class="col-3 d-none d-sm-block"></div>
			</div>

			<div class="row margin-top-60px">
				<div class="col-12 text-center">
					<div class="title">Menangkan hadiah spesial dari Norm</div>
					<div class="">Setiap paket adalah untuk penggunaan selama 2 bulan<br>dan paket akan dikirim setiap 2 bulan sekali. </div>
				</div>
			</div>

			<div class="d-none d-sm-block">
				<div class="row margin-top-30px text-center align-items-center">
					<div class="col-1 d-none d-sm-block"></div>
					<div class="col-12 col-sm-3">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal">
								<img src="<?= base_url(); ?>assets/images/main/referral/second-prize.png">
							</div>

							<div class="winner">Second Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">6 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 5 orang pemenang</div>
					</div>
					<div class="col-12 col-sm-4">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal first">
								<img src="<?= base_url(); ?>assets/images/main/referral/first-prize.png">
							</div>

							<div class="winner">First Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">1 tahun paket Ultimate Gentleman Set + 1 Utility Bag untuk 3 orang pemenang</div>
					</div>
					<div class="col-12 col-sm-3">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal">
								<img src="<?= base_url(); ?>assets/images/main/referral/third-prize.png">
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
								<img src="<?= base_url(); ?>assets/images/main/referral/first-prize.png">
							</div>

							<div class="winner">First Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">1 tahun paket Ultimate Gentleman Set + 1 Utility Bag untuk 3 orang pemenang</div>
					</div>

					<div class="col-6 small-gap margin-top-15px">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal small">
								<img src="<?= base_url(); ?>assets/images/main/referral/second-prize.png">
							</div>

							<div class="winner">Second Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">6 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 5 orang pemenang</div>
					</div>
					<div class="col-6 small-gap margin-top-15px">
						<div class="prize-box">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
							<div class="medal small">
								<img src="<?= base_url(); ?>assets/images/main/referral/third-prize.png">
							</div>

							<div class="winner">Third Prize</div>
						</div>
						<div class="font-semibold text-uppercase margin-top-7-5px">2 bulan paket Ultimate Gentleman Set + 1 Utility Bag untuk 10 orang pemenang</div>
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
		copyUrl();
	});

	function copyUrl() {
		$('#input-url').click(function() {
			$('#input-url').focus();
			$('#input-url').select();

			var copyText = document.getElementById("input-url");

			copyText.select();
			copyText.setSelectionRange(0, 99999);
			document.execCommand("copy");
			alert("Copied the text: " + copyText.value);
		});
	}
</script>
</html>