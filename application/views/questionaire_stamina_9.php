<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px">
				<? $this->load->view('bar'); ?>
			</div>

			<div class="margin-top-30px text-center">
				<div class="questionaire-title">Kamu mengetahui norm melalui:</div>
			</div>

			<div class="questionaire-button text-center margin-top-30px">
				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Instagram'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Instagram">Instagram</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Facebook'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Facebook">Facebook</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Twitter'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Twitter">Twitter</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Youtube'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Youtube">Youtube</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Search di Google'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Search di Google">Search di Google</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Billboard'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Billboard">Billboard</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Majalah'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Majalah">Majalah</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Dengar dari teman'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Dengar dari teman">Dengar dari teman</button>
				</div>

				<div class="margin-bottom-15px">
					<button class="main <? if (isset($arr_answered[0]) && $arr_answered[0]->answer == 'Rekomendasi'): ?>black<? else: ?>transparent<? endif; ?> questionaire" data-question="Kamu mengetahui norm melalui:" data-answer="Rekomendasi">Rekomendasi</button>
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
		$('.questionaire').click(function() {
			$('.questionaire').removeClass('black').addClass('transparent');
			$(this).addClass('black').removeClass('transparent');

			const question = $(this).attr('data-question');
			const answer = $(this).attr('data-answer');

			let arrQuestionaire = [];
			let questionaire = {};

			questionaire.category = 'stamina';
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
                   	window.location.href = "<?= base_url(); ?>recommendation/stamina/loading/";
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