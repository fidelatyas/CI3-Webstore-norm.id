<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px">
				<? $this->load->view('bar'); ?>
			</div>

			<div class="margin-top-30px text-center">
				<div class="questionaire-title">Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?</div>
			</div>

			<div class="questionaire-image margin-top-30px row">
				<div class="col-6 col-sm-4 small-gap margin-bottom-15px">
					<div class="img-container <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Garis Rambut'): ?>active<? endif; ?>" data-question="Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?" data-answer="Garis Rambut">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/hairgrowth/problem-1.png">
						<div class="img-title">Garis rambut</div>
					</div>
				</div>
				<div class="col-6 col-sm-4 small-gap margin-bottom-15px">
					<div class="img-container <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Garis rambut & atas kepala'): ?>active<? endif; ?>" data-question="Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?" data-answer="Garis rambut & atas kepala">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/hairgrowth/problem-2.png">
						<div class="img-title">Garis rambut & atas kepala</div>
					</div>
				</div>
				<div class="col-6 col-sm-4 small-gap margin-bottom-15px">
					<div class="img-container <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Moderat'): ?>active<? endif; ?>" data-question="Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?" data-answer="Moderat">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/hairgrowth/problem-3.png">
						<div class="img-title">Moderat</div>
					</div>
				</div>
				<div class="col-6 col-sm-4 small-gap margin-bottom-15px">
					<div class="img-container <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Luas'): ?>active<? endif; ?>" data-question="Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?" data-answer="Luas">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/hairgrowth/problem-4.png">
						<div class="img-title">Luas</div>
					</div>
				</div>
				<div class="col-6 col-sm-4 small-gap margin-bottom-15px">
					<div class="img-container" data-question="Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?" data-answer="Tidak Beraturan">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/hairgrowth/problem-5.png">
						<div class="img-title">Tidak Beraturan</div>
					</div>
				</div>
				<div class="col-6 col-sm-4 small-gap margin-bottom-15px">
					<div class="img-container" data-question="Gambar manakah yang paling cocok dengan kondisi kerontokan kamu?" data-answer="Total">
						<img loading="lazy" src="<?= base_url(); ?>assets/images/main/questionaire/hairgrowth/problem-6.png">
						<div class="img-title">Total</div>
					</div>
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
		questionaireClick();
	});

	function questionaireClick() {
		$('.img-container').click(function() {
			$('.img-container').removeClass('active');
			$(this).addClass('active');

			const question = $(this).attr('data-question');
			const answer = $(this).attr('data-answer');

			if (answer == 'Total' || answer == 'Tidak Beraturan') {
				window.location.href = '<?= base_url(); ?>questionaire/stop/hairgrowth/1/';

				return;
			}

			let arrQuestionaire = [];
			let questionaire = {};

			questionaire.category = 'hairgrowth';
			questionaire.question = question;
			questionaire.answer= answer;

			arrQuestionaire.push(questionaire);

			submitAnswer(arrQuestionaire);
		});
	}

	function submitAnswer(arrQuestionaire) {
		$.ajax({
            data: {
            	page: `<?= $number; ?>`,
            	arr_questionaire: JSON.stringify(arrQuestionaire),
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.login-nav-button').html(`Login`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	window.location.href = "<?= base_url(); ?>questionaire/hairgrowth/<?= $number + 1; ?>/";
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>questionaire/ajax_save_answer/'
        });
	}
</script>
</html>