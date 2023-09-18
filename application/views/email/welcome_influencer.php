<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>NORM | Welcome Email</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- reset css -->
    <style type="text/css">
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            /*font-size: 100%;*/
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
    </style>

    <!-- style -->
    <style type="text/css">
        body {
            background-color: #f6f6f6;
            color: #333333;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px !important;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }

        img.img-main {
            display: block;
        }

        table {
            table-layout: fixed;
            padding: 0 15px;
            width: 100%;
        }

        table td {
            padding: 0 15px;
        }

        .bg-1d1d1d {
            background-color: #1d1d1d;
            color: #333;
        }

        .bg-fff {
            background-color: #fff;
        }

        .button-area {
            padding: 15px 0;
        }

        .bold {
            font-weight: bold;
        }

        .content {
            color: #333;
            padding: 15px 60px;
        }

        .content, .table-area {
            padding: 15px 60px;
        }

        .display-flex {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .email-container {
            background: #fff;
            font-size: 20px !important;
            margin: auto;
            max-width: 100%;
            padding: 30px 60px;
            width: 360px;
        }

        .img-icon {
            width: 24px;
        }

        .header img {
            margin: 15px 0;
            width: 90px;
        }

        .main-button {
            background-color: #333;
            border: 1px solid #333;
            color: #fff;
            font-size: 14px;
            margin: 0 3.75px 7.5px;
            padding: 15px 30px;
            text-align: center;
        }

         .main-button-2 {
            background-color: #fff;
            border: 1px solid #0e405b;
            color: #333;
            font-size: 12px;
            margin: 0 3.75px 7.5px;
            padding: 7.5px 22.5px;
            text-align: center;
        }

        .margin-top-7px {
            margin-top: 7.5px;
        }

        .margin-top-15px {
            margin-top: 15px;
        }

        .semibold {
            font-weight: 500;
        }

        .width-full {
            width: 100%;
        }
    </style>
</head>

<body style="background-color: #eee;">
    <div style="text-align: center;">
        <img loading="lazy" src="https://www.norm.id/assets/images/main/logo.png" style="width: 75px; padding: 30px 15px;">
    </div>
    <div class="email-container">
        <div class="bg-fff">
            <p>Halo, <?= $name; ?></p>
            <p style="margin-top: 15px;">Kamu sudah berhasil daftar Community Influencer</p>
            <p style="margin-top: 15px;">Ini langkah pertama yang sangat bagus untuk mengembangkan diri dan skill kamu. </p>
            <p style="margin-top: 15px;">Data kamu akan kami review dulu, ya. Jika beruntung, kamu akan dihubungi oleh Tim Norm dan mendapatkan berbagai keuntungan biar kamu lebih hits lagi</p>

            <div style="margin-top: 15px;"><span style="font-weight: 600;">#UpgradeYourself</span></div>
        </div>
    </div>
</body>

</html>