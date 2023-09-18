<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="product-section">
		<div class="container">
			<div class="row product-container small-gap">
				<div class="col-12 small-gap">
					<a class="animate black" href="<?= $referrer_url; ?>">
						<div class="product-referrer">
							<div class="image">
								<img src="<?= base_url(); ?>assets/images/main/arrow-left.png">
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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/toiletries-2.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/toiletries-3.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/toiletries-4.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Water Resistant Utility Bag</h1>
						<div class="ingredient">In Collaboration with WestWard Works</div>

						<div class="price">IDR 219.000</div>

						<div class="description">
							<p>Tas serbaguna yang tahan terhadap air yang praktis dibawa berpergian. Materialnya yang tebal dan kokoh dapat menampung berbagai barang pribadi kamu, seperti sabun, face wash, shampoo, hingga shaver.</p>
						</div>

						<div class="coming-soon-text">COMING SOON</div>

						<!-- <div class="button">
							<button class="main width-100 cart-32" onclick="addToCart(32, 0, 1, 219000);">Add to Cart</button>
						</div>

						<div class="margin-top-15px">
							<div class="row small-gap e-commerce-container">
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="#">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/shopee-logo.png">
										</a>
									</div>
								</div>
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="#">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/tokopedia-logo.png">
										</a>
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div class="margin-top-30px">
							<div class="panel">
								<div class="panel-collapse active">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">How to Use</div>
								<div class="content">
									<p>Apply to body, then create a lather and rinse.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Key Ingredients</div>
								<div class="content">
									<ul>
										<li>
											<p><strong>Green Tea</strong></p>
											<p>The polyphenols in green tea possess potent antioxidant and skin-soothing properties, and show significant promise for improving the appearance of sun-damaged skin.</p>
										</li>
										<li>
											<p><strong>Sage</strong></p>
											<p>Rich in antioxidants, sage extracts may improve the appearance of acne scarring and hyperpigmentation while soothing skin.</p>
										</li>
										<li>
											<p><strong>Quillaja Extract</strong></p>
											<p>Extract of the Chilean soap bark tree. It contains a good amount of saponins, which have cleansing and water-binding properties for skin.</p>
										</li>
										<li>
											<p><strong>Caffeine</strong></p>
											<p>Applied to skin, caffeine may have soothing and antioxidant properties, especially when skin is exposed to UV light</p>
										</li>
									</ul>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('merchandise_footer_banner'); ?>

	<div class="screen-blocker"></div>
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
	}
</script>
</html>