<? foreach ($arr_blog as $blog): ?>
	<div class="col-12 col-sm-4">
		<div class="article-container">
			<a href="<?= base_url(); ?>code/detail/<?= $blog->url_name; ?>">
				<div class="article-image bg-cover" style="background-image: url(<?= $blog->image; ?>);"></div>

				<div class="article-detail">
					<div class="article-date">
						<div class="category"><?= $blog->category; ?></div>
						<div class="date"><?= $blog->date; ?></div>
					</div>
					<div class="name"><?= $blog->name; ?></div>

					<div class="description">
						<p><?= character_limiter($blog->subtitle, 75); ?></p>
					</div>
				</div>
			</a>
		</div>
	</div>
<? endforeach;?>