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

				<a href="<?= base_url(); ?>fragrance/">
					<button class="main black transparent">Fragrance</button>
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

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">Komponen penting dalam perawatan kulit pria manapun. Face wash kami efektif membersihkan kotoran, mengurangi minyak berlebih, serta menjadikan kulit bersih dan lembut.</div>

								<!-- <div class="cart-button cart-18" onclick="addToCart(18, 0, 1, 79000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
								<div class="cart-button cart-18">
									<div>SOLD OUT</div>
								</div>
							</div>
							<div class="name">Hydra Cleansing Face Wash</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="18" data-product-models="Bundle" data-name="Hydra Cleansing Face Wash" data-url="https://www.norm.id/face-wash/" data-image-url="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg" data-description="Basic skincare untuk membersihkan wajah. Diformulasikan menggunakan agave leaf, calendula flower, dan mugwort yang  efektif membersihkan kotoran, mengurangi minyak berlebih, serta menjadikan kulit bersih dan lembut" data-bread-crumbs="Bundle"></div>
							</div>
							<div class="price">IDR 79.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>face-scrub/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">Formulasi scrub mengandung cellulose microbeads, biji aprikot, serta sage dan maca.</div>

								<div class="cart-button cart-19" onclick="addToCart(19, 0, 1, 89000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Deep Exfoliation Face Scrub</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="19" data-product-models="Bundle" data-name="Deep Exfoliating Face Scrub" data-url="https://www.norm.id/face-scrub" data-image-url="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg" data-description="Eksfoliasi untuk mencerahkan wajah. Formulasi scrub mengandung cellulose microbeads, biji aprikot, serta sage dan maca." data-bread-crumbs="Bundle"></div>
							</div>
							<div class="price">IDR 89.000</div>

						</div>
					</div>

					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>moisturizer/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit.</div>

								<!-- <div class="cart-button cart-20" onclick="addToCart(20, 0, 1, 99000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
								<div class="cart-button cart-18">
									<div>SOLD OUT</div>
								</div>
							</div>
							<div class="name">Daily Defense Moisturizer</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="20" data-product-models="Bundle" data-name="Daily Defense Moisturizer" data-url="https://www.norm.id/moisturizer/" data-image-url="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg" data-description="Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit. Daily Defense Moisturizer memberikan energi pada kulit tanpa membuatnya terasa lengket atau berminyak." data-bread-crumbs="Bundle"></div>
							</div>
							<div class="price">IDR 99.000</div>

						</div>
					</div>
				</div>

				<!-- <div class="row small-gap">
					<div class="col-12 small-gap">
						<div class="separator">
							<div class="text">Bundles</div>
						</div>
					</div>
				</div>

				<div class="row margin-top-30px small-gap">
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>ultimate-gift-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/ultimate-gift-set-1.jpg">
								</a>

								<div class="description small">Pilihan tepat dan lengkap untuk kamu mendapatkan penampilan yang lebih segar dan harum serta wajah bersih yang bersih, cerah, dan tampak lebih muda.</div>

								<div class="cart-button cart-33" onclick="addToCart(33, 0, 1, 659000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Ultimate Gift Set</div>
							<div class="price">IDR 659.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>ultimate-gift-set-plus-bag/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/ultimate-gift-set-plus-bag-1.jpg">
								</a>

								<div class="description small">Pilihan tepat dan lengkap untuk kamu mendapatkan penampilan yang lebih segar dan harum serta wajah bersih yang bersih, cerah, dan tampak lebih muda.</div>

								<div class="cart-button cart-34" onclick="addToCart(34, 0, 1, 799000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Ultimate Gift Set + Bag</div>
							<div class="price">IDR 799.000</div>

						</div>
					</div>

					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>maintenance-plus-bag/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/maintenance-set-bag-1.jpg">
								</a>

								<div class="description small">Perawatan rutin wajah sangat perlu supaya tetap bersih dan membuatmu terus percaya diri.</div>

								<div class="cart-button cart-27" onclick="addToCart(27, 0, 1, 469000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Complete Maintenance Set + Bag</div>
							<div class="price">IDR 469.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>maintenance-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
								</a>

								<div class="description small">Perawatan rutin wajah sangat perlu supaya tetap bersih dan membuatmu terus percaya diri.</div>

								<div class="cart-button cart-24" onclick="addToCart(24, 0, 1, 259000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Complete Maintenance Set</div>
							<div class="price">IDR 259.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>starter-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
								</a>

								<div class="description small">Starter Maintenance Set sebagai langkah awal kamu melakukan perawatan untuk mendapatkan wajah yang bersih dan cerah.</div>

								<div class="cart-button cart-29" onclick="addToCart(29, 0, 1, 159000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Starter Maintenance Set</div>
							<div class="price">IDR 159.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>daily-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/daily-set-1.jpg">
								</a>

								<div class="description small">Daily Maintenance Set adalah kebutuhan harian kamu untuk membantu wajah bebas jerawat, lembab, dan terlihat lebih muda.</div>

								<div class="cart-button cart-30" onclick="addToCart(30, 0, 1, 169000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Daily Maintenance Set</div>
							<div class="price">IDR 169.000</div>

						</div>
					</div>
				</div> -->
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