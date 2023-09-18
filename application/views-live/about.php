<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="all-banner">
		<div class="container">
			<div class="title-2 text-uppercase">Meet Norm</div>
		</div>
	</section>

	<section class="bg-dcdcdc">
		<div class="container normal text-center">
			<h1 class="title big">Join our Community</h1>

			<div class="welcome">
				<p>Norm bukan hanya sebagai brand tapi juga movement bersama seluruh pria untuk meningkatkan kualitas hidup. Norm percaya bahwa sebuah kesuksesan hidup dimulai dari diri sendiri dengan adanya self-care yang dapat mendukung tubuh dan pikiran kamu menjadi lebih baik. </p>
				<p>Mulai langkah kamu bersama Norm dan jadilah pria terbaik!</p>
			</div>
		</div>
	</section>

	<section class="">
		<div class="container normal">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 about-image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/about-1.jpg">
				</div>
				<div class="col-12 col-sm-6">
					<div class="about-content">
						<h1 class="title">Why We Do it</h1>
						<div class="description">Kami percaya bahwa self-care punya peran besar terhadap pikiran, tubuh, dan jiwa. Maka dari itu, Norm hadir untuk mendukung kamu dan orang disekitar kamu untuk meraih performa terbaiknya.</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 about-image d-none d-sm-block">
					<div class="about-content">
						<h1 class="title">How We Do It</h1>
						<div class="description">Kami bekerjasama dengan para ahli terkemuka di bidang health & wellness di seluruh dunia untuk menciptakan solusi yang berkualitas tinggi. <a href="<?= base_url(); ?>medical-advisor/" class="animate black">Meet our experts</a>.</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 about-image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/about-2.jpg">
				</div>
				<div class="col-12 col-sm-6 about-image d-block d-sm-none">
					<div class="about-content">
						<h1 class="title">How We Do It</h1>
						<div class="description">Kami bekerjasama dengan para ahli terkemuka di bidang health & wellness di seluruh dunia untuk menciptakan solusi yang berkualitas tinggi. <a href="<?= base_url(); ?>medical-advisor/" class="animate black">Meet our experts</a>.</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 about-image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/about-3.jpg">
				</div>
				<div class="col-12 col-sm-6">
					<div class="about-content">
						<h1 class="title">Who We Are</h1>
						<div class="description">Kami adalah tim yang terdiri dari orang-orang kekinian dengan visi menciptakan brand men’s health & wellness yang lebih dari sekadar menyediakan produk. Kami berkomitmen untuk mendukung langkahmu sepenuhnya meraih hidup yang lebih baik.</div>
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
	});
</script>
</html>