        <div class="bradcam_area breadcam_bg">
                <h3>Gallery</h3>
        </div>
        <!-- bradcam_area_end -->
        
                
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="row gallery-item">
                    <?php 
                        foreach ($gallery as $value) :
                    ?>

                        <div class="col-md-4 text-center">
                            <a href="<?= base_url('upload/galeri/' . $value["gambar"])?>" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(<?= base_url('upload/galeri/' . $value["gambar"]) ?>);"></div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>