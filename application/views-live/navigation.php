<nav class="desktop <?= $navbar; ?>">
	<div class="wa-info">
		<div>
			<img src="<?= base_url(); ?>assets/images/main/whatsapp-icon.png">
		</div>
		<? if ($lang == 'IND'): ?>
			<div>Konsultasi dan Pesan Melalui WhatsApp <a class="animate white" href="https://api.whatsapp.com/send?phone=6281210779710&text=Hi%20Norm%20Team%2c%20Saya%20mau%20tanya%20tentang%20produk%20Hair%20Loss..&source=&data=" target="_blank">081210779710</a></div>
		<? else: ?>
			<div>Consult and order via Whatsapp <a class="animate white" href="https://api.whatsapp.com/send?phone=6281210779710&text=Hi%20Norm%20Team%2c%20Saya%20mau%20tanya%20tentang%20produk%20dan%20Hair%20Loss..&source=&data=" target="_blank">081210779710</a></div>
		<? endif; ?>
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
						<li class="margin-left-30px cursor-pointer">
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
								<img src="<?= base_url(); ?>assets/images/main/<?= strtolower($lang); ?>-flag.png">
							</div>
							<div class="icon">
								<img src="<?= base_url(); ?>assets/images/main/down-<?= $navbar; ?>.png">
							</div>
						</div>

						<div class="language-list">
							<div class="opt <? if ($lang == 'IND'): ?>active<? endif; ?>" onclick="changeLanguage('IND');">
								<div class="icon"><img src="<?= base_url(); ?>assets/images/main/ind-flag.png"></div>
								<div>IND</div>
							</div>
							<div class="opt <? if ($lang == 'ENG'): ?>active<? endif; ?>" onclick="changeLanguage('ENG');">
								<div class="icon"><img src="<?= base_url(); ?>assets/images/main/eng-flag.png"></div>
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
		<img src="<?= base_url(); ?>assets/images/main/close-white.png">
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