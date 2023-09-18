<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="margin-top-45px">
		<div class="container normal">
			<div class="account-container margin-top-15px">
				<div class="title-2">My Account</div>
				<div class="row margin-top-30px row-eq-height">
					<div class="col-12 col-sm-3">
						<div class="account-left-menu">
							<a href="<?= base_url(); ?>account/" class="list">
								<div class="icon">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/my-account-icon.png">
								</div>
								<div class="text">My Details</div>
							</a>
							<a href="<?= base_url(); ?>medical-grade/" class="list">
								<div class="icon">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/order-icon.png">
								</div>
								<div class="text">Order</div>
							</a>
							<a href="<?= base_url(); ?>account/recommendation/" class="list active">
								<div class="icon">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/recommendation-icon.png">
								</div>
								<div class="text">My Recommendation</div>
							</a>
							<a href="<?= base_url(); ?>account/history/" class="list">
								<div class="icon">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/history-icon.png">
								</div>
								<div class="text">Order History</div>
							</a>
							<a onclick="signOut();" class="list">
								<div class="icon">
									<img loading="lazy" src="<?= base_url(); ?>assets/images/main/logout-icon.png">
								</div>
								<div class="text">Logout</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-9">
						<div class="account-content">
							<div class="title">My Recommendation</div>

							<div class="margin-top-30px">
								<div class="consultation-list">
									<? foreach ($arr_consultation as $key => $consultation): ?>
										<div class="consultation <? if ($key <= 0): ?>active<? endif; ?>" data-consultation-id="<?= $consultation->id; ?>"><?= $consultation->number; ?> (<?= $consultation->category_name; ?>)</div>
									<? endforeach; ?>
								</div>
							</div>

							<div class="margin-top-30px recommendation-container">
								<? foreach ($arr_consultation as $k => $consultation): ?>
									<div class="consultation-detail <? if ($k <= 0): ?>active<? endif; ?> consultation-<?= $consultation->id; ?>">
										<div class="recommendation-doctor-container">
											<div class="image">
												<img loading="lazy" src="<?= base_url(); ?>assets/images/main/dr-rahma.png">
											</div>
											<div class="detail">
												<div class="name font-semibold">Dr. Rahmaputri Maharani</div>
												<div class="name word-wrap-break-word">SIP: 8/B.15.A/31.74.07.1001.03.004.R.4.g/4/-1.779.3/e/2020</div>
											</div>
										</div>

										<? if ($consultation->status == 'Finish'): ?>
											<div class="recommendation-detail paragraph-content margin-top-30px">
												<p>Dear <?= $account->name; ?></p>
												<p>Terima kasih telah melengkapi kuesioner online. Saya Dr. Rahma sudah meninjau jawaban kamu.</p>

												<? if ($consultation->category_id == 5): ?>
													<div class="divider">Penilaian Dokter</div>
													<p>Saya melihat bahwa kerontokan rambut yang kamu alami mengarah pada indikasi male pattern baldness.</p>
													<p>Jika tidak diatasi, helai rambut dapat terus menipis dan tingkat kerontokan akan semakin parah.</p>

													<div class="divider">Rekomendasi Dokter</div>
													<p>Berdasarkan tingkat dan area kerontokan kamu, saya rekomendasikan rangkaian produk perawatan sebagai berikut:</p>

													<div class="row margin-top-15px">
														<? foreach ($consultation->arr_product as $product_id): ?>
															<div class="col-12 col-sm-6">
																<? if ($product_id == 1): ?>
																	<div class="product-box">
																		<div class="image">
																			<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/finasteride-norm.jpg">
																		</div>
																		<div class="detail">
																			<div class="font-semibold">Hair Growth Capsule</div>
																			<div class="description">Kapsul yang diminum sehari sekali untuk menghambat hormon DHT yang menjadi masalah kerontokan rambut.</div>

																			<div class="margin-top-7-5px">
																				<button class="main black small cart-1" onclick="addToCart(1, 5, 1, 199000);">Add to Cart</button>
																			</div>
																		</div>
																	</div>
																<? elseif($product_id == 3): ?>
																	<div class="product-box">
																		<div class="image">
																			<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.jpg">
																		</div>
																		<div class="detail">
																			<div class="font-semibold">Hair Tonic</div>
																			<div class="description">Tonic untuk merangsang pertumbuhan dan menghentikan kerontokan rambut.</div>

																			<div class="margin-top-7-5px">
																				<button class="main black small cart-3" onclick="addToCart(3, 5, 1, 169000);">Add to Cart</button>
																			</div>
																		</div>
																	</div>
																<? endif; ?>
															</div>
														<? endforeach; ?>
													</div>

													<div class="divider">Langkah Selanjutnya</div>
													<p>Pesan produk yang direkomendasikan dengan klik tombol di atas ini kemudian selesaikan pembayaran.</p>

													<div class="divider">Instruksi</div>
													<p>Perawatan ini akan efektif jika dimulai sesegera mungkin dan dilakukan secara konsisten.</p>
													<p>Diperlukan setidaknya 3-6 bulan untuk memperoleh hasil maksimal.</p>
													<p>Untuk mempelajari lebih lanjut tentang cara pakai silakan klik <a href="<?= base_url(); ?>start/consultation/hairloss/" class="animate">link ini</a>.</p>

													<p class="margin-top-30px">
			                                            Apabila ada pertanyaan lebih lanjut, silahkan menghubungi Care Specialist Kami:
			                                            <br>
			                                            Email: <a class="animate blue" href="mailto:help@eliocare.com">help@norm.id</a>
			                                            <br>
			                                            WhatsApp: <a class="animate blue" href="https://api.whatsapp.com/send?phone=6281210779710&text=Hi%20Norm%20Team%2c%20Saya%20ingin%20bertanya%20mengenai%20produk%20Norm.&source=&data">0812 1077 9710</a>
			                                        </p>
												<? elseif ($consultation->category_id == 11): ?>
													<div class="divider">Penilaian Dokter</div>
													<p>Berdasarkan informasi yang kamu berikan, kamu terindikasi mengalami ejakulasi dini.</p>
													<p>Saya dapat merekomendasikan perawatan yang sesuai. Tapi, kamu juga disarankan untuk konsultasi langsung dengan dokter untuk mendapat informasi lebih lanjut.</p>

													<div class="divider">Rekomendasi Dokter</div>
													<p>Saya rekomendasi kamu untuk mulai perawatan dengan krim anestesi topikal.</p>

													<div class="row margin-top-15px">
														<? foreach ($consultation->arr_product as $product_id): ?>
															<div class="col-12 col-sm-6">
																<? if ($product_id == 16): ?>
																	<div class="product-box">
																		<div class="image">
																			<img loading="lazy" src="<?= base_url(); ?>assets/images/main/product/stamina-cream-norm.png">
																		</div>
																		<div class="detail">
																			<div class="font-semibold">Stamina Cream</div>
																			<div class="description">Krim anestesi topikal yang dapat digunakan untuk mengatasi ejakulasi dini.</div>

																			<div class="margin-top-7-5px">
																				<button class="main black small cart-16" onclick="addToCart(16, 11, 1, 249000);">Add to Cart</button>
																			</div>
																		</div>
																	</div>
																<? endif; ?>
															</div>
														<? endforeach; ?>
													</div>

													<p class="margin-top-15px">Stamina Cream dapat mengurangi sensitivitas penis dan dapat membantumu bertahan lebih lama saat berhubungan. </p>

													<div class="divider">Langkah Selanjutnya</div>
													<p>Pesan produk yang direkomendasikan dengan klik tombol di atas ini kemudian selesaikan pembayaran.</p>

													<div class="divider">Instruksi</div>
													<p>Sebaiknya gunakan krim sesuai cara petunjuk untuk mendapatkan hasil maksimal.</p>
													<p>Untuk mempelajari lebih lanjut tentang cara pakai silakan klik <a href="<?= base_url(); ?>start/consultation/pe/" class="animate black">Link ini</a>.</p>
													<p>Untuk mengatasi ejakulasi dini dalam jangka Panjang, sebaiknya gabungkan Stamina Cream dengan teknik perilaku atau konseling. Teknik perilaku seperti 'memeras' atau 'berhenti mulai’ dapat membantu menunda ejakulasi.</p>

													<div class="divider">Lifestyle Improvement</div>
													<p>Saya juga sarankan untuk berolahraga sesuai dengan kemampuan. Olahraga merupakan salah satu cara untuk menurunkan berat badan dan menciptakan peremajaan psikologi yang dengan sendirinya akan membantu fungsi seksual.</p>
													<p>Jika kamu sering mengonsumsi minuman keras, mohon minum secara bertanggung jawab. Alkohol yang berlebihan tidak hanya buruk bagi kesehatan secara umum, tetapi juga dapat memengaruhi fungsi seksual.</p>

													<p class="margin-top-30px">
			                                            Apabila ada pertanyaan lebih lanjut, silahkan menghubungi Care Specialist Kami:
			                                            <br>
			                                            Email: <a class="animate blue" href="mailto:help@eliocare.com">help@norm.id</a>
			                                            <br>
			                                            WhatsApp: <a class="animate blue" href="https://api.whatsapp.com/send?phone=6281210779710&text=Hi%20Norm%20Team%2c%20Saya%20ingin%20bertanya%20mengenai%20produk%20Norm.&source=&data">0812 1077 9710</a>
			                                        </p>
												<? endif; ?>
											</div>
										<? elseif ($consultation->status == 'Pending'): ?>
											<div class="content paragraph-content margin-top-30px">
												<p>Dear <?= $account->name; ?></p>
												<p>Terima kasih telah melengkapi kuesioner online. Mohon menunggu, kuesioner kamu sedang dalam peninjauan oleh tim dokter kami.</p>
											</div>
										<? elseif ($consultation->status == 'Reject' || $consultation->status == 'Incomplete'): ?>
											<div class="content paragraph-content margin-top-30px">
												<p>Dear <?= $account->name; ?></p>
												<p>Terima kasih telah melengkapi kuesioner online. Berdasarkan jawaban yang Kamu berikan, saya belum bisa memberikan rekomendasi perawatan secara online. Saya menyarankan Kamu untuk berkonsultasi lebih lanjut dengan dokter secara langsung. Evaluasi masalah penyebab sangat disarankan.</p>
											</div>
										<? endif; ?>
									</div>
								<? endforeach; ?>
							</div>
						</div>
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
		recommendationAction();
	});

	function recommendationAction() {
		$('.consultation-list .consultation').click(function() {
			$('.consultation-list .consultation').removeClass('active');
			$(this).addClass('active');

			const consultationId = $(this).attr('data-consultation-id');
			$('.consultation-detail').removeClass('active');
			$('.consultation-detail.consultation-'+ consultationId).addClass('active');
		});
	}
</script>
</html>