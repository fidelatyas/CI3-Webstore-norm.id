<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/number.min..js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/jquery.base64.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugin/semantic/dist/semantic.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugin/semantic/dist/tablesort/jquery.tablesort.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugin/daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugin/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
		initSemantic();
		initDatepicker();
		initNumberField();
		initMobileJs();
	});

	let submitQuery = false;

	function initDatepicker() {
		$('.date').daterangepicker({
		    singleDatePicker: true,
		    showDropdowns: true,
		    locale: {
			    format: 'YYYY-MM-DD'
			}
		});

		$('.date-full').daterangepicker({
		    singleDatePicker: true,
		    showDropdowns: true,
		    timePicker: true,
		    locale: {
			    format: 'YYYY-MM-DD hh:mm:ss'
			}
		});
	}

	function initMobileJs() {
		$('.menu-icon img').click(function() {
			$('.mobile-navigation').css('right', 0);
		});

		$('.mobile-navigation .close img').click(function() {
			$('.mobile-navigation').css('right', '-400px');
		});
	}

	function initNumberField() {
		$('.form-input.number').keypress(function(e) {
			if (e.which > 31 && (e.which < 48 || e.which > 57)) {
				e.preventDefault();
			}
		});

		$('.form-input.number').change(function(e) {
			if ($(this).val() == '') {
				$(this).val(0);
			}
		});
	}

	function initSemantic() {
		$('.ui.dropdown').dropdown();

		$('.form-accordion').accordion();
	}

	function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        return regex.test(email);
    }

    function showSuccess(message) {
		submitQuery = false;

		$('.success.modal .content p').html(message);
		$('.success.modal').modal('show');
	}

	function showWarning(message) {
		submitQuery = false;

		$('.warning.modal .content p').html(message);
		$('.warning.modal').modal('show');
	}

	function validate() {
		let foundEmpty = 0;
		let countIdx = 0;
		let idx = 0;

		$.each($('.data-important'), function(key, data) {
			if ($(data).val() == '' || $(data).val() == null || typeof $(data).val() === 'undefined') {
				foundEmpty += 1;

				$(data).parent().addClass('error');

				if (countIdx <= 0) {
					idx = parseInt($(data).attr('data-accordion-idx'));

					countIdx += 1;
				}
			}

			if ($(data).hasClass('email') && !isEmail($(data).val())) {
				$(data).parent().addClass('error');
				foundEmpty += 1;

				idx = (parseInt($(data).attr('data-accordion-idx')) > idx) ? idx : parseInt($(data).attr('data-accordion-idx'));
			}
		});

		if (countIdx > 0) {
			$('.form-accordion').accordion('open', idx);
		}

		return foundEmpty;
	}
</script>