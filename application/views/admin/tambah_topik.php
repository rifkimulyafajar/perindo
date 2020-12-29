<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Topik Diskusi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Baru Topik Diskusi</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/tambah_topik') ?>" method="post">
                <div class="form-group">
                    <!-- <label for="nama">Nama</label> -->
                    <input type="hidden" class="form-control" id="nama" name="nama" value="admin">
                </div>
                <div class="form-group">
                    <label for="topik">Topik</label>
                    <input type="text" class="form-control" id="topik" name="topik">
                </div>
                <div class="form-group">
                    <!-- <label for="tanggal">Tanggal</label> -->
                    <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?php echo date("Y-m-d") ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                <?php echo $this->session->flashdata('message'); ?>
            </form>
        </div>
    </div>
</div>

</div>
</div>
<!-- /top tiles -->
</div>