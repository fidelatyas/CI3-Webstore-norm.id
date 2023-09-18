<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-45px normal text-center">
			<div class="margin-top-30px">
				<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
			</div>

			<div class="margin-top-30px">
				<div class="title">Terima Kasih</div>
				<div class="margin-top-15px">Mohon menunggu rekomendasi dokter yang sedang disiapkan khusus untukmu.</div>
			</div>

			<div class="margin-top-30px result-bar-container">
				<div class="result-bar result-1 active">
					<div class="bar"></div>
				</div>
				<div class="result-loading-text">
					<div class="left">Menganalisa Gejala</div>
					<div class="percentage loading-1">0%</div>
				</div>
			</div>

			<div class="margin-top-30px result-bar-container">
				<div class="result-bar result-2">
					<div class="bar"></div>
				</div>
				<div class="result-loading-text">
					<div class="left">Menganalisa Riwayat Kesehatan</div>
					<div class="percentage loading-2">0%</div>
				</div>
			</div>

			<div class="margin-top-30px result-bar-container">
				<div class="result-bar result-3">
					<div class="bar"></div>
				</div>
				<div class="result-loading-text">
					<div class="left">Menyiapkan Rekomendasi</div>
					<div class="percentage loading-3">0%</div>
				</div>
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
		initAnimation(loading);
	});

	let loading = 1;

	function submitConsultation() {
		$.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                  	window.location.href = '<?= base_url(); ?>recommendation/hairgrowth/';
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_save_consultation/'
        });
	}

	function initAnimation(loading) {
		if (loading > 3) {
			<? if ($account): ?>
				submitConsultation();
			<? else: ?>
				setTimeout(function() {
					window.location.href = '<?= base_url(); ?>recommendation/hairgrowth/';
				}, 2000);
			<? endif; ?>

			return;
		}

		let seconds = 4;
		let barWidth = 0;

		let bar = setInterval(function() {
			barWidth++;

			$('.result-'+ loading +' .bar').css('width', barWidth + '%');
			$('.loading-'+ loading).html(barWidth + '%');

			if (barWidth >= 100) {
				clearInterval(bar);


				setTimeout(function() {
					loading += 1;

					$('.result-bar').removeClass('active');
					$('.result-'+ loading).addClass('active')

					initAnimation(loading);
				}, 1000);
			}
		}, seconds * 1000 / 100)
	}
</script>
</html>