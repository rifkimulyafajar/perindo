<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Kalender</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kalender</h6>
            </div>

            <!-- alerthapus -->
            <?php if ($this->session->flashdata('hapus_kalender')) : ?>
                <?php if ($this->session->flashdata('hapus_kalender') == TRUE) : ?>
                    <div class="alert alert-success">Data berhasil dihapus</div>
                <?php elseif ($this->session->flashdata('hapus_kalender') == FALSE) : ?>
                    <div class="alert alert-danger">Data gagal dihapus </div>
                <?php endif; ?>
            <?php endif; ?>

            <div class="card-body">
                <!-- <a href="<?= base_url(); ?>admin/tambah_berita" class="btn btn-success">+ Tambah Data</a><br><br> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id User</th>
                                    <th>Tanggal Menstruasi</th>
                                    <th>Siklus Pendek</th>
                                    <th>Siklus Panjang</th>
                                    <th>Hasil Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kalender as $k) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $k["id_user"]; ?></td>
                                        <td><?= $k["tgl_mens"]; ?></td>
                                        <td><?= $k["siklus_pendek"]; ?></td>
                                        <td><?= $k["siklus_panjang"]; ?></td>
                                        <td><?= $k["hasil_tgl"]; ?></td>
                                        <td>

                                            <a data-toggle="modal" data-target="#exampleModal-<?= $k['id_kalender']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> </i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-<?= $k['id_kalender']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin mau Hapus Data ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="button" class="btn btn-primary"><a href="<?= base_url(); ?>admin/hapus_kalender/<?= $k['id_kalender']; ?>">Hapus</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- /top tiles -->
</div>