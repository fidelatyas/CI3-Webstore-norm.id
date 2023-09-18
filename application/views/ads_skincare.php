<? $this->load->view('header'); ?>

<body class="ads">
	<? $this->load->view('navigation_ads_skincare'); ?>

	<section class="program-banner bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/ads-skincare-banner.jpg);">
		<div class="container">
			<div class="program-typing">
				<span>Supercharge Your Skin</span>
			</div>

			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="title-normal margin-top-7-5px">
						<div class="margin-top-15px"><b class="text-uppercase">Kualitas Internasional</b> dan <b class="text-uppercase">Bangga Lokal</b>, Norm diformulasikan dengan perpaduan <i>premium natural ingredients</i> dan bahan terbaik oleh <i>leading scientists</i>. </div>
						<div class="margin-top-7-5px"><span class="emoji">🌎 🍃 🔬</span></div>
					</div>
				</div>
			</div>

			<div class="margin-top-60px start-price font-semibold"><span class="text-line-through font-regular">IDR 259.000</span> IDR 233.100</div>

			<div class="margin-top-15px">
				<button class="main black big shop-now-button" onclick="addToCartCheckout(24, 0, 1, 233100);">Get Your Kit</button>
			</div>
		</div>
	</section>

	<section class="program-banner bg-cover-bottom d-block d-sm-none" style="background-image: url(<?= base_url(); ?>assets/images/main/ads-skincare-banner-mobile.jpg);">
		<div class="container text-center">
			<div class="program-typing">
				<span>Supercharge Your Skin</span>
			</div>

			<div class="title-normal margin-top-7-5px">
				<div class="margin-top-15px"><b class="text-uppercase">Kualitas Internasional</b> dan <b class="text-uppercase">Bangga Lokal</b>, Norm diformulasikan dengan perpaduan <i>premium natural ingredients</i> dan bahan terbaik oleh <i>leading scientists</i>. </div>
				<div class="margin-top-7-5px"><span class="emoji">🌎 🍃 🔬</span></div>
			</div>

			<div class="margin-top-60px start-price font-semibold"><span class="text-line-through font-regular">IDR 259.000</span> IDR 233.100</div>

			<div class="margin-top-15px">
				<button class="main black big shop-now-button" onclick="addToCartCheckout(24, 0, 1, 233100);">Get Your Kit</button>
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
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/ads-skincare-about.jpg">
				</div>
				<div class="col-sm-1 d-none d-sm-block"></div>
				<div class="col-12 col-sm-5">
					<div class="title extra-big margin-top-15px">Why Men Love Norm</div>
					<div class="ads-content-about">
						<div class="number">1</div>
						<div>
							<div class="font-semibold">Hasil nyata bisa dilihat dalam seminggu</div>
							<div>Kami bermitra dengan ahli kulit dari Korea untuk menciptakan perawatan yang efektif untukmu!</div>
						</div>
					</div>

					<div class="ads-content-about">
						<div class="number">2</div>
						<div>
							<div class="font-semibold">Produk dengan kualitas terbaik</div>
							<div>Kami menginginkan yang terbaik untukmu, itulah sebabnya kami menggunakan bahan-bahan terbaik</div>
						</div>
					</div>

					<div class="ads-content-about">
						<div class="number">3</div>
						<div>
							<div class="font-semibold">Mudah, tapi efektif</div>
							<div>Perawatan kulit harus sederhana. Karena itu, rutinitas kami hanya dengan tiga langkah mudah</div>
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
						<div class="description margin-top-15px">Gue rekomendasi banget sama produk face wash dari Norm. Dan yang bikin gue lebih percaya karena bisa langsung konsultasi sama dokter profesional.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Falah</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Muka gue jauh lebih keliatan seger karena perawatan kulit muka gue pakai produk dari Norm. Jadi gue ngga perlu takut lagi sama jerawat yang tumbuh di muka.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Adrian</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Sekarang setiap berpergian gue jauh lebih percaya diri karena jerawat yang biasa di muka gue udah hilang semua berkat pakai Hydra Cleansing Face Wash dari Norm.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Dika</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-f2f2f2">
		<div class="container section-ads-kit">
			<div class="row align-items-center">
				<div class="col-sm-1 d-none d-sm-block"></div>
				<div class="col-12 col-sm-5">
					<div class="title extra-big">Your New Routine</div>

					<div class="ads-about">
						<div class="margin-top-30px font-semibold">Set Termasuk</div>
						<div class="margin-top-15px">&bull; Hydra Cleansing Face Wash</div>
						<div>&bull;&bull; Deep Exfoliating Face Scrub</div>
						<div>&bull;&bull;&bull; Daily Defense Moisturizer</div>

						<div class="margin-top-60px start-price font-semibold"><span class="text-line-through font-regular">IDR 259.000</span> IDR 233.100</div>
					</div>

					<div class="margin-top-15px">
						<button class="main black big shop-now-button" onclick="addToCartCheckout(24, 0, 1, 233100);">Get Your Kit</button>
					</div>
				</div>
				<div class="col-12 col-sm-5 text-center">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/ads-product-skincare.jpg">
				</div>
				<div class="col-sm-1 d-none d-sm-block"></div>
			</div>
		</div>
	</section>

	<section class="bg-d9d9d5">
		<div class="container normal">
			<div class="row">
				<div class="col-12 text-center">
					<div class="title extra-big d-block d-sm-none">Benefits<br>You Can Count On</div>
					<div class="title extra-big d-none d-sm-block">Benefits You Can Count On</div>
				</div>
			</div>

			<div class="row margin-top-45px text-center">
				<div class="col-6 col-sm-2 d-none d-sm-block"></div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/excess-oil.png">
					<div class="icon-text">Mengurangi Minyak Berlebih</div>
				</div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/acne-prevention.png">
					<div class="icon-text">Mencegah Jerawat</div>
				</div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/brightening.png">
					<div class="icon-text">Mencerahkan Wajah</div>
				</div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/exfoliation.png">
					<div class="icon-text">Exfoliasi Wajah</div>
				</div>
				<div class="col-6 col-sm-2 d-none d-sm-block"></div>
			</div>

			<div class="row text-center">
				<div class="col-6 col-sm-2 d-none d-sm-block"></div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/clogged-pores.png">
					<div class="icon-text">Membersihkan Pori-pori</div>
				</div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/anti-aging.png">
					<div class="icon-text">Anti Aging</div>
				</div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/uv-protection.png">
					<div class="icon-text">UV Protection</div>
				</div>
				<div class="col-6 col-sm-2">
					<img class="ads-icon" src="<?= base_url(); ?>assets/images/main/icon/hydration.png">
					<div class="icon-text">Menghidrasi Kulit</div>
				</div>
				<div class="col-6 col-sm-2 d-none d-sm-block"></div>
			</div>

			<div class="row margin-top-45px text-center">
				<div class="col-12">
					<button class="main black big shop-now-button" onclick="addToCartCheckout(24, 0, 1, 233100);">Get Your Kit</button>
				</div>
			</div>
		</div>
	</section>

	<section id="shop-now">
		<div class="container normal">
			<div class="row text-center">
				<div class="col-12">
					<div class="title extra-big">Beli Satuan</div>
				</div>
			</div>

			<div class="row margin-top-45px">
				<div class="col-6 col-sm-4 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>face-wash/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Komponen penting dalam perawatan kulit pria manapun. Face wash kami efektif membersihkan kotoran, mengurangi minyak berlebih, serta menjadikan kulit bersih dan lembut.</div>

							<div class="cart-button cart-18" onclick="addToCart(18, 0, 1, 79000);">
								<div>
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div>
						</div>
						<div class="name">Hydra Cleansing Face Wash</div>
						<div class="star-rating">
							<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="18" data-product-models="Bundle" data-name="Hydra Cleansing Face Wash" data-url="https://www.norm.id/face-wash/" data-image-url="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg" data-description="Basic skincare untuk membersihkan wajah. Diformulasikan menggunakan agave leaf, calendula flower, dan mugwort yang  efektif membersihkan kotoran, mengurangi minyak berlebih, serta menjadikan kulit bersih dan lembut" data-bread-crumbs="Bundle"></div>
						</div>
						<div class="price">IDR 79.000</div>

					</div>
				</div>
				<div class="col-6 col-sm-4 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>face-scrub/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Deep Exfoliating Face Scrub berfungsi untuk mengeksfoliasi dengan mengangkat kotoran dan meregenerasi sel kulit pada wajah sehingga wajah menjadi lebih cerah.</div>

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
				<div class="col-6 col-sm-4 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>moisturizer/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Moisturizer yang menghidrasi dan melindungi kulit sera menutrisi dan mengurangi penuaan kulit. Moisturizer melindungi kulit tanpa membuatnya terasa lengket atau berminyak.</div>

							<div class="cart-button cart-20" onclick="addToCart(20, 0, 1, 99000);">
								<div>
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div>
						</div>
						<div class="name">Daily Defense Moisturizer</div>
						<div class="star-rating">
								<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="20" data-product-models="Bundle" data-name="Daily Defense Moisturizer" data-url="https://www.norm.id/moisturizer/" data-image-url="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg" data-description="Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit. Daily Defense Moisturizer memberikan energi pada kulit tanpa membuatnya terasa lengket atau berminyak." data-bread-crumbs="Bundle"></div>
							</div>
						<div class="price">IDR 99.000</div>

					</div>
				</div>
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
		initCountdownNav();
	});

	function initAdsCart() {
		$('.price-box').click(function() {
			const productId = $(this).attr('data-product-id');

			$('.price-product-'+ productId).removeClass('active');
			$(this).addClass('active');
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

	function initCountdownNav() {
		let countDownDate = new Date("Jul 7, 2021 00:00:00").getTime();
		let distance = 1200000;

		let x = setInterval(function() {
			let days = Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((distance % (1000 * 60)) / 1000);

			const daysDisplay = pad(days, 2);
			const hoursDisplay = pad(hours, 2);
			const minutesDisplay = pad(minutes, 2);
			const secondsDisplay = pad(seconds, 2);

			$('.digit-nav.day').html(daysDisplay);
			$('.digit-nav.hour').html(hoursDisplay);
			$('.digit-nav.min').html(minutesDisplay);
			$('.digit-nav.sec').html(secondsDisplay);

			distance = distance - 1000;

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