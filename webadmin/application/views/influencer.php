<!DOCTYPE html>
<html>
	<head>
		<!-- load title tag -->
		<? $this->load->view('metatag'); ?>

		<!-- load style -->
		<? $this->load->view('style'); ?>
	</head>

	<body>
		<? $this->load->view('navigation'); ?>

		<!-- breadcrumbs -->
		<div class="container">
			<div class="ui breadcrumb">
				<a class="section" href="<?= base_url(); ?>">Dashboard</a>
				<div class="divider"> / </div>
				<div class="active section">Influencer List</div>
			</div>
		</div>

		<div class="table-container">
			<!-- Table of Influencer -->
			<div class="ui top attached menu">
			  	<div class="ui dropdown icon item">
				    Options
				    <div class="menu">
				    	<? if (isset($acl['influencer']) && $acl['influencer']->add > 0): ?>
				      		<a href="<?= base_url(); ?>influencer/add/" class="item">Add new Influencer</a>
				     		<div class="divider"></div>
				     	<? endif; ?>
			      		<div class="item">Export to Excel</div>
						<a href="<?= base_url(); ?>influencer/all/<?= $page; ?>/<?= $sort; ?>/<?= $row; ?>/<?= $query; ?>/" class="item">Refresh Page</a>
			    	</div>
				</div>

			  	<div class="right menu">
			    	<div class="ui right aligned category search item">
			      		<div class="ui transparent icon input">
			        		<input class="prompt" type="text" placeholder="Search Influencer...">
			        		<i class="search link icon"></i>
			      		</div>
			      		<div class="results"></div>
			    	</div>
			  	</div>
			</div>
			<div class="ui bottom attached segment no-padding">
				<table class="ui compact selectable table">
					<thead>
						<tr>
							<th class="sort" data-row="number" data-sort="<? if ($row == 'number'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Number <? if ($row == 'number'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></th>

							<th class="sort" data-row="name" data-sort="<? if ($row == 'name'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Name <? if ($row == 'name'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="email" data-sort="<? if ($row == 'email'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Email <? if ($row == 'email'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="phone" data-sort="<? if ($row == 'phone'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Phone <? if ($row == 'phone'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th class="sort" data-row="gender" data-sort="<? if ($row == 'gender'): ?><? if ($sort == 'ASC'): ?>DESC<? else: ?>ASC<? endif; ?><? else: ?>ASC<? endif; ?>">Gender <? if ($row == 'gender'): ?><i class="angle <? if ($sort != 'ASC'): ?>down<? else: ?>up<? endif; ?> icon"></i><? endif; ?></i></th>

							<th>Social Media Address</th>
							<th>Address</th>

							<th class="right aligned"></th>
						</tr>
					</thead>
					<tbody>
						<? if (count($arr_influencer) > 0): ?>
							<? foreach ($arr_influencer as $influencer): ?>
								<tr>
									<td><?= $influencer->number; ?></td>
									<td><?= $influencer->name; ?></td>
									<td><?= $influencer->email; ?></td>
									<td><?= $influencer->phone; ?></td>
									<td><?= $influencer->gender; ?></td>
									<td>
										<? if ($influencer->tiktok_url != ''): ?>
											<a href="<?= $influencer->tiktok_url; ?>" target="_blank">
												<button class="black main small">Tiktok</button>
											</a>
										<? endif; ?>

										<? if ($influencer->instagram_url != ''): ?>
											<a href="<?= $influencer->instagram_url; ?>" target="_blank">
												<button class="black main small">Instagram</button>
											</a>
										<? endif; ?>
									</td>
									<td>
										<div><?= $influencer->address_line_1; ?></div>
										<div><?= $influencer->address_line_2; ?></div>
										<div><?= $influencer->address_line_3; ?></div>
										<div><?= $influencer->district_name; ?>, <?= $influencer->city_name; ?></div>
										<div><?= $influencer->province_name; ?>, <?= $influencer->postcode; ?></div>
									</td>
									<td class="right aligned">
										<a href="<?= base_url(); ?>request/add_influencer/<?= $influencer->id; ?>/">
											<button class="main green xs">Request Shipment</button>
										</a>

										<!--  -->
										<a href="https://api.whatsapp.com/send?phone=<?= $influencer->wa_phone; ?>&text=Hi NormSquad%0A%0ASelamat%20bergabung%20di%20Community%20Influencer.%20Dapatkan%20benefits%20menarik%20yang%20bisa%20kamu%20nikmati%20dari%20diskon%20spesial%20sampai%20free%20product%20Norm.%20Ayo%20join%20link%20grup%20telegram%20dibawah%20ini%20sekarang%20juga%0A%0Ahttps://t.me/joinchat/GnnjQNqUPk02Zjk1" target="_blank">
											<button class="main green xs">Send Telegram Invitation</button>
										</a>
									</td>
								</tr>
							<? endforeach; ?>
						<? else: ?>
							<tr>
								<td colspan="99">Data not found</td>
							</tr>
						<? endif; ?>
					</tbody>
					<tfoot>
						<th colspan="99">
							<div class="display-flex">
								<div>
									<button class="main white xs prev">Prev</button>
								</div>
								<div class="pagination-input">
									<input class="pagination" type="text" name="pagination"> / <?= $count_page; ?>
								</div>
								<div>
									<button class="main white xs next">Next</button>
								</div>
							</div>
						</th>
					</tfoot>
				</table>
			</div>
		</div>

		<? $this->load->view('popup'); ?>

		<!-- popup delete -->
		<div class="ui mini modal delete">
		  	<div class="header">Delete Influencer</div>
			<div class="content">
				<p>Your're about to delete. You cannot undo this action. Do you want to continue?</p>
			</div>
			<div class="actions">
				<button class="main blue small delete-influencer">Yes</button>
			    <button class="cancel main red small">Cancel</button>
			</div>
		</div>
	</body>

	<!-- load common script -->
	<? $this->load->view('script'); ?>

	<!-- generate page script -->
	<script type="text/javascript">
		$(function() {
			initPagination();
			initSearch();
			initSort();
			initDelete();
		});

		function changePage(page, sort, direction, query) {
			window.location.href = '<?= base_url(); ?>influencer/all/'+ page +'/'+ sort +'/'+ direction +'/'+ query +'/';
		}

		function deleteInfluencer(id, updated) {
			$('.delete-influencer').html('<i class="notched circle loading icon"></i> Deleting..');

			$.ajax({
				data:{
					updated: updated,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					showWarning('Server Error.');
					$('.btn-reset-password').html('Reset Password');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.delete-influencer').html('Yes');

						$('.delete').modal('hide');

						$('.success-add').html('Reload').parent().attr('href', '<?= base_url(); ?>influencer/all/').show();
						$('.success-back').parent().hide();

						showSuccess('Influencer has been successfully deleted.');
					}
					else {
						showWarning(data.message);
						$('.btn-reset-password').html('Reset Password');
					}
				},
				type: 'POST',
				url: '<?= base_url() ?>influencer/ajax_delete/'+ id +'/',
			});
		}

		function initDelete() {
			$('.delete-button').click(function() {
				$('.delete-influencer').unbind('click');

				const id = $(this).attr('data-id');
				const name = $(this).attr('data-name');
				const updated = $(this).attr('data-updated');

				$('.delete .content p').html(`Your're about to delete `+ name +`. You cannot undo this action. Do you want to continue?`);
				$('.delete-influencer').html('Yes');

				$('.delete-influencer').click(function() {
					deleteInfluencer(id, updated);
				});

				$('.delete').modal('show');
			});
		}

		function initPagination() {
			const page = parseInt('<?= $page; ?>');
			const maxPage = '<?= $count_page; ?>';

			$('input[name="pagination"]').val('<?= $page; ?>');

			$('.prev').click(function() {
				const newPage = (page - 1 <= 1) ? 1 : page - 1;

				if (page == newPage) {
					return;
				}

				changePage(newPage, '<?= $sort; ?>', '<?= $row; ?>', '<?= $query; ?>');
			});

			$('.next').click(function() {
				const newPage = (page + 1 > maxPage) ? maxPage : page + 1;

				if (page == maxPage) {
					return;
				}

				changePage(newPage, '<?= $sort; ?>', '<?= $row; ?>', '<?= $query; ?>');
			});

			$('input[name="pagination"]').keypress(function(e) {
				if (e.which == 13) {
					let newPage = parseInt($(this).val());

					if (newPage > maxPage) {
						newPage = maxPage;
					}

					changePage(newPage, '<?= $sort; ?>', '<?= $row; ?>', '<?= $query; ?>');
				}
			});
		}

		function initSearch() {
			$('.prompt').val("<?= $query; ?>");

			$('.prompt').keypress(function(e) {
				if (e.which == 13) {
					const query = $(this).val();

					changePage('1', 'ASC', 'id', query);
				}
			});
		}

		function initSort() {
			$('.sort').click(function() {
				const row = $(this).attr('data-row');
				const sort = $(this).attr('data-sort');

				changePage('<?= $page; ?>', sort, row, '<?= $query; ?>');
			});
		}
	</script>
</html>