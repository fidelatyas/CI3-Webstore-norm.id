<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Abandon 1</title>

	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<style type="text/css">
		a, a:hover, a:active {
			color: white;
			text-decoration: none;
		}

		body {
			background-color: #fff;
			color: #25292b;
			font-size: 12px;
			font-family: Work Sans;
			line-height: 1.5;
			margin: auto;
		}

		button {
			background-color: #transparent;
			border: 1px solid #25292b;
			border-radius: 5px;
			cursor: pointer;
			font-size: 12px;
			font-weight: 500;
			letter-spacing: .9px;
			margin-bottom: 7.5px;
			min-width: 240px;
			padding: 7.5px 30px;
			transition: .3s all;
		}

		button:hover {
			background-color: #25292b;
			color: #fff;
		}

		html {
			background-color: #fafafa;
		}

		img {
			display: block;
		}

		strong {
			font-weight: 600;
		}

		table {
			border:  none;
			text-align: left;
			width: 100%;
		}

		table tr td.image {
			width: 30%;
		}

		table tr td.image img {
			width: 100%;
		}

		.bg-white {
			background-color: #fff !important;
		}

		.container {
			background: #fff;
            margin: auto;
            max-width: 100%;
            text-align: center;
            width: 580px;
		}

		.content {
			padding: 15px;
		}

		.font-semibold {
			font-weight: 600;
		}

		.footer {
			background-color: #25292b;
			color: #fff;
			font-size: 12px;
			padding: 30px;
			text-align: center;
		}

		.item-content {
			padding-left: 15px;
		}

		.margin-top-15px {
			margin-top: 15px;
		}

		.margin-top-30px {
			margin-top: 30px;
		}

		.separator {
			background-color: #7e7f72;
			color: #fff;
			font-weight: 600;
			text-align: center;
			padding: 15px;
		}

		.separator-black {
			background-color: #7e7f72;
			color: #fff;
			font-size: 16px;
			font-weight: 600;
			padding: 15px;
		}

		.table-container {
			margin: auto;
			width: 400px;
		}

		.text-center {
			text-align: center;
		}

		.title {
			font-size: 20px;
			font-weight: 500;
		}

		.width-100 {
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="banner">
			<img class="width-100" src="https://www.norm.id/assets/images/email/abandon/abandon_payment.jpg">
		</div>

		<div class="separator-black">
			<div>Hi <?= $order->patient_name; ?></div>
			<div>Produk favoritmu menunggu pembayaran nih.</div>
		</div>

		<div class="margin-top-15px">
			<p>Selangkah lagi produk favorit kamu sampai di tanganmu.</p>
			<p>Selesaikan pesanan kamu sekarang dan tunggu kami memproses pesanan sampai ke tempatmu.</p>

			<p><b>Pesanan Kamu</b></p>
		</div>

		<div class="margin-top-15px table-container">
			<table>
				<? foreach($order->arr_order_item as $order_item): ?>
					<tr>
						<td class="image">
							<? if ($order_item->product_id == '1'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/finasteride-norm.jpg">
							<? elseif ($order_item->product_id == '3'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/hair-tonic-norm.jpg">
							<? elseif ($order_item->product_id == '4'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/anti-dht-shampoo-norm.jpg">
							<? elseif ($order_item->product_id == '11'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/complete-hair-loss-kit-norm.jpg">
							<? elseif ($order_item->product_id == '13'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/starter-hair-loss-kit-norm.jpg">
							<? elseif ($order_item->product_id == '16'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/stamina-cream-norm.jpg">
							<? elseif ($order_item->product_id == '18'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/face-wash-1.jpg">
							<? elseif ($order_item->product_id == '19'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/face-scrub-1.jpg">
							<? elseif ($order_item->product_id == '19'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/face-scrub-1.jpg">
							<? elseif ($order_item->product_id == '20'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/moisturizer-1.jpg">
							<? elseif ($order_item->product_id == '21'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/shampoo-1.jpg">
							<? elseif ($order_item->product_id == '22'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/body-wash-1.jpg">
							<? elseif ($order_item->product_id == '23'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/complete-maintenance-set-square.jpg">
							<? elseif ($order_item->product_id == '24'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/gentleman-maintenance-set-square.jpg">
							<? elseif ($order_item->product_id == '25'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/gentleman-shower-set-square.jpg">
							<? elseif ($order_item->product_id == '26'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/complete-set-bag-1.jpg">
							<? elseif ($order_item->product_id == '27'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/maintenance-set-bag-1.jpg">
							<? elseif ($order_item->product_id == '28'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/shower-set-bag-1.jpg">
							<? elseif ($order_item->product_id == '29'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/starter-set-1.jpg">
							<? elseif ($order_item->product_id == '30'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/daily-set-1.jpg">
							<? elseif ($order_item->product_id == '31'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/aging-set-1.jpg">
							<? elseif ($order_item->product_id == '32'): ?>
								<img loading="lazy" src="https://www.norm.id/assets/images/main/product/toiletries-1.jpg">
							<? endif; ?>
						</td>
						<td>
							<div class="item-content">
								<? if ($order_item->product_id == '1'): ?>
									<div class="font-semibold">Hair Growth Capsule</div>
									<div>Kapsul yang diminum sehari sekali untuk menghambat hormon DHT yang menjadi masalah kerontokan rambut.</div>
								<? elseif ($order_item->product_id == '3'): ?>
									<div class="font-semibold">Hair Tonic</div>
									<div>Tonic untuk merangsang pertumbuhan dan menghentikan kerontokan rambut.</div>
								<? elseif ($order_item->product_id == '4'): ?>
									<div class="font-semibold">Anti DHT Shampoo</div>
									<div>Sampo yang dapat mengurangi kadar DHT pada kulit kepala penyebab masalah kerontokan rambut.</div>
								<? elseif ($order_item->product_id == '11'): ?>
									<div class="font-semibold">Complete Hair Loss Kit</div>
									<div>Paket perawatan rambut rekomendasi dokter yang sangat efektif untuk mengurangi kerontokan dan mencegah kebotakan.</div>
								<? elseif ($order_item->product_id == '13'): ?>
									<div class="font-semibold">Starter Hair Loss Kit</div>
									<div>Kombinasi perawatan rambut topikal untuk mengurangi kerontokan dan mencegah kebotakan.</div>
								<? elseif ($order_item->product_id == '16'): ?>
									<div class="font-semibold">Stamina Cream</div>
									<div>Krim anestesi topikal yang dapat digunakan untuk mengatasi ejakulasi dini.</div>
								<? elseif ($order_item->product_id == '18'): ?>
									<div class="font-semibold">Hydra Cleansing<br>Face Wash</div>
									<div></div>
								<? elseif ($order_item->product_id == '19'): ?>
									<div class="font-semibold">Deep Exfoliating<br>Face Scrub</div>
									<div></div>
								<? elseif ($order_item->product_id == '20'): ?>
									<div class="font-semibold">Daily Defense<br>Moisurizer</div>
									<div></div>
								<? elseif ($order_item->product_id == '21'): ?>
									<div class="font-semibold">Pure Performance<br>Shampoo</div>
									<div></div>
								<? elseif ($order_item->product_id == '22'): ?>
									<div class="font-semibold">Fortifying<br>Body Wash</div>
									<div></div>
								<? elseif ($order_item->product_id == '23'): ?>
									<div class="font-semibold">Ultimate<br>Gentleman Set</div>
									<div></div>
								<? elseif ($order_item->product_id == '24'): ?>
									<div class="font-semibold">Complete<br>Maintenance Set</div>
									<div></div>
								<? elseif ($order_item->product_id == '25'): ?>
									<div class="font-semibold">Complete<br>Shower Set</div>
									<div></div>
								<? elseif ($order_item->product_id == '26'): ?>
									<div class="font-semibold">Ultimate<br>Gentleman Set + Bag</div>
									<div></div>
								<? elseif ($order_item->product_id == '27'): ?>
									<div class="font-semibold">Complete<br>Maintenance Set + Bag</div>
									<div></div>
								<? elseif ($order_item->product_id == '28'): ?>
									<div class="font-semibold">Complete<br>Shower Set + Bag</div>
									<div></div>
								<? elseif ($order_item->product_id == '29'): ?>
									<div class="font-semibold">Starter<br>Maintenance Set</div>
									<div></div>
								<? elseif ($order_item->product_id == '30'): ?>
									<div class="font-semibold">Daily<br>Maintenance Set</div>
									<div></div>
								<? elseif ($order_item->product_id == '31'): ?>
									<div class="font-semibold">Aging<br>Maintenance Set</div>
									<div></div>
								<? elseif ($order_item->product_id == '32'): ?>
									<div class="font-semibold">Water Res.<br>Utility Bag</div>
									<div></div>
								<? endif; ?>
							</div>
						</td>
					</tr>
				<? endforeach; ?>
			</table>
		</div>

		<div class="margin-top-15px" style="margin-bottom: 30px;">
			<a href="<?= $order->payment_url; ?>">
				<button>Complete Checkout</button>
			</a>
		</div>
	</div>

	<div class="container bg-white">
		<div class="separator">Check Us Out</div>
		<div class="content text-center">
			<p>Follow us on Social Media and tag us using <strong>#UpgradeYourself</strong> to share your journey</p>

			<div class="margin-top-15px">
				<a href="https://www.instagram.com/norm.id/" target="_blank">
					<img class="width-100" src="https://www.norm.id/assets/images/email/welcome/ig-feed.jpg">
				</a>
			</div>
		</div>

		<div class="footer">
			<a href="mailto:help@norm.id">help@norm.id</a> | <a href="https://www.norm.id/" target="_blank">norm.id</a>
		</div>
	</div>
</body>
</html>