<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="text-center margin-top-45px">
		<div class="container normal">
			<div class="title margin-top-30px">Terima Kasih telah menunggu</div>

			<div class="margin-top-15px">Berdasarkan hasil konsultasi kamu, berikut adalah rekomendasi yang disarankan dokter.</div>

			<div class="margin-top-30px row recommendation-prescription-container">
				<div class="col-12 col-sm-4 d-none d-sm-block"></div>
				<div class="col-12 col-sm-4">
					<div class="recommendation-box">
						<div class="image">
							<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/stamina-cream-norm.png">
						</div>
						<div class="recommendation-content">
							<div class="title">Stamina Cream</div>
							<div>Krim anestesi topikal yang dapat digunakan untuk mengatasi ejakulasi dini.</div>

							<div class="margin-top-15px font-italic">Set termasuk: <span class="underline" onclick="$('#modal-stamina').modal('show');">Stamina Cream</span></div>

							<div class="price-container margin-top-15px">
								<div class="price-box price-product-16 active" data-product-id="16" data-quantity="1" data-price="249000">
									<div class="checklist">
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
									</div>
									<div>1 bulan perawatan</div>
									<div class="price">IDR 249.000</div>
								</div>
								<div class="price-box price-product-16" data-product-id="16" data-quantity="3" data-price="249000">
									<div class="checklist">
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
									</div>
									<div class="floating">10% off</div>

									<div>3 bulan perawatan</div>
									<div class="price">IDR 672.300</div>
								</div>
							</div>

							<div class="margin-top-7-5px recommendation-notes">Direkomendasikan untuk mengambil perawatan 3 bulan agar perawatan lebih maksimal dan menunjukkan hasil</div>

							<div class="margin-top-15px">
								<? if ($account): ?>
									<button class="main black width-100 cart-button-16" onclick="recommendationCartAdd(16);">Pesan Sekarang</button>
								<? else: ?>
									<button class="main black width-100 cart-button-16" onclick="recommendationCartAdd(16);">Registrasi dan Pesan</button>
								<? endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 d-none d-sm-block"></div>
			</div>
		</div>
	</section>

	<? $this->load->view('modal_product_description'); ?>

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initModalFunction();
	});

	function initModalFunction() {
		$('.panel, .faq-panel').click(function() {
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

	function recommendationCartAdd(productId) {
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
            	category_id: 11,
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
                  	<? if ($account): ?>
                  		window.location.href = `<?= base_url(); ?>checkout/address/`;
                  	<? else: ?>
                  		window.location.href = `<?= base_url(); ?>recommendation/register/`;
                  	<? endif; ?>
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