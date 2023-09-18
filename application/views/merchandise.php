<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">Skin Collection</h1>
			<div class="description padding-right-15px">Premium bag dengan desain yang modern dan praktis sehingga mudah dibawa berpergian. Bahannya yang kuat dan tahan air, aman dan menampung barang-barang dengan baik.</div>

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
					<button class="main black">Merchandise</button>
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
								<img class="width-100 d-none d-sm-block" src="<?= base_url(); ?>assets/images/main/product/merchandise.jpg">
								<img class="width-100 d-block d-sm-none" src="<?= base_url(); ?>assets/images/main/product/merchandise-mobile.jpg">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>utility-bag/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

								<div class="description small">Tas serbaguna yang tahan terhadap air yang praktis dibawa berpergian.</div>

								<div class="cart-button cart-32" onclick="addToCart(32, 0, 1, 219000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Water Resistant Utility Bag</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="32" data-product-models="Body Wash" data-name="Water Resistant Utility Bag" data-url="https://www.norm.id/utility-bag/" data-image-url="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg" data-description="Tas serbaguna yang tahan terhadap air yang praktis dibawa berpergian. Materialnya yang tebal dan kokoh dapat menampung berbagai barang pribadi kamu, seperti sabun, face wash, shampoo, hingga shaver." data-bread-crumbs="Hair & Body"></div>
							</div>
							<div class="price">IDR 219.000</div>

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