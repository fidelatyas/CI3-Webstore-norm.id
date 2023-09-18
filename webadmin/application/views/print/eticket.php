<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?= $setting->company_name; ?> | Print Prescription</title>

    <link href="<?= base_url(); ?>fonts/stylesheet.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url(); ?>js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>plugin/JsBarcode.all.min.js"></script>

    <style type="text/css">
    	body {
            color: #000;
            font-family: Avenir Medium;
            font-size: 8px;
            letter-spacing: .05px;
    		margin: 0;
    		padding-bottom: 0;
    	}

        .content {
            padding: 7.5px 7.5px;
            width: calc(100% - 15px);
        }

        .ship-container {
            background-color: white;
            height: 3.9cm;
            width: 6.5cm;
        }
    </style>
</head>

<body onload="window.print(); window.close();">
    <div class="ship-container">
        <div class="content">
            <div style="display: flex; align-items: center; padding-bottom: 2.5px; margin-bottom: 2.5px; border-bottom: 1px solid #000; width: 100%;">
                <div>
                    <img src="<?= base_url(); ?>assets/images/main/now.png" style="width: 18px; margin: 0 2.5px;">
                </div>
                <div style="margin-left: 5px;">
                    <div style="font-family: Avenir Black; font-size: 8px;">Apotik Now</div>
                    <div style="font-size: 8px;">
                        Jalan Danau Toba No. G2/149, Bendungan Hilir,
                        <br>
                        Tanah Abang, Jakarta Pusat. Telp. (021) 4574 2832
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 2.5px;">
                <div>Apoteker: <span style="width">Apt.Andi Nur Millah, S.Farm.</span></div>
                <div>SIPA: 20/B.19/31.71.07.1002.05.004.R.4.a.b/3/-1.779.3/e/2020</div>
            </div>
            <div style="display: flex; align-items: center; background-color: #000; width: calc(100% - 5px); padding: 1.875px 2.5px; color: white; margin-bottom: 2.5px;">
                <div style="flex-basis: 100%;">Tanggal: <?= $date; ?> <?= $year; ?></div>
                <div style="text-align: right; flex-basis: 100%;">No. <?= $consultation_number; ?></div>
            </div>
            <div style="padding-bottom: 2.5px; margin-bottom: 2.5px; border-bottom: 1px solid #000; width: 100%;">
                <div style="font-size: 9px; font-family: Avenir Heavy;"><?= $patient_name; ?></div>
            </div>
            <div style="padding-bottom: 2.5px;">
                <div style="font-size: 9px;"><?= $product->name; ?></div>
                <div style="font-size: 9px;"><?= $product->hiw; ?></div>
            </div>
            <div style="display: flex; align-items: center; width: 100%;">
                <div style="flex-basis: 100%; font-family: Avenir HeavyOblique; font-size: 8px;">Expired: <?= $date; ?> <?= $year_expiry; ?></div>
                <div style="text-align: right; flex-basis: 100%; font-family: Avenir HeavyOblique; font-size: 8px;">Jumlah: <?= $product->amount; ?></div>

            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
</script>

</html>
