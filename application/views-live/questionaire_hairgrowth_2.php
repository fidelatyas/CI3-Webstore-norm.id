<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px">
				<? $this->load->view('bar'); ?>
			</div>

			<div class="margin-top-30px text-center">
				<div class="questionaire-title">Apakah rambutmu rontok secara bertahap?</div>
			</div>

			<div class="questionaire-button text-center margin-top-30px">
				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Ya, ini adalah kerontokan rambut yang berpola'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Apakah rambutmu rontok secara bertahap?" data-answer="Ya, ini adalah kerontokan rambut yang berpola">Ya, ini adalah kerontokan rambut yang berpola</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main transparent questionaire" data-question="Apakah rambutmu rontok secara bertahap?" data-answer="Tidak, ini terjadi tiba-tiba, tidak dapat dijelaskan, disebabkan oleh obat atau penyakit">Tidak, ini terjadi tiba-tiba, tidak dapat dijelaskan, disebabkan oleh obat atau penyakit</button>
				</div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		questionaireClick();
	});

	function questionaireClick() {
		$('.questionaire').click(function() {
			$('.questionaire').removeClass('black').addClass('transparent');
			$(this).addClass('black').removeClass('transparent');

			const question = $(this).attr('data-question');
			const answer = $(this).attr('data-answer');

			if (answer == 'Tidak, ini terjadi tiba-tiba, tidak dapat dijelaskan, disebabkan oleh obat atau penyakit') {
				window.location.href = '<?= base_url(); ?>questionaire/stop/hairgrowth/<?= $number; ?>/';

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