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

						<div class="yotpo bottomLine margin-top-15px" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="32" data-product-models="Body Wash" data-name="Water Resistant Utility Bag" data-url="https://www.norm.id/utility-bag/" data-image-url="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg" data-description="Tas serbaguna yang tahan terhadap air yang praktis dibawa berpergian. Materialnya yang tebal dan kokoh dapat menampung berbagai barang pribadi kamu, seperti sabun, face wash, shampoo, hingga shaver." data-bread-crumbs="Hair & Body"></div>

						<div class="price">IDR 219.000</div>

						<div class="description">
							<p>Tas serbaguna yang tahan terhadap air yang praktis dibawa berpergian. Materialnya yang tebal dan kokoh dapat menampung berbagai barang pribadi kamu, seperti sabun, face wash, shampoo, hingga shaver.</p>
						</div>

						<!-- <div class="coming-soon-text">COMING SOON</div> -->

						<div class="button">
							<button class="main width-100 cart-32" onclick="addToCart(32, 0, 1, 219000);">Add to Cart</button>
						</div>

						<div class="margin-top-15px">
							<div class="row small-gap e-commerce-container">
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://shopee.co.id/Water-Resistance-Utility-Bag-i.322615418.8967629044" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/shopee-logo.png">
										</a>
									</div>
								</div>
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://www.tokopedia.com/normid/water-resistant-utility-bag" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/tokopedia-logo.png">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('merchandise_footer_banner'); ?>

	<section class="">
		<div class="container normal">
			<div class="yotpo yotpo-main-widget" data-product-id="32" data-price="219000" data-currency="IDR" data-name="Water Resistant Utility Bag" data-url="https://www.norm.id/utility-bag/" data-image-url="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg"></div>
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
	}
</script>
</html>