<? if (count($cart_record['arr_cart']) > 0): ?>
	<? foreach ($cart_record['arr_cart'] as $cart): ?>
		<div id="cart-list-<?= $cart->product_id; ?>" class="cart-list" data-product-id="<?= $cart->product_id; ?>" data-category-id="<?= $cart->category_id; ?>" data-price="<?= $cart->price; ?>" data-quantity="<?= $cart->quantity; ?>">
			<? if ($cart->product_id == '1'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg">
				</div>
				<div class="detail">
					<div class="name">Hair Growth Capsule</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>

					<div class="cart-price-1">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 199.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 199.000</div>
								<div class="new">IDR 179.100</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '3'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.jpg">
				</div>
				<div class="detail">
					<div class="name">Hair Tonic</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>

					<div class="cart-price-3">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 169.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 169.000</div>
								<div class="new">IDR 152.100</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '4'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/anti-dht-shampoo-norm.jpg">
				</div>
				<div class="detail">
					<div class="name">Anti DHT Shampoo</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>

					<div class="cart-price-4">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 129.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 129.000</div>
								<div class="new">IDR 116.100</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '11'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/complete-hair-loss-kit-norm.jpg">
				</div>
				<div class="detail">
					<div class="name">Complete Hair Loss Kit</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>

					<div class="cart-price-11">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 469.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 469.000</div>
								<div class="new">IDR 422.100</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '13'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/starter-hair-loss-kit-norm.jpg">
				</div>
				<div class="detail">
					<div class="name">Starter Hair Loss Kit</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>

					<div class="cart-price-13">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 279.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 279.000</div>
								<div class="new">IDR 251.100</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '16'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/stamina-cream-norm.jpg">
				</div>
				<div class="detail">
					<div class="name">Stamina Cream</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>

					<div class="cart-price-16">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 249.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 249.000</div>
								<div class="new">IDR 224.100</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '18'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Hydra Cleansing<br>Face Wash</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="cart-price-18">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 79.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 79.000</div>
								<div class="new">IDR 75.050</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '19'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Deep Exfoliating<br>Face Scrub</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="cart-price-19">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 89.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 89.000</div>
								<div class="new">IDR 84.550</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '20'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Daily Defense<br>Moisurizer</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="cart-price-20">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 99.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 99.000</div>
								<div class="new">IDR 94.050</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '21'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Pure Performance<br>Shampoo</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="cart-price-21">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 109.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 109.000</div>
								<div class="new">IDR 103.550</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '22'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Fortifying<br>Body Wash</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="cart-price-22">
						<? if ($cart->quantity < 3): ?>
							<div class="price">IDR 99.000</div>
						<? else: ?>
							<div class="cart-price-container">
								<div class="old">IDR 99.000</div>
								<div class="new">IDR 94.050</div>
							</div>
						<? endif; ?>
					</div>
				</div>
			<? elseif ($cart->product_id == '23'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg">
				</div>
				<div class="detail">
					<div class="name">Ultimate Gentleman Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 459.000</div>
				</div>
			<? elseif ($cart->product_id == '24'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
				</div>
				<div class="detail">
					<div class="name">Complete<br>Maintenance Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 259.000</div>
				</div>
			<? elseif ($cart->product_id == '25'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
				</div>
				<div class="detail">
					<div class="name">Complete<br>Shower Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 199.000</div>
				</div>
			<? elseif ($cart->product_id == '26'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/complete-set-bag-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Ultimate <br>Gentleman Set + Bag</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 659.000</div>
				</div>
			<? elseif ($cart->product_id == '27'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/maintenance-set-bag-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Complete<br>Maintenance Set + Bag</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 469.000</div>
				</div>
			<? elseif ($cart->product_id == '28'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/shower-set-bag-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Complete<br>Shower Set + Bag</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 419.000</div>
				</div>
			<? elseif ($cart->product_id == '29'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Starter<br>Maintenance Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 159.000</div>
				</div>
			<? elseif ($cart->product_id == '30'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/daily-set-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Daily<br>Maintenance Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 169.000</div>
				</div>
			<? elseif ($cart->product_id == '31'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/aging-set-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Aging<br>Maintenance Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 179.000</div>
				</div>
			<? elseif ($cart->product_id == '32'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/toiletries-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Water Resistant<br>Utility Bag</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 219.000</div>
				</div>
			<? elseif ($cart->product_id == '33'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/ultimate-gift-set-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Ultimate Gift Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 659.000</div>
				</div>
			<? elseif ($cart->product_id == '34'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/ultimate-gift-set-plus-bag-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Ultimate Gift Set + Bag</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 799.000</div>
				</div>
			<? elseif ($cart->product_id == '35'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/summer-sol-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Summer Sol Eau De Parfum</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 229.000</div>
				</div>
			<? elseif ($cart->product_id == '36'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg">
				</div>
				<div class="detail">
					<div class="name">White Night Eau De Parfum</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 229.000</div>
				</div>
			<? elseif ($cart->product_id == '37'): ?>
				<div class="image">
					<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/spectrum-set-1.jpg">
				</div>
				<div class="detail">
					<div class="name">Spectrum Set</div>
					<? if (!isset($checkout)): ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="minus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/minus.png">
							</div>
							<div class="input"><?= $cart->quantity; ?></div>
							<div class="plus">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/plus.png">
							</div>
						</div>
					<? else: ?>
						<div class="quantity" data-product-id="<?= $cart->product_id; ?>">
							<div class="input"><?= $cart->quantity; ?></div>
						</div>
					<? endif; ?>
					<div class="price">IDR 399.000</div>
				</div>
			<? endif; ?>
		</div>
	<? endforeach; ?>
<? else: ?>
	<div class="empty-cart-container text-center">
		<div class="empty-cart-icon">
			<img loading="lazy" src="<?= base_url(); ?>assets/images/main/empty-cart.png">
		</div>
		<div>Oooops...</div>
		<div>Your cart is empty</div>

		<div class="margin-top-30px">
			<a href="<?= base_url(); ?>all-product/">
				<button class="main">Shop Now</button>
			</a>
		</div>
	</div>
<? endif; ?>