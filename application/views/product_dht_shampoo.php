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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/anti-dht-shampoo-norm.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Anti DHT Shampoo</h1>

						<div class="yotpo bottomLine margin-top-15px" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="4" data-product-models="Bundle" data-name="Anti DHT Shampoo" data-url="https://www.norm.id/dht-shampoo" data-image-url="<?= base_url(); ?>assets/images/main/product/anti-dht-shampoo-norm.jpg" data-description="Shampoo yang merawat kesehatan rambut dan kulit kepala. Mengatasi kerontokan rambut, serta menghambat terbentuknya DHT (dehidrotestosteron) pada kulit kepala secara berlebih yang dapat menyebabkan kebotakan pada pria." data-bread-crumbs="Bundle"></div>

						<!-- <div class="price">IDR 199.000</div> -->

						<div class="description">
							<p>Shampoo yang merawat kesehatan rambut dan kulit kepala. Mengatasi kerontokan rambut, serta menghambat terbentuknya DHT (dehidrotestosteron) pada kulit kepala secara berlebih yang dapat menyebabkan kebotakan pada pria.</p>
						</div>

						<div class="price-container margin-top-15px">
							<div class="price-box product text-center price-product-4 active" data-product-id="4" data-quantity="1" data-price="129000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>

								<div>1 bulan perawatan</div>
								<div class="price">IDR 129.000</div>
							</div>
							<div class="price-box product text-center margin-left-15px price-product-4" data-product-id="4" data-quantity="3" data-price="129000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>
								<div class="floating">10% off</div>

								<div>3 bulan perawatan</div>
								<div class="price">IDR 348.300</div>
							</div>
						</div>

						<div class="button">
							<button class="main width-100 cart-button-4" onclick="prescriptionAddCart(4);">Add to Cart</button>
						</div>

						<div class="margin-top-30px">
							<div class="panel active">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Cara Pemakaian</div>
								<div class="content">
									<ul>
							  			<li>Aplikasikan shampoo secukupnya 1-2 kali sehari.</li>
							  			<li>Pakai pada rambut dan kulit kepala yang sudah dibasahi.</li>
							  			<li>Berikan sedikit pijatan pada kulit kepala.</li>
							  			<li>Biarkan 1-2 menit dan bilas hingga bersih.</li>
							  		</ul>
							  		<p>Jika sudah mendekati dosis berikutnya, gunakan dosis yang sama. Jangan gunakan dosis ekstra atau lebih dari yang disarankan.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Waktu Perawatan</div>
								<div class="content">
									<p>Pemakaian shampoo anti-DHT bersamaan dengan hair tonic atau finasteride-norm dapat memberikan hasil lebih maksimal.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Penyimpanan</div>
								<div class="content">
									<ul>
							  			<li>Jauhkan dari jangkauan anak-anak.</li>
							  			<li>Simpan pada suhu kamar.</li>
							  			<li>Buang semua perawatan yang tidak digunakan setelah tanggal kedaluwarsa.</li>
							  		</ul>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Informasi Penting Lainnya</div>
								<div class="content">
									<p><b><u>Peringatan</u></b></p>
							  		<p>Jangan menggunakan produk ini di mata, hidung, mulut, atau area sensitif lainnya. Jika terkena, bilas dengan air hingga bersih.</p>

							  		<p><b><u>Efek Samping</u></b></p>
							  		<p>Meskipun perawatan ini umumnya aman, obat ini terkait dengan efek samping yang jarang dan tidak serius. Efek samping berikut ini biasanya tidak memerlukan perhatian medis, namun apabila menganggu dan terjadi terus menerus, Kamu dapat memeriksakannya ke dokter atau professional kesehatan Kamu: </p>
							  		<ul>
							  			<li>Sakit kepala.</li>
							  			<li>Kemerahan, iritasi dan gatal di lokasi aplikasi.</li>
							  		</ul>
							  		<p>Daftar diatas mungkin tidak menjelaskan semua kemungkinan efek samping</p>
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
			<div class="yotpo yotpo-main-widget" data-product-id="4" data-price="129000" data-currency="IDR" data-name="Anti DHT Shampoo" data-url="https://www.norm.id/dht-shampoo" data-image-url="<?= base_url(); ?>assets/images/main/product/anti-dht-shampoo-norm.jpg"></div>
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