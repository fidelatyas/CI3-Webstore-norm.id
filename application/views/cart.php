<div class="cart-container">
	<div class="close-menu">
		<img loading="lazy" src="<?= base_url(); ?>assets/images/main/close.png">
	</div>

	<div class="title">Your Cart</div>

	<div class="cart-detail margin-top-30px">
		<? $this->load->view('all_cart'); ?>
	</div>

	<div class="cart-total <? if (count($cart_record['arr_cart']) <= 0): ?>d-none<? endif; ?>">
		<div class="subtotal">
			<div class="text">Subtotal</div>
			<div class="text text-right font-semibold cart-total-subtotal"><?= $cart_record['subtotal_display']; ?></div>
		</div>

		<div class="button margin-top-15px">
			<a href="<?= base_url(); ?>checkout/">
				<button class="main width-100">CHECKOUT</button>
			</a>
		</div>
	</div>
</div>