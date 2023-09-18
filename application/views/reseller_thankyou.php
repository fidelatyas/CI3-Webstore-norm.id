<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation_reseller'); ?>

	<section class="margin-top-45px">
		<div class="container normal text-center">
			<div class="margin-top-45px">
				<img style="width: 90px;" src="<?= base_url(); ?>assets/images/main/check-new.png">

				<div class="title margin-top-15px">TERIMA KASIH</div>

				<div class="margin-top-15px">Registrasi reseller Norm telah berhasil.</div>

				<div class="margin-top-30px title">SELANJUTNYA?</div>
				<div class="margin-top-15px">Login ke dashboard reseller dengan username dan password yang dibuat saat pendaftaran untuk melakukan transaksi.</div>

				<div class="margin-top-30px">
					<div style="margin-bottom: 7.5px;">Klik tombol di bawah jika kamu tidak diarahkan secara otomatis</div>
					<a href="http://reseller.norm.id/">
						<button class="main black">Login ke Dashboard Reseller</button>
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
		setTimeout(function() {
			window.location.href = 'http://reseller.norm.id/';
		}, 5000);
	});
</script>
</html>