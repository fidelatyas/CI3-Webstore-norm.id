<? foreach ($cart_record['arr_cart'] as $cart): ?>
	<div class="cart-box-detail">
		<? if ($cart->product_id == '1'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg">
			</div>
		<? elseif ($cart->product_id == '3'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.jpg">
			</div>
		<? elseif ($cart->product_id == '4'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/anti-dht-shampoo-norm.jpg">
			</div>
		<? elseif ($cart->product_id == '11'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/complete-hair-loss-kit-norm.jpg">
			</div>
		<? elseif ($cart->product_id == '13'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/starter-hair-loss-kit-norm.jpg">
			</div>
		<? elseif ($cart->product_id == '16'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/stamina-cream-norm.jpg">
			</div>
		<? elseif ($cart->product_id == '18'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
			</div>
		<? elseif ($cart->product_id == '19'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
			</div>
		<? elseif ($cart->product_id == '19'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
			</div>
		<? elseif ($cart->product_id == '20'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
			</div>
		<? elseif ($cart->product_id == '21'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
			</div>
		<? elseif ($cart->product_id == '22'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg">
			</div>
		<? elseif ($cart->product_id == '23'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg">
			</div>
		<? elseif ($cart->product_id == '24'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
			</div>
		<? elseif ($cart->product_id == '25'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
			</div>
		<? elseif ($cart->product_id == '26'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
			</div>
		<? elseif ($cart->product_id == '27'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/maintenance-set-bag-1.jpg">
			</div>
		<? elseif ($cart->product_id == '28'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/shower-set-bag-1.jpg">
			</div>
		<? elseif ($cart->product_id == '29'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
			</div>
		<? elseif ($cart->product_id == '30'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/daily-set-1.jpg">
			</div>
		<? elseif ($cart->product_id == '31'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/aging-set-1.jpg">
			</div>
		<? elseif ($cart->product_id == '32'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg">
			</div>
		<? elseif ($cart->product_id == '33'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/ultimate-gift-set-1.jpg">
			</div>
		<? elseif ($cart->product_id == '34'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/ultimate-gift-set-plus-bag-1.jpg">
			</div>
		<? elseif ($cart->product_id == '35'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/summer-sol-1.jpg">
			</div>
		<? elseif ($cart->product_id == '36'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg">
			</div>
		<? elseif ($cart->product_id == '37'): ?>
			<div class="image">
				<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/spectrum-set-1.jpg">
			</div>
		<? endif; ?>
		<div class="content">
			<div class="name">
				<? if ($cart->product_id == '1'): ?>
					Hair Growth Capsule
				<? elseif ($cart->product_id == '3'): ?>
					Hair Tonic
				<? elseif ($cart->product_id == '4'): ?>
					Anti DHT Shampoo
				<? elseif ($cart->product_id == '11'): ?>
					Complete Hair Loss Kit
				<? elseif ($cart->product_id == '13'): ?>
					Starter Hair Loss Kit
				<? elseif ($cart->product_id == '16'): ?>
					Stamina Cream
				<? elseif ($cart->product_id == '18'): ?>
					Hydra Cleansing<br>Face Wash
				<? elseif ($cart->product_id == '19'): ?>
					Deep Exfoliating<br>Face Scrub
				<? elseif ($cart->product_id == '20'): ?>
					Daily Defense<br>Moisurizer
				<? elseif ($cart->product_id == '21'): ?>
					Pure Performance<br>Shampoo
				<? elseif ($cart->product_id == '22'): ?>
					Fortifying<br>Body Wash
				<? elseif ($cart->product_id == '23'): ?>
					Ultimate<br>Gentleman Set
				<? elseif ($cart->product_id == '24'): ?>
					Complete<br>Maintenance Set
				<? elseif ($cart->product_id == '25'): ?>
					Complete<br>Shower Set
				<? elseif ($cart->product_id == '26'): ?>
					Ultimate<br>Gentleman Set + Bag
				<? elseif ($cart->product_id == '27'): ?>
					Complete<br>Maintenance Set + Bag
				<? elseif ($cart->product_id == '28'): ?>
					Complete<br>Shower Set + Bag
				<? elseif ($cart->product_id == '29'): ?>
					Starter<br>Maintenance Set
				<? elseif ($cart->product_id == '30'): ?>
					Daily<br>Maintenance Set
				<? elseif ($cart->product_id == '31'): ?>
					Aging<br>Maintenance Set
				<? elseif ($cart->product_id == '32'): ?>
					Water Res.<br>Utility Bag
				<? elseif ($cart->product_id == '33'): ?>
					Ultimate Gift Set
				<? elseif ($cart->product_id == '34'): ?>
					Ultimate Gift Set + Bag
				<? elseif ($cart->product_id == '35'): ?>
					Summer Sol Eau De Parfum
				<? elseif ($cart->product_id == '36'): ?>
					White Night Eau De Parfum
				<? elseif ($cart->product_id == '37'): ?>
					Spectrum Set
				<? endif; ?>
			</div>
			<div class="quantity"><?= $cart->price_display; ?> x <?= $cart->quantity; ?></div>
			<div class="price font-semibold margin-top-7-5px"><?= $cart->total_normal_display; ?></div>
		</div>
	</div>
<? endforeach; ?>