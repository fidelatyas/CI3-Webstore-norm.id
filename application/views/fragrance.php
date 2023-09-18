<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">Fragrance Collection</h1>
			<div class="description padding-right-15px">Rekomendasi parfum mewah dan modern yang meningkatkan kepercayaan diri. Aromanya yang segar dan tahan lama buat kamu produktif saat beraktivitas.</div>

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
					<button class="main black">Fragrance</button>
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
								<img class="width-100 d-none d-sm-block" src="<?= base_url(); ?>assets/images/main/product/spectrum-set.jpg">
								<img class="width-100 d-block d-sm-none" src="<?= base_url(); ?>assets/images/main/product/spectrum-set-mobile.jpg">
							</div>
						</div>
					</div>
					<div class="w-100 d-block d-sm-none"></div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>summer-sol/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/summer-sol-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">Terinspirasi dari mewahnya aroma wangi bergamot, Lavender, dan Cedarwood yang memberikan sensasi kesegaran dan Summer Sol dapat menemani aktivitas pada siang hari.</div>

								<div class="cart-button cart-35" onclick="addToCart(35, 0, 1, 229000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Summer Sol Eau De Parfum</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="35" data-product-models="Bundle" data-name="Summer Sol Eau De Parfum" data-url="https://www.norm.id/summer-sol/" data-image-url="<?= base_url(); ?>assets/images/main/product/summer-sol-1.jpg" data-description="Terinspirasi dari mewahnya aroma wangi bergamot, Lavender, dan Cedarwood yang memberikan sensasi kesegaran dan Summer Sol dapat menemani aktivitas pada siang hari." data-bread-crumbs="Bundle"></div>
							</div>
							<div class="price">IDR 229.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>white-night/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">parfum yang membuat tubuh wangi sepanjang malam. Meningkatkan karakter nyaman, maskulinitas dan kedewasaan yang menjadikan jati diri pria sejati.  </div>

								<div class="cart-button cart-36" onclick="addToCart(36, 0, 1, 229000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">White Night Eau De Parfum</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="36" data-product-models="Body Wash" data-name="White Night Eau De Parfum" data-url="https://www.norm.id/white-night/" data-image-url="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg" data-description="parfum yang membuat tubuh wangi sepanjang malam. Meningkatkan karakter nyaman, maskulinitas dan kedewasaan yang menjadikan jati diri pria sejati.  " data-bread-crumbs="Hair & Body"></div>
							</div>
							<div class="price">IDR 229.000</div>

						</div>
					</div>
				</div>

				<div class="row small-gap">
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
								<a href="<?= base_url(); ?>spectrum-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/spectrum-set-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">Pilihan tepat dan lengkap untuk kamu mendapatkan kesegaran aroma sepanjang hari.</div>

								<div class="cart-button cart-37" onclick="addToCart(37, 0, 1, 399000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Spectrum Set</div>
							<div class="price">IDR 399.000</div>

						</div>
					</div>
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