<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="program-banner bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/staminasystem-banner.jpg);">
		<div class="container">
			<div class="program-typing">
				<span>Boost Your<br>Bedroom Performance</span>
			</div>

			<div class="program-list">
				<div class="list">
					<div class="number">
						<div class="circle">1</div>
					</div>
					<div class="text">Jawab Pertanyaan Dokter</div>
				</div>
				<div class="list">
					<div class="number">
						<div class="circle">2</div>
					</div>
					<div class="text">Langsung Terima Rekomendasi</div>
				</div>
				<div class="list">
					<div class="number">
						<div class="circle">3</div>
					</div>
					<div class="text">Pesan Perawatan</div>
				</div>

				<div class="margin-top-15px">Biaya perawatan mulai dari <strong>IDR 249.000</strong></div>

				<div class="button margin-top-60px">
					<a href="<?= base_url(); ?>questionaire/stamina/1/">
						<button class="main transparent">Konsultasi Gratis</button>
					</a>

					<? if ($account && $count_consultation_product > 0): ?>
						<a href="<?= base_url(); ?>performance/">
							<button class="main">Pesan Ulang</button>
						</a>
					<? endif; ?>

					<? if (!$account): ?>
						<a href="<?= base_url(); ?>login/">
							<button class="main">Pesan Ulang</button>
						</a>
					<? endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="program-banner bg-cover d-block d-sm-none" style="background-image: url(<?= base_url(); ?>assets/images/main/staminasystem-banner-mobile.jpg);">
		<div class="container">
			<div class="program-typing">
				<span>Boost Your<br>Bedroom Performance</span>
			</div>
			</div>

			<div class="program-list">
				<div class="list">
					<div class="number">
						<div class="circle">1</div>
					</div>
					<div class="text">Jawab Pertanyaan Dokter</div>
				</div>
				<div class="list">
					<div class="number">
						<div class="circle">2</div>
					</div>
					<div class="text">Langsung Terima Rekomendasi</div>
				</div>
				<div class="list">
					<div class="number">
						<div class="circle">3</div>
					</div>
					<div class="text">Pesan Perawatan</div>
				</div>
			</div>

			<div class="margin-top-15px text-center">Biaya perawatan mulai dari <strong>IDR 249.000</strong></div>

			<div class="button text-center margin-top-15px">
				<a href="<?= base_url(); ?>questionaire/stamina/1/">
					<button class="main transparent">Konsultasi Gratis</button>
				</a>

				<? if ($account && $count_consultation_product > 0): ?>
					<a href="<?= base_url(); ?>performance/">
						<button class="main">Pesan Ulang</button>
					</a>
				<? endif; ?>

				<? if (!$account): ?>
					<a href="<?= base_url(); ?>login/">
						<button class="main">Pesan Ulang</button>
					</a>
				<? endif; ?>
			</div>
		</div>
	</section>

	<section class="bg-25292B color-white">
		<div class="container mini">
			<div class="row align-items-center">
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/mediaindonesia-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/kompas-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/dailysocialid-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/thejakartapost-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/compasslist-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/detikinet-icon.png">
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 text-center">
					<img class="program-product" src="<?= base_url(); ?>assets/images/main/staminasystem-product.jpg">
				</div>
				<div class="col-12 col-sm-6 text-center">
					<div class="title big">Available Treatment</div>

					<div class="margin-top-30px">
						<div class="program-product-list">
							<div class="product-content">
								<div class="product-content-1 product-desc active">
									<img class="treatment-icon" src="<?= base_url(); ?>assets/images/main/treatment-staminasystem.png">

									<div class="title">EMLA Cream</div>
									<div>Mild Anesthetic Cream</div>

									<div class="content margin-top-15px">
										<p>Krim anestesi topikal yang dapat digunakan untuk mengatasi ejakulasi dini. </p>
										<p>Krim ini membantu mengurangi sensitivitas penis, sehingga pria dapat menunda ejakulasi dan berhubungan lebih lama.</p>
									</div>

									<div class="learn" onclick="$('#modal-stamina').modal('show');">Learn More</div>

									<div class="description margin-top-15px">
										<div class="description-list">
											<div class="left">Efek mulai dalam</div>
											<div class="right">15 menit</div>
										</div>
										<hr>
										<div class="description-list">
											<div class="left">Efek bertahan</div>
											<div class="right">1 - 3 jam</div>
										</div>
									</div>

									<div class="margin-top-15px">
										<a href="<?= base_url(); ?>questionaire/stamina/1/">
											<button class="main width-100">Konsultasi Gratis</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/performance-banner.png);">
		<div class="container normal">
			<div class="title big margin-top-60px"><br>Mudah dan praktis</div>

			<div class="program-list">
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Pengawasan dokter online</div>
				</div>
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Apotek resmi</div>
				</div>
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Harga terjangkau</div>
				</div>
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Privasi terjamin</div>
				</div>
			</div>

			<div class="margin-top-30px margin-bottom-60px">
				<a href="<?= base_url(); ?>questionaire/stamina/1/">
					<button class="main transparent big">Konsultasi Gratis</button>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-cover d-block d-sm-none" style="background-image: url(<?= base_url(); ?>assets/images/main/staminasystem-phone-mobile.jpg);">
		<div class="container normal">
			<div class="title big"><br>Mudah dan praktis</div>

			<div class="program-list left">
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Pengawasan dokter online</div>
				</div>
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Apotek resmi</div>
				</div>
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Harga terjangkau</div>
				</div>
				<div class="list">
					<div class="number">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
					</div>
					<div class="text">Privasi terjamin</div>
				</div>

				<div class="margin-top-30px margin-bottom-60px">
					<a href="<?= base_url(); ?>questionaire/stamina/1/">
						<button class="main transparent big">Konsultasi Gratis</button>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="">
		<div class="container normal">
			<div class="row">
				<div class="col-12 col-sm-5">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/stamina-program-square.jpg">
				</div>
				<div class="col-12 col-sm-7">
					<div class="faq-container">
						<div class="title extra-big margin-top-15px">FAQ</div>

						<div class="program-faq-list">
							<div class="faq-panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Apa itu ejakulasi dini?</div>
								<div class="answer">
									<p>Ejakulasi dini adalah ketika ejakulasi terjadi lebih awal dari yang diinginkan, seringkali dalam 1 menit setelah melakukan penetrasi seks, bahkan di beberapa kasus terjadi sebelum penetrasi. Ini ditandai dengan ketidakmampuan untuk menunda orgasme dan dapat menyebabkan gangguan atau frustrasi pada pasien dan/atau pasangan mereka. <a href="#" class="animate">Pelajari lebih lanjut di blog kami</a></p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Bisakah ejakulasi dini diatasi?</div>
								<div class="answer">
									<p>Ya. Meski tidak ada pengobatan tunggal yang berhasil untuk semua pria, tapi banyak juga pria yang dapat diobati dengan sukses melalui obat bebas, obat resep, modifikasi perilaku, atau kombinasi dari perawatan ini.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Apakah privasi saya terjamin?</div>
								<div class="answer">
									<p>Kami sangat menjaga privasi dan keamanan informasi Kamu. Kami telah menerapkan protokol keamanan yang ketat untuk melindungi informasi Kamu.</p>
									<p>Silakan baca Kebijakan Privasi kami untuk informasi lebih jelasnya.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Apa itu Stamina Cream dan seberapa efektif Stamina Cream untuk mengatasi ejakulasi dini?</div>
								<div class="answer">
									<p>Stamina Cream mengandung bahan aktif prilocaine dan lidocaine yang merupakan anestesi lokal. Ini berarti bahwa krim mengurangi sensitivitas di area pengaplikasian. Berkurangnya sensitivitas pada ujung penis dapat menunda ejakulasi bagi sebagian pria.</p>
									<p>Ada bukti yang menunjukkan bahwa Stamina Cream telah bekerja efektif pada 77% kasus. Dalam studi ini, Stamin Cream terbukti secara signifikan meningkatkan waktu antara mendapatkan ereksi dan ejakulasi.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Siapa yang boleh memakai produk Stamina Cream?</div>
								<div class="answer">
									<p>Pria di atas 18 tahun dapat memesan Stamina Cream melalui layanan Norm. Namun, kamu tidak bisa menggunakan perawatan ini jika kamu memiliki kekurangan G6PD atau kelainan darah tertentu (seperti methaemoglobinaemia). Jika kamu memiliki luka terbuka pada penis, sebaiknya tidak menggunakan Stamina Cream, karena dapat menyebabkan iritasi.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('modal_product_description'); ?>

	<? $this->load->view('countdown_section'); ?>

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initProgramFunction();
		initCountdown();
	});

	let popupImgIdx = 0;

	function initCountdown() {
		let countDownDate = new Date("Jul 7, 2021 00:00:00").getTime();

		let x = setInterval(function() {
			let now = new Date().getTime();
			let distance = countDownDate - now;

			let days = Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((distance % (1000 * 60)) / 1000);

			const daysDisplay = pad(days, 2);
			const hoursDisplay = pad(hours, 2);
			const minutesDisplay = pad(minutes, 2);
			const secondsDisplay = pad(seconds, 2);

			$('.digit.day').html(daysDisplay);
			$('.digit.hour').html(hoursDisplay);
			$('.digit.min').html(minutesDisplay);
			$('.digit.sec').html(secondsDisplay);

			if (distance < 0) {
				clearInterval(x);
			}
		}, 1000);
	}

	function initPopupAnimation() {console.log('open');
		setInterval(function() {
			popupImgIdx += 1;

			if (popupImgIdx > 4) {
				popupImgIdx = 1;
			}

			$('.popup-banner').attr('src', '<?= base_url(); ?>assets/images/main/popup-bg-'+ popupImgIdx +'.jpg');
		}, 500);
	}

	function initProgramFunction() {
		$('.panel, .faq-panel').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else {
				$('.panel, .faq-panel').removeClass('active');
				$(this).addClass('active');
			}
		});
	}
</script>
</html>