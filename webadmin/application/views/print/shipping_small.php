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
    	body {
            font-family: Avenir Medium;
            font-size: 9px !important;
    		margin: 0;
    		padding-bottom: 0;
    	}

        .black-header {
            background-color: black;
            color: white;
            margin-top: 3.25px;
            padding: 1.625px 3.25px;
        }

        .logo {
            border-bottom: 1px solid #000;
        }

        .logo img {
            margin-bottom: 1.625px;
            width: 30px;
        }

    	.ship-container {
            background-color: white;
    		height: 5.9cm;
    		width: 9cm;
    	}

        .ship-container .content {
            padding: 7.5px;
        }

        .shipment {
            margin-left: 1.625px;
            margin-top: 1.625px;
        }
    </style>
</head>

<body onload="window.print(); window.close();">
    <div class="ship-container">
        <div class="content">
            <div class="logo" style="padding-left: 3.25px;">
                <img src="<?= base_url(); ?>assets/images/main/logo.png">
            </div>
            <div class="order-detail" style="margin-left: 3.25px;padding-bottom: 1.625px;">
                <div style="margin-top: 3.25px;">
                    <div style="width: 100%;">
                        <div style="display: flex;">
                            <div style="width: 15%; font-family: Avenir Black;">Pemesan</div>
                            <? if ($order->patient_name == ''): ?>
                                <div style="width: 80%;">: <?= strtoupper($order->shipping_name); ?></div>
                            <? else: ?>
                                <div style="width: 80%;">: <?= strtoupper($order->patient_name); ?></div>
                            <? endif; ?>
                        </div>
                    </div>
                    <div style="display: flex;">
                        <div style="display: flex; width: 40%;">
                            <div style="width: 30%; font-family: Avenir Black;">Tgl</div>
                            <div style="width: 50%;">: <?= strtoupper($order->date_display); ?></div>
                        </div>
                        <div style="display: flex; width: 60%;">
                            <div style="width: 30%; font-family: Avenir Black;">No. Order</div>
                            <div style="width: 50%">: <?= strtoupper($order->number); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="black-header">Data Penerima</div>
            <div class="shipment">
                <div style="display: flex;">
                    <div style="width: 50%;">
                        <div style="width: 95%; margin-right: 5px; padding: 0 1.625px; border-bottom: 1px solid #000;">
                            <div style="font-size: 8px; font-family: Avenir Black;">Nama</div>
                            <div><?= $order->shipping_name; ?></div>
                        </div>
                        <div style="width: 95%; margin-right: 5px; margin-top: 1.25px; padding: 0 1.625px; border-bottom: 1px solid #000;">
                            <div style="font-size: 8px; font-family: Avenir Black;">Berat</div>
                            <div><?= $order->weight; ?> gram</div>
                        </div>
                    </div>
                    <div style="width: 50%;">
                        <div style="width: 95%; margin-left: 5px; padding: 0 1.625px; border-bottom: 1px solid #000;">
                            <div style="font-size: 8px; font-family: Avenir Black;">Telepon</div>
                            <div><?= $order->shipping_phone; ?></div>
                        </div>
                        <div style="width: 95%; margin-left: 5px; margin-top: 1.25px; padding: 0 1.625px; border-bottom: 1px solid #000;">
                            <div style="font-size: 8px; font-family: Avenir Black; display: flex;">
                                <div style="width: 50%;">TLC</div>
                                <div style="width: 50%;">Courier</div>
                            </div>
                            <div style="display: flex;">
                                <span style="width: 50%;"><?= $order->shipping_tlc; ?></span>
                                <span style="width: 50%;"><?= $order->shipping_courier; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 100%; margin-top: 3.5px; padding: 0px; border-bottom: 1px solid #000;">
                    <div style="font-size: 8px; font-family: Avenir Black;">Alamat</div>
                    <div style="font-size: 8px !important;"><?= $order->shipping_address_line_1; ?>, <?= $order->shipping_address_line_2; ?> <?= $order->shipping_district; ?>, <?= $order->shipping_city; ?>, <?= $order->shipping_province; ?>, <?= $order->shipping_postcode; ?></div>
                </div>
            </div>

            <div class="barcode" style="text-align: center;">
                <svg id="barcode"></svg>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
	JsBarcode("#barcode", "<?= $order->number; ?>", {
		format: "CODE39",
		lineColor: "#000",
		width: 1,
		height: 15,
		displayValue: true,
		fontSize: 9,
	});
</script>

</html>
