<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Donasi</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Donasi</h6>
            </div>
            <!-- alerthapus -->
            <?php if ($this->session->flashdata('hapus_donasi')) : ?>
                <?php if ($this->session->flashdata('hapus_donasi') == TRUE) : ?>
                    <div class="alert alert-success">Data berhasil dihapus</div>
                <?php elseif ($this->session->flashdata('hapus_donasi') == FALSE) : ?>
                    <div class="alert alert-danger">Data gagal dihapus </div>
                <?php endif; ?>
            <?php endif; ?>


            <div class="col-xl-12">
                <form method="get" action="<?php echo base_url("admin/data_donasi") ?>">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Filter Donasi Berdasarkan Bulan</label>
                        <select class="form-control" name="bulan" id="bulan">

                            <?php $bulan = $_GET['bulan'] ?>

                            <option value="all" <?php if ($bulan == "all") : ?> selected="" <?php endif ?>>Semua</option>
                            <option value="1" <?php if ($bulan == "1") : ?> selected="" <?php endif ?>>Januari</option>
                            <option value="2" <?php if ($bulan == "2") : ?> selected="" <?php endif ?>>Februari</option>
                            <option value="3" <?php if ($bulan == "3") : ?> selected="" <?php endif ?>>Maret</option>
                            <option value="4" <?php if ($bulan == "4") : ?> selected="" <?php endif ?>>April</option>
                            <option value="5" <?php if ($bulan == "5") : ?> selected="" <?php endif ?>>Mei</option>
                            <option value="6" <?php if ($bulan == "6") : ?> selected="" <?php endif ?>>Juni</option>
                            <option value="7" <?php if ($bulan == "7") : ?> selected="" <?php endif ?>>Juli</option>
                            <option value="8" <?php if ($bulan == "8") : ?> selected="" <?php endif ?>>Agustus</option>
                            <option value="9" <?php if ($bulan == "9") : ?> selected="" <?php endif ?>>September</option>
                            <option value="10" <?php if ($bulan == "10") : ?> selected="" <?php endif ?>>Oktober</option>
                            <option value="11" <?php if ($bulan == "11") : ?> selected="" <?php endif ?>>November</option>
                            <option value="12" <?php if ($bulan == "12") : ?> selected="" <?php endif ?>>Desember</option>

                        </select>
                    </div>

                    <div class="col-xl-12">
                        <center>

                            <button type="sumbit" name="tampil" value="tampil" class="btn btn-primary">Tampilkan</button>
                            <button type="sumbit" name="cetak" value="cetak" class="btn btn-primary">Cetak</button>
                            <button type="sumbit" name="excel" value="excel" class="btn btn-primary">Export</button>

                            <a type="button" class="btn btn-primary" href="<?= base_url(); ?>admin/laporandonasi/">Cetak Semua Laporan Donasi</a>
                            <a type="button" class="btn btn-primary" href="<?= base_url(); ?>admin/exportdonasi/">Export Semua Laporan Donasi</a>
                        </center> 
                    </div> 
                </form> 
            </div> <br>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id User</th>
                                                    <th>Nama</th>
                                                    <th>No Telp</th>
                                                    <th>Email</th>
                                                    <th>Jumlah</th>
                                                    <th>Metode</th>
                                                    <th>Bukti TF</th>
                                                    <th>Note</th>
                                                    <th>Tanggal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($data as $d) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $d["id_user"]; ?></td>
                                                        <td><?= $d["nama_lengkap"]; ?></td>
                                                        <td><?= $d["no_hp"]; ?></td>
                                                        <td><?= $d["email"]; ?></td>
                                                        <td><?= $d["jmlh_donasi"]; ?></td>
                                                        <td><?= $d["metode"]; ?></td>
                                                        <td><?= $d["bukti_tf"]; ?></td>
                                                        <td><?= $d["note"]; ?></td>
                                                        <td><?= $d["tgl_donasi"]; ?></td>
                                                        <td>

                                                            <!-- Button trigger modal -->
                                                            <a data-toggle="modal" data-target="#exampleModal" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> </i></a>



                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                            <button type="button" class="btn btn-primary"><a href="<?= base_url(); ?>admin/hapus_donasi/<?= $d['id_donasi']; ?>">Hapus</a></button>
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