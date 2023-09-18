<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="product-section">
		<div class="container margin-top-90px">
			<div class="row product-container small-gap">
				<div class="col-12 small-gap">
					<a class="animate black" href="<?= $referrer_url; ?>">
						<div class="product-referrer">
							<div class="image">
								<img loading="lazy" src="<?= base_url(); ?>assets/images/main/arrow-left.png">
							</div>
							<div>Back</div>
						</div>
					</a>
				</div>
			</div>

			<div class="row product-container small-gap margin-top-30px">
				<div class="col-12 col-sm-6 small-gap">
					<div class="image">
						<div class="product-image-carousel owl-carousel owl-theme">
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/summer-sol-1.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/summer-sol-2.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Summer Sol Eau de Parfum</h1>
						<!-- <div class="ingredient">Agave Leaf │ Calendula Flower │ Mugwort</div> -->

						<div class="yotpo bottomLine margin-top-15px" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="35" data-product-models="Bundle" data-name="Hydra Cleansing Face Wash" data-url="https://www.norm.id/face-wash/" data-image-url="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg" data-description="Basic skincare untuk membersihkan wajah. Diformulasikan menggunakan agave leaf, calendula flower, dan mugwort yang  efektif membersihkan kotoran, mengurangi minyak berlebih, serta menjadikan kulit bersih dan lembut" data-bread-crumbs="Bundle"></div>

						<div class="price">IDR 229.000</div>

						<div class="description">
							<p>Terinspirasi dari mewahnya aroma wangi bergamot, Lavender, dan Cedarwood yang memberikan sensasi kesegaran dan Summer Sol dapat menemani aktivitas pada siang hari.</p>
						</div>

						<!-- <div class="coming-soon-text">COMING SOON</div> -->

						<div class="price-container margin-top-15px display-none">
							<div class="price-box product text-center price-product-35 active" data-product-id="35" data-quantity="1" data-price="229000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>

								<div>1 pc</div>
								<div class="price">IDR 229.000</div>
							</div>
							<div class="price-box product text-center margin-left-15px price-product-35" data-product-id="35" data-quantity="3" data-price="229000">
								<div class="checklist">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/check.png">
								</div>
								<div class="floating">5% off</div>

								<div>3 pc</div>
								<div class="price">IDR 225.150</div>
							</div>
						</div>

						<div class="button">
							<button class="main width-100 cart-button-35" onclick="prescriptionAddCart(35);">Add to Cart</button>
						</div>

						<div class="margin-top-15px">
							<div class="row small-gap e-commerce-container">
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://shopee.co.id/Summer-Sol-Eau-De-Parfum-i.322615418.14011658394" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/shopee-logo.png">
										</a>
									</div>
								</div>
								<div class="col-6 small-gap">
									<div class="e-commerce-box text-center">
										<a href="https://www.tokopedia.com/normid/summer-sol-eau-de-parfum" target="_blank">
											<img class="width-40 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/tokopedia-logo.png">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="margin-top-30px">
							<div class="panel active">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Aroma (Scent)</div>
								<div class="content">
									<div class="display-flex align-items-center">
										<div>
											<svg style="width: 55px;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 311.22 311.26"><defs><style>.cls-1{fill:#1d1d1d;}</style></defs><path class="cls-1" d="M155.63,311.26a157.15,157.15,0,0,1-32.33-3.43l1-4.52A151,151,0,0,0,296.31,100.86l4.3-1.67a155.59,155.59,0,0,1-145,212.07Z"/><path class="cls-1" d="M84.42,293.91a153.26,153.26,0,0,1-14.85-8.64,155.5,155.5,0,0,1-19.13-15l3.12-3.4a151.55,151.55,0,0,0,18.57,14.58,149.22,149.22,0,0,0,14.4,8.39Z"/><path class="cls-1" d="M50.44,270.25a155.45,155.45,0,0,1-27.06-32.82L27.3,235a151.25,151.25,0,0,0,26.26,31.84Z"/><path class="cls-1" d="M123.3,307.83a154.27,154.27,0,0,1-38.88-13.91l2.11-4.1a149.54,149.54,0,0,0,37.72,13.49Z"/><path class="cls-1" d="M6.25,199.08A154.82,154.82,0,0,1,1.09,174,156.7,156.7,0,0,1,0,155.67C0,69.83,69.82,0,155.63,0a154.66,154.66,0,0,1,145,99.19l-4.3,1.67A150.08,150.08,0,0,0,155.63,4.61c-83.27,0-151,67.77-151,151.06a152,152,0,0,0,1.06,17.74,150.14,150.14,0,0,0,5,24.38Z"/><path class="cls-1" d="M23.38,237.43a154.47,154.47,0,0,1-12.7-25.18c-1.51-3.83-3-8.14-4.43-13.17l4.44-1.29c1.42,4.89,2.82,9.07,4.28,12.78A150.64,150.64,0,0,0,27.3,235Z"/><path class="cls-1" d="M118.6,235.42A15.7,15.7,0,0,1,103,220.89l-2.09-28.09A11,11,0,0,0,96,184.46L72.76,168.6a15.7,15.7,0,0,1,0-25.94L96,126.8a11,11,0,0,0,4.82-8.34L103,90.37a15.69,15.69,0,0,1,22.47-13l25.37,12.23a11.07,11.07,0,0,0,9.63,0L185.8,77.4a15.69,15.69,0,0,1,22.47,13l2.09,28.09a11,11,0,0,0,4.81,8.34l23.28,15.86a15.69,15.69,0,0,1,0,25.94l-23.28,15.86a11,11,0,0,0-4.81,8.34l-2.09,28.09a15.69,15.69,0,0,1-22.47,13l-25.38-12.23a11,11,0,0,0-9.63,0l-25.37,12.23A15.71,15.71,0,0,1,118.6,235.42Zm0-155a11.07,11.07,0,0,0-5.53,1.51,11,11,0,0,0-5.51,8.77l-2.09,28.09a15.64,15.64,0,0,1-6.82,11.81L75.36,146.47a11.09,11.09,0,0,0,0,18.32l23.28,15.86a15.63,15.63,0,0,1,6.82,11.8l2.09,28.09a11.09,11.09,0,0,0,15.87,9.17l25.37-12.24a15.6,15.6,0,0,1,13.63,0l25.38,12.24a11.08,11.08,0,0,0,15.86-9.17l2.09-28.09a15.64,15.64,0,0,1,6.83-11.8l23.28-15.86a11.09,11.09,0,0,0,0-18.32l-23.28-15.86a15.65,15.65,0,0,1-6.83-11.8l-2.09-28.1a11.09,11.09,0,0,0-15.86-9.16L162.42,93.78a15.6,15.6,0,0,1-13.63,0L123.42,81.55A11.08,11.08,0,0,0,118.59,80.43Z"/><path class="cls-1" d="M155.61,167.59a12,12,0,1,1,11.95-12A12,12,0,0,1,155.61,167.59Zm0-19.3a7.34,7.34,0,1,0,7.34,7.34A7.34,7.34,0,0,0,155.61,148.29Z"/><rect class="cls-1" x="110.46" y="153.32" width="11.51" height="4.61"/><rect class="cls-1" x="189.25" y="153.32" width="11.51" height="4.61"/><rect class="cls-1" x="153.3" y="110.48" width="4.61" height="11.51"/><rect class="cls-1" x="153.3" y="189.27" width="4.61" height="11.51"/><rect class="cls-1" x="177.71" y="125.47" width="11.51" height="4.61" transform="translate(-36.61 167.15) rotate(-45)"/><rect class="cls-1" x="122" y="181.18" width="11.51" height="4.61" transform="translate(-92.32 144.08) rotate(-45)"/><rect class="cls-1" x="181.16" y="177.73" width="4.61" height="11.51" transform="translate(-76.01 183.5) rotate(-45.01)"/><rect class="cls-1" x="125.45" y="122.02" width="4.61" height="11.51" transform="translate(-52.93 127.76) rotate(-45)"/></svg>
										</div>
										<div style="margin-left: 15px;">
											<div class="font-semibold">Top Knot</div>
											<div>Bergamot, Mandarin, Melon</div>
										</div>
									</div>

									<div class="display-flex align-items-center margin-top-15px">
										<div>
											<svg style="width: 55px;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 311.22 311.26"><defs><style>.cls-1{fill:#1d1d1d;}</style></defs><path class="cls-1" d="M155.63,311.26a157.15,157.15,0,0,1-32.33-3.43l1-4.52A151,151,0,0,0,296.31,100.86l4.3-1.67a155.6,155.6,0,0,1-145,212.07Z"/><path class="cls-1" d="M84.42,293.91a149.77,149.77,0,0,1-34-23.66l3.12-3.4a145.4,145.4,0,0,0,33,23Z"/><path class="cls-1" d="M50.44,270.25a155.45,155.45,0,0,1-27.06-32.82L27.3,235a151.25,151.25,0,0,0,26.26,31.84Z"/><path class="cls-1" d="M123.3,307.83a154.27,154.27,0,0,1-38.88-13.91l2.11-4.1a149.54,149.54,0,0,0,37.72,13.49Z"/><path class="cls-1" d="M6.25,199.08A154.84,154.84,0,0,1,1.09,174,156.7,156.7,0,0,1,0,155.67C0,69.83,69.82,0,155.63,0a154.66,154.66,0,0,1,145,99.19l-4.3,1.67A150.08,150.08,0,0,0,155.63,4.61c-83.27,0-151,67.77-151,151.06a152,152,0,0,0,1.06,17.74,148.89,148.89,0,0,0,5,24.38Z"/><path class="cls-1" d="M23.38,237.43a154.47,154.47,0,0,1-12.7-25.18c-1.51-3.83-3-8.14-4.43-13.17l4.44-1.29c1.42,4.89,2.82,9.07,4.28,12.78A150.64,150.64,0,0,0,27.3,235Z"/><rect class="cls-1" x="153.37" y="173.55" width="4.61" height="63.06"/><path class="cls-1" d="M158.86,239.66l-3.8-.8c-30.5-6.43-45.54-60-46.17-62.29l-1.07-3.92,3.92,1.09c29.55,8.24,45.35,60,46,62.2Zm-44.15-59.92c4,12.06,16.65,45.38,37.24,53.39C147.86,221.53,134.83,189,114.71,179.74Z"/><path class="cls-1" d="M152.35,239.66l1.12-3.72c.66-2.2,16.46-54,46-62.2l3.93-1.09-1.08,3.92c-.62,2.28-15.67,55.86-46.16,62.29Zm44.16-59.92c-20.14,9.25-33.16,41.79-37.24,53.39C179.85,225.13,192.52,191.8,196.51,179.74Z"/><path class="cls-1" d="M154.94,161.34c-11.59,0-20.68-19.54-20.68-44.49s9.09-44.5,20.68-44.5,20.68,19.55,20.68,44.5S166.54,161.34,154.94,161.34Zm0-84.38c-7.6,0-16.06,16.38-16.06,39.89s8.46,39.88,16.06,39.88S171,140.35,171,116.85,162.54,77,154.94,77Z"/><path class="cls-1" d="M189.88,131.89l-4.13-2.06c4.9-9.81,7.83-19.82,8.27-28.19.4-7.59-1.36-12.94-4.83-14.67-6.73-3.37-21.68,7.47-32.19,28.51l-4.12-2.06c11.14-22.32,28-35.77,38.37-30.58,5.26,2.63,7.88,9.39,7.38,19C198.16,110.87,195.05,121.53,189.88,131.89Z"/><path class="cls-1" d="M152.16,161.35c-4.37,0-9.42-2.28-14.69-6.69-6.9-5.78-13.55-14.67-18.72-25h0c-11.14-22.33-11.73-43.87-1.36-49s27.23,8.26,38.37,30.58,11.74,43.87,1.36,49.05A11,11,0,0,1,152.16,161.35Zm-29.28-33.78c4.89,9.81,11.13,18.17,17.55,23.55,5.83,4.88,11.15,6.7,14.63,5,6.94-3.46,7.22-21.51-3.43-42.86s-25.25-32-32.18-28.51-7.22,21.51,3.43,42.86Z"/></svg>
										</div>
										<div style="margin-left: 15px;">
											<div class="font-semibold">Middle Knot</div>
											<div>Lavender, Cedarwood, Seawater</div>
										</div>
									</div>

									<div class="display-flex align-items-center margin-top-15px">
										<div>
											<svg style="width: 55px;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 311.22 311.26"><defs><style>.cls-1{fill:#1d1d1d;}</style></defs><path class="cls-1" d="M155.63,311.26a157.15,157.15,0,0,1-32.33-3.43,2.31,2.31,0,0,1,1-4.52A151,151,0,0,0,296.31,100.86a2.31,2.31,0,0,1,4.3-1.67,155.59,155.59,0,0,1-145,212.07Z"/><path class="cls-1" d="M85.47,294.17a2.18,2.18,0,0,1-1-.26,153.26,153.26,0,0,1-14.85-8.64,155.5,155.5,0,0,1-19.13-15,2.31,2.31,0,0,1,3.12-3.4,151.55,151.55,0,0,0,18.57,14.58,149.22,149.22,0,0,0,14.4,8.39,2.3,2.3,0,0,1-1.06,4.35Z"/><path class="cls-1" d="M52,270.86a2.28,2.28,0,0,1-1.56-.61,155.45,155.45,0,0,1-27.06-32.82A2.3,2.3,0,1,1,27.3,235a151.25,151.25,0,0,0,26.26,31.84,2.3,2.3,0,0,1,.13,3.26A2.26,2.26,0,0,1,52,270.86Z"/><path class="cls-1" d="M123.78,307.88a2.61,2.61,0,0,1-.48-.05,154.27,154.27,0,0,1-38.88-13.91,2.31,2.31,0,1,1,2.11-4.1,149.54,149.54,0,0,0,37.72,13.49,2.31,2.31,0,0,1-.47,4.57Z"/><path class="cls-1" d="M8.47,200.74a2.32,2.32,0,0,1-2.22-1.66A154.82,154.82,0,0,1,1.09,174,156.7,156.7,0,0,1,0,155.67C0,69.83,69.82,0,155.63,0a154.66,154.66,0,0,1,145,99.19,2.31,2.31,0,0,1-4.3,1.67A150.08,150.08,0,0,0,155.63,4.61c-83.27,0-151,67.77-151,151.06a152,152,0,0,0,1.06,17.74,150.14,150.14,0,0,0,5,24.38,2.32,2.32,0,0,1-1.57,2.86A2.48,2.48,0,0,1,8.47,200.74Z"/><path class="cls-1" d="M25.34,238.53a2.29,2.29,0,0,1-2-1.1,154.47,154.47,0,0,1-12.7-25.18c-1.51-3.83-3-8.14-4.43-13.17a2.31,2.31,0,0,1,4.44-1.29c1.42,4.89,2.82,9.07,4.28,12.78A150.64,150.64,0,0,0,27.3,235a2.3,2.3,0,0,1-.75,3.17A2.26,2.26,0,0,1,25.34,238.53Z"/><path class="cls-1" d="M155.61,241.15a19.66,19.66,0,0,1-9.84-2.62l-57-32.93a19.74,19.74,0,0,1-9.83-17V122.7a19.72,19.72,0,0,1,9.83-17l57-32.93a19.73,19.73,0,0,1,19.68,0l57,32.93a19.73,19.73,0,0,1,9.84,17v65.86a19.75,19.75,0,0,1-9.84,17l-57,32.93A19.71,19.71,0,0,1,155.61,241.15Zm0-166.44a15.05,15.05,0,0,0-7.53,2L91,109.66a15.09,15.09,0,0,0-7.53,13v65.86a15.09,15.09,0,0,0,7.53,13l57,32.93a15.09,15.09,0,0,0,15.06,0l57-32.93a15.11,15.11,0,0,0,7.53-13V122.7a15.11,15.11,0,0,0-7.53-13l-57-32.93A15.08,15.08,0,0,0,155.61,74.71Z"/><path class="cls-1" d="M155.61,200.1a8,8,0,0,1-4-1.06L120,180.78a8,8,0,0,1-4-6.89V137.37a8,8,0,0,1,4-6.89l31.62-18.26a8,8,0,0,1,8,0l31.63,18.26a8,8,0,0,1,4,6.89v36.52a8,8,0,0,1-4,6.89L159.58,199A8,8,0,0,1,155.61,200.1Zm0-84.33a3.3,3.3,0,0,0-1.67.45l-31.63,18.26a3.34,3.34,0,0,0-1.67,2.89v36.52a3.34,3.34,0,0,0,1.67,2.89L153.94,195a3.37,3.37,0,0,0,3.34,0l31.62-18.26a3.32,3.32,0,0,0,1.67-2.89V137.37a3.32,3.32,0,0,0-1.67-2.89l-31.62-18.26A3.32,3.32,0,0,0,155.61,115.77Z"/><path class="cls-1" d="M155.61,115.53a2.31,2.31,0,0,1-2.31-2.3V87.51a2.31,2.31,0,0,1,4.62,0v25.72A2.3,2.3,0,0,1,155.61,115.53Z"/><path class="cls-1" d="M201.41,130.5a2.31,2.31,0,0,1-1.26-4.25l24-15.6a2.31,2.31,0,1,1,2.51,3.87l-24,15.6A2.26,2.26,0,0,1,201.41,130.5Z"/><path class="cls-1" d="M214.88,193.68a2.37,2.37,0,0,1-1.24-.36l-23.18-14.65a2.31,2.31,0,1,1,2.47-3.91l23.18,14.66a2.31,2.31,0,0,1-1.23,4.26Z"/></svg>
										</div>
										<div style="margin-left: 15px;">
											<div class="font-semibold">Bottom Knot</div>
											<div>Amber, Moss</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Key Ingredients</div>
								<div class="content">
									<ul>
										<li>Alcohol Denat</li>
										<li>Fragrance</li>
										<li>Aqua</li>
									</ul>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Benefit</div>
								<div class="content">
									<ul>
										<li>Memberikan kesegaran pada tubuh</li>
										<li>Aroma tahan lama 4 – 6 jam</li>
										<li>Melindungi dari bau badan</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('fragrance_footer_banner'); ?>

	<section class="">
		<div class="container normal">
			<div class="yotpo yotpo-main-widget" data-product-id="35" data-price="229000" data-currency="IDR" data-name="Hydra Cleansing Face Wash" data-url="https://www.norm.id/face-wash/" data-image-url="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg"></div>
		</div>
	</section>

	<section>
		<div class="container normal">
			<div class="title text-center">You might also like</div>

			<div class="row margin-top-30px small-gap">
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>white-night/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Terinspirasi dari mewahnya aroma wangi bergamot, Lavender, dan Cedarwood yang memberikan sensasi kesegaran dan Summer Sol dapat menemani aktivitas pada siang hari.</div>

							<div class="cart-button cart-36" onclick="addToCart(36, 0, 1, 229000);">
								<div>
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div>
						</div>
						<div class="name">White Night Eau de Parfum</div>
						<div class="star-rating">
							<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="36" data-product-models="Bundle" data-name="White Night Eau de parfum" data-url="https://www.norm.id/white-night" data-image-url="<?= base_url(); ?>assets/images/main/product/white-night-1.jpg" data-description="Eksfoliasi untuk mencerahkan wajah. Formulasi scrub mengandung cellulose microbeads, biji aprikot, serta sage dan maca." data-bread-crumbs="Bundle"></div>
						</div>
						<div class="price">IDR 229.000</div>

					</div>
				</div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>moisturizer/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit.</div>

							<div class="cart-button cart-20" onclick="addToCart(20, 0, 1, 99000);">
								<div>
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div>
						</div>
						<div class="name">Daily Defense Moisturizer</div>
						<div class="star-rating">
							<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="20" data-product-models="Bundle" data-name="Daily Defense Moisturizer" data-url="https://www.norm.id/moisturizer/" data-image-url="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg" data-description="Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit. Daily Defense Moisturizer memberikan energi pada kulit tanpa membuatnya terasa lengket atau berminyak." data-bread-crumbs="Bundle"></div>
						</div>
						<div class="price">IDR 99.000</div>

					</div>
				</div>
				<div class="w-100 d-block d-sm-none"></div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>shampoo/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Perpaduan bahan yang sudah teruji dan dikenal baik untuk rambut.</div>

							<div class="cart-button cart-21" onclick="addToCart(21, 0, 1, 109000);">
								<div>
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div>
						</div>
						<div class="name">Pure Performance Shampoo</div>
						<div class="star-rating">
							<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="21" data-product-models="Bundle" data-name="Pure Performance Shampoo" data-url="https://www.norm.id/shampoo/" data-image-url="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg" data-description="Hair-loss specialist kami memadukan bahan yang sudah teruji dan dikenal baik untuk rambut, seperti Biotin, Kafein, dan Panax Ginseng ke dalam formula shampoo sehingga menjadikan rambut lebih tebal." data-bread-crumbs="Bundle"></div>
						</div>
						<div class="price">IDR 109.000</div>

					</div>
				</div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>body-wash/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg">
							</a>

							<!-- <div class="coming-soon">Coming Soon</div> -->

							<div class="description small">Formula efektif membersihkan, menghidrasi, dan menyegarkan kulit.</div>

							<div class="cart-button cart-22" onclick="addToCart(22, 0, 1, 99000);">
								<div>
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div>
						</div>
						<div class="name">Fortifying Body Wash</div>
						<div class="star-rating">
							<div class="yotpo bottomLine" data-appkey="ZDXRDls8ly8DXaihaUvajdNv4AFIlQSvKN1Ee3zP" data-domain="https://www.norm.id/" data-product-id="22" data-product-models="Body Wash" data-name="Fortifying Body Wash" data-url="https://www.norm.id/body-wash/" data-image-url="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg" data-description="Diperkaya dengan sage leaf, green tea, dan kafein, Fortifying Body Wash efektif membersihkan kotoran dan keringat pada tubuh. Formulanya efektif membersihkan, menghidrasi, dan menyegarkan kulit." data-bread-crumbs="Hair & Body"></div>
						</div>
						<div class="price">IDR 99.000</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"><div></div></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initProductCarousel();
		initProductPanel();
	});

	function initProductCarousel() {
		$('.product-image-carousel').owlCarousel({
			dots: true,
			items: 1,
			lazyLoad: true,
		    loop: true,
		    margin: 10,
		    nav: false,
		    responsiveClass: true,
		});
	}

	function initProductPanel() {
		$('.panel').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else {
				$('.panel').removeClass('active');
				$(this).addClass('active');
			}
		});

		$('.price-box').click(function() {
			const productId = $(this).attr('data-product-id');

			$('.price-product-'+ productId).removeClass('active');
			$(this).addClass('active');
		});
	}

	function prescriptionAddCart(productId) {
		const quantity = $('.price-product-'+ productId +'.active').attr('data-quantity');
		const price = $('.price-product-'+ productId +'.active').attr('data-price');

		let discount = 0;
		let total = price * quantity;

		if (quantity >= 3) {
			discount = total * 0.05;
		}

		$('.cart-button-'+ productId).html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	product_id: productId,
            	category_id: 5,
            	quantity: quantity,
            	discount: discount,
            	price: price,
            	total: total,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.cart-'+ productId).html(`Add To Cart`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	$('.cart-detail').empty();

                    $('.cart-detail').append(data.cart_list);
                    $('.cart-total').removeClass('d-none');

                    $('.cart-total-subtotal').html(data.subtotal_display);

                    $('.quantity .minus, .quantity .plus, .cart-list .remove').unbind('click');
                    cartInit();

                    $('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart-fill-<?= $navbar; ?>.png');

                    $('html body').css('overflow', 'hidden');
                    $('.cart-container, .screen-blocker').addClass('active');

                    $('.cart-button-'+ productId).html(`Add to Cart`);
                }
                else {
                    alert(data.message);
                    $('.cart-'+ productId).html(`Add To Cart`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_add_to_cart/'
        });
	}
</script>
</html>