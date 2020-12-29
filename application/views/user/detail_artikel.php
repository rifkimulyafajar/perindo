      <div class="bradcam_area breadcam_bg overlay2">
      </div>
        <!-- bradcam_area_end -->

        <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 posts-list">
               <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="<?= base_url('upload/artikel/' . $artikel["gambar"]) ?>" alt="">
                     </div>
                     <div class="blog_details">
                       <h1><?= $artikel['judul']; ?></h1>
                       <ul class="blog-info-link mt-3 mb-4">
                          <li>"&nbsp;<?= $artikel['Tanggal']; ?>&nbsp;"</li>
                       </ul>
                       <br>
                       <h5 class="text-justify">
                          <?= $artikel['konten']; ?>
                       </h5>
                       <br>
                       <h5 class="text-right">Sumber : <a href="http://<?= $artikel['sumber'];?>"> <?= $artikel['sumber']; ?> </a></h5>
                   </div>
                </div>
            </div>
        </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->