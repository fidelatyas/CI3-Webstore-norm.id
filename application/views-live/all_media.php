<? foreach ($arr_media as $media): ?>
	<div class="col-12 col-sm-4">
		<div class="article-container">
			<a href="<?= $media->url; ?>" target="_blank">
				<div class="article-image bg-cover" style="background-image: url(<?= $media->image; ?>);"></div>

				<div class="article-detail">
					<div class="article-date media">
						<div class="date"><?= $media->date; ?></div>
					</div>
					<div class="name"><?= $media->name; ?></div>
				</div>
			</a>
		</div>
	</div>
<? endforeach;?>