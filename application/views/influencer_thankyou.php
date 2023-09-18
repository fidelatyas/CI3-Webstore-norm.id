<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container normal text-center">
			<div class="margin-top-45px">
				<img style="width: 90px;" src="<?= base_url(); ?>assets/images/main/check-new.png">

				<div class="title margin-top-15px">TERIMA KASIH</div>

				<div class="margin-top-15px">Registrasi Influencer Community Norm telah berhasil.</div>

				<div class="margin-top-30px title">SELANJUTNYA?</div>
				<div class="margin-top-15px">Tim kami akan review data kamu dulu. Jika beruntung, kamu akan dihubungi oleh Norm.</div>

				<div class="margin-top-30px">
					<a href="<?= base_url(); ?>">
						<button class="main black">Back to Home</button>
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