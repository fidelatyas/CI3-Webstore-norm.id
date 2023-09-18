<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Welcome Email</title>

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

		.footer {
			background-color: #25292b;
			color: #fff;
			font-size: 12px;
			padding: 30px;
			text-align: center;
		}

		.margin-top-15px {
			margin-top: 15px;
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
			<img class="width-100" src="https://www.norm.id/assets/images/email/welcome/banner.jpg">
		</div>

		<div class="text-center content">
			<div class="title">
				<div>Hi, <?= $name; ?></div>
				<div>Welcome to Norm</div>
			</div>

			<div class="margin-top-15px">
				<p>Selamat bergabung di Norm.</p>
				<p>Norm adalah brand khusus pria yang  berdedikasi membantu kamu meningkatkan kualitas hidup dan meraih versi terbaik dirimu.</p>
				<p>Start now and <strong>#UpgradeYourself</strong></p>
			</div>

			<div class="margin-top-15px">
				<a href="https://www.norm.id/skincare/" target="_blank">
					<button>Skin Collection</button>
				</a>

				<a href="https://www.norm.id/hair-body/" target="_blank">
					<button>Hair & Body</button>
				</a>

				<a href="https://www.norm.id/start/consultation/hairloss/" target="_blank">
					<button>Hair Growth Program</button>
				</a>

				<a href="https://www.norm.id/start/consultation/pe/" target="_blank">
					<button>Stamina System</button>
				</a>
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