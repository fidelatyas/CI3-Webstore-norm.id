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
					<a href="<?= base_url(); ?>code/" class="animate white <? if ($category == 'all'): ?>active<? endif; ?>">All</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/hair/" class="animate white <? if ($category == 'hair'): ?>active<? endif; ?>">Hair</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/skin/" class="animate white <? if ($category == 'skin'): ?>active<? endif; ?>">Skin</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/sex/" class="animate white <? if ($category == 'sex'): ?>active<? endif; ?>">Sex</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/lifestyle/" class="animate white <? if ($category == 'lifestyle'): ?>active<? endif; ?>">Lifestyle</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/media/" class="animate white">Media Center</a>
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
						<span>Latest Article</span>
					</div>
				</div>
			</div>

			<div class="row margin-top-30px blog-list-container">
				<? $this->load->view('all_blog'); ?>
			</div>

			<div class="row margin-top-15px">
				<div class="col-12 text-center">
					<button class="main black load-article">Load More Article</button>
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
		initBlog();
	});

	let page = 1;

	function initBlog() {
		$('.load-article').click(function() {
			loadArticle();
		});
	}

	function loadArticle() {
		page = page + 1;
		$('.load-article').html('<i class="fa fa-spinner fa-spin fa-fw"></i><span> Loading...</span>');

		$.ajax({
            data :{
                page: page,
                category: '<?= $category; ?>',
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
                $('.load-article').html('Load More Article');

               	alert('Server Error.');
            },
            success: function(data){
                if (data.status == 'success') {
                	$('.blog-list-container').append(data.all_blog);

                	if (data.count_blog < 6) {
                		$('.load-article').parent().hide();
                	}
                }
                else {
                	alert(data.message);
                }

                $('.load-article').html('Load More Article');
            },
            type : 'POST',
            url : '<?= base_url(); ?>code/ajax_load_article/'
        });
	}
</script>
</html>