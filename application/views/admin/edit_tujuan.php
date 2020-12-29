<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Data Tujuan Donasi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tujuan Donasi</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/edit_tujuan/' . $tujuan_donasi1['id_tujuan']) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_tujuan" value="<?= $tujuan_donasi1['id_tujuan']; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $tujuan_donasi1['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tujuan_donasi1['alamat']; ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $tujuan_donasi1['deskripsi']; ?>">
                </div>
                <div class="form-group">
                    <label for="totaldana">Biaya</label>
                    <input type="text" class="form-control" id="totaldana" name="totaldana" value="<?= $tujuan_donasi1['totaldana']; ?>">
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Format .jpg, .png Max Size : 500KB</p>
                </div>
                <div class="form-group">
                    <label for="bni">BNI</label>
                    <input type="text" class="form-control" id="bni" name="bni" value="<?= $tujuan_donasi1['bni']; ?>">
                </div>
                <div class="form-group">
                    <label for="bri">BRI</label>
                    <input type="text" class="form-control" id="bri" name="bri" value="<?= $tujuan_donasi1['bri']; ?>">
                </div>
                <div class="form-group">
                    <label for="bca">BCA</label>
                    <input type="text" class="form-control" id="bca" name="bca" value="<?= $tujuan_donasi1['bca']; ?>">
                </div>
                <div class="form-group">
                    <label for="linkaja">LinkAja</label>
                    <input type="text" class="form-control" id="linkaja" name="linkaja" value="<?= $tujuan_donasi1['linkaja']; ?>">
                </div>
                <div class="form-group">
                    <label for="dana">Dana</label>
                    <input type="text" class="form-control" id="dana" name="dana" value="<?= $tujuan_donasi1['dana']; ?>">
                </div>
                <div class="form-group">
                    <label for="mandiri">Mandiri</label>
                    <input type="text" class="form-control" id="mandiri" name="mandiri" value="<?= $tujuan_donasi1['mandiri']; ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right">Edit</button>
            </form>
        </div>
    </div>
</div>

</div>
</div>
<!-- /top tiles -->
</div>