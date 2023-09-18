<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="bg-cover position-relative main-banner">
		<div class="banner-carousel owl-carousel owl-theme">
			<div class="item">
				<div class="home-banner container bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/home-banner-1.jpg);"></div>

				<div class="d-block d-sm-none banner-mobile">
					<img src="<?= base_url(); ?>assets/images/main/home-banner-1-mobile.jpg">
				</div>
			</div>

			<div class="item">
				<div class="home-banner container bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/home-banner-2.jpg);"></div>

				<div class="d-block d-sm-none banner-mobile">
					<img src="<?= base_url(); ?>assets/images/main/home-banner-2-mobile.jpg">
				</div>
			</div>

			<div class="item">
				<div class="home-banner container bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/home-banner-3.jpg);"></div>

				<div class="d-block d-sm-none banner-mobile">
					<img src="<?= base_url(); ?>assets/images/main/home-banner-3-mobile.jpg">
				</div>
			</div>

			<div class="item">
				<div class="home-banner container bg-cover d-none d-sm-block" style="background-image: url(<?= base_url(); ?>assets/images/main/home-banner-4.jpg);"></div>

				<div class="d-block d-sm-none banner-mobile">
					<img src="<?= base_url(); ?>assets/images/main/home-banner-4-mobile.jpg">
				</div>
			</div>
		</div>

		<div class="container normal d-none d-sm-block floating-text">
			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="title extra-big d-none d-sm-block">DROPPING SOON 7.7.21</div>
					<div class="title extra-big d-block d-sm-none">DROPPING SOON<br>7.7.21</div>
					<div class="title-normal margin-top-7-5px">
						<div>Something <strong>NEW</strong> is coming to <strong>#UPGRADEYOURSELF</strong>.</div>
						<div class="margin-top-15px"><b class="text-uppercase">Kualitas Internasional</b> dan <b class="text-uppercase">Bangga Lokal</b>, Norm diformulasikan dengan perpaduan <i>premium natural ingredients</i> dan bahan terbaik oleh <i>leading scientists</i>. </div>
						<div class="margin-top-7-5px"><span class="emoji">🌎 🍃 🔬</span></div>
					</div>

					<div class="margin-top-15px countdown-container">
						<div class="countdown">
							<div class="digit day">00</div>
							<div>days</div>
						</div>
						<div class="countdown">
							<div class="digit hour">00</div>
							<div>hours</div>
						</div>
						<div class="countdown">
							<div class="digit min">00</div>
							<div>mins</div>
						</div>
						<div class="countdown">
							<div class="digit sec">00</div>
							<div>secs</div>
						</div>
					</div>

					<div class="margin-top-30px">
						<a href="<?= base_url(); ?>all-product/">
							<button class="main black">Shop Now</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container normal d-block d-sm-none">
			<div class="row">
				<div class="col-12 text-center">
					<div class="title-bold d-none d-sm-block">DROPPING SOON 7.7.21</div>
					<div class="title-bold d-block d-sm-none">DROPPING SOON<br>7.7.21</div>

					<div class="title-normal margin-top-15px countdown-container-program">
						<div>Something <strong>NEW</strong> is coming to <strong>#UPGRADEYOURSELF</strong>.</div>
						<div class="margin-top-15px"><b class="text-uppercase">Kualitas Internasional</b> dan <b class="text-uppercase">Bangga Lokal</b>, Norm diformulasikan dengan perpaduan <i>premium natural ingredients</i> dan bahan terbaik oleh <i>leading scientists</i>. </div>
						<div class="margin-top-7-5px"><span class="emoji">🌎 🍃 🔬</span></div>

						<div class="margin-top-15px countdown-container"s>
							<div class="countdown">
								<div class="digit day">00</div>
								<div>days</div>
							</div>
							<div class="countdown">
								<div class="digit hour">00</div>
								<div>hours</div>
							</div>
							<div class="countdown">
								<div class="digit min">00</div>
								<div>mins</div>
							</div>
							<div class="countdown">
								<div class="digit sec">00</div>
								<div>secs</div>
							</div>
						</div>
					</div>
					<div class="margin-top-15px">
						<a href="<?= base_url(); ?>all-product/">
							<? if ($lang == 'IND'): ?>
								<button class="main wide width-100">Belanja Sekarang</button>
							<? else: ?>
								<button class="main wide width-100">Shop Now</button>
							<? endif; ?>
						</a>
					</div>
				</div>
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

	<section class="border-mobile">
		<div class="container normal free-side-mobile position-relative">
			<!-- <h1 class="title text-center d-none d-sm-block">PRODUK PREMIUM UNTUK UPGRADE PENAMPILAN KAMU</h1> -->
			<h1 class="title text-center d-none d-sm-block">SEGERA HADIR UNTUK UPGRADE PENAMPILAN KAMU</h1>

			<div class="d-block d-sm-none margin-bottom-30px">
				<div class="detail-product-mobile">
					<div class="title">
						<div class="name">Hydra Cleansing<br>Face Wash</div>
						<div class="ingredient">Agave Leaf<br>Calendula Flower<br>Mugwort</div>
					</div>
					<div class="price">
						<button class="other">
							<div class="bold">Coming Soon</div>
							<div class="display-price">IDR 79.000</div>
						</button>
					</div>
				</div>
			</div>

			<div class="margin-top-30px product-carousel owl-carousel owl-theme text-center">
				<div class="item">
					<div class="carousel-product-list" data-product-id="18" data-price="79000" data-product-name="Hydra Cleansing<br>Face Wash" data-product-price="IDR 79.000" data-product-ingredient="Agave Leaf<br>Calendula Flower<br>Mugwort">
						<a href="<?= base_url(); ?>face-wash/">
							<img src="<?= base_url(); ?>assets/images/main/product/face-wash.png">
						</a>
						<div class="margin-top-15px d-none d-sm-block">
							<div class="name">Hydra Cleansing<br>Face Wash</div>
							<div class="price">IDR 79.000</div>
						</div>

						<!-- <div class="margin-top-15px d-none d-sm-block">
							<? if ($lang == 'IND'): ?>
								<button class="main wide transparent cart-18" onclick="addToCart(18, 0, 1, 79000);">Beli Sekarang</button>
							<? else: ?>
								<button class="main wide transparent cart-18" onclick="addToCart(18, 0, 1, 79000);">Add to Cart</button>
							<? endif; ?>
						</div> -->
					</div>
				</div>
				<div class="item">
					<div class="carousel-product-list" data-product-id="19" data-price="89000" data-product-name="Deep Exfoliating<br>Face Scrub" data-product-price="IDR 89.000" data-product-ingredient="Cellulose Microbeads<br>Apricot Seeds<br>Sage and Maca">
						<a href="<?= base_url(); ?>face-scrub/">
							<img src="<?= base_url(); ?>assets/images/main/product/face-scrub.png">
						</a>

						<div class="margin-top-15px d-none d-sm-block">
							<div class="name">Deep Exfoliating<br>Face Scrub</div>
							<div class="price">IDR 89.000</div>
						</div>

						<!-- <div class="margin-top-15px d-none d-sm-block">
							<? if ($lang == 'IND'): ?>
								<button class="main wide transparent cart-19" onclick="addToCart(19, 0, 1, 89000);">Beli Sekarang</button>
							<? else: ?>
								<button class="main wide transparent cart-19" onclick="addToCart(19, 0, 1, 89000);">Add to Cart</button>
							<? endif; ?>
						</div> -->
					</div>
				</div>
				<div class="item">
					<div class="carousel-product-list" data-product-id="20" data-price="99000" data-product-name="Daily Defense<br>Moisturizer" data-product-price="IDR 99.000" data-product-ingredient="Anti Aging<br>Brightening<br>UV Protection">
						<a href="<?= base_url(); ?>moisturizer/">
							<img src="<?= base_url(); ?>assets/images/main/product/moisturizer.png">
						</a>

						<div class="margin-top-15px d-none d-sm-block">
							<div class="name">Daily Defense<br>Moisturizer</div>
							<div class="price">IDR 99.000</div>
						</div>

						<!-- <div class="margin-top-15px d-none d-sm-block">
							<? if ($lang == 'IND'): ?>
								<button class="main wide transparent cart-20" onclick="addToCart(20, 0, 1, 99000);">Beli Sekarang</button>
							<? else: ?>
								<button class="main wide transparent cart-20" onclick="addToCart(20, 0, 1, 99000);">Add to Cart</button>
							<? endif; ?>
						</div> -->
					</div>
				</div>
				<div class="item">
					<div class="carousel-product-list" data-product-id="21" data-price="109000" data-product-name="Pure Performance<br>Shampoo" data-product-price="IDR 109.000" data-product-ingredient="Biotin<br>Ginseng<br>Caffeine">
						<a href="<?= base_url(); ?>shampoo/">
							<img src="<?= base_url(); ?>assets/images/main/product/shampoo.png">
						</a>

						<div class="margin-top-15px d-none d-sm-block">
							<div class="name">Pure Performance<br>Shampoo</div>
							<div class="price">IDR 109.000</div>
						</div>

						<!-- <div class="margin-top-15px d-none d-sm-block">
							<? if ($lang == 'IND'): ?>
								<button class="main wide transparent cart-21" onclick="addToCart(21, 0, 1, 109000);">Beli Sekarang</button>
							<? else: ?>
								<button class="main wide transparent cart-21" onclick="addToCart(21, 0, 1, 109000);">Add to Cart</button>
							<? endif; ?>
						</div> -->
					</div>
				</div>
				<div class="item">
					<div class="carousel-product-list" data-product-id="22" data-price="99000" data-product-name="Fortifying<br>Body Wash" data-product-price="IDR 99.000" data-product-ingredient="Sage Leaf<br>Green Tea<br>Soapbark">
						<a href="<?= base_url(); ?>body-wash/">
							<img src="<?= base_url(); ?>assets/images/main/product/body-wash.png">
						</a>

						<div class="margin-top-15px d-none d-sm-block">
							<div class="name">Fortifying<br>Body Wash</div>
							<div class="price">IDR 99.000</div>
						</div>

						<!-- <div class="margin-top-15px d-none d-sm-block">
							<? if ($lang == 'IND'): ?>
								<button class="main wide transparent cart-22" onclick="addToCart(22, 0, 1, 99000);">Beli Sekarang</button>
							<? else: ?>
								<button class="main wide transparent cart-22" onclick="addToCart(22, 0, 1, 99000);">Add to Cart</button>
							<? endif; ?>
						</div> -->
					</div>
				</div>
			</div>

			<div class="mobile-nav">
				<div class="left"></div>
				<div class="right"></div>
			</div>

			<div class="arrow-navigation product">
				<div class="prev">
					<img src="<?= base_url(); ?>assets/images/main/arrow-left.png">
				</div>
				<div class="next">
					<img src="<?= base_url(); ?>assets/images/main/arrow-right.png">
				</div>
			</div>
		</div>
	</section>

	<section class="bg-25292B">
		<div class="marquee-parent">
			<div class="marquee-child">Meraih pencapaian hidup yang lebih baik dimulai dengan meningkatkan kualitas diri. Hal utama yang dapat dilakukan adalah dengan mengubah pola pikir dan memilih produk terbaik untuk menunjang penampilan kamu. Upgrade your mind, upgrade your life, upgrade yourself.</div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="row align-items-center">
				<div class="col-12 col-md-7">
					<div class="bg-cover collection-image" style="background-image: url(<?= base_url(); ?>assets/images/main/skincare-collection.jpg);"></div>
				</div>
				<div class="col-12 col-md-5 collection-detail">
					<div class="collection-name">Skin Collection</div>
					<div class="collection-description">Produk khusus pria yang diformulasikan dengan premium natural ingredients oleh ahli skincare terkemuka di Korea Selatan. Dapatkan wajah dan penampilan terbaik kamu sekarang!</div>
					<div class="margin-top-15px">
						<a href="<?= base_url(); ?>skincare/">
							<button class="main transparent wide">Shop SkinCare</button>
						</a>
					</div>
				</div>
			</div>

			<div class="row align-items-center margin-top-30px">
				<div class="col-12 col-md-5 collection-detail d-none d-sm-block">
					<div class="collection-name">Hair Growth Program</div>
					<div class="collection-description">Hair Growth Program yang direkomendasikan oleh ahli dermatologis untuk mengatasi kerontokan dan kebotakan serta menebalkan rambut. Atasi masalah rambut kamu sekarang juga!</div>

					<div class="margin-top-15px">
						<a href="<?= base_url(); ?>start/consultation/hairloss/">
							<button class="main transparent wide">Start Now</button>
						</a>
					</div>
				</div>
				<div class="col-12 col-md-7">
					<div class="bg-cover collection-image" style="background-image: url(<?= base_url(); ?>assets/images/main/hairgrowth.jpg);"></div>
				</div>
				<div class="col-12 col-md-5 collection-detail d-block d-sm-none">
					<div class="collection-name">Hair Growth Program</div>
					<div class="collection-description">Hair Growth Program yang direkomendasikan oleh ahli dermatologis untuk mengatasi kerontokan dan kebotakan serta menebalkan rambut. Atasi masalah rambut kamu sekarang juga!</div>

					<div class="margin-top-15px">
						<a href="<?= base_url(); ?>start/consultation/hairloss/">
							<button class="main transparent wide">Start Now</button>
						</a>
					</div>
				</div>
			</div>

			<div class="row align-items-center margin-top-30px">
				<div class="col-12 col-md-7">
					<div class="bg-cover collection-image" style="background-image: url(<?= base_url(); ?>assets/images/main/stamina-program.jpg);"></div>
				</div>
				<div class="col-12 col-md-5 collection-detail">
					<div class="collection-name">Stamina System</div>
					<div class="collection-description">Miliki durasi yang lebih lama dengan solusi rekomendasi dari ahli urologis ternama. Privasi aman dan produk terjangkau. Tingkatkan performa dan bahagiakan pasanganmu mulai dari sekarang!</div>

					<div class="margin-top-15px">
						<a href="<?= base_url(); ?>start/consultation/pe/">
							<button class="main transparent wide">Start Now</button>
						</a>
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
						<div class="description margin-top-15px">Sejak pake Norm muka gue lebih bersih dan pastinya bikin gue jauh lebih percaya diri.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Gerry</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px"><i>Hydra Cleansing Face Wash is my holy grail product</i>. Face wash paling enak di muka gw. Ga pernah ngerasain experience se gokil ini sebelumnya. Thanks Norm.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Aldo</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Awalnya ragu mau pake perawatan rambut rontok. Tapi, pas liat sepupu gw rambutnya ok banget pake Norm. Gue nyoba dan sekarang rambut gue lebih tebel trs bagian yg mulai botak udah numbuh.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Ishaq Rozi</div>
					</div>
				</div>
				<div class="item">
					<div class="review-content">
						<div class="description margin-top-15px">Saya pikir cuci muka aja cukup, taunya muka saya butuh lebih dari itu, muka keliatan kusam dan mulai ada keriput di dahi. Saya akhirnya pake skincare set nya Norm. Sekarang muka lebih cerah dan kerutannya udah berkurang.</div>

						<div class="margin-top-30px star">
							<img class="star-icon text-center margin-auto" src="<?= base_url(); ?>assets/images/main/stars-white.png">
						</div>
						<div class="name">Girindra</div>
					</div>
				</div>
			</div>

			<div class="margin-top-30px">
				<a href="<?= base_url(); ?>review/">
					<button class="main white wide transparent">Read More Reviews</button>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-e7e7e7">
		<div class="container normal">
			<div class="row no-padding">
				<div class="col-12 col-sm-4 margin-bottom-30px">
					<div class="title">NORM CODE</div>
					<div class="margin-top-15px">
						<p>Dapatkan berbagai informasi terkini seputar pria, mulai dari rambut rontok, kulit wajah, seksual, penampilan, hingga gaya hidup,</p>
						<p>Tingkatkan pengetahuanmu dan upgrade diri kamu.</p>
					</div>

					<div class="margin-top-30px">
						<a href="<?= base_url(); ?>code/">
							<button class="main transparent">Read More</button>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-8">
					<div class="blog-carousel owl-carousel owl-theme">
						<? foreach($arr_blog as $blog): ?>
							<div class="item">
								<a href="<?= base_url(); ?>code/detail/<?= $blog->url_name; ?>">
									<div class="bg-cover home-blog-image" style="background-image: url(<?= $blog->image; ?>);"></div>
									<div class="home-blog-title"><?= $blog->name; ?></div>
								</a>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="modal-coming-soon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	      		<div class="modal-body no-padding bg-fafafa text-center">
	      			<div class="close-modal" data-dismiss="modal">
	      				<img data-dismiss="modal" src="<?= base_url(); ?>assets/images/main/close-circle.png">
	      			</div>

	      			<div class="circle-container">
	      				<img class="circle-outer" src="<?= base_url(); ?>assets/images/main/circle-outer.png">
	      				<img class="circle-inner" src="<?= base_url(); ?>assets/images/main/circle-inner.png">
	      				<img class="launching-date" src="<?= base_url(); ?>assets/images/main/launchingdate.png">
	      			</div>

	      			<div class="">Subscribe and be the first to know about new arrivals, product tips and exclusive offers</div>

	      			<div class="popup-email margin-top-15px">
	      				<div class="input">
	      					<input type="text" name="">
	      				</div>
	      				<div class="button">
	      					<button class="">Submit</button>
	      				</div>
	      			</div>

	      			<div class="popup-error"></div>


	      			<div class="margin-top-15px">
	      				<img class="width-100 popup-email-container" src="<?= base_url(); ?>assets/images/main/referral/popup-comingsoon-1.jpg">
	      			</div>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initHomeCarousel();
		initCountdown();

		<? if ($view_popup <= 0): ?>
			setTimeout(function() {
				initPopupAnimation();
				discreetProduct();
			}, 2000);
		<? endif; ?>
	});

	let popupImgIdx = 0;

	function discreetProduct() {
		$.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            success: function(data) {
            	$('#modal-coming-soon').modal('show');
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_discreet_product/'
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

	function initHomeCarousel() {
		$('.banner-carousel').owlCarousel({
			autoplay: true,
			autoplayTimeout: 4000,
			dots: true,
			items: 1,
			lazyLoad: true,
		    loop: true,
		    margin: 0,
		    nav: false,
		    responsiveClass: true,
		});

		$('.blog-carousel').owlCarousel({
			autoplay: true,
			autoplayTimeout: 4000,
			dots: true,
			items: 3,
			lazyLoad: true,
		    loop: true,
		    margin: 10,
		    nav: false,
		    responsiveClass: true,
		    responsive: {
		        0: {
		        	items: 1,
		        },
		        768: {
		            items: 3,
		        },
		    }
		});

		/* Product Carousel */
		$('.product-carousel').owlCarousel({
			lazyLoad: true,
		    loop: true,
		    margin: 10,
		    responsiveClass: true,
		    responsive: {
		        0: {
		        	center: true,
		        	dots: true,
		            items: 1,
		            nav: false,
		            stagePadding: 105,
		        },
		        768: {
		        	dots: false,
		            items: 3,
		            nav: false
		        },
		        1000: {
		        	dots: false,
		            items: 5,
		            nav: false,
		        }
		    },
		    smartSpeed: 1200
		});

		$('.arrow-navigation.product .prev, .mobile-nav .left').click(function() {
			$('.product-carousel').trigger('prev.owl.carousel');
		});

		$('.arrow-navigation.product .next, .mobile-nav .right').click(function() {
			$('.product-carousel').trigger('next.owl.carousel');
		});

		$('.product-carousel').on('changed.owl.carousel', function(event) {
			let current = event.item.index;

		   	let element = $(event.target).find(".owl-item").eq(current).find('.carousel-product-list');


		   	$('.detail-product-mobile .ingredient').html($(element).attr('data-product-ingredient'));
		   	$('.detail-product-mobile .name').html($(element).attr('data-product-name'));
		   	$('.detail-product-mobile .display-price').html($(element).attr('data-product-price'));

		   	$('').unbind('click');
		   	$('').click(function() {
		   		addToCart($(element).attr('data-product-id'), 0, 1, $(element).attr('data-price'));
		   	});
		});

		/* Review Carousel */
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

	function initPopupAnimation() {
		setInterval(function() {
			popupImgIdx += 1;

			if (popupImgIdx > 4) {
				popupImgIdx = 1;
			}

			$('.popup-email-container').attr('src', '<?= base_url(); ?>assets/images/main/referral/popup-comingsoon-'+ popupImgIdx +'.jpg');
		}, 1000);
	}

	function submitEmailPopup() {
		const email = $('input[name="popup-subscribe-email"]').val();
		$('.popup-error').html('');

		if (!isEmail(email)) {
			$('.popup-error').html("format email salah");

			return;
		}

		$('.popup-submit-email').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>`);

		$.ajax({
            data: {
            	email: email,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	$('.popup-error').html("Server Error");
            	$('.popup-submit-email').html(`Submit`);
            },
            success: function(data) {
            	$('.popup-submit-email').html(`Submit`);

                if (data.status == 'success') {
                	alert('Thank you for submitting your email');
                	$('#modal-coming-soon').modal('hide');
                }
                else {
                    $('.popup-error').html(data.message);
                    $('.popup-submit-email').html(`Submit`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_subscribe_email/'
        });
	}
</script>
</html>