<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Thank You Purchase</title>

	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<style type="text/css">
		a, a:hover, a:active {
			color: white;
			text-decoration: none;
		}

		body {
			background-color: #fff;
			color: #25292b;
			font-family: Work Sans;
			line-height: 1.5;
			margin: auto;
		}

		button {
			background-color: #fff;
			border: 1px solid #25292b;
			border-radius: 5px;
			cursor: pointer;
			font-size: 12px;
			font-weight: 500;
			letter-spacing: 1px;
			margin-bottom: 7.5px;
			min-width: 240px;
			padding: 7.5px 30px;
			text-transform: uppercase;
			transition: .3s all;
		}

		button:hover {
			background-color: #25292b;
			color: #fff;
		}

		html {
			background-color: #fafafa;
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
			font-weight: 500;
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

		.old {
			color: grey;
			text-decoration: line-through;
		}

		.separator {
			background-color: #7e7f72;
			color: #fff;
			font-weight: 600;
			text-align: center;
			padding: 15px;
		}

		.text-center {
			text-align: center;
		}

		.text-right {
			text-align: right;
		}

		.title {
			font-size: 20px;
			font-weight: 500;
		}

		.total {
			border-top: 1px solid #25292b;
		}

		.width-100 {
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="banner">
			<img class="width-100" src="https://www.norm.id/assets/images/email/thankyou-purchase/banner.jpg">
		</div>

		<div class="text-center content">
			<div>
				<p>Hi <?= $order->patient_name; ?>, Kami sedang proses pesanan kamu</p>
				<p>Jika ada pertanyaan atau hal lain yang kami bisa bantu, jangan sungkan untuk hubungi care specialist kami di 0812 1077 9710.</p>
			</div>

			<div class="margin-top-15px">
				<div class="title">Order Detail</div>
			</div>

			<div class="margin-top-15px">
				<table>
					<? foreach($arr_order_item as $order_item): ?>
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
									<div class="font-semibold">
										<? if ($order_item->product_id == '1'): ?>
											Hair Growth Capsule
										<? elseif ($order_item->product_id == '3'): ?>
											Hair Tonic
										<? elseif ($order_item->product_id == '4'): ?>
											Anti DHT Shampoo
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
										<span class="old"><?= $order_item->total_item_display ?></span>
										<span class="new"><?= $order_item->total_display ?></span>
									<? endif; ?>
								</div>
							</td>
						</tr>
					<? endforeach; ?>

					<tr class="total">
						<td class="total">Subtotal</td>
						<td class="total text-right"><?= $order->subtotal_display; ?></td>
					</tr>

					<tr class="discount">
						<td>Discount</td>
						<td class="text-right"><?= $order->discount_display; ?></td>
					</tr>

					<tr class="shipping">
						<td>Shipping</td>
						<td class="text-right"><?= $order->shipping_display; ?></td>
					</tr>

					<tr class="shipping">
						<td class="total">Grand Total</td>
						<td class="text-right total"><?= $order->grand_total_display; ?></td>
					</tr>
				</table>
			</div>
		</div>

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