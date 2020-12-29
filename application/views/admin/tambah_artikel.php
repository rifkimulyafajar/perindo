<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Artikel</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Baru Artikel</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/tambah_artikel') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="kategori_artikel">Kategori </label>
                    <select class="form-control" id="id_kategori" name="id_kategori">
                        <?php foreach ($kategori_artikel as $k) : ?>
                            <option value="<?= $k["id_kategori"]; ?>"><?= $k["kategori"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="tanggal">Tanggal</label> -->
                    <input type="hidden" class="form-control" id="Tanggal" name="Tanggal" value="<?php echo date("Y-m-d") ?>">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Format .jpg, .png Max Size : 500KB</p>
                </div>
                <div class="form-group">
                    <label for="sumber">Sumber</label>
                    <input type="text" class="form-control" id="sumber" name="sumber">
                </div>
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <input type="text" class="form-control" id="konten" name="konten">
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>

</div>
</div>
<!-- /top tiles -->
</div>