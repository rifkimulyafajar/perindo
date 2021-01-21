<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Produk</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Baru Produk</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/tambah_produk') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="istilah">Istilah</label>
                    <input type="text" class="form-control" id="istilah" name="istilah">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Format .png, .jpg, .jpeg | </p>
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