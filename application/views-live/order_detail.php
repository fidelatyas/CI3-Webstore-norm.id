<? foreach ($order->arr_order_item as $order_item): ?>
	<div class="row align-items-center margin-bottom-7-5px">
		<div class="col-3">
			<? if ($order_item->product_id == '1'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/finasteride-norm.jpg">
				</div>
			<? elseif ($order_item->product_id == '3'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.jpg">
				</div>
			<? elseif ($order_item->product_id == '11'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-hair-loss-kit-norm.jpg">
				</div>
			<? elseif ($order_item->product_id == '13'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-hair-loss-kit-norm.jpg">
				</div>
			<? elseif ($order_item->product_id == '16'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/stamina-cream-norm.jpg">
				</div>
			<? elseif ($order_item->product_id == '18'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '19'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '19'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '20'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '21'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '22'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '23'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg">
				</div>
			<? elseif ($order_item->product_id == '24'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
				</div>
			<? elseif ($order_item->product_id == '25'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
				</div>
			<? elseif ($order_item->product_id == '26'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '27'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/maintenance-set-bag-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '28'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shower-set-bag-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '29'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '30'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/daily-set-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '31'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/aging-set-1.jpg">
				</div>
			<? elseif ($order_item->product_id == '32'): ?>
				<div class="image">
					<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg">
				</div>
			<? endif; ?>
		</div>
		<div class="col-9">
			<div class="font-semibold">
				<? if ($order_item->product_id == '1'): ?>
					Hair Growth Capsule
				<? elseif ($order_item->product_id == '3'): ?>
					Hair Tonic
				<? elseif ($order_item->product_id == '11'): ?>
					Complete Hair Loss Kit
				<? elseif ($order_item->product_id == '13'): ?>
					Starter Hair Loss Kit
				<? elseif ($order_item->product_id == '16'): ?>
					Stamina Cream
				<? elseif ($order_item->product_id == '18'): ?>
					Hydra Cleansing<br>Face Wash
				<? elseif ($order_item->product_id == '19'): ?>
					Deep Exfoliating<br>Face Scrub
				<? elseif ($order_item->product_id == '20'): ?>
					Daily Defense<br>Moisurizer
				<? elseif ($order_item->product_id == '21'): ?>
					Pure Performance<br>Shampoo
				<? elseif ($order_item->product_id == '22'): ?>
					Fortifying<br>Body Wash
				<? elseif ($order_item->product_id == '23'): ?>
					Ultimate<br>Gentleman Set
				<? elseif ($order_item->product_id == '24'): ?>
					Complete<br>Maintenance Set
				<? elseif ($order_item->product_id == '25'): ?>
					Complete<br>Shower Set
				<? elseif ($order_item->product_id == '26'): ?>
					Ultimate<br>Gentleman Set + Bag
				<? elseif ($order_item->product_id == '27'): ?>
					Complete<br>Maintenance Set + Bag
				<? elseif ($order_item->product_id == '28'): ?>
					Complete<br>Shower Set + Bag
				<? elseif ($order_item->product_id == '29'): ?>
					Starter<br>Maintenance Set
				<? elseif ($order_item->product_id == '30'): ?>
					Daily<br>Maintenance Set
				<? elseif ($order_item->product_id == '31'): ?>
					Aging<br>Maintenance Set
				<? elseif ($order_item->product_id == '32'): ?>
					Water Res.<br>Utility Bag
				<? endif; ?>
			</div>
			<div class="quantity"><?= $order_item->price_display; ?> x <?= $order_item->quantity_display; ?></div>

			<? if ($order_item->quantity < 3): ?>
				<div class="price"><?= $order_item->total_display ?></div>
			<? else: ?>
				<div class="cart-price-container">
					<div class="old"><?= $order_item->total_item_display ?></div>
					<div class="new"><?= $order_item->total_display ?></div>
				</div>
			<? endif; ?>
		</div>
	</div>
<? endforeach; ?>

<div class="separator-modal"></div>

<div class="row">
	<div class="col-6 font-semibold">Subtotal</div>
	<div class="col-6 text-right"><?= $order->subtotal_display; ?></div>
</div>

<div class="row margin-top-7-5px">
	<div class="col-6 font-semibold">Discount</div>
	<div class="col-6 text-right"><?= $order->discount_display; ?></div>
</div>

<div class="row margin-top-7-5px">
	<div class="col-6 font-semibold">shipping</div>
	<div class="col-6 text-right"><?= $order->shipping_display; ?></div>
</div>

<div class="separator-modal"></div>

<div class="row">
	<div class="col-6 font-semibold">Grand Total</div>
	<div class="col-6 text-right font-semibold"><?= $order->grand_total_display; ?></div>
</div>