<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="all-banner bg-fff">
		<div class="container">
			<? if ($category == 'all'): ?>
				<div class="title-2 text-uppercase color-25292B">Journal</div>
			<? else: ?>
				<div class="title-2 text-uppercase color-25292B"><?= $category; ?></div>
			<? endif; ?>
		</div>
	</section>

	<section class="bg-25292B">
		<div class="container color-white">
			<div class="category-container">
				<div class="category">
					<a href="<?= base_url(); ?>code/" class="animate white">All</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/hair/" class="animate white">Hair</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/skin/" class="animate white">Skin</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/sex/" class="animate white">Sex</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/lifestyle/" class="animate white">Lifestyle</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/media/" class="animate white active">Media Center</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/video" class="animate white">Video</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container normal">
			<div class="row">
				<div class="col-12">
					<div class="article-title">
						<span>Latest Media</span>
					</div>
				</div>
			</div>

			<div class="row margin-top-30px blog-list-container">
				<? $this->load->view('all_media'); ?>
			</div>

			<div class="row margin-top-15px">
				<div class="col-12 text-center">
					<button class="main black load-media">Load More Media</button>
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
		initMedia();
	});

	let page = 1;

	function initMedia() {
		$('.load-media').click(function() {
			loadMedia();
		});
	}

	function loadMedia() {
		page = page + 1;
		$('.load-media').html('<i class="fa fa-spinner fa-spin fa-fw"></i><span> Loading...</span>');

		$.ajax({
            data :{
                page: page,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
                $('.load-media').html('Load More Media');

               	alert('Server Error.');
            },
            success: function(data){
                if (data.status == 'success') {
                	$('.blog-list-container').append(data.all_media);

                	if (data.count_media < 6) {
                		$('.load-media').parent().hide();
                	}
                }
                else {
                	alert(data.message);
                }

                $('.load-media').html('Load More Media');
            },
            type : 'POST',
            url : '<?= base_url(); ?>code/ajax_load_media/'
        });
	}
</script>
</html>