<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Berita</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Baru Berita</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/tambah_berita') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <!-- <label for="tanggal">Tanggal</label> -->
                    <input type="hidden" class="form-control" id="Tanggal" name="Tanggal" value="<?php echo date("Y-m-d") ?>">
                </div>
                <div class="form-group">
                    <label for="foto">Gambar</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <p>Format .png, .jpg, .jpeg | </p>
                </div>
                <div class="form-group">
                    <label for="sumber">Sumber</label>
                    <input type="text" class="form-control" id="sumber" name="sumber">
                </div>
                <div class="form-group">
                    <label for="konten">Konten</label>
	            <textarea id="ckeditor" name="konten" id="konten" class="form-control" required></textarea><br/>
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