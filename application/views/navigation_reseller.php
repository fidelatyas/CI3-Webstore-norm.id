<nav class="desktop <?= $navbar; ?>">
	<div class="wa-info">
		<div style="font-size: 1.2rem; margin-right: 7.5px;"><i class="fa fa-telegram" aria-hidden="true"></i></div>
		<div>Gabung dengan <a href="https://t.me/normreseller" target="_blank" class="animate white active">Komunitas Reseller Norm</a> sekarang!</div>
	</div>
	<div class="container desktop-nav d-none d-sm-block">
		<div class="row align-items-center">
			<div class="col-5 text-left">
				<ul class="menu">
					<li class="margin-right-30px slide-menu-shop cursor-pointer">Shop</li>
					<li class="margin-right-30px">
						<a class="" href="<?= base_url(); ?>about/">About</a>
					</li>
				</ul>
			</div>
			<div class="col-2 text-center">
				<a href="<?= base_url(); ?>">
					<img class="logo" src="<?= base_url(); ?>assets/images/main/logo-<?= $navbar; ?>.png">
				</a>
			</div>
			<div class="col-5 text-right">
				<ul class="menu">
					<li class="margin-left-30px">
						<a class="" href="<?= base_url(); ?>code/">Norm Code</a>
					</li>
					<? if (!$account): ?>
						<li class="margin-left-30px slide-login cursor-pointer">
							<a class="" href="<?= base_url(); ?>login/">Login</a>
						</li>
					<? else: ?>
						<li class="margin-left-30px">
							<a class="" href="<?= base_url(); ?>account/">Hi, <?= $account->name; ?></a>
						</li>
					<? endif; ?>
					<!-- <li class="margin-left-30px position-relative">
						<div class="language-menu">
							<div class="lang">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/<?= strtolower($lang); ?>-flag.png">
							</div>
							<div class="icon">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/down-<?= $navbar; ?>.png">
							</div>
						</div>

						<div class="language-list">
							<div class="opt <? if ($lang == 'IND'): ?>active<? endif; ?>" onclick="changeLanguage('IND');">
								<div class="icon"><img loading="lazy" src="<?= base_url(); ?>assets/images/main/ind-flag.png"></div>
								<div>IND</div>
							</div>
							<div class="opt <? if ($lang == 'ENG'): ?>active<? endif; ?>" onclick="changeLanguage('ENG');">
								<div class="icon"><img loading="lazy" src="<?= base_url(); ?>assets/images/main/eng-flag.png"></div>
								<div>ENG</div>
							</div>
						</div>
					</li> -->
					<li class="margin-left-30px">
						<img class="cart-icon" src="<?= base_url(); ?>assets/images/main/cart<? if (count($cart_record['arr_cart']) > 0): ?>-fill<? endif; ?>-<?= $navbar; ?>.png">
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container desktop-nav d-block d-sm-none">
		<div class="row align-items-center">
			<div class="col-3 text-left">
				<img class="menu-icon slide-menu-shop" src="<?= base_url(); ?>assets/images/main/menu-<?= $navbar; ?>.png">
			</div>
			<div class="col-6 text-center">
				<a href="<?= base_url(); ?>">
					<img class="logo" src="<?= base_url(); ?>assets/images/main/logo-<?= $navbar; ?>.png">
				</a>
			</div>
			<div class="col-3 text-right">
				<div class="mobile-menu">
					<? if ($account): ?>
						<div>
							<a href="<?= base_url(); ?>account/">
								<img class="account-icon" src="<?= base_url(); ?>assets/images/main/account-<?= $navbar; ?>.png">
							</a>
						</div>
					<? else: ?>
						<div>
							<a href="<?= base_url(); ?>login/">
								<img class="account-icon" src="<?= base_url(); ?>assets/images/main/account-<?= $navbar; ?>.png">
							</a>
						</div>
					<? endif; ?>
					<div><img class="cart-icon" src="<?= base_url(); ?>assets/images/main/cart<? if (count($cart_record['arr_cart']) > 0): ?>-fill<? endif; ?>-<?= $navbar; ?>.png"></div>
				</div>
			</div>
		</div>
	</div>
</nav>

<div class="shop-menu">
	<div class="close-menu">
		<img loading="lazy" src="<?= base_url(); ?>assets/images/main/close-white.png">
	</div>
	<div class="">
		<div class="heading">Shop</div>
		<div class="menu-list">
			<a class="white" href="<?= base_url(); ?>skincare/">
				<div class="menu">Skin</div>
			</a>

			<a class="white" href="<?= base_url(); ?>hair-body/">
				<div class="menu">Hair & Body</div>
			</a>

			<a class="white" href="<?= base_url(); ?>performance/">
				<div class="menu">Performance</div>
			</a>

			<a class="white" href="<?= base_url(); ?>merchandise/">
				<div class="menu">Merchandise</div>
			</a>

			<? if ($account): ?>
				<a class="white" href="<?= base_url(); ?>medical-grade/">
					<div class="menu">Medical Grade</div>
				</a>
			<? endif; ?>

			<a class="white" href="<?= base_url(); ?>all-product/">
				<div class="menu">All</div>
			</a>
		</div>

		<div class="heading margin-top-60px">Program</div>
		<div class="menu-list">
			<a class="white" href="<?= base_url(); ?>start/consultation/hairloss/">
				<div class="menu">Hair Growth</div>
			</a>

			<a class="white" href="<?= base_url(); ?>start/consultation/pe/">
				<div class="menu">Stamina</div>
			</a>
		</div>
	</div>
</div>

<? $this->load->view('cart'); ?>