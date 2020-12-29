        <div class="bradcam_area breadcam_bg overlay2">
                <h3>Artikel Untuk Anda</h3>
        </div>
        <!-- bradcam_area_end -->

        <!-- our_latest_blog_start -->
        <div class="popular_courses">
                <div class="container">
                        <div class="row">
                                <div class="col-xl-12">
                                        <div class="section_title text-center mb-100">
                                                <img src="<?php echo base_url('asset/user/img/artikel.png') ?>" width=100 height=100>
                                                <h3>Ini Artikel</h3>
                                                <p>
                                                        Artikel - artikel yang kayaknya cocok untuk anda.
                                                </p>
                                        </div>
                                </div>

                                <div class="col-xl-12">
                                        <form method="post" action="<?php echo base_url("user/artikel")?>">
                                                <div class="form-group">
                                                        <label for="exampleFormControlSelect1">KATEGORI</label>
                                                        <select class="form-control" name="kategori" id="kategori">

                                                                <?php $kategori = $_POST['kategori']; ?>

                                                                <option value="all" <?php if ($kategori == "all") : ?> selected="" <?php endif ?> >Semua</option>
                                                                <option value="tips" <?php if ($kategori == "tips") : ?> selected="" <?php endif ?> >Tips</option>
                                                                <option value="makanan & minuman" <?php if ($kategori == "makanan & minuman") : ?> selected="" <?php endif ?> >Makanan & Minuman</option>
                                                                <option value="pria" <?php if ($kategori == "pria") : ?> selected="" <?php endif ?> >Pria</option>
                                                                <option value="wanita" <?php if ($kategori == "wanita") : ?> selected="" <?php endif ?> >Wanita</option>

                                                        </select>
                                                </div>
                                                <div class="col-xl-12">
                                                        <center>
                                                        <button type="sumbit" class="boxed_btn_orange text-center">Tampilkan</button>
                                                        </center>
                                                </div>
                                        </form>
                                </div>
                                
                        </div>

                        <br>
                        <center>
                                <p><?php echo $ket; ?></p>
                        </center>
                        <br>

                        <div class="row">

                                <?php

                                        foreach ($data as $a) { ?>

                                        <div class="col-xl-3 col-md-3">
                                                <div class="single_latest_blog">
                                                        <div class="thumb">
                                                                <a href="<?= base_url() ?>user/detail_artikel/<?php echo $a['id_artikel']; ?>">
                                                                        <img href="" width="262" height="150" src="<?= base_url('upload/artikel/' . $a["gambar"]) ?>" alt="">
                                                                </a>
                                                        </div>
                                                        <div class="content_blog">
                                                                <div class="date">
                                                                        <p><?php echo $a['Tanggal']; ?></p>
                                                                </div>
                                                                <div class="blog_meta">
                                                                        <h4><a href="<?= base_url() ?>user/detail_artikel/<?= $a['id_artikel']; ?>"><?= $a["judul"]; ?></a></h4>
                                                                        <br><br>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                <?php
                                        }
                                ?>

                        </div>
                </div>
        </div>

        <!-- our_latest_blog_end -->