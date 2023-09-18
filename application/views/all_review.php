<? foreach ($arr_review as $review): ?>
	<div class="review-container">
		<div class="review-detail">
			<div class="name"><?= $review->name; ?></div>
			<div class="badge"><img loading="lazy" src="<?= base_url(); ?>assets/images/main/verified-icon.png"></div>
			<div class="verified">Verified Buyer</div>
		</div>

		<div class="review-content">
			<div class="star">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/stars-black.png">
			</div>
		</div>
		<div class="content margin-top-15px">
			<p><?= $review->review; ?></p>
		</div>
	</div>
<? endforeach; ?>