<? foreach ($arr_video as $key => $video): ?>
	<? if ($key <= 0): ?>
		<? continue; ?>
	<? endif; ?>

	<div class="col-12 col-sm-4">
		<div class="article-container">
			<a href="<?= $video->url; ?>" target="_blank">
				<div class="article-image bg-cover" style="background-image: url(<?= $video->image; ?>);">
					<div class="play-button">
						<img src="<?= base_url(); ?>assets/images/main/play.png">
					</div>
				</div>

				<div class="article-detail">
					<div class="article-date media">
						<div class="date"><?= $video->date; ?></div>
					</div>
					<div class="name"><?= $video->name; ?></div>
				</div>
			</a>
		</div>
	</div>
<? endforeach;?>