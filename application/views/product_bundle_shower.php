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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square-2.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square-3.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square-4.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<!-- <div class="subtitle">• Step 1</div> -->
						<h1 class="title">Complete Shower Set</h1>
						<!-- <div class="ingredient">Agave Leaf │ Calendula Flower │ Mugwort</div> -->

						<div class="yotpo bottomLine margin-top-15px" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="25" data-product-models="Bundle" data-name="Complete Shower Set" data-url="https://www.norm.id/shower-set/" data-image-url="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg" data-description="Kegiatan yang padat bikin tubuh dan kepala cepat berkeringat. Complete Shower Set melengkapi rutinitas sebelum dan sesudah beraktifitas untuk menjaga tubuh dan rambut tetap sehat dan harum." data-bread-crumbs="Bundle"></div>

						<div class="price">IDR 199.000</div>

						<div class="description">
							<p>Kegiatan yang padat bikin tubuh dan kepala cepat berkeringat. Complete Shower Set melengkapi rutinitas sebelum dan sesudah beraktifitas untuk menjaga tubuh dan rambut tetap sehat dan harum.</p>
						</div>

						<div class="bundle-content">
							<div class="bundle">Whats in it</div>
							<div class="icon">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
							</div>
							<div class="bundle-container">
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
									</div>
									<div class="content">
										<div class="name">Pure Performance Shampoo</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>shampoo/">Learn More</a>
										</div>
									</div>
								</div>
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
									</div>
									<div class="content">
										<div class="name">Fortifying Body Wash</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>body-wash/">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- <div class="coming-soon-text">COMING SOON</div> -->

						<div class="button">
							<button class="main width-100 cart-25" onclick="addToCart(25, 0, 1, 199000);">Add to Cart</button>
						</div>

						<div class="margin-top-15px">
							<div class="row small-gap e-commerce-container">
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://shopee.co.id/Complete-Shower-Set-i.322615418.8442043918" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/shopee-logo.png">
										</a>
									</div>
								</div>
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://www.tokopedia.com/normid/complete-shower-set" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/tokopedia-logo.png">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="margin-top-30px">
							<div class="panel active">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Helps With</div>
								<div class="content">
									<div class="row small-gap">
										<div class="col-4 text-center small-gap">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/hair-growth.png">
											<div class="margin-top-7-5px margin-bottom-15px icon-text small">Hair Growth</div>
										</div>
										<div class="col-4 text-center small-gap">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/keratin.png">
											<div class="margin-top-7-5px margin-bottom-15px icon-text small">Keratin Production</div>
										</div>
										<div class="col-4 text-center small-gap">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/hair-health.png">
											<div class="margin-top-7-5px margin-bottom-15px icon-text small">Hair Health</div>
										</div>
										<div class="col-4 text-center small-gap">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/dht-blocking.png">
											<div class="margin-top-7-5px margin-bottom-15px icon-text small">DHT Blocking</div>
										</div>
										<div class="col-4 text-center small-gap">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/dirt-build-up.png">
											<div class="margin-top-7-5px margin-bottom-15px icon-text small">Dirt Build Up</div>
										</div>
										<div class="col-4 text-center small-gap">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/body-odor.png">
											<div class="margin-top-7-5px margin-bottom-15px icon-text small">Body Odor</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">How to Use</div>
								<div class="content">
									<p>Wet face and apply a small amount to your face and eyes area with vigorous, yet gentle, circular motions. Rinse well.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Key Ingredients</div>
								<div class="content">
									<ul>
										<li>
											<p><strong>Agave Leaf</strong></p>
											<p>Agave helps to moisturize the skin and is rich in vitamins B1, B2, C, D, K, and provitamin A.</p>
										</li>
										<li>
											<p><strong>Calendula Flower</strong></p>
											<p>Native to the Mediterranean, Calendula Extract is known for its skin soothing properties and are commonly used in skincare products for oily skin types.</p>
										</li>
										<li>
											<p><strong>Mugwort</strong></p>
											<p>Mugwort functions as an anti-microbrial and soothing skin agent full of antioxidants with anti-inflammation properties.</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('hairbody_footer_banner'); ?>

	<section class="">
		<div class="container normal">
			<div class="yotpo yotpo-main-widget" data-product-id="25" data-price="199000" data-currency="IDR" data-name="Complete Shower Set" data-url="https://www.norm.id/shower-set/" data-image-url="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg"></div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="title text-center">You might also like</div>

			<div class="row margin-top-30px small-gap">
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>complete-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

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