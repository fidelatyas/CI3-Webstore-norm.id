<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section>
		<div class="container margin-top-60px normal">
			<div class="margin-top-30px">
				<? $this->load->view('bar'); ?>
			</div>

			<div class="margin-top-30px text-center">
				<div class="questionaire-title">Apakah kamu mempunyai alergi lain yang harus diketahui?</div>
			</div>

			<div class="margin-top-30px">
				<div class="questionaire-text text-center">
					<textarea placeholder="Ketik disini.."></textarea>
				</div>
			</div>

			<div class="margin-top-30px text-center">
				<button class="main black button-submit-questionaire">Lanjut</button>
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
		$('.button-submit-questionaire').click(function() {


			let arrQuestionaire = [];
			let questionaire = {};

			questionaire.category = 'hairgrowth';
			questionaire.question = 'Apakah kamu mempunyai alergi lain yang harus diketahui';
			questionaire.answer = $('textarea').val();

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