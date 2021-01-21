	<div class="bradcam_area breadcam_bg">
        <h3>Produk dan Jasa</h3>
    </div>
        <!-- bradcam_area_end -->

        <div class="popular_courses">
	        <div class="container">
	            <div class="row">
	                <div class="col-xl-12">
	                    <div class="section_title text-center mb-100">
	                    	<img src="<?php echo base_url('asset/user/img/icon/box.png') ?>"> <br><br>
	                        <h3>Produk dan Jasa</h3>
	                        <p>Produk yang dihasilkan Perusahaan Umum (PERUM) Perikanan Indonesia sebagai berikut :</p>
	                    </div>
	                </div>
	            </div>

	            <br><br>
	            <div class="whole-wrap">
		            <div class="container box_1170">
		                <div class="section-top-border">
		                	<h1 class="section_title text-center">Produk Kami</h1> <br>
							<div class="row gallery-item">
							<?php 
                            foreach ($produk as $value) :
                        	?>
								<div class="col-md-4 text-center">
									<div class="card">
									<a href="<?= base_url('upload/produk/' . $value["gambar"])  ?>" class="img-pop-up">
										<div class="single-gallery-image" style="background: url(<?= base_url('upload/produk/' . $value["gambar"]) ?>);">
										</div>
									</a>
									<h5 class="card-title"><?= $value['nama'] ?></h5>
									<p class="card-text"><i><?= $value['istilah'] ?></i></p>
									</div>
									<br>
								</div>
								<?php endforeach; ?>
								
							</div>
						</div>
					</div>
				</div>
				



			</div>
	    </div>

		