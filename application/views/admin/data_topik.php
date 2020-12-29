<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Topik Diskusi</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Topik Diskusi</h6>
            </div>

            <!-- alerthapus -->
            <?php if ($this->session->flashdata('hapus_topik')) : ?>
                <?php if ($this->session->flashdata('hapus_topik') == TRUE) : ?>
                    <div class="alert alert-success">Data berhasil dihapus</div>
                <?php elseif ($this->session->flashdata('hapus_topik') == FALSE) : ?>
                    <div class="alert alert-danger">Data gagal dihapus </div>
                <?php endif; ?>
            <?php endif; ?>

            <div class="card-body">
                <a href="<?= base_url(); ?>admin/tambah_topik" class="btn btn-success">+ Tambah Data</a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Topik</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($topik as $t) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $t["nama"]; ?></td>
                                    <td><?= $t["topik"]; ?></td>
                                    <td><?= $t["tanggal"]; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>admin/edit_topik/<?= $t['id_topik']; ?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <!-- Button trigger modal -->
                                        <a data-toggle="modal" data-target="#exampleModal-<?= $t['id_topik']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> </i></a>



                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-<?= $t['id_topik']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <button type="button" class="btn btn-primary"><a href="<?= base_url(); ?>admin/hapus_topik/<?= $t['id_topik']; ?>">Hapus</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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