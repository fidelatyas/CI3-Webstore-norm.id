<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">Medical Grade Product</h1>
			<div class="description padding-right-15px">Produk perawatan pria yang direkomendasikan oleh dokter untuk perawatan yang maksimal.</div>

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
					<button class="main black transparent">Performance</button>
				</a>

				<a href="<?= base_url(); ?>merchandise/">
					<button class="main black transparent">Merchandise</button>
				</a>

				<a href="<?= base_url(); ?>medical-grade/">
					<button class="main black ">Medical Grade</button>
				</a>
			</div>

			<div class="padding-right-15px">
				<? if (count($arr_product_id) > 0): ?>
					<div class="row margin-top-30px small-gap">
						<? if (isset($arr_product_id[1]) && isset($arr_product_id[3]) && isset($arr_product_id[4])): ?>
							<div class="col-6 col-sm-3 small-gap">
								<div class="product-category-container">
									<div class="image">
										<a href="<?= base_url(); ?>complete-hair-growth-kit/">
											<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-hair-loss-kit-norm.jpg">
										</a>

										<div class="description small">Paket perawatan rambut rekomendasi dokter yang sangat efektif untuk mengurangi kerontokan dan mencegah kebotakan.</div>

										<div class="cart-button cart-11" onclick="addToCart(11, 5, 1, 469000);">
											<div>
													<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
												</div>
												<div>Add to Cart</div>
										</div>
									</div>
									<div class="name">Complete Hair Growth Kit</div>
									<div class="price">IDR 469.000</div>
								</div>
							</div>
						<? endif; ?>

						<? if (isset($arr_product_id[3]) && isset($arr_product_id[4])): ?>
							<div class="col-6 col-sm-3 small-gap">
								<div class="product-category-container">
									<div class="image">
										<a href="<?= base_url(); ?>starter-hair-growth-kit/">
											<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-hair-loss-kit-norm.jpg">
										</a>

										<div class="description small">Kombinasi perawatan rambut topikal untuk mengurangi kerontokan dan mencegah kebotakan.</div>

										<div class="cart-button cart-13" onclick="addToCart(13, 5, 1, 269000);">
											<div>
													<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
												</div>
												<div>Add to Cart</div>
										</div>
									</div>
									<div class="name">Starter Hair Growth Kit</div>
									<div class="price">IDR 269.000</div>
								</div>
							</div>
						<? endif; ?>

						<? foreach($arr_product_id as $product_id): ?>
							<? if ($product_id == 1): ?>
								<div class="col-6 col-sm-3 small-gap">
									<div class="product-category-container">
										<div class="image">
											<a href="<?= base_url(); ?>hair-growth-capsule/">
												<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg">
											</a>

											<div class="description small">Kapsul yang diminum sehari sekali untuk menghambat hormon DHT yang menjadi masalah kerontokan rambut.</div>

											<div class="cart-button cart-1" onclick="addToCart(1, 5, 1, 199000);">
												<div>
													<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
												</div>
												<div>Add to Cart</div>
											</div>
										</div>
										<div class="name">Hair Growth Capsule</div>
										<div class="price">IDR 199.000</div>
									</div>
								</div>
							<? endif; ?>

							<? if ($product_id == 3): ?>
								<div class="col-6 col-sm-3 small-gap">
									<div class="product-category-container">
										<div class="image">
											<a href="<?= base_url(); ?>hair-tonic/">
												<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.jpg">
											</a>

											<div class="description small">Tonic untuk merangsang pertumbuhan dan menghentikan kerontokan rambut.</div>

											<div class="cart-button cart-3" onclick="addToCart(3, 5, 1, 169000);">
												<div>
													<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
												</div>
												<div>Add to Cart</div>
											</div>
										</div>
										<div class="name">Hair Tonic</div>
										<div class="price">IDR 169.000</div>
									</div>
								</div>
							<? endif; ?>

							<!-- <? if ($product_id == 4): ?>
								<div class="col-6 col-sm-3 small-gap">
									<div class="product-category-container">
										<div class="image">
											<a href="<?= base_url(); ?>dht-shampoo/">
												<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/anti-dht-shampoo-norm.jpg">
											</a>

											<div class="description small">Sampo yang dapat mengurangi kadar DHT pada kulit kepala penyebab masalah kerontokan rambut.</div>

											<div class="cart-button cart-4" onclick="addToCart(4, 5, 1, 129000);">
												<div>
													<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
												</div>
												<div>Add to Cart</div>
											</div>
										</div>
										<div class="name">Anti DHT Shampoo</div>
										<div class="price">IDR 129.000</div>
									</div>
								</div>
							<? endif; ?> -->

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
					</div>
				<? else: ?>
					<div class="row margin-top-60px">
						<div class="col-12 text-center">
							<div class="empty-consultation-box">
								<div class="title extra-big">Oops.. Kamu belum melakukan konsultasi</div>

								<div class="margin-top-30px">Saat ini kamu belum ada resep aktif. Mohon konsultasi terlebih dahulu. Jika kamu sudah melakukan konsultasi, mohon tunggu respons dokter</div>

								<div class="margin-top-30px">
									<a href="<?= base_url(); ?>start/consultation/hairloss/">
										<button class="main black" style="width: 240px;">Hair Growth Program</button>
									</a>

									<a href="<?= base_url(); ?>start/consultation/pe/">
										<button class="main black" style="width: 240px;">Stamina System</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				<? endif; ?>
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