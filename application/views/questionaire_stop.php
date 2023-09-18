<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px text-center no-recommendation-container">
				<div class="no-recommendation-icon">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/no-recommendation.png">
				</div>

				<div class="margin-top-30px questionaire-title">Tidak Ada Perawatan yang Disarankan</div>
				<div class="margin-top-15px">Berdasarkan gejala dan rekam medis kamu, saat ini kami belum bisa memberikan rekomendasi dokter secara online. Kami sarankan kamu untuk kunjungi dokter dan konsultasi secara langsung untuk mendapatkan rekomendasi yang tepat.</div>

				<div class="margin-top-15px">Apakah kamu membuat kesalahan saat menjawab?</div>

				<div class="margin-top-30px">
					<a href="<?= base_url(); ?>questionaire/<?= $category; ?>/<?= $page; ?>/">
						<button class="main transparent">Ubah Jawaban</button>
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
	});
</script>
</html>