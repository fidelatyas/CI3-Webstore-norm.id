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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/starter-hair-loss-kit-norm.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Starter Hair Growth Kit</h1>

						<!-- <div class="price">IDR 269.000</div> -->

						<div class="description">
							<p>Kombinasi perawatan rambut topikal untuk mengurangi kerontokan dan mencegah kebotakan.</p>
						</div>

						<div class="bundle-content active">
							<div class="bundle">Whats in it</div>
							<div class="icon">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
							</div>
							<div class="bundle-container">
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.png">
									</div>
									<div class="content">
										<div class="name">Hair Tonic</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>hair-tonic/">Learn More</a>
										</div>
									</div>
								</div>
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
							</div>
						</div>

						<div class="price-container margin-top-15px">
							<div class="price-box product text-center price-product-13 active" data-product-id="13" data-quantity="1" data-price="269000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>

								<div>1 bulan perawatan</div>
								<div class="price">IDR 269.000</div>
							</div>
							<div class="price-box product text-center margin-left-15px price-product-13" data-product-id="13" data-quantity="3" data-price="269000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>
								<div class="floating">10% off</div>

								<div>3 bulan perawatan</div>
								<div class="price">IDR 726.300</div>
							</div>
						</div>

						<div class="button">
							<button class="main width-100 cart-button-13" onclick="prescriptionAddCart(13);">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('hairbody_footer_banner'); ?>

	<section class="bg-f2f3ee">
		<div class="container normal">
			<h1 class="title big text-center">Proses Perawatan</h1>

			<div class="row margin-top-60px">
				<div class="col-12 col-sm-4 text-center">
					<div class="treatment-process">
						<div class="treatment-image">
							<img loading="lazy" src="<?= base_url(); ?>assets/images/main/proses-perawatan-1.png">
						</div>

						<div class="treatment-process-description">
							<div class="title">1 - 2 Bulan</div>
							<p>Kecil kemungkinan terjadi perubahan drastis pada 1-2 bulan pertama. Jangan panik jika kerontokan tetap terjadi untuk sementara waktu.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<div class="treatment-process">
						<div class="treatment-image">
							<img loading="lazy" src="<?= base_url(); ?>assets/images/main/proses-perawatan-2.png">
						</div>

						<div class="treatment-process-description">
							<div class="title">3 - 6 Bulan</div>
							<p>Pada titik ini, kerontokan mulai terhambat atau dalam beberapa kasus, mulai berhenti total. Jangan lupa mengambil foto untuk dijadikan perbandingan.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<div class="treatment-process">
						<div class="treatment-image">
							<img loading="lazy" src="<?= base_url(); ?>assets/images/main/proses-perawatan-3.png">
						</div>

						<div class="treatment-process-description">
							<div class="title">6 Bulan Keatas</div>
							<p>Jika pemakaian dilakukan secara konsisten, kerontokan rambut akan terhenti, dan rambut akan mulai tumbuh kembali.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="margin-top-60px text-center">
				<button class="main big transparent">Mulai Konsultasi</button>
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

		$('.price-box').click(function() {
			const productId = $(this).attr('data-product-id');

			$('.price-product-'+ productId).removeClass('active');
			$(this).addClass('active');
		});
	}

	function prescriptionAddCart(productId) {
		const quantity = $('.price-product-'+ productId +'.active').attr('data-quantity');
		const price = $('.price-product-'+ productId +'.active').attr('data-price');

		let discount = 0;
		let total = price * quantity;

		if (quantity >= 3) {
			discount = total / 10;
		}

		$('.cart-button-'+ productId).html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	product_id: productId,
            	category_id: 5,
            	quantity: quantity,
            	discount: discount,
            	price: price,
            	total: total,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.cart-'+ productId).html(`Add To Cart`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	$('.cart-detail').empty();

                    $('.cart-detail').append(data.cart_list);
                    $('.cart-total').removeClass('d-none');

                    $('.cart-total-subtotal').html(data.subtotal_display);

                    $('.quantity .minus, .quantity .plus, .cart-list .remove').unbind('click');
                    cartInit();

                    $('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart-fill-<?= $navbar; ?>.png');

                    $('html body').css('overflow', 'hidden');
                    $('.cart-container, .screen-blocker').addClass('active');

                    $('.cart-button-'+ productId).html(`Add to Cart`);
                }
                else {
                    alert(data.message);
                    $('.cart-'+ productId).html(`Add To Cart`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_add_to_cart/'
        });
	}
</script>
</html>