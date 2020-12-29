		<div class="bradcam_area breadcam_bg overlay2">
			<h3>Forum Diskusi</h3>
		</div>
		<!-- bradcam_area_end -->

		<div class="popular_courses">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="section_title text-center mb-100">
							<img src="<?php echo base_url('asset/user/img/chat.png') ?>" width=100 height=100>
							<h3>Forum Diskusi</h3>
							<p>
								Diskusi dengan user lain mengennai masalah - masalah atau keluhan keluhan yang sedang dialami mengenai sex. <br>
								Berbahasa dengan baik. <br>
								Mulutmu Harimaumu.
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-12">

					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?php echo validation_errors(); ?>
						</div>
					<?php endif; ?>

					<?php if (!isset($_SESSION['user'])) : ?>

						<form class="form-contact contact_form" action="<?= base_url('login') ?>" method="post" novalidate="novalidate">

						<?php endif;

					if (isset($_SESSION['user'])) : ?>

							<form class="form-contact contact_form" action="<?= base_url('user/tambah_topik') ?>" method="post" novalidate="novalidate">

							<?php endif; ?>

							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<input class="form-control" name="tanggal" id="tanggal" type="hidden" placeholder="Tanggal" value="<?php echo date('Y-m-d') ?>">
									</div>
								</div>

								<?php if (isset($_SESSION['user'])) : ?>

									<div class="col-12">
										<div class="form-group">
											<input class="form-control" name="nama" id="nama" type="hidden" placeholder="Pengirim" value="<?php echo $_SESSION['user']; ?>">
										</div>
									</div>

								<?php endif; ?>

								<div class="col-12">
									<div class="form-group">
										<input class="form-control" name="topik" id="topik" type="text" placeholder="Topik Permasalahan">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
								</div>
								<div class="col-sm">
								</div>
								<div class="col-sm">
								</div>
								<div class="col-sm">
									<button type="submit" name="submit" class="btn btn-outline-success btn-lg btn-block"><i class="fa fa-plus-square"></i> &nbsp;Tambah Topik Diskusi</button> <br><br>
								</div>
							</div>
							</form>
				</div>

				<table class="table table-borderless">
					<thead>
						<tr class="table-primary">
							<th scope="col" class="text-center">No.</th>
							<th scope="col">Pengirim</th>
							<th scope="col">Topik</th>
							<th scope="col" class="text-center">Tanggal</th>
							<th scope="col" class="text-center">Tanggapan</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>

						<?php
						$no = 1;
						foreach ($topik as $tp) {
							$query = $this->db->count_all('diskusi');
							$query = $this->db->get_where('diskusi', array('id_topik' => $tp['id_topik']))->num_rows();
						?>

							<tr>
								<th scope="row" class="text-center"><?= $no++ ?></th>
								<td><?= $tp["nama"]; ?></td>
								<td><?= $tp["topik"]; ?></td>
								<td class="text-center"><?= $tp["tanggal"]; ?></td>
								<td class="text-center"><?php echo $query; ?></td>
								<td class="text-center"><a href="<?= base_url(); ?>user/detail_diskusi/<?= $tp['id_topik']; ?>" type="button" class="btn btn-outline-primary btn-sm">Detail</button></td>
							</tr>

						<?php
						}
						?>

					</tbody>
				</table>
			</div>
		</div>