        <div class="bradcam_area breadcam_bg">
            <h3>Berita</h3>
        </div>
        <!-- bradcam_area_end -->

        <!-- popular_courses_start -->
        <div class="popular_courses">
            <div class="all_courses">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-100">
                                <img src="<?php echo base_url('asset/user/img/icon/newspaper.png') ?>"> <br><br>
                                <h3>Berita</h3>
                                <p>
                                    Berita - berita tentang Perum Perindo Cabang Brondong yang mungkin menarik untuk anda baca.
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">

                                <?php
                                foreach ($berita as $b) :
                                ?>

                                    <div class="col-xl-3 col-lg-4 col-md-3">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="<?= base_url() ?>user/detail_berita/<?= $b['id_berita']; ?>">
                                                    <img width="262" height="150" src="<?= base_url('upload/berita/' . $b["foto"]) ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <h5><a href="<?= base_url() ?>user/detail_berita/<?= $b['id_berita']; ?>"><?= $b["judul"]; ?></a></h5>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <span><?= $b["Tanggal"]; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular_courses_end-->