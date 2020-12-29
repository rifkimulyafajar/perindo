<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Data Topik Diskusi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Topik Diskusi</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/edit_topik/' . $topik['id_topik']) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_topik" value="<?= $topik['id_topik']; ?>">
                <div class="form-group">
                    <label for="topik">Topik</label>
                    <input type="text" class="form-control" id="topik" name="topik" value="<?= $topik['topik']; ?>">
                </div>
                <div class="form-group">
                    <!-- <label for="tanggal">Tanggal</label> -->
                    <input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= $topik['tanggal']; ?>">
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