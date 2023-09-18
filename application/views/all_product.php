<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="category-section">
		<div class="container normal margin-top-90px padding-right-0">
			<h1 class="title padding-right-15px">All Product</h1>
			<div class="description padding-right-15px">Produk perawatan pria terbaik yang diformulasikan dari premium natural ingredients dan bekerjasama dengan para ahli terkemuka dunia.</div>

			<div class="category-list">
				<a href="<?= base_url(); ?>all-product/">
					<button class="main black">All</button>
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
								<img class="width-100 d-none d-sm-block" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set.jpg">
								<img class="width-100 d-block d-sm-none" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-mobile.jpg">
							</div>
						</div>
					</div>
					<div class="w-100 d-block d-sm-none"></div>
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
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>shampoo/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

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

								<!-- <div class="coming-soon">Coming Soon</div> -->

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
					<!-- <div class="col-6 col-sm-3 small-gap">
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
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
								</a>

								<div class="description small">Pilihan tepat dan lengkap untuk kamu mendapatkan penampilan yang lebih segar dan harum serta wajah bersih yang bersih, cerah, dan tampak lebih muda.</div>

								<div class="cart-button cart-26" onclick="addToCart(26, 0, 1, 659000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Ultimate Gentleman Set + Bag</div>
							<div class="price">IDR 659.000</div>

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
					</div> -->
					<div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>shower-plus-bag/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shower-set-bag-1.jpg">
								</a>

								<!-- <div class="coming-soon">Coming Soon</div> -->

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
					<!-- <div class="col-6 col-sm-3 small-gap">
						<div class="product-category-container">
							<div class="image">
								<a href="<?= base_url(); ?>complete-set/">
									<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg">
								</a>

								<div class="description small">Pilihan tepat dan lengkap untuk kamu mendapatkan penampilan yang lebih segar dan harum serta wajah bersih yang bersih, cerah, dan tampak lebih muda.</div>

								<div class="cart-button cart-23" onclick="addToCart(23, 0, 1, 459000);">
									<div>
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
									</div>
									<div>Add to Cart</div>
								</div>
							</div>
							<div class="name">Ultimate Gentleman Set</div>
							<div class="price">IDR 459.000</div>

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
					</div> -->
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
					<!-- <div class="col-6 col-sm-3 small-gap">
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
					</div> -->
				</div>

				<? if (count($arr_product_id) > 0): ?>
					<div class="row small-gap">
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