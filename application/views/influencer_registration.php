<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container medium normal">
			<div class="reseller-registration">
				<div class="reseller-registration-banner bg-cover-top" style="background-image: url(<?= base_url(); ?>assets/images/main/influencer-form-banner.jpg);">
					<div class="box">
						<div class="title">Influencer Registration Form</div>
						<div>Isi data di bawah ini.</div>
					</div>
				</div>

				<div class="reseller-registration-form">
					<div class="row align-items-center">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Nama Lengkap</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="influencer-name" placeholder="Nama Lengkap Kamu..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Email Aktif</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="influencer-email" placeholder="Email Kamu..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Nomor HP</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="influencer-phone" placeholder="Nomor HP Kamu..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Tanggal Lahir</div>
						<div class="col-12 col-sm-7">
							<input class="date width-100" type="text" name="influencer-date" placeholder="Tanggal lahir..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Gender</div>
						<div class="col-12 col-sm-7">
							<select id="influencer-gender" class="width-100">
								<option value="Male">Pria</option>
								<option value="Female">Wanita</option>
							</select>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Alamat Pengiriman Produk</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="influencer-address-line-1" placeholder="Perumahan, apartment, dll..">
							<input class="width-100 margin-top-7-5px" type="text" name="influencer-address-line-2" placeholder="Alamat baris 1..">
							<input class="width-100 margin-top-7-5px" type="text" name="influencer-address-line-3" placeholder="Alamat baris 2..">

							<input class="margin-top-7-5px width-40" type="text" name="influencer-postcode" placeholder="Kode Pos...">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Provinsi</div>
						<div class="col-12 col-sm-7">
							<select id="influencer-province" class="width-100">
								<option value="0">-- PILIH PROVINSI --</option>

								<? foreach ($arr_province as $province): ?>
									<option value="<?= $province->id; ?>"><?= $province->name; ?></option>
								<? endforeach; ?>
							</select>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">City</div>
						<div class="col-12 col-sm-7">
							<select id="influencer-city" class="width-100" disabled>
								<option value="0">-- PILIH KOTA --</option>
							</select>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Kecamatan</div>
						<div class="col-12 col-sm-7">
							<select id="influencer-district" class="width-100" disabled>
								<option value="0">-- PILIH KECAMATAN --</option>
							</select>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Link Instagram</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="influencer-instagram-url" placeholder="Link Instagram..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Link Tiktok</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="influencer-tiktok-url" placeholder="Link Tiktok..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 text-center">
							<div class="margin-top-15px">
								<button class="main black" id="influencer-registration-button">Daftar Sekarang</button>
							</div>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
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
		$('#influencer-registration-button').click(function() {
			influencerRegistration();
		});

		initFunction();
	});

	function initFunction() {
		$('#influencer-province').change(function() {
			$('#influencer-city, #influencer-district').prop('disabled', true);

			$('#influencer-city').empty().html(`<option value="0">-- PILIH KOTA --</option>`);
			$('#influencer-district').empty().html(`<option value="0">-- PILIH KECAMATAN --</option>`);

			const provinceId = $('#influencer-province').val();

			$.ajax({
	            data: {
	                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
	            },
	            dataType: 'JSON',
	            error: function() {
	            	alert('Server Error.');
	            },
	            success: function(data) {
	                if (data.status == 'success') {
	                	let cityList = `<option value="0">-- PILIH KOTA --</option>`;

	                	$.each(data.arr_city, function(key, city) {
	                		cityList += `<option value="`+ city.id +`">`+ city.name +`</option>`;
	                	});

	                	$('#influencer-city').prop('disabled', false).empty().append(cityList);
	                }
	                else {
	                    alert(data.message);
	                }
	            },
	            type : 'POST',
	            url : '<?= base_url(); ?>ajax/ajax_get_city/'+ provinceId +'/'
	        });
		});

		$('#influencer-city').change(function() {
			$('#influencer-district').prop('disabled', true);

			$('#influencer-district').empty().html(`<option value="0">-- PILIH KECAMATAN --</option>`);

			const provinceId = $('#influencer-province').val();
			const cityId = $('#influencer-city').val();

			$.ajax({
	            data: {
	                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
	            },
	            dataType: 'JSON',
	            error: function() {
	            	alert('Server Error.');
	            },
	            success: function(data) {
	                if (data.status == 'success') {
	                	let districtList = `<option value="0">-- PILIH KECAMATAN --</option>`;

	                	$.each(data.arr_district, function(key, district) {
	                		districtList += `<option value="`+ district.id +`">`+ district.name +`</option>`;
	                	});

	                	$('#influencer-district').prop('disabled', false).empty().append(districtList);
	                }
	                else {
	                    alert(data.message);
	                }
	            },
	            type : 'POST',
	            url : '<?= base_url(); ?>ajax/ajax_get_district/'+ provinceId +'/'+ cityId +'/'
	        });
		});
	}

	function influencerRegistration() {
    	const name = $('input[name="influencer-name"]').val();
    	const email = $('input[name="influencer-email"]').val();
    	const phone = $('input[name="influencer-phone"]').val();
       	const date = $('input[name="influencer-date"]').val();
       	const gender = $('#influencer-gender').val();
       	const addressLine1 = $('input[name="influencer-address-line-1"]').val();
       	const addressLine2 = $('input[name="influencer-address-line-2"]').val();
       	const addressLine3 = $('input[name="influencer-address-line-3"]').val();
       	const postcode = $('input[name="influencer-postcode"]').val();
       	const provinceId = $('#influencer-province').val();
       	const cityId = $('#influencer-city').val();
       	const districtId = $('#influencer-district').val();
       	const instagramUrl = $('input[name="influencer-instagram-url"]').val();
       	const tiktokUrl = $('input[name="influencer-tiktok-url"]').val();

       	let count = 0;

    	if (name == '' || email == '' || phone == '' || addressLine1 == '' || provinceId <= 0 || cityId <= 0 || districtId <= 0 || instagramUrl == '' || tiktokUrl == '') {
    		count += 1;
    	}

    	if (count > 0) {
    		alert('Seluruh data harus diisi');

    		return;
    	}

    	$('#influencer-registration-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

    	$.ajax({
            data: {
            	name: name,
            	email: email,
            	phone: phone,
            	date: date,
            	gender: gender,
            	address_line_1: addressLine1,
            	address_line_2: addressLine2,
            	address_line_3: addressLine3,
            	postcode: postcode,
            	province_id: provinceId,
            	city_id: cityId,
            	district_id: districtId,
            	instagram_url: instagramUrl,
            	tiktok_url: tiktokUrl,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('#influencer-registration-button').html(`Daftar Sekarang`);
            },
            success: function(data) {
            	window.location.href = '<?= base_url(); ?>influencer/thankyou/';
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_register_influencer/'
        });
    }
</script>
</html>