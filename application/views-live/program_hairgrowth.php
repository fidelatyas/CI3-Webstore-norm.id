<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="program-banner bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/hairgrowth-banner.jpg);">
		<div class="container">
			<div class="program-typing">
				<span>Solusi terbaik untuk<br>mengatasi rambut rontok pria</span>
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

				<div class="margin-top-15px">Biaya perawatan mulai dari <strong>IDR 199.000</strong></div>

				<div class="button margin-top-60px">
					<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
						<button class="main black">Konsultasi Gratis</button>
					</a>

					<? if ($account && $count_consultation_product > 0): ?>
						<a href="<?= base_url(); ?>hair-body#prescription">
							<button class="main transparent">Pesan Ulang</button>
						</a>
					<? endif; ?>

					<? if (!$account): ?>
						<a href="<?= base_url(); ?>login/">
							<button class="main transparent">Pesan Ulang</button>
						</a>
					<? endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="program-banner bg-cover d-block d-sm-none" style="background-image: url(<?= base_url(); ?>assets/images/main/hairgrowth-banner-mobile.jpg);">
		<div class="container">
			<div class="program-typing">
				<span>Solusi terbaik untuk mengatasi rambut rontok pria</span>
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

			<div class="text-center">Biaya perawatan mulai dari <strong>IDR 199.000</strong></div>

			<div class="button text-center margin-top-15px">
				<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
					<button class="main black">Konsultasi Gratis</button>
				</a>

				<? if ($account && $count_consultation_product > 0): ?>
					<a href="<?= base_url(); ?>hair-body#prescription">
						<button class="main transparent">Pesan Ulang</button>
					</a>
				<? endif; ?>

				<? if (!$account): ?>
					<a href="<?= base_url(); ?>login/">
						<button class="main transparent">Pesan Ulang</button>
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
				<div class="col-12 col-sm-6">
					<h1 class="title big text-normal">Hasil Mereka</h1>
					<div class="rating">
						<div class="star">
							<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
						</div>
						<div class="content">4,8 of 498 reviews</div>
					</div>

					<div>
						<div class="result-list">
							<div class="list active" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/ricky-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/ricky-after.jpg">
								<div class="name">Ricky</div>
								<div class="month">3 bulan</div>
							</div>
							<div class="list" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/brilian-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/brilian-after.jpg">
								<div class="name">Brilian</div>
								<div class="month">2 bulan</div>
							</div>
							<div class="list" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/putu-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/putu-after.jpg">
								<div class="name">Putu</div>
								<div class="month">1 bulan</div>
							</div>
							<div class="list" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/irdian-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/irdian-after.jpg">
								<div class="name">Irdian</div>
								<div class="month">4 bulan</div>
							</div>
						</div>
					</div>

					<div>
						<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
							<button class="main width-100">Konsultasi Gratis</button>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<div class="compare-image">
						<div class="comparison">
							<figure style="background-image: url(<?= base_url(); ?>assets/images/main/comparison/ricky-before.jpg);">
								<div class="divisor" style="background-image: url(<?= base_url(); ?>assets/images/main/comparison/ricky-after.jpg);"></div>
							</figure>

							<div class="dragger">
								<div class="standline"></div>
							</div>
						</div>

						<div class="scroll-dragger">
							<div class="line"></div>
							<div class="dots"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-25292B color-white">
		<div class="container normal text-center">
			<div class="row">
				<div class="col-12">
					<div class="title big">12.000+ pria sudah membuktikan Norm</div>
				</div>
			</div>
			<div class="row small-gap margin-top-45px">
				<div class="col-12 small-gap col-sm-3"></div>

				<div class="col-4 small-gap col-sm-2">
					<div data-src="https://www.youtube.com/embed/g1wQZV08StI" class="open-review-modal cursor-pointer">
						<img class="width-100 margin-bottom-15px" src="<?= base_url(); ?>assets/images/main/results/bisma.png">
					</div>
				</div>
				<div class="col-4 small-gap col-sm-2">
					<div data-src="https://www.youtube.com/embed/_ZjyGE8yRy8" class="open-review-modal cursor-pointer">
						<img class="width-100 margin-bottom-15px" src="<?= base_url(); ?>assets/images/main/results/galih.png">
					</div>
				</div>
				<div class="col-4 small-gap col-sm-2">
					<div data-src="https://www.youtube.com/embed/7tfn3pX4Gwo" class="open-review-modal cursor-pointer">
						<img class="width-100 margin-bottom-15px" src="<?= base_url(); ?>assets/images/main/results/jasver.png">
					</div>
				</div>

				<div class="col-12 small-gap col-sm-3"></div>
			</div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 text-center">
					<img class="program-product" src="<?= base_url(); ?>assets/images/main/hairgrowth-product.jpg">
				</div>
				<div class="col-12 col-sm-6 text-center">
					<div class="title big">Perawatan Efektif</div>

					<div class="margin-top-30px">
						<div class="program-product-list">
							<div class="product-menu">
								<div class="product-list" data-idx="1">
									<div class="name active">Hair Growth Capsule</div>
								</div>
								<div class="product-list" data-idx="2">
									<div class="name">Hair Tonic</div>
								</div>
								<div class="product-list" data-idx="3">
									<div class="name">Shampoo</div>
								</div>
							</div>

							<div class="product-content">
								<div class="product-content-1 product-desc active">
									<img class="treatment-icon" src="<?= base_url(); ?>assets/images/main/treatment-hairgrowth-1.png">

									<div class="title">Hair Growth Capsule</div>
									<div>DHT Blocker</div>

									<div class="content margin-top-15px">Hair Growth Capsule adalah obat yang diminum sekali sehari untuk menghambat hormon DHT yang menjadi masalah kerontokan rambut. </div>

									<div class="learn" onclick="$('#modal-finasteride').modal('show');">Learn More</div>

									<div class="description margin-top-15px">
										<div class="description-list">
											<div class="left">Lihat hasil dalam</div>
											<div class="right">3 - 6 bulan</div>
										</div>
										<hr>
										<div class="description-list">
											<div class="left">Efek bertahan</div>
											<div class="right">terus menerus, bila diminum secara rutin</div>
										</div>
										<hr>
										<div class="description-list">
											<div class="left">Efektif pada</div>
											<div class="right">9/10 pria</div>
										</div>
									</div>

									<div class="margin-top-15px">
										<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
											<button class="main width-100">Konsultasi Gratis</button>
										</a>
									</div>
								</div>

								<div class="product-content-2 product-desc">
									<img class="treatment-icon" src="<?= base_url(); ?>assets/images/main/treatment-hairgrowth-2.png">

									<div class="title">Hair Tonic</div>
									<div>Growth Promoting Tonic</div>

									<div class="content margin-top-15px">Hair Tonic untuk merangsang pertumbuhan dan menghentikan kerontokan rambut. </div>

									<div class="learn" onclick="$('#modal-hair-tonic').modal('show');">Learn More</div>

									<div class="description margin-top-15px">
										<div class="description-list">
											<div class="left">Lihat hasil dalam</div>
											<div class="right">2 - 4 bulan</div>
										</div>
										<hr>
										<div class="description-list">
											<div class="left">Efek bertahan</div>
											<div class="right">terus menerus, bila digunakan secara rutin</div>
										</div>
										<hr>
										<div class="description-list">
											<div class="left">Efektif pada</div>
											<div class="right">2/3 pria</div>
										</div>
									</div>

									<div class="margin-top-15px">
										<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
											<button class="main width-100">Konsultasi Gratis</button>
										</a>
									</div>
								</div>

								<div class="product-content-3 product-desc">
									<img class="treatment-icon" src="<?= base_url(); ?>assets/images/main/treatment-hairgrowth-3.png">

									<div class="title">Anti-DHT Shampoo</div>
									<div>Natural DHT Blocker</div>

									<div class="content margin-top-15px">Sampo yang dapat mengurangi kadar DHT pada kulit kepala.</div>

									<div class="learn" onclick="$('#modal-shampoo').modal('show');">Learn More</div>

									<div class="description margin-top-15px">
										<div class="description-list">
											<div class="left">Lihat hasil dalam</div>
											<div class="right">2 - 3 minggu</div>
										</div>
										<hr>
										<div class="description-list">
											<div class="left">Efek bertahan</div>
											<div class="right">terus menerus, bila digunakan secara rutin</div>
										</div>
									</div>

									<div class="margin-top-15px">
										<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
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

	<section class="bg-f2f3ee">
		<div class="container normal">
			<h1 class="title big text-center">Proses Perawatan</h1>

			<div class="row margin-top-30px">
				<div class="col-12 col-sm-4 text-center">
					<div class="treatment-process">
						<div class="treatment-image">
							<img src="<?= base_url(); ?>assets/images/main/proses-perawatan-1.png">
						</div>

						<div class="treatment-process-description">
							<div class="title">1 - 2 Bulan</div>
							<p>Kecil kemungkinan terjadi perubahan drastis pada 1-2 bulan pertama. Jangan panik jika kerontokan tetap terjadi untuk sementara waktu.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<div class="treatment-process">
						<div class="treatment-image">
							<img src="<?= base_url(); ?>assets/images/main/proses-perawatan-2.png">
						</div>

						<div class="treatment-process-description">
							<div class="title">3 - 6 Bulan</div>
							<p>Pada titik ini, kerontokan mulai terhambat atau dalam beberapa kasus, mulai berhenti total. Jangan lupa mengambil foto untuk dijadikan perbandingan.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<div class="treatment-process">
						<div class="treatment-image">
							<img src="<?= base_url(); ?>assets/images/main/proses-perawatan-3.png">
						</div>

						<div class="treatment-process-description">
							<div class="title">6 Bulan Keatas</div>
							<p>Jika pemakaian dilakukan secara konsisten, kerontokan rambut akan terhenti, dan rambut akan mulai tumbuh kembali.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="margin-top-60px text-center">
				<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
					<button class="main big transparent">Konsultasi Gratis</button>
				</a>
			</div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6">
					<div class="title big">Mudah dan praktis</div>

					<div class="program-list left">
						<div class="list">
							<div class="number">
								<img src="<?= base_url(); ?>assets/images/main/check.png">
							</div>
							<div class="text">Pengawasan dokter online</div>
						</div>
						<div class="list">
							<div class="number">
								<img src="<?= base_url(); ?>assets/images/main/check.png">
							</div>
							<div class="text">Apotek resmi</div>
						</div>
						<div class="list">
							<div class="number">
								<img src="<?= base_url(); ?>assets/images/main/check.png">
							</div>
							<div class="text">Harga terjangkau</div>
						</div>
						<div class="list">
							<div class="number">
								<img src="<?= base_url(); ?>assets/images/main/check.png">
							</div>
							<div class="text">Privasi terjamin</div>
						</div>

						<div class="margin-top-30px margin-bottom-60px">
							<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
								<button class="main transparent big">Konsultasi Gratis</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 text-center">
					<img class="width-70 text-center margin-auto" src="<?= base_url(); ?>assets/images/main/solution-hairgrowth.png">
				</div>
			</div>
		</div>
	</section>

	<section class="bg-eaeaea">
		<div class="container normal text-center padding-bottom-0">
			<div class="row bg-cover-top padding-bottom-60px d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/guarantee-banner.jpg);">
				<div class="col-12 col-sm-6">
					<div class="guarantee-box">
						<div class="title big">Growth Guarantee Program</div>

						<div class="margin-top-30px">
							<p>Kami percaya solusi kami bekerja dengan sangat efektif dalam mengatasi kerontokan. Melalui kepercayaan itu kami menawarkan <strong>Hair Growth Guarantee Program.</strong></p>
						</div>

						<div class="margin-top-30px">
							<a href="<?= base_url(); ?>guarantee/">
								<button class="main">Learn More</button>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row padding-top-30px d-block d-sm-none">
				<div class="col-12 col-sm-6">
					<div class="guarantee-box">
						<div class="title big">Growth Guarantee Program</div>

						<div class="margin-top-30px">
							<p>Kami percaya solusi kami bekerja dengan sangat efektif dalam mengatasi kerontokan. Melalui kepercayaan itu kami menawarkan <strong>Hair Growth Guarantee Program.</strong></p>
						</div>

						<div class="margin-top-30px">
							<a href="<?= base_url(); ?>guarantee/">
								<button class="main">Learn More</button>
							</a>
						</div>
					</div>
				</div>

				<div class="col-12">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/guarantee-banner-mobile.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="">
		<div class="container normal">
			<div class="row">
				<div class="col-12 col-sm-5">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/hairgrowth-faq.jpg">
				</div>
				<div class="col-12 col-sm-7">
					<div class="faq-container">
						<div class="title extra-big margin-top-15px">FAQ</div>

						<div class="program-faq-list">
							<div class="faq-panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Apa itu kerontokan rambut (male pattern hair loss)?</div>
								<div class="answer">
									<p>Kerontokan rambut pada pria atau <i>male pattern hair loss</i> (MPH) adalah bentuk kerontokan rambut yang paling umum, terutama disebabkan oleh faktor genetik. Hal itu menjadi bagian dari 95% masalah rambut rontok pada pria dan dapat diobati.</p>
									<p>Folikel rambut MPH secara bertahap akan menyusut, rambut kamu menjadi lebih tipis dan rontok lebih cepat. Pada folikel rambut ada enzim yang disebut 5-alpha-reductase (5AR) yang mengubah testosteron menjadi DHT (hormon yang lebih kuat). Folikel rambut rentan terhadap MPH dan lebih sensitif pada DHT sehingga menyebabkan folikel mudah menyusut.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Apa saja penyebab kerontokan rambut?</div>
								<div class="answer">
									<p>Kerontokan rambut cukup umum dan biasanya tidak perlu dikhawatirkan karena hanya bagian dari penuaan. Kebotakan pria atau wanita biasanya dari keturunan dan permanen (meskipun dapat diperlambat dengan pengobatan). Alasan lain untuk kerontokan rambut termasuk di antaranya adalah penyakit, stres, perawatan kanker, penurunan berat badan atau kekurangan zat besi yang menjadi penyebab kerontokan rambut sementara.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Seberapa efektif produk yang disediakan Norm untuk mengatasi kerontokan rambut?</div>
								<div class="answer">
									<p>Finasteride dan Hair Tonic adalah perawatan yang terbukti dan sangat efektif untuk kerontokan rambut pria. Penelitian telah menunjukkan bahwa semakin awal kamu memulai, semakin baik hasilnya!</p>
									<p>Penelitian menunjukkan bahwa Finasteride bekerja menghentikan kerontokan rambut atau menumbuhkan rambut kembali pada 9 dari 10 pria. Sementara itu, dari 10 pria, Hair Tonic bekerja efektif pada lebih dari 6 pria. Gabungan dari itu bekerja di > 90% pria.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Berapa lama agar perawatan rambut rontok bekerja?</div>
								<div class="answer">
									<p>Konsistensi dan ketekunan adalah kunci keberhasilan pengobatan. Hasil mulai terlihat dalam 3-6 bulan penggunaan rutin dengan manfaat maksimal dalam 12 bulan lebih. Untuk alasan ini, kami sangat menyarankan untuk mencoba perawatan paling minim, yaitu 3 bulan. Jika pengobatan dihentikan, manfaat perawatannya akan hilang setelah 6 bulan dan biasanya benar-benar hilang setelah 9-12 bulan.</p>
								</div>
							</div>
							<div class="faq-panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="question">Siapa yang boleh memakai produk anti hair loss Norm?</div>
								<div class="answer">
									<p>Produk perawatan Norm tidak disarankan bagi mereka yang memiliki ketentuan berikut:</p>
									<ol>
										<li>Hair Tonic tidak disarankan bagi wanita atau pria berusia di bawah 18 tahun atau di atas 65 tahun</li>
										<li>Pria yang tidak memiliki pola kebotakan atau benar-benar botak (botak licin)</li>
										<li>Hair Tonic tidak boleh digunakan bagi yang memiliki masalah kulit kepala, kemerahan atau masalah tekanan darah rendah</li>
										<li>Finasteride tidak cocok untuk pria dengan pembesaran prostat jinak dan jika kamu sedang menerima pengobatan dengan inhibitor reduktase 5-alpha (mis. Finasteride, Dutasteride)</li>
										<li>Finasteride tidak boleh digunakan saat sedang melakukan program hamil</li>
										<li>Jika kamu pernah menderita gynaecomastia, kanker payudara pria atau prostat, tidak dianjurkan mengonsumsi Finasteride</li>
										<li>Finasteride tidak disarankan untuk dikonsumsi pada penderita depresi berat / pikiran untuk bunuh diri</li>
									</ol>
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

	<div class="modal fade" id="modal-review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-body no-padding">
	      		</div>
	    	</div>
	  	</div>
	</div>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		dragImage();
		initProgramFunction();
		initCountdown();
	});

	let popupImgIdx = 0;

	function dragImage() {
		$('.scroll-dragger .dots').draggable({
         	axis: "x",
          	containment: 'parent',
          	drag: function() {
          		var draggerPosition = $('.scroll-dragger .dots').position();
               	var containerWidth = $('.scroll-dragger').width();
               	var widthNormal = (draggerPosition.left / containerWidth) * 100;
               	console.log(widthNormal);

               	width = widthNormal + '%';

              	$('.scroll-dragger .line, .divisor').css('width', 'calc('+ width +' + 7.5px)');
              	$('.dragger').css('left', 'calc('+ width +' + 7.5px)');
          	},
       	});
	}

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
		$('.open-review-modal').click(function() {
			const src = $(this).attr('data-src');

			$('#modal-review .modal-body').html(`<iframe style="width: 100%; height: 700px;" src="`+ src +`" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`);

			$('#modal-review').modal('show');
		});

		$('#modal-review').on('hidden.bs.modal', function () {
			$('#modal-review .modal-body').empty();
		});

		$('.panel, .faq-panel').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else {
				$('.panel').removeClass('active');
				$(this).addClass('active');
			}
		});

		$('.product-menu .name').click(function() {
			const idx = $(this).parent().attr('data-idx');

			$('.product-menu .name').removeClass('active');
			$(this).addClass('active');

			$('.product-content .product-desc').removeClass('active');
			$('.product-content-'+ idx).addClass('active');
		});

		$('.result-list .list').click(function() {
			$('.result-list .list').removeClass('active');
			$(this).addClass('active');

			const bgBefore = $(this).attr('data-bg-before');
			const bgAfter = $(this).attr('data-bg-after');

			$('.comparison figure').css('background-image', 'url('+ bgBefore +')');
			$('.comparison .divisor').css('background-image', 'url('+ bgAfter +')');
		});
	}
</script>
</html>