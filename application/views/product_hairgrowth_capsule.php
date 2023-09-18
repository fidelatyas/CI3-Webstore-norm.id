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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Hair Growth Capsule</h1>

						<div class="yotpo bottomLine margin-top-15px" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="1" data-product-models="Bundle" data-name="Hair Tonic" data-url="https://www.norm.id/hair-growth-capsule/" data-image-url="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg" data-description="Kapsul yang diminum sehari sekali untuk menghambat hormon DHT yang menjadi masalah kerontokan rambut." data-bread-crumbs="Bundle"></div>

						<!-- <div class="price">IDR 199.000</div> -->

						<div class="description">
							<p>Kapsul yang diminum sehari sekali untuk menghambat hormon DHT yang menjadi masalah kerontokan rambut.</p>
						</div>

						<div class="price-container margin-top-15px">
							<div class="price-box product text-center price-product-1 active" data-product-id="1" data-quantity="1" data-price="199000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>

								<div>1 bulan perawatan</div>
								<div class="price">IDR 199.000</div>
							</div>
							<div class="price-box product text-center margin-left-15px price-product-1" data-product-id="1" data-quantity="3" data-price="199000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>
								<div class="floating">10% off</div>

								<div>3 bulan perawatan</div>
								<div class="price">IDR 537.300</div>
							</div>
						</div>

						<div class="button">
							<button class="main width-100 cart-button-1" onclick="prescriptionAddCart(1);">Add to Cart</button>
						</div>

						<div class="margin-top-30px">
							<div class="panel active">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Cara Pemakaian</div>
								<div class="content">
									<ul>
										<li>1 kapsul per hari.</li>
										<li>Dapat dikonsumsi sebelum atau sesudah makan.</li>
										<li>Cobalah untuk mengambil dosis pada waktu yang sama setiap hari untuk memaksimalkan efektivitas.</li>
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
									<p>Diperlukan setidaknya 3-6 bulan penggunaan rutin untuk melihat perubahan terjadi pada rambut.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Penyimpanan</div>
								<div class="content">
									<ul>
										<li>Jauhkan dari wanita apabila hancur atau patah.</li>
										<li>Jauhkan dari jangkauan anak-anak.</li>
										<li>Simpan pada suhu kamar.</li>
										<li>Lindungi dari kelembaban dan jaga agar wadah tertutup rapat.</li>
										<li>Buang semua obat yang tidak digunakan setelah tanggal kedaluwarsa.</li>
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
									<p><u>Obat ini hanya untuk pria dan tidak boleh dikonsumsi oleh wanita</u>.&nbsp;Obat ini dapat mempengaruhi kadar hormon sehingga sangat penting bagi wanita yang sedang hamil atau ingin hamil tidak memakainya, karena dapat menyebabkan komplikasi dengan kehamilan.</p>

									<p>Jangan minum obat ini dan beri tahu dokter Kamu jika memiliki kondisi berikut:</p>
									<ul>
										<li>Penyakit atau masalah hati.</li>
										<li>Masalah ginjal.</li>
										<li>Kanker prostat.</li>
										<li>Sedang hamil atau berusaha untuk hamil.</li>
										<li>Kamu yang sedang menyusui.</li>
									</ul>
									<p>Jangan minum obat ini jika Kamu alergi terhadap finasteride-norm (termasuk Proscar dan Propecia®).</p>
									<p>Jangan menyumbangkan darah saat Kamu minum obat ini. Tanyakan kepada dokter atau profesional kesehatan Kamu waktu aman untuk menyumbangkan darah setelah Kamu berhenti minum obat ini.</p>
									<p>Obat ini dapat mengganggu tes laboratorium PSA untuk kanker prostat. Jika Kamu dijadwalkan menjalani tes laboratorium untuk kanker prostat, beri tahu dokter atau profesional kesehatan bahwa Kamu sedang minum obat ini.</p>
									<p><b><u>Efek Samping</u></b></p>
									<p>Seperti semua produk yang diresepkan dokter, finasteride-norm dapat menyebabkan efek samping. Hubungi dokter atau profesional kesehatan segera jika Kamu mengalami salah satu dari yang berikut:</p>
									<ul>
										<li>Tanda-tanda reaksi alergi serius seperti ruam kulit, gatal, pembengkakan pada wajah, bibir, atau lidah, pusing yang ekstrem, kesulitan bernafas.</li>
										<li>Pembengkakan atau nyeri pada payudara atau nyeri atau cairan bocor dari puting.</li>
										<li>Nyeri pada testis.</li>
										<li>Ketidakmampuan untuk buang air kecil.</li>
									</ul>
									<p>Meskipun jarang, dalam&nbsp;<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3481923/#ref11" target="_blank">uji klinis</a>&nbsp;yang dilakukan di US, 3,8% dari pasien pria melihat beberapa bentuk efek samping seksual (dibandingkan 2,1% dari pasien yang menggunakan plasebo), termasuk kurang keinginan untuk berhubungan seks, kesulitan dalam mencapai ereksi, atau penurunan jumlah air mani dirilis saat berhubungan seks. Ini dapat berlanjut setelah menghentikan perawatan.</p>
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
			<div class="yotpo yotpo-main-widget" data-product-id="1" data-price="199000" data-currency="IDR" data-name="Hair Tonic" data-url="https://www.norm.id/hair-growth-capsule/" data-image-url="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg"></div>
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