<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="all-banner bg-cover" style="background-image: url(<?= base_url(); ?>assets/images/main/blog-placeholder.jpg);">
		<div class="container">
			<? if ($category == 'all'): ?>
				<div class="title-2 text-uppercase color-25292B">Journal</div>
			<? else: ?>
				<div class="title-2 text-uppercase color-25292B <? if ($category == 'video'): ?>d-none<? endif; ?>"><?= $category; ?></div>
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
					<a href="<?= base_url(); ?>code/media/" class="animate white">Media Center</a>
				</div>
				<div class="category">
					<a href="<?= base_url(); ?>code/video" class="animate white active">Video</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container normal">
			<div class="row">
				<div class="col-12">
					<div class="article-title">
						<div class="main-video-container overflow-hidden">
							<div class="main-video-image">
								<img class="width-100" src="<?= $arr_video[0]->image; ?>">
								<div class="video-title">
									<div class="date"><?= $arr_video[0]->date; ?></div>
									<div class="name"><?= $arr_video[0]->name; ?></div>
								</div>

								<div class="play-button">
									<a href="<?= $arr_video[0]->url; ?>" target="_blank">
										<img loading="lazy" src="<?= base_url(); ?>assets/images/main/play.png">
									</a>
								</div>
							</div>
							<div class="main-video-desc">
								<div><?= $arr_video[0]->subtitle; ?></div>
								<div class="url-available">
									<div class="font-semibold">Available at</div>
									<div class="margin-left-15px">
										<button class="main small icon">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row margin-top-30px">
				<div class="col-12">
					<div class="article-title">
						<span>Latest Media</span>
					</div>
				</div>
			</div>

			<div class="row margin-top-30px blog-list-container">
				<? $this->load->view('all_video'); ?>
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
	});

	let page = 1;
</script>
</html>