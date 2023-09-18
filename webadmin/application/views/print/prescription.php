<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?= $setting->company_name; ?> | Print Prescription</title>

    <link href="<?= base_url(); ?>assets/fonts/stylesheet.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugin/JsBarcode.all.min.js"></script>

    <style type="text/css">
        body {
            font-family: Avenir Roman;
            padding: 0;
            margin: 0;
        }

        .doctor-name {
            font-family: Avenir Medium;
            font-size: 20px;
        }

        .doctor-sip {
            border-bottom: 1px solid #000;
            font-size: 12px;
            margin-bottom: 7.5px;
            padding-bottom: 7.5px;
        }

        .med {
            display: flex;
            margin-bottom: 7.5px;
            margin-top: 7.5px;
        }

        .med .product-name {
            flex-basis: 75%
        }

        .med .product-qty {
            flex-basis: 25%;
            padding-right: 15px;
            text-align: right;
        }

        .patient-sign {
            display: flex;
        }

        .patient-sign .patient {
            flex-basis: 60%;
            font-size: 12px;
        }

        .patient-sign .sign {
            flex-basis: 40%;
        }

        .sign div {
            font-size: 12px;
            margin-top: 60px;
            text-align: center;
        }

        .prescription-container {
            background-color: white;
            color: black;
            padding: 15px;
            height: calc(148mm - 30px);
            width: calc(105mm - 30px);
        }

        .prescription-date {
            font-family: Avenir Oblique;
            font-size: 11px;
            text-align: right;
            width: 100%;
        }

        .prescription-list {
            padding: 7.5px 0 7.5px 60px;
            position: relative;
            font-size: 12px;
            min-height: 335px;
        }

        .r-symbol {
            left: -45px;
            position: absolute;
            top: -7.5px;
            width: 24px;
        }
    </style>
</head>

<body onload="window.print(); window.close();">
    <div class="prescription-container">
        <div class="doctor-name">Dr. Rahmaputri Maharani</div>
        <div style="font-size: 12px;">SIP: 8/B.15.A/31.74.07.1001.03.004.R.4.g/4/-1.779.3/e/2020</div>
        <div style="font-size: 12px;">Alamat: Jl. Panglima Polim IX no 16, Jakarta Selatan</div>
        <div class="doctor-sip" style="font-size: 12px;">Phone: 081286760023</div>

        <!-- RECEIPT -->
        <div class="prescription-list">
            <div class="prescription-date"><?= $consultation->date_display; ?></div>
            <? foreach ($consultation->arr_consultation_product as $consultation_product): ?>
                <div class="med" style="position: relative;">
                     <div class="product-r">
                        <img class="r-symbol" src="<?= base_url(); ?>assets/images/main/R.png">
                    </div>
                    <div class="product-name"><?= $consultation_product->product_name; ?></div>
                    <!-- <div class="product-qty">x <?= $consultation->iteration; ?></div> -->
                </div>
                <? if ($consultation_product->product_id == 1): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. I o.m (1x1 pagi hari)</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 3): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 2. dd. I</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 4): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 2. dd. I</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 6): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. I o.m</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 7): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. I o.n</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 8): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. I o.n</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 14): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. I o.n (1 jam sebelum beruhubungan)</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 15): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. I o.n (1 jam sebelum beruhubungan)</li>
                        </ul>
                    </div>
                <? elseif ($consultation_product->product_id == 16): ?>
                    <div>
                        <ul style="padding-top: 0; padding-left: 15px; margin-top: 0; list-style: none;">
                            <li style="text-decoration: underline;">&#8747; 1. dd. ue (oleskan tipis)</li>
                        </ul>
                    </div>
                <? endif; ?>
            <? endforeach; ?>
        </div>
        <div class="patient-sign">
            <div class="patient">
                <div>No. Resep: <?= $consultation->number; ?></div>
                <div>Nama: <?= $patient->name; ?></div>
                <div>Umur: <?= $patient->age; ?> Tahun</div>
                <div>Alamat: <?= character_limiter($address->address_line_1, 30); ?></div>
                <div>Phone: <?= $patient->phone; ?></div>
            </div>
            <div class="sign">
                <div class="">( ___________________ )</div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
</script>

</html>
