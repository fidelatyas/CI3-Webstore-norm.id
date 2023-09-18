<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation_reseller'); ?>

	<section class="margin-top-45px">
		<div class="container medium normal">
			<div class="reseller-registration">
				<div class="reseller-registration-banner bg-cover" style="background-image: url(<?= base_url(); ?>assets/images/main/product/complete-maintenance-set.jpg);">
					<div class="box">
						<div class="title">Reseller Registration Form</div>
						<div>Isi data di bawah ini.</div>
					</div>
				</div>

				<div class="reseller-registration-form">
					<div class="row align-items-center">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Nama Lengkap</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="reseller-name" placeholder="Nama Lengkap Kamu..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Nomor HP</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="reseller-phone" placeholder="Nomor HP Kamu..">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Email</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="reseller-email" placeholder="Email Kamu">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Username</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="reseller-username" placeholder="Atur Username Kamu">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Kata Sandi</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="password" name="reseller-password" placeholder="Atur Kata Sandi">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Konfirmasi Kata Sandi</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="password" name="reseller-confirm-password" placeholder="Konfirmasi Kata Sandi">
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 col-sm-3">Apakah kamu memiliki toko online / offline?</div>
						<div class="col-12 col-sm-7">
							<input class="width-100" type="text" name="reseller-store" placeholder="Nama toko online kamu">
							<div style="font-size: .7rem; font-style: italic; margin-top: 3.75px;">* Kosongkan jika kamu tidak memiliki toko online / offline.</div>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>

					<div class="row align-items-center margin-top-30px">
						<div class="col-sm-1 d-none d-sm-block"></div>
						<div class="col-12 text-center">
							<!-- <div>
								<input type="checkbox" id="reseller-agreement" name="reseller-agreement" value="Bike">
								<label for="reseller-agreement"> Saya setuju dengan <a class="animate active cursor-pointer" onclick="$('#tnc-modal').modal('show');">syarat dan ketentuan</a> yang berlaku</label><br>
							</div> -->

							<div class="margin-top-15px">
								<button class="main black" id="reseller-registration-button">Daftar Sekarang</button>
							</div>
						</div>
						<div class="col-sm-1 d-none d-sm-block"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="screen-blocker"><div></div></div>

	<div class="modal fade" id="tnc-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content padding-15">
		    	<h4 class="modal-title" id="myModalLabel" style="font-weight: bold;">Norm Reseller Program</h4>
		    	<div>Terms & Conditions</div>

		    	<div class="separator-modal"></div>
		  		<div>
		  			<p>Sebelum memulai pendaftaran menjadi Reseller (Selestial Business Partner), yuk silakan dibaca terlebih dahulu apa saja syarat dan ketentuannya:</p>
		  			<ol>
		  				<li>
		  					<div><b>Sistem Pendaftaran Reseller</b></div>
		  					<ul>
		  						<li>Memiliki HP/Laptop yang dapat mengakses internet dan web.</li>
		  						<li>Mengisi form pendaftaran dengan lengkap dan membaca syarat dan ketentuan yang berlaku pada website.</li>
		  						<li>Peserta diharuskan untuk membeli 1 paket Ultimate Gentleman Set dengan diskon sebesar 20% (di harga IDR 375.200 + ongkos kirim) untuk mendapatkan pengalaman menggunakan produk norm secara langsung dan mendapat product knowledge.</li>
		  						<li>Peserta akan menerima username dan password untuk bertransaksi di platform agent.norm.id maksimal 1 hari kerja</li>
		  					</ul>
		  				</li>

		  				<li>
		  					<div><b>Sistem Penjualan Reseller</b></div>
		  					<ul>
		  						<li>Sistem penjualan yang digunakan adalah sistem jual dengan mekanisme dropship.</li>
		  						<li>Mengisi form pendaftaran dengan lengkap dan membaca syarat dan ketentuan yang berlaku pada website.</li>
		  						<li>Setiap penjualan akan mendapatkan komisi sebesar 15%.</li>
		  						<li>Sistem pembayaran adalah sebuah link yang dapat dikirim ke pelanggan dengan opsi pembayaran menggunakan kartu kredit, bank transfer, shopee pay, linkaja, dana, kredivo, dan OVO. </li>
		  					</ul>
		  				</li>

		  				<li>
		  					<div><b>Sistem Pencairan Komisi</b></div>
		  					<ul>
		  						<li>Sistem penjualan yang digunakan adalah sistem jual dengan mekanisme dropship.</li>
		  						<li>Total komisi yang terkumpul dapat dilihat di reseller dashboard kami yang dapat di akses dengan cara login di platform agent.norm.id</li>
		  						<li>Total komisi yang terkumpul akan dicairkan ke rekening reseller setiap bulan di hari Jumat minggu terakhir.</li>
		  					</ul>
		  				</li>

		  				<li>
		  					<div><b>Penjualan Reseller</b></div>
		  					<ul>
		  						<li>Harga jual produk sudah ditentukan oleh pihak norm.id</li>
		  						<li>Media promosi dan penjualan dibebaskan, bisa menggunakan media online dan atau offline</li>
		  						<li>Total komisi yang terkumpul akan dicairkan ke rekening reseller setiap bulan di hari Jumat minggu terakhir.</li>
		  						<li>Menggunakan materi promosi yang telah disediakan oleh website dan pihak norm.id dengan baik dan benar</li>
		  					</ul>
		  				</li>
		  			</ol>
		  		</div>
			</div>
		</div>
	</div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		$('#reseller-registration-button').click(function() {
			resellerRegistration();
		});
	});

	function resellerRegistration() {
    	const name = $('input[name="reseller-name"]').val();
    	const email = $('input[name="reseller-email"]').val();
    	const phone = $('input[name="reseller-phone"]').val();
    	const store = $('input[name="reseller-store"]').val();
    	const username = $('input[name="reseller-username"]').val();
    	const password = $('input[name="reseller-password"]').val();
    	const confirmPassword = $('input[name="reseller-confirm-password"]').val();
    	let count = 0;

    	if (name == '' || email == '' || phone == '' || username == '' || password == '' || confirmPassword == '') {
    		count += 1;
    	}

    	if (count > 0) {
    		alert('Seluruh data harus diisi');

    		return;
    	}

    	if (password != confirmPassword) {
    		alert('Password tidak sama');

    		return;
    	}

    	// if ($('input[name="reseller-agreement"]:checked').length <= 0)
    	// {
    	// 	alert('Kamu belum menyetujui syarat dan ketentuan yang berlaku');

    	// 	return;
    	// }

    	$('#reseller-registration-button').html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

    	$.ajax({
            data: {
            	name: name,
            	email: email,
            	phone: phone,
            	store: store,
            	username: username,
            	password: password,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('#reseller-registration-button').html(`Daftar Sekarang`);
            },
            success: function(data) {
            	window.location.href = '<?= base_url(); ?>reseller/thankyou/';
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_register_reseller/'
        });
    }
</script>
</html>