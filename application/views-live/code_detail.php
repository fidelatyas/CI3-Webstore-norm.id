<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-30px">
		<div class="container normal">
			<div class="blog-detail-image margin-top-15px">
				<img class="width-100" src="<?= $selected_blog->image; ?>">
			</div>

			<div class="blog-container">
				<div class="title margin-top-15px"><?= $selected_blog->name; ?></div>

				<div class="category"><?= $selected_blog->category; ?></div>
				<div class="date"><?= $selected_blog->date; ?></div>

				<div class="paragraph-content">
					<?= $selected_blog->description; ?>
				</div>
			</div>
		</div>
	</section>

	</section>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
	});
</script>
</html>