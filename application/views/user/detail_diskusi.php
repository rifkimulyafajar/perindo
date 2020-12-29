<?php
$query = $this->db->count_all('diskusi');
$query = $this->db->get_where('diskusi', array('id_topik' => $topik ['id_topik']))->num_rows();
?>

<div class="bradcam_area breadcam_bg overlay2">
	<h3>Forum Diskusi</h3>
</div>

<div class="popular_courses">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4>Topik dari <?= $topik['nama'] ?></h4>
			</div>
			<div class="card-body">
				<p><b><?= $topik['tanggal'] ?></b></p>
				<h4 class="card-text">Topik : <?= $topik['topik'] ?></h4>
				<p class="text-right">Tanggapan (<?php echo $query; ?>)</p>
			</div>
		</div>
		<br><br>

		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger" role="alert">
				<?php echo validation_errors(); ?>
			</div>
		<?php endif; ?>

		<div>

			<?php if (!isset($_SESSION['user'])) : ?>

				<form class="form-contact contact_form" action="<?= base_url() ?>login" method="post" novalidate="novalidate">

				<?php endif;

			if (isset($_SESSION['user'])) : ?>

					<form class="form-contact contact_form" action="<?= base_url() ?>user/tambah_diskusi/<?= $topik['id_topik'] ?>" method="post" novalidate="novalidate">

					<?php endif; ?>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input class="form-control valid" name="id_topik" id="id_topik" type="hidden" value="<?= $topik['id_topik'] ?>">
							</div>
						</div>

						<?php if (isset($_SESSION['user'])) : ?>

							<div class="col-sm-12">
								<div class="form-group">
									<input class="form-control valid" name="nama" id="nama" type="hidden" value="<?php echo $_SESSION['user']; ?>">
								</div>
							</div>

						<?php endif; ?>

						<div class="col-sm-12">
							<div class="form-group">
								<input class="form-control valid" name="tanggal" id="tanggal" type="hidden" value="<?php echo date('Y-m-d') ?>">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input class="form-control valid" name="pembahasan" id="pembahasan" type="text" placeholder="Tanggapan Anda">
							</div>
						</div>
					</div>
					<div class="form-group mt-2">
						<button type="submit" name="submit" class="button button-contactForm boxed-btn">KOMENTAR</button>
					</div>
					</form>
		</div>
	</div>
	<br><br><br>
	<div class="container">
		<div class="row">
			<h2>* Tanggapan</h2>
		</div>
		<br>

		<?php
		foreach ($komentar as $km) {
		?>

			<div class="card">
				<div class="card-header">
					<h4><?= $km['nama']; ?></h4>
				</div>
				<div class="card-body">
					<p><b><?= $km['tanggal']; ?></b></p>
					<p><?= $km['pembahasan']; ?></p>
				</div>
			</div>
			<br>

		<?php
		}
		?>

	</div>
</div>