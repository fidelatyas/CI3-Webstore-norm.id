<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?= $setting->company_name; ?> | Print Prescription</title>

    <link href="<?= base_url(); ?>assets/fonts/stylesheet.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.3/dist/JsBarcode.all.min.js"></script>

    <style type="text/css">
        html,
        body {
            font-size: 10px;
            font-family: Arial;
            line-height: 1.25;
            margin: 0;
            padding: 9;
        }

        .barcode {
            padding: 7.5px;
            text-align: center;
        }

        .content {
            border-top: 1px solid #1d1d1d;
            padding: 7.5px;
        }

        .content .customer,
        .content .shipper {
            flex-basis: 50%;
        }

        .display-flex {
            display: flex;
        }

        .font-9 {
            font-size: 9px;
        }

        .font-18 {
            font-size: 18px;
        }

        .font-semibold {
            font-family: Arial;
            font-weight: 600;
        }

        .fragile {
            align-items: center;
            border-top: 1px solid #1d1d1d;
            display: flex;
            justify-content: center;
        }

        .fragile .big {
            border-right: 1px solid #1d1d1d;
            flex-basis: 30.75%;
            font-family: Arial;
            font-weight: 600;
            font-size: 18px;
            justify-content: center;
            padding: 7.5px;
            text-align: center;
        }

        .fragile .container {
            flex-basis: 66.6%;
            font-size: 8px;
            padding: 7.5px;
            text-align: center;
        }

        .logo img.logo-main {
            padding: 7.5px;
            height: 12px;
        }

        .margin-top-15px {
            margin-top: 15px;
        }

        .margin-top-7-5px {
            margin-top: 7.5px;
        }

        .notes {
            font-size: 8px;
            font-style: italic;
        }

    	.ship-container {
            background-color: #fff;
            border: 1px solid #1d1d1d;
            height: calc(15cm - 15px);
            margin: 7.5px;
    		width: calc(10cm - 15px);
    	}

        .shipper-detail {
            border-top: 1px dashed #1d1d1d;
            padding: 7.5px 7.5px 0;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .type {
            border-top: 1px solid #1d1d1d;
            border-bottom: 1px solid #1d1d1d;
            display: flex;
            width: 100%;
        }

        .type .branch {
            flex-basis: 33.3%;
            padding: 7.5px;
        }

        .type .courier {
            background-color: #1d1d1d;
            color: #fff;
            flex-basis: 33.3%;
            padding: 7.5px;
        }

        .type .tlc {
            border-right: 1px solid #1d1d1d;
            flex-basis: 33.3%;
            padding: 7.5px;
        }

        .width-full {
            width: 100%;
        }
    </style>
</head>

<body onload="window.print(); window.close();">
    <div class="ship-container">
        <div class="logo display-flex">
            <div class="width-full">
                <img class="logo-main" src="<?= base_url(); ?>assets/images/main/logo.png">
            </div>
            <div class="width-full text-right">
                <? if ($order->courier == 'JNT'): ?>
                    <img class="logo-main" src="<?= base_url(); ?>assets/images/main/logo-jnt.png">
                <? else: ?>
                    <img class="logo-main aj" src="<?= base_url(); ?>assets/images/main/logo-anteraja.png">
                <? endif; ?>
            </div>
        </div>

        <div class="content">
            <div class="display-flex">
                <div class="customer">
                    <div class="font-semibold">Penerima</div>
                    <div class=""><?= $order->shipping_name; ?></div>
                    <div class=""><?= $order->shipping_email; ?></div>
                    <div class=""><?= $order->shipping_phone; ?></div>
                    <div class="">
                        <div><?= $order->shipping_address_line_1; ?></div>
                        <div><?= $order->shipping_address_line_2; ?></div>
                        <div><?= $order->shipping_address_line_3; ?></div>
                    </div>
                    <div class=""><?= $order->shipping_district; ?>, <?= $order->shipping_city; ?></div>
                    <div class=""><?= $order->shipping_province; ?></div>
                    <div class=""><?= $order->shipping_postcode; ?></div>
                    <div class="font-semibold">Courier: <?= $order->courier; ?></div>
                </div>
                <div class="customer text-right">
                    <div class="font-semibold">Order Number</div>
                    <div class=""><?= $order->number; ?></div>

                    <div class="font-semibold margin-top-7-5px">Pengirim</div>
                    <div class="">Norm | Apotek Now</div>
                    <div class="">Jakarta Pusat 10220</div>

                    <div class="margin-top-7-5px font-semibold">Biaya</div>
                    <div class="">Asuransi: <?= $order->insurance_display; ?></div>
                    <div class="">Shipping: <?= $order->shipping_display; ?></div>
                </div>
            </div>
        </div>

        <div class="fragile">
            <div class="big">
                <div>FRAGILE</div>
                <div class="font-9">HANDLE WITH CARE</div>
            </div>
            <div class="container">Produk ini diambil dari gudang kami dalam keadaan rapi dan aman. Mohon untuk memeriksa kelengkapan dan kesesuaian barang pada saat sampai.</div>
        </div>

        <div class="type">
            <div class="courier">
                <div class="">Type</div>
                <div class="font-18"><?= $order->shipping_courier ?></div>
            </div>
            <div class="tlc">
                <div class="">TLC</div>
                <div class="font-18"><?= $order->shipping_tlc ?></div>
            </div>
            <div class="branch">
                <div class="">Branch Code</div>
                <div class="font-18"><?= $order->shipping_district_code ?></div>
            </div>
        </div>

        <div class="barcode">
            <div>
                <div class="">Order Number</div>
                <svg id="order-number"></svg>
            </div>
            <? if ($order->shipping_courier_tracking_id != ''): ?>
                <div>
                    <div>Airway Bill</div>
                    <svg id="awb"></svg>
                </div>
            <? endif; ?>
        </div>

        <div class="shipper-detail">
            <div class="display-flex">
                <div style="flex-basis: 50%;">
                    <div class="font-semibold">Detail Pengiriman</div>

                    <div class="margin-top-7-5px font-semibold"><?= $order->number; ?></div>

                    <div class="margin-top-7-5px font-semibold">Penerima</div>
                    <div class=""><?= $order->shipping_name; ?></div>
                    <div class=""><?= $order->shipping_email; ?></div>
                    <div class=""><?= $order->shipping_phone; ?></div>
                </div>
                <div style="flex-basis: 50%;">
                    <div class="font-semibold">Product</div>
                    <div class=""><?= $order->product_list; ?></div>

                    <div class="margin-top-15px notes">
                        <div>* Notes</div>
                        <div>Simpan bagian ini sebagai bukti bahwa produk ini sudah di siapkan dan diserahkan ke kurir.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
	JsBarcode("#order-number", "<?= $order->number; ?>", {
		format: "CODE39",
		lineColor: "#1d1d1d",
		width: 1,
		height: 15,
		displayValue: true,
		fontSize: 10,
	});

    <? if ($order->shipping_courier_tracking_id != ''): ?>
        JsBarcode("#awb", "<?= $order->shipping_courier_tracking_id; ?>", {
            format: "CODE39",
            lineColor: "#1d1d1d",
            width: 1,
            height: 15,
            displayValue: true,
            fontSize: 10,
        });
    <? endif; ?>
</script>

</html>
