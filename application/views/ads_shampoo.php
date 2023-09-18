<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation_ads_shampoo'); ?>

	<section class="program-banner bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/ads_shampoo_banner.jpg);">
		<div class="container">
			<div class="program-typing">
				<span>Cara Paling Gampang<br>Untuk Mengatasi<br>Kerontokan Pria</span>
			</div>

			<div class="margin-top-60px start-price font-semibold"><span class="font-regular">Harga Mulai dari</span> IDR 109.000</div>

			<div class="margin-top-15px">
				<button class="main black big product-button">Lihat Produk</button>
			</div>
		</div>
	</section>

	<section class="program-banner bg-cover-bottom d-block d-sm-none" style="background-image: url(<?= base_url(); ?>assets/images/main/ads-shampoo-banner-mobile.jpg);">
		<div class="container text-center">
			<div class="program-typing">
				<span>Cara Paling Gampang<br>Untuk Mengatasi<br>Kerontokan Pria</span>
			</div>

			<div class="margin-top-60px start-price font-semibold"><span class="font-regular">Harga Mulai dari</span> IDR 109.000</div>

			<div class="margin-top-15px">
				<button class="main black big product-button">Lihat Produk</button>
			</div>
		</div>
	</section>

	<section class="bg-25292B color-white">
		<div class="container mini">
			<div class="row align-items-center">
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/mediaindonesia-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/kompas-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/dailysocialid-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/thejakartapost-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/compasslist-icon.png">
				</div>
				<div class="col-4 col-sm-3 col-md-2 small-gap text-center">
					<img class="feature-logo margin-auto" src="<?= base_url(); ?>assets/images/main/feature/detikinet-icon.png">
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6">
					<h1 class="title big text-normal">Hasil Mereka</h1>
					<div class="rating">
						<div class="star">
							<img loading="lazy" src="<?= base_url(); ?>assets/images/main/stars-black.png">
						</div>
						<div class="content">4,8 of 498 reviews</div>
					</div>

					<div>
						<div class="result-list">
							<div class="list active" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/ricky-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/ricky-after.jpg">
								<div class="name">Ricky</div>
								<div class="month">3 bulan</div>
							</div>
							<div class="list" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/brilian-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/brilian-after.jpg">
								<div class="name">Brilian</div>
								<div class="month">2 bulan</div>
							</div>
							<div class="list" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/putu-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/putu-after.jpg">
								<div class="name">Putu</div>
								<div class="month">1 bulan</div>
							</div>
							<div class="list" data-bg-before="<?= base_url(); ?>assets/images/main/comparison/irdian-before.jpg" data-bg-after="<?= base_url(); ?>assets/images/main/comparison/irdian-after.jpg">
								<div class="name">Irdian</div>
								<div class="month">4 bulan</div>
							</div>
						</div>
					</div>

					<div>
						<button class="main width-100 product-button big">Lihat Produk</button>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<div class="compare-image">
						<div class="comparison">
							<figure style="background-image: url(<?= base_url(); ?>assets/images/main/comparison/ricky-before.jpg);">
								<div class="divisor" style="background-image: url(<?= base_url(); ?>assets/images/main/comparison/ricky-after.jpg);"></div>
							</figure>

							<div class="dragger">
								<div class="standline"></div>
							</div>
						</div>

						<div class="scroll-dragger">
							<div class="line"></div>
							<div class="dots"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-7e7f74">
		<div class="container normal text-center color-white">
			<? if ($lang == 'IND'): ?>
				<h1 class="title text-center">Kata Mereka</h1>
			<? else: ?>
				<h1 class="title text-center">What They Say</h1>
			<? endif; ?>

			<div class="margin-top-30px review-carousel owl-carousel owl-theme">
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Semenjak pakai Pure Performance Shampoo dari Norm rambut gue jadi lebih tebel dan ngga ada lagi rambut gue yang rontok</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Bayu</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Permasalahan utama gue tuh rambut suka rontok tapi pas liat ada shampoo Norm gue mulai coba dan hasilnya sekarang gue lebih percaya diri lagi.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Hanif</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Awalnya sempet ngga percaya sama perawatan rambut tapi pas temen saranin pakai Norm rambut gue langsung jadi lebih kuat. Berkat Norm gua jadi percaya sama produk Pure Performance Shampoo. Thankyou Norm.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Rafi</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="our-product">
		<div class="container normal">
			<div class="row text-center">
				<div class="col-12">
					<div class="title extra-big">Produk Kami</div>
				</div>
			</div>

			<div class="row margin-top-45px">
				<div class="col-sm-2 d-none d-sm-block"></div>
				<div class="col-12 col-sm-4">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>shampoo/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
							</a>
						</div>
						<div class="name">Pure Performance Shampoo</div>
						<div class="price">IDR 109.000</div>

						<div class="ingredient">Biotin │ Caffeine │ Ginseng</div>

						<div class="margin-top-15px">
							<div>Diperkaya oleh biotin, kafein, dan ginseng, Pure Performance Shampoo diformulasikan untuk menjaga kesehatan rambut, melebatkan rambut  dan mencegah kerontokan.</div>
						</div>

						<div class="margin-top-15px">
							<div class="divider"></div>

							<div class="row text-center">
								<div class="col-4">
									<div class="circle-box">
										<img class="ads-product-icon" src="<?= base_url(); ?>assets/images/main/icon/hair-growth.png">
									</div>
									<div class="margin-top-7-5px">Merangsang Pertumbuhan</div>
								</div>
								<div class="col-4">
									<div class="circle-box">
										<img class="ads-product-icon" src="<?= base_url(); ?>assets/images/main/icon/hair-health.png">
									</div>
									<div class="margin-top-7-5px">Menyehatkan Rambut</div>
								</div>
								<div class="col-4">
									<div class="circle-box">
										<img class="ads-product-icon" src="<?= base_url(); ?>assets/images/main/icon/dht-blocking.png">
									</div>
									<div class="margin-top-7-5px">Menebalkan Rambut</div>
								</div>
							</div>
						</div>

						<div class="margin-top-15px margin-bottom-30px">
							<button class="main black big width-100" onclick="addToCartCheckout(21, 0, 1, 109000);">Add To Cart</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>body-wash/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/ads-hairgrowth-program.jpg">
							</a>
						</div>
						<div class="name">Hair Growth Program</div>
						<div class="price">Mulai dari IDR 109.000</div>

						<div class="ingredient">Rekomendasi Dokter Online Gratis │ Privasi Terjamin</div>

						<div class="margin-top-15px">
							<div>Hair Growth Program direkomendasikan oleh ahli dermatologis untuk mengatasi kerontokan dan kebotakan serta menebalkan rambut. Atasi masalah rambut kamu sekarang juga!</div>
						</div>

						<div class="margin-top-15px">
							<div class="divider"></div>

							<div class="row text-center">
								<div class="col-4">
									<div class="circle-box">
										<div class="title extra-big">1</div>
									</div>
									<div class="margin-top-7-5px">Jawab Pertanyaan Dokter</div>
								</div>
								<div class="col-4">
									<div class="circle-box">
										<div class="title extra-big">2</div>
									</div>
									<div class="margin-top-7-5px">Langsung Terima Rekomendasi</div>
								</div>
								<div class="col-4">
									<div class="circle-box">
										<div class="title extra-big">3</div>
									</div>
									<div class="margin-top-7-5px">Pesan Perawatan</div>
								</div>
							</div>
						</div>

						<div class="margin-top-15px">
							<a href="<?= base_url(); ?>questionaire/hairgrowth/1/">
								<button class="main black big width-100">Konsultasi Gratis</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-2 d-none d-sm-block"></div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initCarousel();
		initAdsCart();
		initCountdown();
		dragImage();
	});

	function dragImage() {
		$('.scroll-dragger .dots').draggable({
         	axis: "x",
          	containment: 'parent',
          	drag: function() {
          		var draggerPosition = $('.scroll-dragger .dots').position();
               	var containerWidth = $('.scroll-dragger').width();
               	var widthNormal = (draggerPosition.left / containerWidth) * 100;
               	console.log(widthNormal);

               	width = widthNormal + '%';

              	$('.scroll-dragger .line, .divisor').css('width', 'calc('+ width +' + 7.5px)');
              	$('.dragger').css('left', 'calc('+ width +' + 7.5px)');
          	},
       	});
	}

	function initAdsCart() {
		$('.price-box').click(function() {
			const productId = $(this).attr('data-product-id');

			$('.price-product-'+ productId).removeClass('active');
			$(this).addClass('active');
		});

		$('.result-list .list').click(function() {
			$('.result-list .list').removeClass('active');
			$(this).addClass('active');

			const bgBefore = $(this).attr('data-bg-before');
			const bgAfter = $(this).attr('data-bg-after');

			$('.comparison figure').css('background-image', 'url('+ bgBefore +')');
			$('.comparison .divisor').css('background-image', 'url('+ bgAfter +')');
		});

		$('.product-button').click(function() {
			$('html, body').animate({
		        scrollTop: $('#our-product').offset().top - 15,
		    }, 400);
		});
	}

	function initCarousel() {
		$('.review-carousel').owlCarousel({
			dots: true,
			items: 1,
			lazyLoad: true,
		    loop: true,
		    margin: 10,
		    nav: false,
		    responsiveClass: true,
		});
	}

	function initCountdown() {
		let countDownDate = new Date("Jul 7, 2021 00:00:00").getTime();

		let x = setInterval(function() {
			let now = new Date().getTime();
			let distance = countDownDate - now;

			let days = Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((distance % (1000 * 60)) / 1000);

			const daysDisplay = pad(days, 2);
			const hoursDisplay = pad(hours, 2);
			const minutesDisplay = pad(minutes, 2);
			const secondsDisplay = pad(seconds, 2);

			$('.digit.day').html(daysDisplay);
			$('.digit.hour').html(hoursDisplay);
			$('.digit.min').html(minutesDisplay);
			$('.digit.sec').html(secondsDisplay);

			if (distance < 0) {
				clearInterval(x);
			}
		}, 1000);
	}

	function prescriptionAddCart(productId) {
		const quantity = $('.price-product-'+ productId +'.active').attr('data-quantity');
		const price = $('.price-product-'+ productId +'.active').attr('data-price');

		let discount = 0;
		let total = price * quantity;

		if (quantity >= 3) {
			discount = total * 0.05;
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