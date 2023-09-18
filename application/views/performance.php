<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">Performance Collection</h1>
			<div class="description padding-right-15px">Ahli urologis kami merekomendasikan solusi untuk membantu menjaga durasi tahan lama sehingga kamu bisa mendapatkan waktu berhubungan yang lebih lama.</div>

			<div class="category-list">
				<a href="<?= base_url(); ?>all-product/">
					<button class="main black transparent">All</button>
				</a>

				<a href="<?= base_url(); ?>skincare/">
					<button class="main black transparent">Skin</button>
				</a>

				<a href="<?= base_url(); ?>hair-body/">
					<button class="main black transparent">Hair & Body</button>
				</a>

				<a href="<?= base_url(); ?>fragrance/">
					<button class="main black transparent">Fragrance</button>
				</a>

				<a href="<?= base_url(); ?>performance/">
					<button class="main black">Performance</button>
				</a>

				<a href="<?= base_url(); ?>merchandise/">
					<button class="main black transparent">Merchandise</button>
				</a>

				<? if ($account): ?>
					<a href="<?= base_url(); ?>medical-grade/">
						<button class="main black transparent">Medical Grade</button>
					</a>
				<? endif; ?>
			</div>

			<div class="padding-right-15px">
				<div class="row margin-top-30px small-gap">
					<div class="col-12 small-gap margin-bottom-30px">
						<div class="product-category-container">
							<div class="image wide">
								<img class="width-100 d-none d-sm-block" src="<?= base_url(); ?>assets/images/main/product/performance.jpg">
								<img class="width-100 d-block d-sm-none" src="<?= base_url(); ?>assets/images/main/product/performance-mobile.jpg">
							</div>
						</div>
					</div>
					<div class="w-100 d-block d-sm-none"></div>
					<? if (count($arr_product_id) > 0): ?>
						<? foreach($arr_product_id as $product_id): ?>
							<? if ($product_id == 16): ?>
								<div class="col-6 col-sm-3 small-gap">
									<div class="product-category-container">
										<div class="image">
											<a href="<?= base_url(); ?>stamina-cream/">
												<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/stamina-cream-norm.jpg">
											</a>

											<div class="description small">Krim anestesi topikal yang dapat digunakan untuk mengatasi ejakulasi dini.</div>

											<div class="cart-button cart-16" onclick="addToCart(16, 11, 1, 249000);">
												<div>
													<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
												</div>
												<div>Add to Cart</div>
											</div>
										</div>
										<div class="name">Stamina Cream</div>
										<div class="price">IDR 249.000</div>
									</div>
								</div>
							<? endif; ?>
						<? endforeach; ?>
					<? else: ?>
						<div class="col-6 col-sm-3 small-gap">
							<div class="product-category-container">
								<div class="image no-padding">
									<a href="<?= base_url(); ?>start/consultation/pe/">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/performance-consultation.jpg">
									</a>

									<div class="description small">Tingkatkan performa dan bahagiakan pasanganmu mulai dari sekarang!</div>

									<a href="<?= base_url(); ?>start/consultation/pe/">
										<div class="cart-button">Start Now</div>
									</a>
								</div>
								<div class="name">Stamina System</div>
								<div class="price">Start from IDR 249.000</div>
							</div>
						</div>
					<? endif; ?>
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