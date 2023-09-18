<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="all-banner">
		<div class="container text-left">
			<div class="title-2">Kata Mereka</div>
			<div class="banner-text">12.000+ customer telah percaya Norm dan ambil bagian untuk membuktikan hasilnya. Mereka yang telah ambil langkah untuk mencapai kualitas hidup yang lebih baik.</div>
		</div>
	</section>

	<section class="bg-dcdcdc">
		<div class="container normal text-center">
			<div class="title">Mereka yang sudah #JoinTheNorm</div>

			<div class="margin-top-30px">
				<div id="slider-reviews" class="owl-carousel owl-theme">
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-1.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">2 BULAN PEMAKAIAN</div>
						</div>
					</div>
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-2.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">4 BULAN PEMAKAIAN</div>
						</div>
					</div>
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-3.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">3 BULAN PEMAKAIAN</div>
						</div>
					</div>
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-4.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">3 BULAN PEMAKAIAN</div>
						</div>
					</div>
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-5.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">3 BULAN PEMAKAIAN</div>
						</div>
					</div>
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-6.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">1 BULAN PEMAKAIAN</div>
						</div>
					</div>
					<div class="items">
						<div class="results-container review text-center">
							<img class="width-full" src="<?= base_url(); ?>assets/images/main/results/hairloss/hasil-perawatan-rambut-rontok-7.jpg" alt="Penampakan sebelum dan sesudah menggunakan produk perawatan rambut rontok dari norm">
							<div class="results-time">2 BULAN PEMAKAIAN</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="all-review">
				<? $this->load->view('all_review'); ?>
			</div>

			<div class="margin-top-30px text-center">
				<button class="main wide transparent load-review" onclick="loadReview();">Read More Review</button>
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
		initReviewCarousel();
	});

	let page = 1;

	function initReviewCarousel() {
		$('#slider-reviews').owlCarousel({
			autoHeight: false,
			dots: true,
			items: 1,
			loop: true,
			margin: 10,
			merge: true,
		    nav: false,
		    responsiveClass: true,
		    responsive: {
		    	0: {
		    		items: 1,
		    	},
		    	1024: {
		    		items: 3,
		    	},
		    	1440: {
		    		items: 4,
		    	}
		    }
		});

		$('.reviews-prev').click(function() {
			$('#slider-reviews').trigger('prev.owl.carousel');
		});

		$('.reviews-next').click(function() {
			$('#slider-reviews').trigger('next.owl.carousel');
		});
	}

	function loadReview() {
		page = page + 1;
		$('.load-review').html('<i class="fa fa-spinner fa-spin fa-fw"></i><span> Loading...</span>');

		$.ajax({
            data :{
                page: page,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
                $('.load-review').html('Load More Media');

               	alert('Server Error.');
            },
            success: function(data){
                if (data.status == 'success') {
                	$('.all-review').append(data.all_review);

                	if (data.count_review < 10) {
                		$('.load-review').parent().hide();
                	}
                }
                else {
                	alert(data.message);
                }

                $('.load-review').html('Read More Review');
            },
            type : 'POST',
            url : '<?= base_url(); ?>review/ajax_load_review/'
        });
	}
</script>
</html>