<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">Hair & Body Collection</h1>
			<div class="description padding-right-15px">Perawatan kulit dan rambut dengan formula yang dikembangkan oleh ahli dermatologis terbaik. Memberikan produk yang efektif menjaga kelembaban kulit dan menebalkan rambut.</div>

			<div class="category-list">
				<a href="<?= base_url(); ?>all-product/">
					<button class="main black transparent">All</button>
				</a>

				<a href="<?= base_url(); ?>skincare/">
					<button class="main black transparent">Skin</button>
				</a>

				<a href="<?= base_url(); ?>hair-body/">
					<button class="main black">Hair & Body</button>
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
								<img class="width-100 d-none d-sm-block" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set.jpg">
								<img class="width-100 d-block d-sm-none" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-mobile.jpg">
							</div>
						</div>
					</div>
					<div class="w-100 d-block d-sm-none"></div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>shampoo/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
								</a>

								<div class="description small">Perpaduan bahan yang sudah teruji dan dikenal baik untuk rambut.</div>

								<!-- <div class="cart-button cart-21" onclick="addToCart(21, 0, 1, 109000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div> -->
								<div class="cart-button cart-18">
									<div>SOLD OUT</div>
								</div>
							</div>
							<div class="name">Pure Performance Shampoo</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="21" data-product-models="Bundle" data-name="Pure Performance Shampoo" data-url="https://www.norm.id/shampoo/" data-image-url="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg" data-description="Hair-loss specialist kami memadukan bahan yang sudah teruji dan dikenal baik untuk rambut, seperti Biotin, Kafein, dan Panax Ginseng ke dalam formula shampoo sehingga menjadikan rambut lebih tebal." data-bread-crumbs="Bundle"></div>
							</div>
							<div class="price">IDR 109.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>body-wash/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg">
								</a>

								<div class="description small">Formula efektif membersihkan, menghidrasi, dan menyegarkan kulit.</div>

								<div class="cart-button cart-22" onclick="addToCart(22, 0, 1, 99000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Fortifying Body Wash</div>
							<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="22" data-product-models="Body Wash" data-name="Fortifying Body Wash" data-url="https://www.norm.id/body-wash/" data-image-url="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg" data-description="Diperkaya dengan sage leaf, green tea, dan kafein, Fortifying Body Wash efektif membersihkan kotoran dan keringat pada tubuh. Formulanya efektif membersihkan, menghidrasi, dan menyegarkan kulit." data-bread-crumbs="Hair & Body"></div>
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
								<a href="<?= base_url(); ?>complete-plus-bag/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shower-set-bag-1.jpg">
								</a>

								<div class="description small">Complete Shower Set melengkapi rutinitas sebelum dan sesudah beraktifitas untuk menjaga tubuh dan rambut tetap sehat dan harum.</div>

								<div class="cart-button cart-28" onclick="addToCart(28, 0, 1, 419000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Complete Shower Set + Bag</div>
							<div class="price">IDR 419.000</div>

						</div>
					</div>
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>shower-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
								</a>

								<div class="description small">Complete Shower Set melengkapi rutinitas sebelum dan sesudah beraktifitas untuk menjaga tubuh dan rambut tetap sehat dan harum.</div>

								<div class="cart-button cart-25" onclick="addToCart(25, 0, 1, 199000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Complete Shower Set</div>
							<div class="price">IDR 199.000</div>

						</div>
					</div>
				</div> -->

				<? if (count($arr_product_id) > 0): ?>
					<div id="prescription" class="row small-gap">
						<div class="col-12 small-gap">
							<div class="separator">
								<div class="text">Medical Grade Products</div>
							</div>
						</div>
					</div>
					<div class="row margin-top-30px small-gap">
						<!-- <? if (isset($arr_product_id[1]) && isset($arr_product_id[3]) && isset($arr_product_id[4])): ?>
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
						<? endif; ?> -->

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
						<? endforeach; ?>
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