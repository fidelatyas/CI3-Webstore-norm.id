<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="product-section">
		<div class="container margin-top-90px">
			<div class="row product-container small-gap">
				<div class="col-12 small-gap">
					<a class="animate black" href="<?= $referrer_url; ?>">
						<div class="product-referrer">
							<div class="image">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/arrow-left.png">
							</div>
							<div>Back</div>
						</div>
					</a>
				</div>
			</div>

			<div class="row product-container small-gap margin-top-30px">
				<div class="col-12 col-sm-6 small-gap">
					<div class="image">
						<div class="product-image-carousel owl-carousel owl-theme">
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/spectrum-set-1.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/spectrum-set-2.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Spectrum Set</h1>

						<div class="yotpo bottomLine margin-top-15px" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="37" data-product-models="Bundle" data-name="Spectrum Set" data-url="https://www.norm.id/spectrum-set/" data-image-url="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg" data-description="Spectrum Set adalah pilihan tepat dan lengkap untuk kamu mendapatkan penampilan yang lebih segar dan harum serta wajah bersih yang bersih, cerah, dan tampak lebih muda." data-bread-crumbs="Bundle"></div>

						<div class="price">IDR 399.000</div>

						<div class="description">
							<p>Spectrum Set menjadi pilihan tepat untuk meningkatkan kepercayaan diri kamu. Aroma yang mewah dan berbeda membuat pilihan parfum ini bisa digunakan untuk siang dan malam hari.</p>
						</div>

						<div class="bundle-content">
							<div class="bundle">Whats in it</div>
							<div class="icon">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
							</div>
							<div class="bundle-container">
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/summer-sol-1.jpg">
									</div>
									<div class="content">
										<div class="name">Summer Sol Eau de Parfum</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>summer-sol/">Learn More</a>
										</div>
									</div>
								</div>
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg">
									</div>
									<div class="content">
										<div class="name">White Night Eau de Parfum</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>white-night/">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- <div class="coming-soon-text">COMING SOON</div> -->

						<div class="button">
							<button class="main width-100 cart-37" onclick="addToCart(37, 0, 1, 399000);">Add to Cart</button>
						</div>

						<div class="margin-top-15px">
							<div class="row small-gap e-commerce-container">
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://shopee.co.id/Spectrum-Set-Eau-De-Parfum-i.322615418.13857206245" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/shopee-logo.png">
										</a>
									</div>
								</div>
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://www.tokopedia.com/normid/spectrum-set-eau-de-parfum" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/tokopedia-logo.png">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="margin-top-15px">
							<div class="panel active">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Key Ingredients</div>
								<div class="content">
									<ul>
										<li>Alcohol Denat</li>
										<li>Fragrance</li>
										<li>Aqua</li>
									</ul>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Benefit</div>
								<div class="content">
									<ul>
										<li>Memberikan kesegaran pada tubuh</li>
										<li>Aroma tahan lama 4 – 6 jam</li>
										<li>Melindungi dari bau badan</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('fragrance_footer_banner'); ?>

	<section class="">
		<div class="container normal">
			<div class="yotpo yotpo-main-widget" data-product-id="37" data-price="399000" data-currency="IDR" data-name="Spectrum Set" data-url="https://www.norm.id/spectrum-set/" data-image-url="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg"></div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="title text-center">You might also like</div>

			<div class="row margin-top-30px small-gap">
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>maintenance-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

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
							<a href="<?= base_url(); ?>shower-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

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
				<div class="w-100 d-block d-sm-none"></div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>starter-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

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

							<!-- <div class="coming-soon">Coming Soon</div> -->

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
		initProductCarousel();
		initProductPanel();
	});

	function initProductCarousel() {
		$('.product-image-carousel').owlCarousel({
			dots: true,
			items: 1,
			lazyLoad: true,
		    loop: true,
		    margin: 10,
		    nav: false,
		    responsiveClass: true,
		});
	}

	function initProductPanel() {
		$('.panel').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else {
				$('.panel').removeClass('active');
				$(this).addClass('active');
			}
		});

		$('.product-detail-container .bundle-content').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$('.product-detail-container .bundle-content .bundle-container').slideUp();
			}
			else {
				$(this).addClass('active');
				$('.product-detail-container .bundle-content .bundle-container').slideDown();
			}
		});
	}
</script>
</html>