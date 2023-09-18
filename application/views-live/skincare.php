<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">Skin Collection</h1>
			<div class="description padding-right-15px">Rangkaian perawatan  wajah dengan bahan alami yang  diformulasikan oleh skincare expert di Korea Selatan. Menjadikan wajahmu lebih bersih, cerah, dan awet muda.</div>

			<div class="category-list">
				<a href="<?= base_url(); ?>all-product/">
					<button class="main black transparent">All</button>
				</a>

				<a href="<?= base_url(); ?>skincare/">
					<button class="main black">Skin</button>
				</a>

				<a href="<?= base_url(); ?>hair-body/">
					<button class="main black transparent">Hair & Body</button>
				</a>

				<a href="<?= base_url(); ?>performance/">
					<button class="main black transparent">Performance</button>
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
								<img class="width-100 d-none d-sm-block" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set.jpg">
								<img class="width-100 d-block d-sm-none" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-mobile.jpg">
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>face-wash/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Basic skincare untuk membersihkan wajah.</div>

								<!-- <div class="cart-button cart-18" onclick="addToCart(18, 0, 1, 79000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Hydra Cleansing Face Wash</div>
							<div class="price">IDR 79.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>face-scrub/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Formulasi scrub mengandung cellulose microbeads, biji aprikot, serta sage dan maca.</div>

								<!-- <div class="cart-button cart-19" onclick="addToCart(19, 0, 1, 89000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Deep Exfoliation Face Scrub</div>
							<div class="price">IDR 89.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>moisturizer/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit.</div>

								<!-- <div class="cart-button cart-20" onclick="addToCart(20, 0, 1, 99000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Daily Defense Moisturizer</div>
							<div class="price">IDR 99.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row small-gap d-none">
					<div class="col-12 small-gap">
						<div class="separator">
							<div class="text">Bundles</div>
						</div>
					</div>
				</div>

				<div class="row margin-top-30px small-gap d-none">
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>maintenance-plus-bag/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/maintenance-set-bag-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Perawatan rutin wajah sangat perlu supaya tetap bersih dan membuatmu terus percaya diri.</div>

								<!-- <div class="cart-button cart-27" onclick="addToCart(27, 0, 1, 469000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Complete Maintenance Set + Bag</div>
							<div class="price">IDR 469.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>maintenance-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Perawatan rutin wajah sangat perlu supaya tetap bersih dan membuatmu terus percaya diri.</div>

								<!-- <div class="cart-button cart-24" onclick="addToCart(24, 0, 1, 259000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Complete Maintenance Set</div>
							<div class="price">IDR 259.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>starter-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Starter Maintenance Set sebagai langkah awal kamu melakukan perawatan untuk mendapatkan wajah yang bersih dan cerah.</div>

								<!-- <div class="cart-button cart-29" onclick="addToCart(29, 0, 1, 159000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Starter Maintenance Set</div>
							<div class="price">IDR 159.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>daily-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/daily-set-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Daily Maintenance Set adalah kebutuhan harian kamu untuk membantu wajah bebas jerawat, lembab, dan terlihat lebih muda.</div>

								<!-- <div class="cart-button cart-30" onclick="addToCart(30, 0, 1, 169000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
							</div>
							<div class="name">Daily Maintenance Set</div>
							<div class="price">IDR 169.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>aging-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/aging-set-1.jpg">
								</a>

								<div class="coming-soon">Coming Soon</div>

								<div class="description small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis nulla vehicula venenatis consequat.</div>

								<div class="cart-button cart-31" onclick="addToCart(31, 0, 1, 179000);">
									<div>
										<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Aging Maintenance Set</div>
							<div class="price">IDR 179.000</div>
							<div class="stars">
								<div class="img">
									<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
								</div>
								<div class="review">(3)</div>
							</div>
						</div>
					</div> -->
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